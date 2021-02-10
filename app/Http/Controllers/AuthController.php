<?php

namespace App\Http\Controllers;

use App\Business\UserManager;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request, UserManager $userManager)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'name' => 'required|string|min:2'
        ]);

        $data = $request->only(['email', 'password', 'name']);

        $userInstance = $userManager->register($data);

        return [
            'status' => 'success',
            'data' => $userInstance
        ];
    }
}
