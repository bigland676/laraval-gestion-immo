<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Agent;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Agent principal (Walter Deckow)
        $featuredAgent = Agent::where('name', 'Walter Deckow')
            ->orWhere('is_featured', true)
            ->first();

        // Propriétés populaires (6 propriétés)
        $popularProperties = Property::where('is_popular', true)
            ->where('status', 'available')
            ->limit(6)
            ->get();

        // Membres de l'équipe (4 agents)
        $teamMembers = Agent::where('is_active', true)
            ->limit(4)
            ->get();

        // Maisons haut standing (3 propriétés)
        $premiumProperties = Property::where('category', 'maison')
            ->where('is_premium', true)
            ->where('status', 'available')
            ->limit(3)
            ->get();

        // Témoignages (3 témoignages)
        $testimonials = Testimonial::where('is_active', true)
            ->limit(3)
            ->get();

        return view('pages.home', compact(
            'featuredAgent',
            'popularProperties',
            'teamMembers',
            'premiumProperties',
            'testimonials'
        ));
    }
}
