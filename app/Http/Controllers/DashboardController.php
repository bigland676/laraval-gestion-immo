<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Redirection automatique selon le rôle
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
                return redirect()->route('user.dashboard');
        }
    }

    public function superDashboard()
    {
        return view('dashboards.super', [
            'user' => auth()->user(),
            'dashboardType' => 'Super Administrateur'
        ]);
    }

    public function adminDashboard()
    {
        return view('dashboards.admin', [
            'user' => auth()->user(),
            'dashboardType' => 'Administrateur'
        ]);
    }

    public function agentDashboard()
    {
        return view('dashboards.agent', [
            'user' => auth()->user(),
            'dashboardType' => 'Agent Immobilier'
        ]);
    }

    public function clientDashboard()
    {
        return view('dashboards.client', [
            'user' => auth()->user(),
            'dashboardType' => 'Client'
        ]);
    }

    public function userDashboard()
    {
        return view('dashboards.user', [
            'user' => auth()->user(),
            'dashboardType' => 'Utilisateur'
        ]);
    }
}
