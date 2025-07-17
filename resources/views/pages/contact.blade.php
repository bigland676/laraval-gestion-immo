@extends('layouts.app')

@section('title', 'Contact - SENIMMO')
@section('description', 'Contactez SENIMMO pour tous vos projets immobiliers. Notre équipe d\'experts vous accompagne.')

@push('styles')
    <style>
        .contact-header {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 80px 0;
        }

        .contact-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-top: -80px;
            position: relative;
            z-index: 2;
        }

        .contact-info-card {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 30px;
            height: 100%;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 25px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-3px);
        }

        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 15px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            font-size: 1.5rem;
        }

        .contact-details h5 {
            margin-bottom: 5px;
            color: #333;
        }

        .contact-details p {
            margin: 0;
            color: #666;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 10px;
            padding: 15px;
            font-size: 16px;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .btn-send {
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            border-radius: 10px;
            padding: 15px 40px;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-send:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.3);
        }

        .map-container {
            border-radius: 15px;
            overflow: hidden;
            height: 400px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .office-hours {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-top: 30px;
        }

        .hours-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        .hours-item:last-child {
            border-bottom: none;
        }

        .alert-custom {
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .social-contact {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.2rem;
        }

        .social-link:hover {
            background: #0056b3;
            color: white;
            transform: translateY(-3px);
        }
    </style>
@endpush

@section('content')
    <!-- Contact Header -->
    <section class="contact-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1>Contactez-nous</h1>
                    <p class="lead">Notre équipe est là pour répondre à toutes vos questions et vous accompagner dans vos projets immobiliers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="contact-content pb-5">
        <div class="container">
            <div class="contact-card">
                <!-- Success/Error Messages -->
                @if(session('success'))
                    <div class="alert alert-success alert-custom">
                        <i class="fas fa-check-circle me-2"></i>
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-custom">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        {{ session('error') }}
                    </div>
                @endif

                <div class="row">
                    <!-- Contact Form -->
                    <div class="col-lg-8">
                        <h3 class="mb-4">Envoyez-nous un message</h3>

                        <form action="{{ route('contact.submit') }}" method="POST" id="contactForm">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nom complet *</label>
                                        <input type="text"
                                               id="name"
                                               name="name"
                                               class="form-control @error('name') is-invalid @enderror"
                                               value="{{ old('name') }}"
                                               required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="form-label">Adresse email *</label>
                                        <input type="email"
                                               id="email"
                                               name="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               value="{{ old('email') }}"
                                               required>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone" class="form-label">Téléphone</label>
                                        <input type="tel"
                                               id="phone"
                                               name="phone"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               value="{{ old('phone') }}">
                                        @error('phone')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject" class="form-label">Sujet</label>
                                        <select id="subject"
                                                name="subject"
                                                class="form-control @error('subject') is-invalid @enderror">
                                            <option value="">Sélectionner un sujet</option>
                                            <option value="Demande d'information" {{ old('subject') == 'Demande d\'information' ? 'selected' : '' }}>Demande d'information</option>
                                            <option value="Vendre une propriété" {{ old('subject') == 'Vendre une propriété' ? 'selected' : '' }}>Vendre une propriété</option>
                                            <option value="Louer une propriété" {{ old('subject') == 'Louer une propriété' ? 'selected' : '' }}>Louer une propriété</option>
                                            <option value="Évaluation de bien" {{ old('subject') == 'Évaluation de bien' ? 'selected' : '' }}>Évaluation de bien</option>
                                            <option value="Partenariat" {{ old('subject') == 'Partenariat' ? 'selected' : '' }}>Partenariat</option>
                                            <option value="Autre" {{ old('subject') == 'Autre' ? 'selected' : '' }}>Autre</option>
                                        </select>
                                        @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="message" class="form-label">Message *</label>
                                <textarea id="message"
                                          name="message"
                                          class="form-control @error('message') is-invalid @enderror"
                                          rows="6"
                                          placeholder="Décrivez votre projet ou votre demande en détail..."
                                          required>{{ old('message') }}</textarea>
                                @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="privacy" required>
                                    <label class="form-check-label" for="privacy">
                                        J'accepte que mes données soient utilisées pour me recontacter *
                                    </label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-send">
                                <i class="fas fa-paper-plane me-2"></i>
                                Envoyer le message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="col-lg-4">
                        <div class="contact-info-card">
                            <h4 class="mb-4">Nos Coordonnées</h4>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="contact-details">
                                    <h5>Adresse</h5>
                                    <p>Dakar, Sénégal<br>
                                        Plateau - Rue de la République</p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="contact-details">
                                    <h5>Téléphone</h5>
                                    <p><a href="tel:+221771234567">+221 77 123 45 67</a><br>
                                        <a href="tel:+221331234567">+221 33 123 45 67</a></p>
                                </div>
                            </div>

                            <div class="contact-item">
                                <div class="contact-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="contact-details">
                                    <h5>Email</h5>
                                    <p><a href="mailto:contact@senimmo.com">contact@senimmo.com</a><br>
                                        <a href="mailto:info@senimmo.com">info@senimmo.com</a></p>
                                </div>
                            </div>

                            <div class="office-hours">
                                <h5 class="mb-3">Horaires d'ouverture</h5>
                                <div class="hours-item">
                                    <span>Lundi - Vendredi</span>
                                    <span>08h00 - 18h00</span>
                                </div>
                                <div class="hours-item">
                                    <span>Samedi</span>
                                    <span>09h00 - 16h00</span>
                                </div>
                                <div class="hours-item">
                                    <span>Dimanche</span>
                                    <span>Fermé</span>
                                </div>
                            </div>

                            <div class="social-contact">
                                <a href="#" class="social-link">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section py-5 bg-light">
        <div class="container">
            <h3 class="text-center mb-5">Notre Localisation</h3>
            <div class="map-container">
                <!-- Google Maps Embed -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.4686994016457!2d-17.44789492507693!3d14.693137072976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d6b4255b4c1%3A0x4d3b4f9a4e9b8f8a!2sPlateau%2C%20Dakar%2C%20Senegal!5e0!3m2!1sen!2s!4v1623456789123!5m2!1sen!2s"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section bg-primary text-white py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h3>Besoin d'une réponse rapide ?</h3>
                    <p class="mb-0">Appelez-nous directement pour un conseil immédiat</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:+221771234567" class="btn btn-light btn-lg">
                        <i class="fas fa-phone me-2"></i>
                        +221 77 123 45 67
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form validation
            const form = document.getElementById('contactForm');
            const inputs = form.querySelectorAll('input, textarea, select');

            // Real-time validation
            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });
            });

            // Form submission
            form.addEventListener('submit', function(e) {
                let isValid = true;

                inputs.forEach(input => {
                    if (!validateField(input)) {
                        isValid = false;
                    }
                });

                if (!isValid) {
                    e.preventDefault();
                }
            });

            function validateField(field) {
                const value = field.value.trim();
                let isValid = true;

                // Remove existing feedback
                field.classList.remove('is-invalid');
                const feedback = field.parentNode.querySelector('.invalid-feedback');
                if (feedback) {
                    feedback.remove();
                }

                // Required fields
                if (field.hasAttribute('required') && !value) {
                    showError(field, 'Ce champ est obligatoire');
                    isValid = false;
                }

                // Email validation
                if (field.type === 'email' && value) {
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(value)) {
                        showError(field, 'Adresse email invalide');
                        isValid = false;
                    }
                }

                // Phone validation
                if (field.type === 'tel' && value) {
                    const phoneRegex = /^[+]?[\d\s\-()]+$/;
                    if (!phoneRegex.test(value)) {
                        showError(field, 'Numéro de téléphone invalide');
                        isValid = false;
                    }
                }

                // Message length
                if (field.name === 'message' && value && value.length < 10) {
                    showError(field, 'Le message doit contenir au moins 10 caractères');
                    isValid = false;
                }

                return isValid;
            }

            function showError(field, message) {
                field.classList.add('is-invalid');
                const feedback = document.createElement('div');
                feedback.className = 'invalid-feedback';
                feedback.textContent = message;
                field.parentNode.appendChild(feedback);
            }

            // Animation on scroll
            const observeElements = document.querySelectorAll('.contact-item, .contact-card');

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
