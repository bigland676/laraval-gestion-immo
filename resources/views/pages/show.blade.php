@extends('app')

@section('content')
    <!-- Hero Section Agent -->
    <section class="py-5 gradient-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-start" data-aos="fade-right">
                    <img src="{{ $agent->avatar ? Storage::url($agent->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode($agent->name) . '&background=667eea&color=fff&size=200' }}"
                         alt="{{ $agent->name }}"
                         class="rounded-circle shadow-lg mb-3"
                         style="width: 200px; height: 200px; object-fit: cover;">
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    <h1 class="display-5 fw-bold text-white mb-3">{{ $agent->name }}</h1>
                    <h4 class="text-white-50 mb-3">Agent Immobilier Certifié</h4>

                    @if($agent->address)
                        <p class="text-white mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            {{ $agent->address }}
                        </p>
                    @endif

                    <div class="d-flex gap-3 flex-wrap">
                        @if($agent->phone)
                            <a href="tel:{{ $agent->phone }}" class="btn btn-light">
                                <i class="fas fa-phone me-2"></i>
                                {{ $agent->phone }}
                            </a>
                        @endif
                        <a href="mailto:{{ $agent->email }}" class="btn btn-outline-light">
                            <i class="fas fa-envelope me-2"></i>
                            Envoyer un email
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistiques Agent -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="h-100">
                        <h3 class="fw-bold text-primary mb-1">{{ $agentStats['total_properties'] }}</h3>
                        <p class="text-muted mb-0">Propriétés gérées</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="h-100">
                        <h3 class="fw-bold text-success mb-1">{{ $agentStats['sold_properties'] }}</h3>
                        <p class="text-muted mb-0">Ventes réalisées</p>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3 mb-md-0">
                    <div class="h-100">
                        <h3 class="fw-bold text-warning mb-1">{{ $agentStats['rented_properties'] }}</h3>
                        <p class="text-muted mb-0">Locations conclues</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="h-100">
                        <h3 class="fw-bold text-info mb-1">{{ $agentStats['available_properties'] }}</h3>
                        <p class="text-muted mb-0">Biens disponibles</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Spécialités -->
    @if($agentStats['specialities']->count() > 0)
        <section class="py-4 border-bottom">
            <div class="container">
                <h5 class="fw-bold mb-3">Spécialités</h5>
                <div class="d-flex gap-2 flex-wrap">
                    @foreach($agentStats['specialities'] as $type => $count)
                        <span class="badge bg-primary fs-6 px-3 py-2">
                            {{ ucfirst($type) }} ({{ $count }})
                        </span>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Propriétés en vedette -->
    @if($featuredProperties->count() > 0)
        <section class="py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold mb-0">Propriétés en vedette</h3>
                    @if($agent->properties->count() > 3)
                        <a href="#all-properties" class="btn btn-outline-primary">
                            Voir toutes les propriétés
                        </a>
                    @endif
                </div>

                <div class="row g-4">
                    @foreach($featuredProperties as $property)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                            <div class="card h-100 shadow-sm">
                                <div class="position-relative">
                                    <img src="{{ $property->main_image ?? 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400' }}"
                                         class="card-img-top"
                                         alt="{{ $property->title }}"
                                         style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-primary">{{ ucfirst($property->type) }}</span>
                                    </div>
                                    <div class="position-absolute top-0 end-0 m-3">
                                        <span class="badge bg-success">{{ $property->formatted_price }}</span>
                                    </div>
                                    <div class="position-absolute bottom-0 start-0 m-3">
                                        <span class="badge bg-warning">
                                            <i class="fas fa-star me-1"></i>
                                            Vedette
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ Str::limit($property->title, 50) }}</h5>
                                    <p class="card-text text-muted">
                                        <i class="fas fa-map-marker-alt me-1"></i>
                                        {{ $property->address }}, {{ $property->city }}
                                    </p>
                                    @if($property->bedrooms || $property->bathrooms || $property->surface)
                                        <div class="d-flex justify-content-between text-muted mb-3">
                                            @if($property->bedrooms)
                                                <span><i class="fas fa-bed me-1"></i>{{ $property->bedrooms }}</span>
                                            @endif
                                            @if($property->bathrooms)
                                                <span><i class="fas fa-bath me-1"></i>{{ $property->bathrooms }}</span>
                                            @endif
                                            <span><i class="fas fa-ruler me-1"></i>{{ $property->surface }}m²</span>
                                        </div>
                                    @endif
                                    <a href="{{ route('properties.show', $property) }}" class="btn btn-gradient w-100">
                                        Voir détails
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Toutes les propriétés -->
    @if($recentProperties->count() > 0)
        <section id="all-properties" class="py-5 bg-light">
            <div class="container">
                <h3 class="fw-bold mb-4">Toutes les propriétés de {{ $agent->name }}</h3>

                <div class="row g-4">
                    @foreach($recentProperties as $property)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                            <div class="card h-100">
                                <div class="position-relative">
                                    <img src="{{ $property->main_image ?? 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?w=400' }}"
                                         class="card-img-top"
                                         alt="{{ $property->title }}"
                                         style="height: 200px; object-fit: cover;">
                                    <div class="position-absolute top-0 start-0 m-3">
                                        <span class="badge bg-primary">{{ ucfirst($property->type) }}</span>
                                    </div>
                                    <div class="position-absolute top-0 end-0 m-3">
                                        <span class="badge bg-success">{{ $property->formatted_price }}</span>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0 m-3">
                                        <span class="badge bg-{{ $property->status_color }}">
                                            {{ $property->status_display }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title">{{ Str::limit($property->title, 40) }}</h6>
                                    <p class="card-text text-muted small">
                                        <i class="fas fa-map-marker-alt me-1"></i>
                                        {{ $property->city }}
                                    </p>
                                    @if($property->bedrooms || $property->surface)
                                        <div class="d-flex justify-content-between text-muted small mb-2">
                                            @if($property->bedrooms)
                                                <span><i class="fas fa-bed me-1"></i>{{ $property->bedrooms }}</span>
                                            @endif
                                            <span><i class="fas fa-ruler me-1"></i>{{ $property->surface }}m²</span>
                                        </div>
                                    @endif
                                    <a href="{{ route('properties.show', $property) }}" class="btn btn-gradient btn-sm w-100">
                                        Voir
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($agent->properties->count() > 6)
                    <div class="text-center mt-4">
                        <a href="{{ route('properties.index', ['agent_id' => $agent->id]) }}" class="btn btn-gradient btn-lg">
                            Voir toutes les propriétés ({{ $agent->properties->count() }})
                        </a>
                    </div>
                @endif
            </div>
        </section>
    @endif

    <!-- Contact Agent -->
    <section class="py-5 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-6 fw-bold text-white mb-4">
                        Contactez {{ $agent->name }}
                    </h2>
                    <p class="lead text-white mb-4">
                        Vous avez un projet immobilier ?
                        {{ $agent->name }} est là pour vous accompagner et vous conseiller.
                    </p>

                    <div class="row g-3 justify-content-center">
                        @if($agent->phone)
                            <div class="col-auto">
                                <a href="tel:{{ $agent->phone }}" class="btn btn-light btn-lg">
                                    <i class="fas fa-phone me-2"></i>
                                    Appeler maintenant
                                </a>
                            </div>
                        @endif
                        <div class="col-auto">
                            <a href="mailto:{{ $agent->email }}?subject=Demande d'information" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-envelope me-2"></i>
                                Envoyer un email
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('contact') }}?agent={{ $agent->id }}" class="btn btn-outline-light btn-lg">
                                <i class="fas fa-calendar me-2"></i>
                                Prendre rendez-vous
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
