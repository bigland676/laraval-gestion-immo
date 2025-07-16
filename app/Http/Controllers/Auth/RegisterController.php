<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:500'],
            'role' => ['required', 'in:client,user'], // Seuls client et user peuvent s'inscrire
        ], [
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'phone' => $request->phone,
            'address' => $request->address,
            'is_active' => true,
        ]);

        event(new Registered($user));
        Auth::login($user);

        return $this->redirectBasedOnRole($user);
    }

    protected function redirectBasedOnRole($user)
    {
        $message = 'Inscription réussie ! Bienvenue sur ImmobilierPro.';

        switch ($user->role) {
            case 'client':
                return redirect()->route('client.dashboard')->with('success', $message);
            default:
                return redirect()->route('user.dashboard')->with('success', $message);
        }
    }
}
