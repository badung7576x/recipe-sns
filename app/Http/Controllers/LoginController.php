<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        parent::__construct();
        $this->userService = $userService;
    }

    public function index()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request) 
    {
        $request->authenticate();
        $request->session()->regenerate();

        return redirect()->route('index');
    }

    public function logout() 
    {
        auth()->logout();
        session()->flush();

        return redirect()->route('index');
    }
}
