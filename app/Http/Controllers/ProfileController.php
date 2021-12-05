<?php

namespace App\Http\Controllers;

use App\Services\RecipeService;
use Illuminate\Http\Request;

class ProfileController extends BaseController
{

    protected $recipeService;

    public function __construct(RecipeService $recipeService)
    {
        $this->recipeService = $recipeService;
        parent::__construct();
    }
    
    public function index()
    {
        $recipes = $this->recipeService->getRecipeByUser(null, true);
        return view('pages.profile.index', compact('recipes'));
    }
}
