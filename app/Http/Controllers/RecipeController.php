<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
use App\Models\User;
use App\Services\RecipeService;
use Illuminate\Http\Request;

class RecipeController extends BaseController
{
    protected $recipeService;

    public function __construct(RecipeService $recipeService)
    {
        parent::__construct();
        $this->recipeService = $recipeService;
    }

    public function index(User $user)
    {
        $currentUser = $user;
        $recipes = $this->recipeService->getRecipeByUser($currentUser->id, true);

        return view('pages.recipe.index', compact('currentUser', 'recipes'));
    }

    public function search(Request $request)
    {
        $keyword = $request->get('keyword');
        $type = $request->get('type');
        if(empty($keyword)) return back();

        if($type == 'user') {
            $users = $this->recipeService->searchRecipe($type, $keyword);
            
            return view('pages.profile.list', compact('users'));
        }

        $recipes = $this->recipeService->searchRecipe($type, $keyword);
        $type = 'search';

        return view('pages.recipe.index', compact('recipes', 'type', 'keyword'));
    }

    public function list(Request $request)
    {
        $type = $request->get('type');
        if ($type == 'thisweek') {
            $recipes = $this->recipeService->getRecipesOnThisWeek(true);
        } else if ($type == 'recommend') {
            $recipes = $this->recipeService->getRandomRecipes(true);
        } else {
            $recipes = $this->recipeService->getNewRecipes(15, true);
        }

        return view('pages.recipe.index', compact('recipes', 'type'));
    }

    public function show(Recipe $recipe)
    {
        $recipe = $recipe->load(['comments.user', 'user', 'recipe_steps', 'recipe_materials']);
        $newRecipes = $this->recipeService->getNewRecipes(3);

        return view('pages.recipe.show', compact('recipe', 'newRecipes'));
    }

    public function create()
    {
        return view('pages.recipe.create');
    }

    public function store(CreateRecipeRequest $request)
    {
        $data = $request->validated();

        $recipe = $this->recipeService->createRecipe($data);

        return redirect()->route('user.profile')->with('success', 'レシピを作成しました。');
    }

    public function edit(Recipe $recipe)
    {
        $recipe->load(['recipe_steps', 'recipe_materials']);

        return view('pages.recipe.edit', compact('recipe'));
    }

    public function update(UpdateRecipeRequest $request, Recipe $recipe)
    {
        $data = $request->validated();

        $this->recipeService->updateRecipe($recipe, $data);

        return redirect()->route('user.profile')->with('success', 'レシピを更新しました。');
    }

    public function delete(Recipe $recipe)
    {
        try {
            $this->recipeService->deleteRecipe($recipe);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'レシピの削除が失敗しました。']);
        }

        return redirect()->route('user.profile')->with('success', 'レシピを削除しました。');
    }

    public function comment(Request $request, Recipe $recipe)
    {
        $data = $request->validate([
            'comment' => 'required|string',
        ]);

        try {
            $this->recipeService->commentRecipe($recipe, $data);
        } catch (\Exception $e) {
            return back()->withErrors(['comment' => 'コメントの投稿に失敗しました。']);
        }

        return redirect()->route('recipe.show', $recipe->id);
    }

    public function reaction(Request $request, Recipe $recipe)
    {
        $data = $request->all();

        $this->recipeService->reactionRecipe($recipe, $data);

        return redirect()->route('recipe.show', $recipe->id);
    }
}
