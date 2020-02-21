<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function loginPage()
    {
        return view('auth.login');
    }

    public function registerPage()
    {
        return view('auth.register');
    }

    public function login(LoginRequest $request)
    {
        $data = $request->validated();

        if (!Auth::attempt($data)) {
            return redirect()->route('login-page');
        }

        $user = $this->user->where('email', $data['email'])->first();

        Auth::login($user);

        return redirect()->route('');
    }

    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['passwo brd']);
        $user = $this->user->fill($data);

        $user->save();
        Auth::login($user);

        return redirect()->route('');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
