<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'address',
        'avatar',
        'is_active',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_active' => 'boolean',
    ];

    // Relations
    public function properties()
    {
        return $this->hasMany(Property::class, 'agent_id');
    }

//    public function appointments()
//    {
//        return $this->hasMany(Appointment::class);
//    }

    // Méthodes de vérification des rôles
    public function isSuper()
    {
        return $this->role === 'super';
    }

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isAgent()
    {
        return $this->role === 'agent';
    }

    public function isClient()
    {
        return $this->role === 'client';
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    public function hasAnyRole($roles)
    {
        return in_array($this->role, $roles);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByRole($query, $role)
    {
        return $query->where('role', $role);
    }


    public function getRoleDisplayAttribute()
    {
        $roles = [
            'super' => 'Super Administrateur',
            'admin' => 'Administrateur',
            'agent' => 'Agent Immobilier',
            'client' => 'Client',
            'user' => 'Utilisateur',
        ];

        return $roles[$this->role] ?? ucfirst($this->role);
    }
}
