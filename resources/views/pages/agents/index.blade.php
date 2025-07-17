@extends('layouts.app')

@section('title', 'Nos Agents - SENIMMO')
@section('description', 'Découvrez notre équipe d\'agents immobiliers experts, prêts à vous accompagner dans vos projets.')

@push('styles')
    <style>
        .agents-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 80px 0;
        }

        .agent-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
        }

        .agent-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .agent-photo {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .agent-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .agent-card:hover .agent-photo img {
            transform: scale(1.05);
        }

        .agent-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, transparent, rgba(0,0,0,0.8));
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .agent-card:hover .agent-overlay {
            opacity: 1;
        }

        .social-links {
            display: flex;
            gap: 10px;
        }

        .social-link {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: background 0.3s ease;
        }

        .social-link:hover {
            background: #007bff;
            color: white;
        }

        .agent-info {
            padding: 25px;
            text-align: center;
        }

        .agent-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .agent-title {
            color: #007bff;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .agent-stats {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
            padding: 20px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }

        .stat {
            text-align: center;
        }

        .stat-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
            display: block;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #666;
        }

        .agent-contact {
            margin-top: 15px;
        }

        .contact-info {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }

        .featured-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: #ff6b35;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }
    </style>
@endpush

@section('content')
    <!-- Agents Header -->
    <section class="agents-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Notre Équipe d'Experts</h1>
                    <p class="lead">Des professionnels passionnés à votre service pour concrétiser vos projets immobiliers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Agents Content -->
    <section class="agents-content py-5">
        <div class="container">
            @if($agents->count() > 0)
                <div class="row">
                    @foreach($agents as $agent)
                        <div class="col-lg-4 col-md-6">
                            <div class="agent-card">
                                @if($agent->is_featured)
                                    <div class="featured-badge">
                                        <i class="fas fa-star"></i> Expert
                                    </div>
                                @endif

                                <div class="agent-photo">
                                    <img src="{{ $agent->photo_url }}" alt="{{ $agent->name }}">
                                    <div class="agent-overlay">
                                        <div class="social-links">
                                            @if($agent->facebook)
                                                <a href="{{ $agent->facebook }}" class="social-link" target="_blank">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            @endif
                                            @if($agent->twitter)
                                                <a href="{{ $agent->twitter }}" class="social-link" target="_blank">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            @endif
                                            @if($agent->linkedin)
                                                <a href="{{ $agent->linkedin }}" class="social-link" target="_blank">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            @endif
                                            <a href="mailto:{{ $agent->email }}" class="social-link">
                                                <i class="fas fa-envelope"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="agent-info">
                                    <h3 class="agent-name">{{ $agent->name }}</h3>
                                    <p class="agent-title">{{ $agent->title ?? 'Agent Immobilier' }}</p>

                                    @if($agent->description)
                                        <p class="text-muted">{{ Str::limit($agent->description, 100) }}</p>
                                    @endif

                                    <div class="agent-stats">
                                        <div class="stat">
                                            <span class="stat-number">{{ $agent->properties_count ?? 0 }}</span>
                                            <span class="stat-label">Propriétés</span>
                                        </div>
                                        <div class="stat">
                                            <span class="stat-number">{{ $agent->sales_count ?? 0 }}</span>
                                            <span class="stat-label">Ventes</span>
                                        </div>
                                        <div class="stat">
                                            <span class="stat-number">{{ $agent->available_properties_count ?? 0 }}</span>
                                            <span class="stat-label">Disponibles</span>
                                        </div>
                                    </div>

                                    <div class="agent-contact">
                                        <div class="contact-info">
                                            @if($agent->phone)
                                                <div><i class="fas fa-phone text-primary"></i> {{ $agent->phone }}</div>
                                            @endif
                                            <div><i class="fas fa-envelope text-primary"></i> {{ $agent->email }}</div>
                                        </div>

                                        <div class="d-grid gap-2">
                                            <a href="{{ route('agents.show', $agent->slug) }}" class="btn btn-primary">
                                                <i class="fas fa-user"></i> Voir le profil
                                            </a>
                                            <a href="tel:{{ $agent->phone }}" class="btn btn-outline-primary">
                                                <i class="fas fa-phone"></i> Appeler
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($agents->hasPages())
                    <div class="d-flex justify-content-center mt-5">
                        {{ $agents->links() }}
                    </div>
                @endif
            @else
                <!-- No Agents -->
                <div class="text-center py-5">
                    <i class="fas fa-users fa-3x text-muted mb-3"></i>
                    <h4>Aucun agent disponible</h4>
                    <p class="text-muted">Notre équipe sera bientôt disponible</p>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3>Vous souhaitez rejoindre notre équipe ?</h3>
                    <p class="mb-0">Nous recherchons toujours de nouveaux talents passionnés par l'immobilier</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('contact') }}" class="btn btn-light btn-lg">
                        <i class="fas fa-briefcase"></i> Postuler
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animation on scroll
            const observeElements = document.querySelectorAll('.agent-card');

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
        });
    </script>
@endpush
