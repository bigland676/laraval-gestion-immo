<?php

use App\Http\Controllers\AgencyController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ServicyController;
use Illuminate\Support\Facades\Route;


// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes des propriétés
Route::prefix('properties')->name('properties.')->group(function () {
    Route::get('/', [PropertyController::class, 'index'])->name('index');
    Route::get('/search', [PropertyController::class, 'search'])->name('search');
    Route::get('/{property:slug}', [PropertyController::class, 'show'])->name('show');
});

// Routes des agences
Route::prefix('agencies')->name('agencies.')->group(function () {
    Route::get('/', [AgencyController::class, 'index'])->name('index');
    //Route::get('/search', [AgencyController::class, 'search'])->name('search');
    Route::get('/{agency:slug}', [AgencyController::class, 'show'])->name('show');
});

// Routes des services
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServicyController::class, 'index'])->name('index');
    //Route::get('/search', [ServicyController::class, 'search'])->name('search');
    Route::get('/{servicy:slug}', [ServicyController::class, 'show'])->name('show');
});

// Routes des services
Route::prefix('blogs')->name('blogs.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    //Route::get('/search', [BlogController::class, 'search'])->name('search');
    Route::get('/{blog:slug}', [BlogController::class, 'show'])->name('show');
});

// Routes des agents
Route::prefix('agents')->name('agents.')->group(function () {
    Route::get('/', [AgentController::class, 'index'])->name('index');
    Route::get('/{agent:slug}', [AgentController::class, 'show'])->name('show');
});

// Pages statiques
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Routes d'authentification
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Routes mot de passe oublié
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Routes réinitialisation mot de passe
Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Dashboard routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Role-based routes
Route::middleware(['auth', 'role:super'])->prefix('super')->name('super.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'superDashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:super,admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:super,admin,agent'])->prefix('agent')->name('agent.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'agentDashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:super,admin,agent,client'])->prefix('client')->name('client.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'clientDashboard'])->name('dashboard');
});

Route::middleware(['auth', 'role:super,admin,agent,client,user'])->prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'userDashboard'])->name('dashboard');
});
