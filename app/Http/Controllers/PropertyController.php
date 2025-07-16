<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Agent;

class PropertyController extends Controller
{
    /**
     * Afficher la liste des propriétés
     */
    public function index(Request $request)
    {
        $query = Property::with('agent')->available();

        // Filtres
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('price_range')) {
            $this->applyPriceRange($query, $request->price_range);
        }

        if ($request->filled('bedrooms')) {
            $query->where('bedrooms', '>=', $request->bedrooms);
        }

        if ($request->filled('bathrooms')) {
            $query->where('bathrooms', '>=', $request->bathrooms);
        }

        if ($request->filled('features')) {
            foreach ($request->features as $feature) {
                $query->whereJsonContains('features', $feature);
            }
        }

        // Tri
        $sortBy = $request->get('sort', 'created_at');
        $sortOrder = $request->get('order', 'desc');

        if (in_array($sortBy, ['price', 'created_at', 'area'])) {
            $query->orderBy($sortBy, $sortOrder);
        }

        $properties = $query->paginate(12)->withQueryString();

        // Données pour les filtres
        $agents = Agent::active()->get();
        $locations = Property::select('location')
            ->distinct()
            ->pluck('location')
            ->sort();

        return view('pages.properties.index', compact(
            'properties',
            'agents',
            'locations'
        ));
    }

    /**
     * Recherche de propriétés
     */
    public function search(Request $request)
    {
        // Redirection vers index avec paramètres
        return redirect()->route('properties.index', $request->all());
    }

    /**
     * Afficher une propriété spécifique
     */
    public function show(Property $property)
    {
        $property->load('agent');

        // Propriétés similaires
        $similarProperties = Property::where('id', '!=', $property->id)
            ->where('category', $property->category)
            ->where('type', $property->type)
            ->available()
            ->with('agent')
            ->limit(4)
            ->get();

        return view('pages.properties.show', compact(
            'property',
            'similarProperties'
        ));
    }

    /**
     * Appliquer le filtre de prix
     */
    private function applyPriceRange($query, $priceRange)
    {
        switch ($priceRange) {
            case '0-50000000':
                $query->whereBetween('price', [0, 50000000]);
                break;
            case '50000000-100000000':
                $query->whereBetween('price', [50000000, 100000000]);
                break;
            case '100000000-200000000':
                $query->whereBetween('price', [100000000, 200000000]);
                break;
            case '200000000+':
                $query->where('price', '>=', 200000000);
                break;
        }

        return $query;
    }
}
