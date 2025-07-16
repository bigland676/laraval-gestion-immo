<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::attempt($request->only('email', 'password'), $request->has('remember'))) {
            $user = Auth::user();

            if (!$user->is_active) {
                Auth::logout();
                return redirect()->route('login')->with('error', 'Compte désactivé.');
            }

            return $this->redirectBasedOnRole($user);
        }

        return back()->withErrors(['email' => 'Identifiants incorrects.']);
    }

    /*public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput($request->only('email'));
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            if (!$user->is_active) {
                Auth::logout();
                return redirect()->route('login')
                    ->with('error', 'Votre compte est désactivé.');
            }

            $request->session()->regenerate();

            // Redirection selon le rôle
            return $this->redirectBasedOnRole($user);
        }

        return redirect()->back()
            ->withErrors(['email' => 'Les informations de connexion sont incorrectes.'])
            ->withInput($request->only('email'));
    }*/

    protected function redirectBasedOnRole($user)
    {
        switch ($user->role) {
            case 'super':
                return redirect()->route('super.dashboard');
            case 'admin':
                return redirect()->route('admin.dashboard');
            case 'agent':
                return redirect()->route('agent.dashboard');
            case 'client':
                return redirect()->route('client.dashboard');
            default:
                return redirect()->route('dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
