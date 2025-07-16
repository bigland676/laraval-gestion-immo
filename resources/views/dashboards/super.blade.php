@extends('layouts.dashboard')
@section('title', 'Dashboard Super Admin')
@section('content')
    <div class="dashboard-header">
        <div class="container text-center">
            <div class="dashboard-icon"><i class="fas fa-crown"></i></div>
            <h1 class="display-5 fw-bold mb-3">Bienvenue {{ $user->name }}</h1>
            <span class="badge bg-danger fs-6 px-3 py-2">{{ $dashboardType }}</span>
            <p class="mt-3 lead">Accès complet à tous les modules du système</p>
        </div>
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="text-primary mb-3"><i class="fas fa-users fa-3x"></i></div>
                        <h4>Gestion Utilisateurs</h4>
                        <p class="text-muted">Contrôle total des comptes</p>
                        <a href="#" class="btn btn-gradient">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="text-success mb-3"><i class="fas fa-building fa-3x"></i></div>
                        <h4>Gestion Propriétés</h4>
                        <p class="text-muted">Administration complète</p>
                        <a href="#" class="btn btn-gradient">Accéder</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center h-100">
                    <div class="card-body p-4">
                        <div class="text-warning mb-3"><i class="fas fa-cogs fa-3x"></i></div>
                        <h4>Paramètres Système</h4>
                        <p class="text-muted">Configuration avancée</p>
                        <a href="#" class="btn btn-gradient">Accéder</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center p-5">
                        <h5>Informations du Compte</h5>
                        <div class="row mt-4">
                            <div class="col-md-6"><strong>Nom:</strong> {{ $user->name }}</div>
                            <div class="col-md-6"><strong>Email:</strong> {{ $user->email }}</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><strong>Rôle:</strong> <span class="badge bg-danger">{{ $user->role_display }}</span></div>
                            <div class="col-md-6"><strong>Statut:</strong> <span class="badge bg-success">Actif</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
