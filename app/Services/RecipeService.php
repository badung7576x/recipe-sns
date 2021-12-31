<?php

namespace App\Services;

use App\Models\Recipe;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RecipeService
{
    public function getRecipesOnThisWeek($withPaginate = false)
    {
        $query = Recipe::with('user')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        
        if ($withPaginate) {
            return $query->paginate(10);
        } else {
            return $query->take('10')->get();
        }
    }

    public function getNewRecipes($limit = 15, $withPaginate = false)
    {
        $query = Recipe::with('user')
            ->orderBy('created_at', 'desc');
            
        if ($withPaginate) {
            return $query->paginate(10);
        } else {
            return $query->take($limit)->get();
        }
    }

    public function getRandomRecipes ($withPaginate = false) {
        $query = Recipe::inRandomOrder()->with('user')
            ->orderBy('created_at', 'desc');
            
        if ($withPaginate) {
            return $query->paginate(10);
        } else {
            return $query->take(15)->get();
        }
    }

    public function getRecommendRecipes ($withPaginate = false) {
        $query = Recipe::with('user')
            ->orderBy('updated_at', 'desc')
            ->orderBy('created_at', 'desc');
            
        if ($withPaginate) {
            return $query->paginate(10);
        } else {
            return $query->take(15)->get();
        }
    }
    
    public function getRecipeByUser($userId = null, $withPaginate = false)
    {
        $userId = $userId ?? auth()->user()->id;

        $query = Recipe::where('user_id', $userId)
            ->orderBy('created_at', 'desc');
        
        if ($withPaginate) {
            return $query->paginate(10);
        }
            
        return $query->get();
    }

    public function createRecipe($data)
    {
        $uploadService = new UploadImageService();
        $image = $uploadService->upload($data['image']->get());

        DB::beginTransaction();
        try {
            $recipe = Recipe::create([
                'name' => $data['name'],
                'user_id' => auth()->user()->id,
                'image' => $image['url'],
                'like' => 0,
                'cooking_time' => $data['cooking_time'],
                'description' => $data['note'] ?? '無し',
                'note' => $data['note']
            ]);

            $recipeMaterials = [];
            for ($i = 0; $i < count($data['material_name']); $i++) {
                $recipeMaterials[] = [
                    'name' => $data['material_name'][$i],
                    'quantity' => $data['material_quantity'][$i],
                    'unit' => $data['material_unit'][$i],
                ];
            }
            $recipe->recipe_materials()->createMany($recipeMaterials);

            $recipeStep = [];
            for ($i = 0; $i < count($data['step_description']); $i++) {
                $recipeStep[] = [
                    'step' => $i + 1,
                    'description' => $data['step_description'][$i],
                ];
            }
            $recipe->recipe_steps()->createMany($recipeStep);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function updateRecipe($recipe, $data)
    {
        if (!empty($data['image'])) {
            $uploadService = new UploadImageService();
            $image = $uploadService->upload($data['image']->get());
        }

        $recipeUpdateData = [
            'name' => $data['name'],
            'cooking_time' => $data['cooking_time'],
            'description' => $data['note'] ?? '無し',
            'note' => $data['note']
        ];
        if(!empty($image)) {
            $recipeUpdateData = array_merge($recipeUpdateData, ['image' => $image['url']]);
        }

        DB::beginTransaction();
        try {
            $recipe->update($recipeUpdateData);
            $recipe->recipe_materials()->delete();
            $recipe->recipe_steps()->delete();

            $recipeMaterials = [];
            for ($i = 0; $i < count($data['material_name']); $i++) {
                $recipeMaterials[] = [
                    'name' => $data['material_name'][$i],
                    'quantity' => $data['material_quantity'][$i],
                    'unit' => $data['material_unit'][$i],
                ];
            }
            $recipe->recipe_materials()->createMany($recipeMaterials);

            $recipeStep = [];
            for ($i = 0; $i < count($data['step_description']); $i++) {
                $recipeStep[] = [
                    'step' => $i + 1,
                    'description' => $data['step_description'][$i],
                ];
            }
            $recipe->recipe_steps()->createMany($recipeStep);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function deleteRecipe($recipe)
    {
        DB::beginTransaction();
        try {
            $recipe->recipe_materials()->delete();
            $recipe->recipe_steps()->delete();
            $recipe->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            throw new \Exception('レシピの削除が失敗しました。');
        }
    }

    public function commentRecipe($recipe, $data) 
    {
        try {
            $recipe->comments()->create([
                'user_id' => auth()->user()->id,
                'content' => $data['comment']
            ]);
        } catch (\Exception $e) {
            throw new \Exception('コメントの投稿に失敗しました。');
        }
    }

    public function searchRecipe($type, $keyword) {
        switch($type) {
            case 'user':
                return User::where('fullname', 'like', '%'.$keyword.'%')->paginate(10);
            case 'material':
                return Recipe::whereHas('recipe_materials', function($query) use ($keyword) {
                    $query->where('name', 'like', '%'.$keyword.'%');
                })->paginate(10);
            case 'name':
                return Recipe::where('name', 'like', '%'.$keyword.'%')->paginate(10);
            default:
                return Recipe::take(10)->paginate(10);
        }
    }

    public function getTopRecipes()
    {
        return Recipe::orderBy('created_at', 'desc')->paginate(10);
    }
}
