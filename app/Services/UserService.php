<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
        return User::withCount('recipes')->orderBy('recipes_count', 'desc')->take(3)->get();
    }

    public function getAllUsers()
    {
        return User::withCount('recipes')->orderBy('recipes_count', 'desc')->orderBy('created_at', 'desc')->get();
    }

    public function updateProfile($user, $data)
    {
        try {
            if (!empty($data['avatar'])) {
                $uploadService = new UploadImageService();
                $image = $uploadService->upload($data['avatar']->get());
            }
            $updateData = [
                'fullname' => $data['fullname'],
                'description' => $data['description'],
            ];
            if(!empty($image)) {
                $updateData = array_merge($updateData, ['avatar' => $image['url']]);
            }
    
            $user->update($updateData);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw new \Exception('プロフィールの更新に失敗しました。');
        }
    }

    public function updateBanner($user, $data) 
    {
        try {
            if (!empty($data['banner'])) {
                $uploadService = new UploadImageService();
                $image = $uploadService->upload($data['banner']->get());
            }
            $updateData = [
                'banner' => $image['url'],
            ];
        
            $user->update($updateData);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw new \Exception('広告の更新に失敗しました。');
        }
    }

    public function deleteBanner($user)
    {
        try {
            $user->update(['banner' => null]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            throw new \Exception('広告の削除に失敗しました。');
        }
    }
}
