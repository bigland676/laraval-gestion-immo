<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    /**
     * Afficher la liste des agents
     */
    public function index()
    {
        $agents = Agent::where('is_active', true)
            ->withCount('properties')
            ->orderBy('is_featured', 'desc')
            ->orderBy('name')
            ->paginate(12);

        return view('pages.agents.index', compact('agents'));
    }

    /**
     * Afficher le profil d'un agent
     */
    public function show(Agent $agent)
    {
        if (!$agent->is_active) {
            abort(404);
        }

        // Propriétés de l'agent
        $properties = $agent->properties()
            ->available()
            ->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(8);

        // Statistiques de l'agent
        $stats = [
            'total_properties' => $agent->properties()->count(),
            'available_properties' => $agent->properties()->available()->count(),
            'sold_properties' => $agent->properties()->where('status', 'sold')->count(),
            'rented_properties' => $agent->properties()->where('status', 'rented')->count(),
        ];

        return view('pages.agents.show', compact(
            'agent',
            'properties',
            'stats'
        ));
    }
}
