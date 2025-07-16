<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 15, 2);
            $table->enum('type', ['vente', 'location']);
            $table->enum('category', ['maison', 'appartement', 'terrain', 'commercial']);
            $table->string('location');
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('area')->nullable(); // en m²
            $table->string('main_image');
            $table->json('gallery')->nullable();
            $table->json('features')->nullable(); // piscine, garage, jardin, etc.
            $table->enum('status', ['available', 'sold', 'rented', 'pending'])->default('available');
            $table->boolean('is_popular')->default(false);
            $table->boolean('is_premium')->default(false);
            $table->boolean('is_featured')->default(false);
            $table->foreignId('agent_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
