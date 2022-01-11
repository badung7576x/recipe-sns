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

    public function list()
    {
        $users = $this->userService->getAllUsers();
        return view('pages.profile.list', compact('users'));
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

        return redirect()->route('user.profile')->with('success-profile', 'プロフィールを更新しました。');
    }

    public function updateBanner(Request $request, User $user)
    {
        $data = $request->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        try {
            $this->userService->updateBanner($user, $data);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['banner' => $e->getMessage()]);
        }

        return redirect()->route('user.profile');
    }

    public function deleteBanner(User $user)
    {
        try {
            $this->userService->deleteBanner($user);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['banner' => $e->getMessage()]);
        }

        return redirect()->route('user.profile');
    }
}
