<?php

namespace App\Http\Controllers\Super;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperDashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'total_properties' => Property::count(),
            'active_users' => User::where('is_active', true)->count(),
            'available_properties' => Property::where('status', 'disponible')->count(),
            'agents' => User::where('role', 'agent')->count(),
            'clients' => User::where('role', 'client')->count(),
            'featured_properties' => Property::where('is_featured', true)->count(),
            'total_value' => Property::sum('price'),
        ];

        // Statistiques par mois
        $monthlyStats = Property::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(*) as count'),
            DB::raw('SUM(price) as total_value')
        )
            ->whereYear('created_at', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Propriétés par type
        $propertyTypes = Property::select('type', DB::raw('COUNT(*) as count'))
            ->groupBy('type')
            ->get();

        // Utilisateurs par rôle
        $userRoles = User::select('role', DB::raw('COUNT(*) as count'))
            ->groupBy('role')
            ->get();

        // Dernières propriétés
        $latestProperties = Property::with('agent')
            ->latest()
            ->limit(5)
            ->get();

        // Derniers utilisateurs
        $latestUsers = User::latest()
            ->limit(5)
            ->get();

        return view('super.dashboard', compact(
            'stats',
            'monthlyStats',
            'propertyTypes',
            'userRoles',
            'latestProperties',
            'latestUsers'
        ));
    }

    public function settings()
    {
        return view('super.settings');
    }

    public function updateSettings(Request $request)
    {
        $request->validate([
            'app_name' => 'required|string|max:255',
            'app_description' => 'nullable|string',
            'contact_email' => 'required|email',
            'contact_phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        // Logique de mise à jour des paramètres
        // (vous pouvez utiliser un modèle Settings ou des configs)

        return redirect()->route('super.settings')
            ->with('success', 'Paramètres mis à jour avec succès.');
    }
}
