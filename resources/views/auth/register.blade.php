<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .register-card {
            max-width: 500px;
            margin: auto;
        }

        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
            overflow: hidden;
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 20px 20px 0 0;
            text-align: center;
            padding: 30px 20px;
        }

        .card-header h3 {
            margin-bottom: 10px;
            font-weight: 700;
        }

        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            color: white;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .form-select {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }

        .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .alert {
            border-radius: 10px;
            border: none;
        }

        .password-strength {
            height: 5px;
            border-radius: 3px;
            transition: all 0.3s ease;
            margin-top: 5px;
        }

        .strength-weak {
            background-color: #dc3545;
            width: 33%;
        }

        .strength-medium {
            background-color: #ffc107;
            width: 66%;
        }

        .strength-strong {
            background-color: #28a745;
            width: 100%;
        }

        .is-invalid {
            border-color: #dc3545 !important;
        }

        .is-valid {
            border-color: #28a745 !important;
        }

        .icon-input {
            position: relative;
        }

        .icon-input i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
        }

        .icon-input .form-control {
            padding-left: 45px;
        }

        @media (max-width: 576px) {
            .register-card {
                margin: 20px;
            }

            .card-header {
                padding: 20px 15px;
            }

            .card-body {
                padding: 20px !important;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="register-card">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-2">
                    <i class="fas fa-building"></i>
                    ImmobilierPro
                </h3>
                <p class="mb-0 opacity-75">Créez votre compte gratuitement</p>
            </div>

            <div class="card-body p-4">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h6 class="alert-heading mb-2">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Erreurs de validation
                        </h6>
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}" id="registerForm" novalidate>
                    @csrf

                    <!-- Nom et Email -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="name" class="form-label">
                                <i class="fas fa-user me-1"></i>
                                Nom complet *
                            </label>
                            <input type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   id="name"
                                   name="name"
                                   value="{{ old('name') }}"
                                   required
                                   minlength="2"
                                   maxlength="255">
                            <div class="invalid-feedback">
                                Veuillez saisir votre nom complet (2-255 caractères)
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope me-1"></i>
                                Adresse email *
                            </label>
                            <input type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   id="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required>
                            <div class="invalid-feedback">
                                Veuillez saisir une adresse email valide
                            </div>
                        </div>
                    </div>

                    <!-- Mots de passe -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock me-1"></i>
                                Mot de passe *
                            </label>
                            <div class="position-relative">
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       id="password"
                                       name="password"
                                       required
                                       minlength="6">
                                <button type="button" class="btn btn-link position-absolute end-0 top-50 translate-middle-y" id="togglePassword">
                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                            <div class="password-strength mt-2" id="strengthBar"></div>
                            <small class="text-muted">Minimum 6 caractères</small>
                            <div class="invalid-feedback">
                                Le mot de passe doit contenir au moins 6 caractères
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="password_confirmation" class="form-label">
                                <i class="fas fa-lock me-1"></i>
                                Confirmer le mot de passe *
                            </label>
                            <input type="password"
                                   class="form-control @error('password_confirmation') is-invalid @enderror"
                                   id="password_confirmation"
                                   name="password_confirmation"
                                   required
                                   minlength="6">
                            <div class="invalid-feedback" id="passwordMatchError">
                                Les mots de passe ne correspondent pas
                            </div>
                        </div>
                    </div>

                    <!-- Téléphone et Type de compte -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label">
                                <i class="fas fa-phone me-1"></i>
                                Téléphone
                            </label>
                            <input type="tel"
                                   class="form-control @error('phone') is-invalid @enderror"
                                   id="phone"
                                   name="phone"
                                   value="{{ old('phone') }}"
                                   placeholder="+33 1 23 45 67 89"
                                   pattern="[+]?[0-9\s\-\(\)]+">
                            <div class="invalid-feedback">
                                Format de téléphone invalide
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="role" class="form-label">
                                <i class="fas fa-user-tag me-1"></i>
                                Type de compte *
                            </label>
                            <select class="form-select @error('role') is-invalid @enderror"
                                    id="role"
                                    name="role"
                                    required>
                                <option value="">Choisir un type</option>
                                <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>
                                    <i class="fas fa-handshake"></i> Client (Recherche de biens)
                                </option>
                                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>
                                    <i class="fas fa-user"></i> Utilisateur (Consultation)
                                </option>
                            </select>
                            <div class="invalid-feedback">
                                Veuillez sélectionner un type de compte
                            </div>
                        </div>
                    </div>

                    <!-- Adresse -->
                    <div class="mb-3">
                        <label for="address" class="form-label">
                            <i class="fas fa-map-marker-alt me-1"></i>
                            Adresse
                        </label>
                        <textarea class="form-control @error('address') is-invalid @enderror"
                                  id="address"
                                  name="address"
                                  rows="2"
                                  placeholder="Votre adresse complète (optionnel)"
                                  maxlength="500">{{ old('address') }}</textarea>
                        <div class="invalid-feedback">
                            L'adresse ne peut pas dépasser 500 caractères
                        </div>
                    </div>

                    <!-- Conditions d'utilisation -->
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input"
                                   type="checkbox"
                                   id="terms"
                                   name="terms"
                                   required>
                            <label class="form-check-label" for="terms">
                                J'accepte les
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#termsModal">
                                    conditions d'utilisation
                                </a>
                                et la
                                <a href="#" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#privacyModal">
                                    politique de confidentialité
                                </a> *
                            </label>
                            <div class="invalid-feedback">
                                Vous devez accepter les conditions d'utilisation
                            </div>
                        </div>
                    </div>

                    <!-- Bouton d'inscription -->
                    <button type="submit" class="btn btn-primary w-100 mb-3" id="submitBtn">
                        <i class="fas fa-user-plus me-2"></i>
                        Créer mon compte
                    </button>
                </form>

                <!-- Liens de navigation -->
                <div class="text-center">
                    <p class="mb-2">
                        Vous avez déjà un compte ?
                        <a href="{{ route('login') }}" class="text-decoration-none fw-bold">
                            Se connecter
                        </a>
                    </p>
                    <p class="mt-3">
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            <i class="fas fa-arrow-left me-1"></i>
                            Retour au site
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Conditions d'utilisation -->
<div class="modal fade" id="termsModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Conditions d'utilisation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h6>1. Acceptation des conditions</h6>
                <p>En utilisant ImmobilierPro, vous acceptez ces conditions d'utilisation.</p>

                <h6>2. Utilisation du service</h6>
                <p>Vous vous engagez à utiliser notre plateforme de manière légale et respectueuse.</p>

                <h6>3. Responsabilités</h6>
                <p>Vous êtes responsable de la confidentialité de votre compte et mot de passe.</p>

                <h6>4. Propriété intellectuelle</h6>
                <p>Tout le contenu du site reste la propriété d'ImmobilierPro.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Politique de confidentialité -->
<div class="modal fade" id="privacyModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Politique de confidentialité</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <h6>1. Collecte des données</h6>
                <p>Nous collectons uniquement les données nécessaires à votre inscription.</p>

                <h6>2. Utilisation des données</h6>
                <p>Vos données sont utilisées pour améliorer votre expérience sur la plateforme.</p>

                <h6>3. Protection des données</h6>
                <p>Nous mettons en place des mesures de sécurité pour protéger vos informations.</p>

                <h6>4. Partage des données</h6>
                <p>Nous ne partageons jamais vos données avec des tiers sans votre consentement.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('registerForm');
        const passwordInput = document.getElementById('password');
        const passwordConfirmInput = document.getElementById('password_confirmation');
        const strengthBar = document.getElementById('strengthBar');
        const togglePassword = document.getElementById('togglePassword');
        const eyeIcon = document.getElementById('eyeIcon');
        const submitBtn = document.getElementById('submitBtn');

        // Toggle password visibility
        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            if (type === 'password') {
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        });

        // Password strength indicator
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;

            // Criteria for password strength
            if (password.length >= 6) strength++;
            if (password.match(/[a-z]/)) strength++;
            if (password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;

            // Update strength bar
            strengthBar.className = 'password-strength ';
            if (strength < 3) {
                strengthBar.classList.add('strength-weak');
            } else if (strength < 4) {
                strengthBar.classList.add('strength-medium');
            } else {
                strengthBar.classList.add('strength-strong');
            }
        });

        // Password confirmation validation
        function validatePasswordMatch() {
            if (passwordConfirmInput.value !== passwordInput.value) {
                passwordConfirmInput.classList.add('is-invalid');
                return false;
            } else {
                passwordConfirmInput.classList.remove('is-invalid');
                passwordConfirmInput.classList.add('is-valid');
                return true;
            }
        }

        passwordConfirmInput.addEventListener('input', validatePasswordMatch);
        passwordInput.addEventListener('input', function() {
            if (passwordConfirmInput.value) {
                validatePasswordMatch();
            }
        });

        // Email validation
        document.getElementById('email').addEventListener('input', function() {
            const email = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (email && !emailRegex.test(email)) {
                this.classList.add('is-invalid');
            } else if (email) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });

        // Phone validation
        document.getElementById('phone').addEventListener('input', function() {
            const phone = this.value;
            const phoneRegex = /^[+]?[0-9\s\-\(\)]+$/;

            if (phone && !phoneRegex.test(phone)) {
                this.classList.add('is-invalid');
            } else if (phone) {
                this.classList.remove('is-invalid');
                this.classList.add('is-valid');
            }
        });

        // Form submission validation
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            let isValid = true;
            const requiredFields = ['name', 'email', 'password', 'password_confirmation', 'role'];

            // Check required fields
            requiredFields.forEach(function(fieldName) {
                const field = document.querySelector(`[name="${fieldName}"]`);
                if (!field.value.trim()) {
                    field.classList.add('is-invalid');
                    isValid = false;
                } else {
                    field.classList.remove('is-invalid');
                }
            });

            // Check password match
            if (!validatePasswordMatch()) {
                isValid = false;
            }

            // Check password length
            if (passwordInput.value.length < 6) {
                passwordInput.classList.add('is-invalid');
                isValid = false;
            }

            // Check terms acceptance
            const termsCheckbox = document.getElementById('terms');
            if (!termsCheckbox.checked) {
                termsCheckbox.classList.add('is-invalid');
                isValid = false;
            } else {
                termsCheckbox.classList.remove('is-invalid');
            }

            if (isValid) {
                // Show loading state
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Création en cours...';
                submitBtn.disabled = true;

                // Submit the form
                this.submit();
            } else {
                // Scroll to first error
                const firstError = document.querySelector('.is-invalid');
                if (firstError) {
                    firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    firstError.focus();
                }
            }
        });

        // Auto-hide alerts after 10 seconds
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 10000);

        // Remove validation classes on input
        const inputs = form.querySelectorAll('input, select, textarea');
        inputs.forEach(function(input) {
            input.addEventListener('input', function() {
                if (this.classList.contains('is-invalid') && this.value.trim()) {
                    this.classList.remove('is-invalid');
                }
            });
        });
    });
</script>
</body>
</html>
