<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Agent;
use App\Models\Testimonial;

class AboutController extends Controller
{
    /**
     * Afficher la page À Propos
     */
    public function index()
    {
        // Statistiques de l'entreprise
        $stats = [
            'properties_sold' => Property::where('status', 'sold')->count(),
            'satisfied_clients' => Testimonial::where('is_active', true)->count() * 10, // Estimation
            'expert_agents' => Agent::where('is_active', true)->count(),
            'years_experience' => now()->year - 2014, // Année de création
        ];

        // Quelques témoignages pour la section
        $testimonials = Testimonial::where('is_active', true)
            ->latest()
            ->limit(3)
            ->get();

        // Agents en vedette
        $featuredAgents = Agent::where('is_featured', true)
            ->where('is_active', true)
            ->limit(3)
            ->get();

        return view('pages.about', compact(
            'stats',
            'testimonials',
            'featuredAgents'
        ));
    }
}
