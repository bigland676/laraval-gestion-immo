<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        Testimonial::create([
            'name' => 'Khadija Ba',
            'profession' => 'Entrepreneure',
            'content' => 'Excellente expérience avec SENIMMO ! L\'équipe a été très professionnelle et m\'a aidée à trouver la maison parfaite pour ma famille. Je recommande vivement leurs services.',
            'photo' => 'testimonials/khadija-ba.jpg',
            'rating' => 5,
            'is_active' => true,
        ]);

        Testimonial::create([
            'name' => 'Jean-Claude Ndour',
            'profession' => 'Directeur Commercial',
            'content' => 'Service impeccable ! Grâce à Walter et son équipe, j\'ai pu vendre ma propriété rapidement et au bon prix. Leur expertise du marché immobilier sénégalais est remarquable.',
            'photo' => 'testimonials/jean-claude-ndour.jpg',
            'rating' => 5,
            'is_active' => true,
        ]);

        Testimonial::create([
            'name' => 'Aminata Diallo',
            'profession' => 'Médecin',
            'content' => 'Accompagnement personnalisé de A à Z. L\'équipe SENIMMO a su comprendre mes besoins et m\'a proposé exactement ce que je cherchais. Très satisfaite de mon achat !',
            'photo' => 'testimonials/aminata-diallo.jpg',
            'rating' => 5,
            'is_active' => true,
        ]);
    }
}
