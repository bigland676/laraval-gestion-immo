<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'photo',
        'phone',
        'email',
        'facebook',
        'twitter',
        'linkedin',
        'is_featured',
        'is_active',
        'slug'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean',
    ];

    /**
     * Relation avec les propriétés
     */
    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    /**
     * Scope pour les agents actifs
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope pour les agents en vedette
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Mutateur pour créer automatiquement le slug
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    /**
     * Accesseur pour l'URL de la photo
     */
    public function getPhotoUrlAttribute()
    {
        if (!$this->photo) {
            return asset('images/default-agent.jpg');
        }

        return asset('storage/' . $this->photo);
    }

    /**
     * Accesseur pour le nombre de propriétés vendues
     */
    public function getSalesCountAttribute()
    {
        return $this->properties()->where('status', 'sold')->count();
    }

    /**
     * Accesseur pour le nombre de propriétés disponibles
     */
    public function getAvailablePropertiesCountAttribute()
    {
        return $this->properties()->where('status', 'available')->count();
    }
}
