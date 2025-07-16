<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'price',
        'type',
        'category',
        'location',
        'bedrooms',
        'bathrooms',
        'area',
        'main_image',
        'gallery',
        'features',
        'status',
        'is_popular',
        'is_premium',
        'is_featured',
        'agent_id'
    ];

    protected $casts = [
        'gallery' => 'array',
        'features' => 'array',
        'is_popular' => 'boolean',
        'is_premium' => 'boolean',
        'is_featured' => 'boolean',
        'price' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Relation avec l'agent
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    /**
     * Scope pour les propriétés populaires
     */
    public function scopePopular($query)
    {
        return $query->where('is_popular', true);
    }

    /**
     * Scope pour les propriétés premium
     */
    public function scopePremium($query)
    {
        return $query->where('is_premium', true);
    }

    /**
     * Scope pour les propriétés en vedette
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope pour les propriétés disponibles
     */
    public function scopeAvailable($query)
    {
        return $query->where('status', 'available');
    }

    /**
     * Accesseur pour l'URL de l'image principale
     */
    public function getMainImageUrlAttribute()
    {
        if (!$this->main_image) {
            return asset('images/default-property.jpg');
        }

        return asset('storage/' . $this->main_image);
    }

    /**
     * Accesseur pour le prix formaté
     */
    public function getFormattedPriceAttribute()
    {
        return number_format($this->price, 0, ',', ' ') . ' FCFA';
    }

    /**
     * Accesseur pour le prix avec période (location)
     */
    public function getPriceWithPeriodAttribute()
    {
        $formatted = $this->formatted_price;

        if ($this->type === 'location') {
            $formatted .= '/mois';
        }

        return $formatted;
    }

    /**
     * Mutateur pour créer automatiquement le slug
     */
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Accesseur pour obtenir la première image de la galerie
     */
    public function getFirstGalleryImageAttribute()
    {
        if (!$this->gallery || empty($this->gallery)) {
            return $this->main_image_url;
        }

        return asset('storage/' . $this->gallery[0]);
    }

    /**
     * Obtenir le label d'une caractéristique
     */
    public function getFeatureLabel($feature)
    {
        $featureLabels = [
            'piscine' => 'Piscine',
            'garage' => 'Garage',
            'jardin' => 'Jardin',
            'securite' => 'Sécurité',
            'ascenseur' => 'Ascenseur',
            'parking' => 'Parking',
            'balcon' => 'Balcon',
            'terrasse' => 'Terrasse',
            'climatisation' => 'Climatisation',
            'meuble' => 'Meublé',
            'wifi' => 'WiFi',
            'spa' => 'Spa',
            'garage_double' => 'Garage Double',
            'jardin_paysager' => 'Jardin Paysager',
            'vue_mer' => 'Vue sur Mer',
            'home_cinema' => 'Home Cinéma',
            'cave_vin' => 'Cave à Vin',
            'rooftop' => 'Rooftop',
            'jacuzzi' => 'Jacuzzi',
            'ascenseur_prive' => 'Ascenseur Privé',
            'parking_double' => 'Parking Double',
            'eau' => 'Eau',
            'electricite' => 'Électricité',
            'proche_plage' => 'Proche Plage',
            'buanderie' => 'Buanderie',
        ];

        return $featureLabels[$feature] ?? ucfirst(str_replace('_', ' ', $feature));
    }

    /**
     * Accesseur pour les caractéristiques formatées
     */
    public function getFeaturesListAttribute()
    {
        if (!$this->features) {
            return [];
        }

        $featureLabels = [
            'piscine' => 'Piscine',
            'garage' => 'Garage',
            'jardin' => 'Jardin',
            'securite' => 'Sécurité',
            'ascenseur' => 'Ascenseur',
            'parking' => 'Parking',
            'balcon' => 'Balcon',
            'terrasse' => 'Terrasse',
            'climatisation' => 'Climatisation',
            'meuble' => 'Meublé',
            'wifi' => 'WiFi',
            'spa' => 'Spa',
            'garage_double' => 'Garage Double',
            'jardin_paysager' => 'Jardin Paysager',
            'vue_mer' => 'Vue sur Mer',
            'home_cinema' => 'Home Cinéma',
            'cave_vin' => 'Cave à Vin',
            'rooftop' => 'Rooftop',
            'jacuzzi' => 'Jacuzzi',
            'ascenseur_prive' => 'Ascenseur Privé',
            'parking_double' => 'Parking Double',
            'eau' => 'Eau',
            'electricite' => 'Électricité',
            'proche_plage' => 'Proche Plage',
            'buanderie' => 'Buanderie',
        ];

        return collect($this->features)->map(function ($feature) use ($featureLabels) {
            return $featureLabels[$feature] ?? ucfirst($feature);
        })->toArray();
    }

    /**
     * Scope pour recherche
     */
    public function scopeSearch($query, $filters)
    {
        return $query->when($filters['type'] ?? null, function ($query, $type) {
            return $query->where('type', $type);
        })
            ->when($filters['category'] ?? null, function ($query, $category) {
                return $query->where('category', $category);
            })
            ->when($filters['location'] ?? null, function ($query, $location) {
                return $query->where('location', 'like', '%' . $location . '%');
            })
            ->when($filters['min_price'] ?? null, function ($query, $minPrice) {
                return $query->where('price', '>=', $minPrice);
            })
            ->when($filters['max_price'] ?? null, function ($query, $maxPrice) {
                return $query->where('price', '<=', $maxPrice);
            })
            ->when($filters['bedrooms'] ?? null, function ($query, $bedrooms) {
                return $query->where('bedrooms', '>=', $bedrooms);
            })
            ->when($filters['bathrooms'] ?? null, function ($query, $bathrooms) {
                return $query->where('bathrooms', '>=', $bathrooms);
            })
            ->when($filters['features'] ?? null, function ($query, $features) {
                foreach ($features as $feature) {
                    $query->whereJsonContains('features', $feature);
                }
                return $query;
            });
    }
}
