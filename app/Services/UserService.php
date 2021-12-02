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

    public function editUser($data)
    {
        $user_id = auth()->user()->id;
        $image = base64_encode($data['image']->get());
        $uploadData = [
            'key' => env('IMAGE_SEVER_KEY'),
            'expiration' => env('IMAGE_EXIST_TIMEOUT'),
            'name' => $data['image']->hashName(),
            'image' => $image
        ];

        $response = $this->client->post(env('IMAGE_SERVER_URL'), ['form_params' => $uploadData]);
        $data_image = json_decode($response->getBody()->getContents());

        return User::where('id', $user_id)
                    ->update([
                        'fullname' => $data['fullname'],
                        'description' => $data['description'],
                        'image' => $data_image->data_image->url,
                    ]);
    }
}
