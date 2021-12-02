<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditUserRequest;
use App\Services\UserService;
use Exception;
use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        parent::__construct();
        $this->userService = $userService;
    }

    public function index()
    {
        return view('pages.profile.index');
    }

    public function edit()
    {
        return view('pages.profile.edit');
    }

    public function editUser(EditUserRequest $request){
        $data = $request->validated();
        try {
            $this->userService->editUser($data);
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['common' => 'プロファイルの編集に失敗しました。']);
        }
        return redirect()->back()->with(['success' => 'プロファイル編集が成功しました。']);
    }
}
