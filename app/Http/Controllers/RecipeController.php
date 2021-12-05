<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRecipeRequest;
use App\Http\Requests\UpdateRecipeRequest;
use App\Models\Recipe;
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

    public function index()
    {
        return view('pages.recipe.index');
    }

    public function show(Recipe $recipe)
    {
        $recipe = $recipe->load(['user', 'recipe_steps', 'recipe_materials']);
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

        return redirect()->route('recipe.edit', $recipe->id)->with('success', 'レシピを更新しました。');
    }

    public function delete(Recipe $recipe)
    {
        try {
            $this->recipeService->deleteRecipe($recipe);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'レシピの削除が失敗しました。']);
        }

        return redirect()->route('user.profile')->with('success', 'レシピを削除しました。');;
    }
}
