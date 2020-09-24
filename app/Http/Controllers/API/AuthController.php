<?php

namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Register new user
     *
     * @param Request $request
     * @return void
     */
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users,name'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }

    /**
     * Log user in
     *
     * @param Request $request
     * @return void
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => 'The provided credentials are incorrect'
            ]);
        }

        return $user->createToken('Auth Token')->accessToken;
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $authUser = Socialite::driver($provider)->user();


        if ($user = User::where('email', '=', $authUser->getEmail())->first()) {

            return Redirect::to('http://localhost:8080/login?token=' . $user->createToken('Auth Token')->accessToken);

        } else {
            $user = User::create([
                'name' => $authUser->getName(),
                'email' => $authUser->getEmail(),
                'password' => Str::random(40)
                ]);

            return Redirect::to('http://localhost:8080/login?token=' . $user->createToken('Auth Token')->accessToken);
        }
    }

    /**
     * Log user out
     *
     * @param Request $request
     * @return void
     */
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json('logout', 201);
    }
}
