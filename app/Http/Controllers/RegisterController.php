<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterUserRequest;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        parent::__construct();
        $this->userService = $userService;
    }

    public function index()
    {
        return view('pages.auth.signup');
    }

    public function create(RegisterUserRequest $request) 
    {
        $data = $request->validated();

        try {
            $this->userService->registerUser($data);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['common' => 'アカウントの登録が失敗しました。']);
        }

        return redirect()->route('login')->with(['success' => 'アカウントが登録しました。']);
    }
}
