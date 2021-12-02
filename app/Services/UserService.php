<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function registerUser($data)
    {
        return User::create([
            'fullname' => $data['fullname'],
            'username'  => current(explode("@", $data['email'])),
            'email'     => $data['email'],
            'password'  => Hash::make($data['password'])
        ]);
    }

    public function getTopUsers()
    {
        return User::take(3)->get();
    }
}
