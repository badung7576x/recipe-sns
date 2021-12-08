<?php

namespace App\Http\Controllers;

use App\Services\RecipeService;
use App\Services\UserService;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    protected $recipeService;
    protected $userService;

    public function __construct(RecipeService $recipeService, UserService $userService)
    {
        parent::__construct();
        $this->recipeService = $recipeService;
        $this->userService = $userService;
    }

    public function index()
    {
        $recipesThisWeek = $this->recipeService->getRecipesOnThisWeek();
        $newRecipes = $this->recipeService->getNewRecipes();
        $topUsers = $this->userService->getTopUsers();

        return view('pages.homepage.index', compact('recipesThisWeek', 'newRecipes', 'topUsers'));
    }

    public function developing() {
        return view('layouts.temp');
    }
}
