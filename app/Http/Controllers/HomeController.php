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
        $top3Recipes = $this->recipeService->getNewRecipes(3, false, true);
        $topUsers = $this->userService->getTopUsers();

        return view('pages.homepage.index', compact('recipesThisWeek', 'newRecipes', 'top3Recipes', 'topUsers'));
    }

    public function developing() {
        return view('layouts.temp');
    }

    public function introduce() {
        return view('pages.introduce.index');
    } 

    public function rankUsers()
    {
        $users = $this->userService->getAllUsers();

        return view('pages.rank.users', compact('users'));
    }

    public function rankRecipes()
    {
        $recipes = $this->recipeService->getTopRecipes();

        return view('pages.rank.recipes', compact('recipes'));
    }

}
