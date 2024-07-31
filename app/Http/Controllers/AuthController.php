<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Toastr;

class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            toastr()->success('You are logged in!');
            return redirect()->intended('dashboard');
        }

        Toastr::success('Credentials do not match our records.', 'Invalid', ['options']);
        toastr()->error('Credentials do not match our records.');
        return back();
    }

    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        toastr()->info('You are logged out!');
        return redirect('/');
    }

    public function dashboard()
    {
        $page_title = 'Dashboard';

        return view('auth.dashboard', compact('page_title'));
    }
}
