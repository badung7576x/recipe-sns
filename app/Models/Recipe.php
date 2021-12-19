<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'image',
        'like',
        'cooking_time',
        'description',
        'note'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function recipe_steps()
    {
        return $this->hasMany(RecipeStep::class, 'recipe_id', 'id');
    }

    public function recipe_materials()
    {
        return $this->hasMany(RecipeMaterial::class, 'recipe_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'recipe_id', 'id');
    }
}
