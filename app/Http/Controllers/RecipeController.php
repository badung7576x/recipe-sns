<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Services\RecipeService;
use Illuminate\Http\Request;

class RecipeController extends BaseController
{
    protected $recipeService;

    public function __construct(RecipeService $recipeService)
    {
        $this->recipeService = $recipeService;
    }

    public function index(Recipe $recipe)
    {
        $recipe = $recipe->load(['user', 'recipe_steps', 'recipe_materials']);
        $newRecipes = $this->recipeService->getNewRecipes(3);

        return view('pages.recipe.index', compact('recipe', 'newRecipes'));
    }
}
