<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Property;
use App\Models\Agent;
use Illuminate\Support\Str;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $agents = Agent::all();

        // Propriétés populaires
        $popularProperties = [
            [
                'title' => 'Villa moderne avec piscine',
                'description' => 'Magnifique villa de 4 chambres avec piscine et jardin paysager.',
                'price' => 85000000,
                'type' => 'vente',
                'category' => 'maison',
                'location' => 'Almadies, Dakar',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 350,
                'main_image' => 'properties/villa-moderne-1.jpg',
                'features' => json_encode(['piscine', 'garage', 'jardin', 'securite']),
                'gallery' => json_encode([
                    'properties/villa-moderne-1.jpg',
                    'properties/villa-moderne-2.jpg',
                    'properties/villa-moderne-3.jpg',
                ]),
                'is_popular' => true,
                'is_premium' => false,
                'is_featured' => false,
            ],
            [
                'title' => 'Appartement Standing Plateau',
                'description' => 'Appartement de luxe au cœur du Plateau avec vue sur mer.',
                'price' => 450000,
                'type' => 'location',
                'category' => 'appartement',
                'location' => 'Plateau, Dakar',
                'bedrooms' => 3,
                'bathrooms' => 2,
                'area' => 120,
                'main_image' => 'properties/appartement-plateau-1.jpg',
                'features' => json_encode(['ascenseur', 'parking', 'balcon']),
                'gallery' => json_encode([
                    'properties/appartement-plateau-1.jpg',
                    'properties/appartement-plateau-2.jpg',
                    'properties/appartement-plateau-3.jpg',
                ]),
                'is_popular' => true,
                'is_premium' => false,
                'is_featured' => false,
            ],
            [
                'title' => 'Terrain viabilisé Saly',
                'description' => 'Terrain de 800m² viabilisé, proche de la plage.',
                'price' => 25000000,
                'type' => 'vente',
                'category' => 'terrain',
                'location' => 'Saly, Mbour',
                'bedrooms' => null,
                'bathrooms' => null,
                'area' => 800,
                'main_image' => 'properties/terrain-saly-1.jpg',
                'features' => json_encode(['eau', 'electricite', 'proche_plage']),
                'gallery' => json_encode([
                    'properties/terrain-saly-1.jpg',
                    'properties/terrain-saly-2.jpg',
                ]),
                'is_popular' => true,
                'is_premium' => false,
                'is_featured' => false,
            ],
            [
                'title' => 'Duplex Mermoz avec terrasse',
                'description' => 'Superbe duplex avec grande terrasse et parking.',
                'price' => 65000000,
                'type' => 'vente',
                'category' => 'appartement',
                'location' => 'Mermoz, Dakar',
                'bedrooms' => 5,
                'bathrooms' => 3,
                'area' => 180,
                'main_image' => 'properties/duplex-mermoz-1.jpg',
                'features' => json_encode(['terrasse', 'parking', 'climatisation']),
                'gallery' => json_encode([
                    'properties/duplex-mermoz-1.jpg',
                    'properties/duplex-mermoz-2.jpg',
                    'properties/duplex-mermoz-3.jpg',
                ]),
                'is_popular' => true,
                'is_premium' => false,
                'is_featured' => false,
            ],
            [
                'title' => 'Maison familiale Ouakam',
                'description' => 'Maison spacieuse idéale pour famille nombreuse.',
                'price' => 750000,
                'type' => 'location',
                'category' => 'maison',
                'location' => 'Ouakam, Dakar',
                'bedrooms' => 6,
                'bathrooms' => 4,
                'area' => 280,
                'main_image' => 'properties/maison-ouakam-1.jpg',
                'features' => json_encode(['jardin', 'garage', 'buanderie']),
                'gallery' => json_encode([
                    'properties/maison-ouakam-1.jpg',
                    'properties/maison-ouakam-2.jpg',
                    'properties/maison-ouakam-3.jpg',
                ]),
                'is_popular' => true,
                'is_premium' => false,
                'is_featured' => false,
            ],
            [
                'title' => 'Studio meublé Sacré-Cœur',
                'description' => 'Studio moderne entièrement meublé et équipé.',
                'price' => 280000,
                'type' => 'location',
                'category' => 'appartement',
                'location' => 'Sacré-Cœur, Dakar',
                'bedrooms' => 1,
                'bathrooms' => 1,
                'area' => 45,
                'main_image' => 'properties/studio-sacre-coeur-1.jpg',
                'features' => json_encode(['meuble', 'wifi', 'climatisation']),
                'gallery' => json_encode([
                    'properties/studio-sacre-coeur-1.jpg',
                    'properties/studio-sacre-coeur-2.jpg',
                ]),
                'is_popular' => true,
                'is_premium' => false,
                'is_featured' => false,
            ],
        ];

        foreach ($popularProperties as $property) {
            Property::create(array_merge($property, [
                'slug' => Str::slug($property['title']),
                'agent_id' => $agents->random()->id,
                'status' => 'available',
            ]));
        }

        // Maisons haut standing
        $premiumProperties = [
            [
                'title' => 'Villa de luxe Les Almadies',
                'description' => 'Villa d\'exception avec vue panoramique sur l\'océan.',
                'price' => 250000000,
                'type' => 'vente',
                'category' => 'maison',
                'location' => 'Les Almadies, Dakar',
                'bedrooms' => 6,
                'bathrooms' => 5,
                'area' => 500,
                'main_image' => 'properties/villa-luxe-almadies-1.jpg',
                'features' => json_encode(['piscine', 'spa', 'garage_double', 'jardin_paysager', 'vue_mer']),
                'gallery' => json_encode([
                    'properties/villa-luxe-almadies-1.jpg',
                    'properties/villa-luxe-almadies-2.jpg',
                    'properties/villa-luxe-almadies-3.jpg',
                    'properties/villa-luxe-almadies-4.jpg',
                ]),
                'is_premium' => true,
                'is_featured' => true,
                'is_popular' => false,
            ],
            [
                'title' => 'Château moderne Ngor',
                'description' => 'Propriété d\'exception avec architecture contemporaine.',
                'price' => 180000000,
                'type' => 'vente',
                'category' => 'maison',
                'location' => 'Ngor, Dakar',
                'bedrooms' => 5,
                'bathrooms' => 4,
                'area' => 450,
                'main_image' => 'properties/chateau-ngor-1.jpg',
                'features' => json_encode(['piscine', 'home_cinema', 'cave_vin', 'ascenseur']),
                'gallery' => json_encode([
                    'properties/chateau-ngor-1.jpg',
                    'properties/chateau-ngor-2.jpg',
                    'properties/chateau-ngor-3.jpg',
                    'properties/chateau-ngor-4.jpg',
                ]),
                'is_premium' => true,
                'is_featured' => false,
                'is_popular' => false,
            ],
            [
                'title' => 'Penthouse VDN avec rooftop',
                'description' => 'Penthouse exceptionnel avec terrasse panoramique.',
                'price' => 120000000,
                'type' => 'vente',
                'category' => 'appartement',
                'location' => 'VDN, Dakar',
                'bedrooms' => 4,
                'bathrooms' => 3,
                'area' => 220,
                'main_image' => 'properties/penthouse-vdn-1.jpg',
                'features' => json_encode(['rooftop', 'jacuzzi', 'ascenseur_prive', 'parking_double']),
                'gallery' => json_encode([
                    'properties/penthouse-vdn-1.jpg',
                    'properties/penthouse-vdn-2.jpg',
                    'properties/penthouse-vdn-3.jpg',
                    'properties/penthouse-vdn-4.jpg',
                ]),
                'is_premium' => true,
                'is_featured' => false,
                'is_popular' => false,
            ],
        ];

        foreach ($premiumProperties as $property) {
            Property::create(array_merge($property, [
                'slug' => Str::slug($property['title']),
                'agent_id' => $agents->random()->id,
                'status' => 'available',
            ]));
        }
    }
}
