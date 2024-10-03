<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Resources\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helper\LogHelper as LH;

class AuthController extends Controller
{
    private $users;

    public function __construct()
    {
        $this->users = new UserController();
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $result = LH::withEx("User registered...", "Error in creating user: ", function () use ($data) {
            $this->users->create($data);
        });

        if ($result['status']) {
            return redirect()->route('login.page');
        } else {
            return $result;
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        $remember = false;
        if ($request->has('remember'))
            $remember = true;


        $result = LH::withEx("User logged in...", "Error in login: ", function () use ($credentials, $remember) {
            return Auth::attempt($credentials, $remember);
        });

        if ($result['data'] == true) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'No User Found Or Invalid Credentials...',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        $result = LH::withEx("User logged out...", "Error in logout: ", function () use ($request) {
            Auth::guard('web')->logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }, true);

        if ($result['status'])
            return redirect('/');
        return $result;
    }
}
