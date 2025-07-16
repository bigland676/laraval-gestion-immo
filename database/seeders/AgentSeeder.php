<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agent;
use Illuminate\Support\Str;

class AgentSeeder extends Seeder
{
    public function run()
    {
        Agent::create([
            'name' => 'Walter Deckow',
            'slug' => Str::slug('Walter Deckow'),
            'title' => 'Agent Principal',
            'description' => 'Expert en immobilier avec plus de 10 ans d\'expérience dans la vente et location de propriétés haut standing.',
            'photo' => 'agents/walter-deckow.jpg',
            'phone' => '+221 77 123 45 67',
            'email' => 'walter.deckow@senimmo.com',
            'facebook' => 'https://facebook.com/walter.deckow',
            'linkedin' => 'https://linkedin.com/in/walter-deckow',
            'is_featured' => true,
            'is_active' => true,
        ]);

        Agent::create([
            'name' => 'Aisha Diop',
            'slug' => Str::slug('Aisha Diop'),
            'title' => 'Agent Immobilier',
            'description' => 'Spécialisée dans les appartements et maisons familiales à Dakar.',
            'photo' => 'agents/aisha-diop.jpg',
            'phone' => '+221 76 234 56 78',
            'email' => 'aisha.diop@senimmo.com',
            'is_active' => true,
        ]);

        Agent::create([
            'name' => 'Mamadou Fall',
            'slug' => Str::slug('Mamadou Fall'),
            'title' => 'Agent Senior',
            'description' => 'Expert en terrains et propriétés commerciales.',
            'photo' => 'agents/mamadou-fall.jpg',
            'phone' => '+221 77 345 67 89',
            'email' => 'mamadou.fall@senimmo.com',
            'is_active' => true,
        ]);

        Agent::create([
            'name' => 'Fatou Sow',
            'slug' => Str::slug('Fatou Sow'),
            'title' => 'Agent Immobilier',
            'description' => 'Passionnée par l\'immobilier de luxe et les propriétés d\'exception.',
            'photo' => 'agents/fatou-sow.jpg',
            'phone' => '+221 78 456 78 90',
            'email' => 'fatou.sow@senimmo.com',
            'is_active' => true,
        ]);
    }
}
