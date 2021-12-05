<?php

namespace App\Services;

use App\Models\Recipe;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RecipeService
{
    public function getRecipesOnThisWeek()
    {
        return Recipe::with('user')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->take('10')->get();
    }

    public function getNewRecipes($limit = 15)
    {
        return Recipe::with('user')
            ->orderBy('created_at', 'desc')
            ->take($limit)->get();
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
                'description' => $data['note'],
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
            'description' => $data['note'],
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
}
