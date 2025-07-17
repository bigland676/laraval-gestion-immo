@extends('layouts.app')

@section('title', $agent->name . ' - Agent SENIMMO')
@section('description', $agent->description ?? $agent->name . ' - Agent immobilier expert chez SENIMMO')

@push('styles')
    <style>
        .agent-profile-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 80px 0;
        }

        .agent-photo-large {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 30px;
            border: 5px solid rgba(255,255,255,0.2);
        }

        .agent-photo-large img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .social-links-large {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link-large {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-link-large:hover {
            background: white;
            color: #007bff;
            transform: translateY(-3px);
        }

        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: -50px;
            position: relative;
            z-index: 2;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #007bff;
            display: block;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #666;
            font-weight: 500;
        }

        .info-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .contact-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .contact-item:last-child {
            border-bottom: none;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }

        .properties-section {
            background: #f8f9fa;
            padding: 60px 0;
        }

        .section-title {
            margin-bottom: 40px;
            text-align: center;
        }

        .property-card-small {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
            margin-bottom: 20px;
        }

        .property-card-small:hover {
            transform: translateY(-5px);
        }

        .property-image-small {
            height: 200px;
            overflow: hidden;
            position: relative;
        }

        .property-image-small img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .property-content-small {
            padding: 20px;
        }

        .featured-agent-badge {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #ff6b35;
            color: white;
            padding: 8px 15px;
            border-radius: 25px;
            font-size: 0.9rem;
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
    <!-- Agent Profile Header -->
    <section class="agent-profile-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    @if($agent->is_featured)
                        <div class="featured-agent-badge">
                            <i class="fas fa-star"></i> Agent Expert
                        </div>
                    @endif

                    <div class="agent-photo-large">
                        <img src="{{ $agent->photo_url }}" alt="{{ $agent->name }}">
                    </div>

                    <h1>{{ $agent->name }}</h1>
                    <h4 class="mb-3">{{ $agent->title ?? 'Agent Immobilier' }}</h4>

                    @if($agent->description)
                        <p class="lead">{{ $agent->description }}</p>
                    @endif

                    <div class="social-links-large">
                        @if($agent->facebook)
                            <a href="{{ $agent->facebook }}" class="social-link-large" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        @if($agent->twitter)
                            <a href="{{ $agent->twitter }}" class="social-link-large" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif
                        @if($agent->linkedin)
                            <a href="{{ $agent->linkedin }}" class="social-link-large" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        @endif
                        <a href="mailto:{{ $agent->email }}" class="social-link-large">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-card">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <span class="stat-number">{{ $stats['total_properties'] }}</span>
                            <span class="stat-label">Propriétés Totales</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <span class="stat-number">{{ $stats['available_properties'] }}</span>
                            <span class="stat-label">Disponibles</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <span class="stat-number">{{ $stats['sold_properties'] }}</span>
                            <span class="stat-label">Vendues</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <span class="stat-number">{{ $stats['rented_properties'] }}</span>
                            <span class="stat-label">Louées</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agent Info and Contact -->
    <section class="agent-info-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="info-card">
                        <h3>À propos de {{ $agent->name }}</h3>
                        @if($agent->description)
                            <p>{{ $agent->description }}</p>
                        @else
                            <p>{{ $agent->name }} est un agent immobilier expérimenté chez SENIMMO, dédié à vous aider dans tous vos projets immobiliers. Avec une connaissance approfondie du marché sénégalais, {{ $agent->name }} vous accompagne avec professionnalisme et expertise.</p>
                        @endif

                        <div class="specialities mt-4">
                            <h5>Spécialités</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i> Vente de propriétés</li>
                                        <li><i class="fas fa-check text-primary me-2"></i> Location immobilière</li>
                                        <li><i class="fas fa-check text-primary me-2"></i> Conseil en investissement</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i> Évaluation de biens</li>
                                        <li><i class="fas fa-check text-primary me-2"></i> Négociation</li>
                                        <li><i class="fas fa-check text-primary me-2"></i> Accompagnement juridique</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-card">
                        <h5 class="mb-4">Contactez {{ $agent->name }}</h5>

                        @if($agent->phone)
                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <strong>Téléphone</strong><br>
                                    <a href="tel:{{ $agent->phone }}">{{ $agent->phone }}</a>
                                </div>
                            </div>
                        @endif

                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <strong>Email</strong><br>
                                <a href="mailto:{{ $agent->email }}">{{ $agent->email }}</a>
                            </div>
                        </div>

                        <div class="mt-4 d-grid gap-2">
                            @if($agent->phone)
                                <a href="tel:{{ $agent->phone }}" class="btn btn-primary">
                                    <i class="fas fa-phone"></i> Appeler maintenant
                                </a>
                            @endif
                            <a href="mailto:{{ $agent->email }}" class="btn btn-outline-primary">
                                <i class="fas fa-envelope"></i> Envoyer un email
                            </a>
                        </div>
                    </div>

                    <!-- Quick Contact Form -->
                    <div class="info-card">
                        <h5>Demande d'information</h5>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="subject" value="Contact avec {{ $agent->name }}">

                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" name="phone" class="form-control" placeholder="Votre téléphone">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="4" placeholder="Votre message..." required>Bonjour {{ $agent->name }}, je souhaiterais obtenir plus d'informations sur vos services.</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-paper-plane"></i> Envoyer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agent Properties -->
    @if($properties->count() > 0)
        <section class="properties-section">
            <div class="container">
                <h2 class="section-title">Propriétés de {{ $agent->name }}</h2>

                <div class="row">
                    @foreach($properties as $property)
                        <div class="col-lg-4 col-md-6">
                            <div class="property-card-small">
                                <div class="property-image-small">
                                    <img src="{{ $property->main_image_url }}" alt="{{ $property->title }}">
                                    @if($property->is_featured)
                                        <span class="badge badge-featured">Coup de cœur</span>
                                    @endif
                                </div>
                                <div class="property-content-small">
                                    <h5>
                                        <a href="{{ route('properties.show', $property->slug) }}">
                                            {{ Str::limit($property->title, 60) }}
                                        </a>
                                    </h5>
                                    <div class="property-location mb-2">
                                        <i class="fas fa-map-marker-alt text-primary"></i> {{ $property->location }}
                                    </div>
                                    <div class="property-features mb-3">
                                        @if($property->bedrooms)
                                            <span class="badge bg-light text-dark me-1">
                                            <i class="fas fa-bed"></i> {{ $property->bedrooms }}
                                        </span>
                                        @endif
                                        @if($property->bathrooms)
                                            <span class="badge bg-light text-dark me-1">
                                            <i class="fas fa-bath"></i> {{ $property->bathrooms }}
                                        </span>
                                        @endif
                                        @if($property->area)
                                            <span class="badge bg-light text-dark">
                                            <i class="fas fa-ruler"></i> {{ $property->area }}m²
                                        </span>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="property-price">
                                            <strong>{{ $property->formatted_price }}</strong>
                                            @if($property->type === 'location')
                                                <small>/mois</small>
                                            @endif
                                        </div>
                                        <a href="{{ route('properties.show', $property->slug) }}" class="btn btn-sm btn-outline-primary">
                                            Voir
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($properties->hasPages())
                    <div class="d-flex justify-content-center mt-4">
                        {{ $properties->links() }}
                    </div>
                @endif
            </div>
        </section>
    @else
        <section class="properties-section">
            <div class="container">
                <div class="text-center">
                    <i class="fas fa-home fa-3x text-muted mb-3"></i>
                    <h4>Aucune propriété disponible</h4>
                    <p class="text-muted">{{ $agent->name }} n'a actuellement aucune propriété en ligne</p>
                </div>
            </div>
        </section>
    @endif
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth animations on scroll
            const observeElements = document.querySelectorAll('.property-card-small, .info-card, .contact-card');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        setTimeout(() => {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }, index * 100);
                    }
                });
            }, {
                threshold: 0.1
            });

            observeElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });

            // Form validation
            const contactForm = document.querySelector('form');
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    const name = this.querySelector('input[name="name"]').value;
                    const email = this.querySelector('input[name="email"]').value;
                    const message = this.querySelector('textarea[name="message"]').value;

                    if (!name || !email || !message) {
                        e.preventDefault();
                        alert('Veuillez remplir tous les champs obligatoires.');
                        return false;
                    }
                });
            }
        });
    </script>
@endpush
