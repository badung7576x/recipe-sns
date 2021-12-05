<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use App\Services\RecipeService;
use App\Services\UserService;
use Illuminate\Http\Request;

class ProfileController extends BaseController
{

    protected $recipeService;
    protected $userService;

    public function __construct(RecipeService $recipeService, UserService $userService)
    {
        $this->recipeService = $recipeService;
        $this->userService = $userService;
        parent::__construct();
    }
    
    public function index()
    {
        $recipes = $this->recipeService->getRecipeByUser(null, true);
        return view('pages.profile.index', compact('recipes'));
    }

    public function edit(User $user)
    {
        $currentUser = $user;
        return view('pages.profile.edit', compact('currentUser'));
    }

    public function update(UpdateProfileRequest $request, User $user)
    {
        $data = $request->validated();
        try {
            $this->userService->updateProfile($user, $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['common' => $e->getMessage()]);
        }

        return redirect()->route('user.edit', $user->id)->with(['success' => 'プロフィールを更新しました。']);
    }
}
