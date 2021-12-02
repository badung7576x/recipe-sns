<?php

namespace Database\Seeders;

use App\Models\Recipe;
use App\Models\RecipeMaterial;
use App\Models\RecipeStep;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recipe::truncate();
        RecipeStep::truncate();
        RecipeMaterial::truncate();
        for ($i = 1; $i <= 10; $i++) {
            Recipe::insert([
                'name' => 'Recipe This week ' . $i,
                'user_id' => 1,
                'image' => 'https://images.squarespace-cdn.com/content/v1/5cb9ef147eb88c5caefa30b3/1615985478065-1SFJ74MJ7MJHQJFXLFCF/Vietnamese+Baguette+Her+86m2+by+Thuy+Dao+3.JPG',
                'cooking_time' => 10 + rand(0, 10),
                'like' => 100 + rand(-100, 100),
                'description' => 'Description description description description description ' . $i,
                'note' => 'Pizza is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (anchovies, olives, meat, etc.) baked at a high temperature, traditionally in a wood-fired oven.',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            RecipeStep::insert([[
                'recipe_id' => $i,
                'step' => 1,
                'description' => 'Preheat oven to 400 degrees F (200 degrees C).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ], [
                'recipe_id' => $i,
                'step' => 2,
                'description' => 'Mix flour, sugar, baking powder, and salt in a large bowl.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'step' => 3,
                'description' => 'Add olive oil and egg to the dry ingredients and mix until combined.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]]);

            RecipeMaterial::insert([[
                'recipe_id' => $i,
                'name' => 'Flour',
                'quantity' => 200,
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'name' => 'Sugar',
                'quantity' => 100 + rand(0, 30),
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'name' => 'Baking powder',
                'quantity' => 50 + rand(0, 20),
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'name' => 'Salt',
                'quantity' => 50 + rand(0, 50),
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]]);
        }

        for ($i = 11; $i <= 20; $i++) {
            Recipe::insert([
                'name' => 'Recipe ' . $i,
                'user_id' => 1,
                'image' => 'https://images.squarespace-cdn.com/content/v1/5cb9ef147eb88c5caefa30b3/1615985478065-1SFJ74MJ7MJHQJFXLFCF/Vietnamese+Baguette+Her+86m2+by+Thuy+Dao+3.JPG',
                'cooking_time' => 10 + rand(0, 10),
                'like' => 100 + rand(-100, 100),
                'description' => 'Description description description description description ' . $i,
                'note' => 'Pizza is a savory dish of Italian origin, consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients (anchovies, olives, meat, etc.) baked at a high temperature, traditionally in a wood-fired oven.',
                'created_at' => '2021-' . rand(1, 12) . '-' . rand(1, 30) . ' 00:00:00',
                'updated_at' => '2021-12-1 00:00:00',
            ]);

            RecipeStep::insert([[
                'recipe_id' => $i,
                'step' => 1,
                'description' => 'Preheat oven to 400 degrees F (200 degrees C).',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ], [
                'recipe_id' => $i,
                'step' => 2,
                'description' => 'Mix flour, sugar, baking powder, and salt in a large bowl.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'step' => 3,
                'description' => 'Add olive oil and egg to the dry ingredients and mix until combined.',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]]);

            RecipeMaterial::insert([[
                'recipe_id' => $i,
                'name' => 'Flour',
                'quantity' => 200,
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'name' => 'Sugar',
                'quantity' => 100 + rand(0, 30),
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'name' => 'Baking powder',
                'quantity' => 50 + rand(0, 20),
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ], [
                'recipe_id' => $i,
                'name' => 'Salt',
                'quantity' => 50 + rand(0, 50),
                'unit' => 'g',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]]);
        }
    }
}
