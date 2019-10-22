<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $user_rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed',
    ];

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request)
    {
        //validate incoming request
        $this->validate($request, $this->user_rules);

        try {

            $user = new User;
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $plainPassword = $request->input('password');
            $user->password = app('hash')->make($plainPassword);

            $user->save();

            //return successful response
            return response()->json($user, 201);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(Request $request)
    {
        //validate incoming request
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

}
