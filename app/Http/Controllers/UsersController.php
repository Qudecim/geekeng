<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UsersController extends Controller
{

    /**
     * Авторизация пользователя
     *
     * @param Request $request
     * @return mixed
     */
    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return [
                'success' => false,
            ];
        }

        return [
            'success' => true,
            'token' => $user->createToken('api_token')->plainTextToken
        ];

    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return [
            'success' => true,
            'name' => $user->name,
            'email' => $user->email,
            'token' => $user->createToken('api_token')->plainTextToken
        ];
    }

}
