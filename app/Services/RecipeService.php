<?php

namespace App\Services;

use App\Models\Recipe;
use Carbon\Carbon;

class RecipeService
{
    public function getRecipesOnThisWeek()
    {
        return Recipe::with('user')
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->take('10')->get();
    }

    public function getNewRecipes($limit = 15) {
        return Recipe::with('user')
            ->orderBy('created_at', 'desc')
            ->take($limit)->get();
    }
}