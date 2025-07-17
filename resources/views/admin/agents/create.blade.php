{{-- resources/views/admin/agents/create.blade.php --}}
@extends('layouts.admin')

@section('title', 'Créer un Agent')

@push('styles')
    <style>
        .form-section {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .section-title {
            color: #333;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
            margin-bottom: 25px;
        }

        .photo-upload {
            border: 2px dashed #ddd;
            border-radius: 10px;
            padding: 40px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .photo-upload:hover {
            border-color: #007bff;
            background: #f8f9ff;
        }

        .photo-preview {
            max-width: 200px;
            max-height: 200px;
            border-radius: 10px;
            margin: 20px auto;
            display: block;
        }

        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            margin: 15px 0;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            padding: 10px;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .checkbox-item:hover {
            background: #f8f9fa;
            border-color: #007bff;
        }

        .checkbox-item input[type="checkbox"] {
            margin-right: 10px;
        }

        .dynamic-list {
            border: 1px solid #e9ecef;
            border-radius: 5px;
            padding: 15px;
            margin: 15px 0;
        }

        .list-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .list-item input {
            flex: 1;
            margin-right: 10px;
        }

        .btn-remove {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-add {
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 8px 15px;
            cursor: pointer;
        }
    </style>
@endpush

@section('page-title', 'Créer un Agent')

@section('admin-content')
    <div class="container-fluid">
        <form action="{{ route('admin.agents.store') }}" method="POST" enctype="multipart/form-data" id="agentForm">
            @csrf

            <!-- Informations de base -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-user me-2"></i>
                    Informations Personnelles
                </h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nom complet *</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   id="email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                                   id="phone" name="phone" value="{{ old('phone') }}"
                                   placeholder="+221 77 123 45 67">
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre/Poste</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                   id="title" name="title" value="{{ old('title') }}"
                                   placeholder="Agent Immobilier Senior">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="birth_date" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control @error('birth_date') is-invalid @enderror"
                                   id="birth_date" name="birth_date" value="{{ old('birth_date') }}">
                            @error('birth_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="hire_date" class="form-label">Date d'embauche</label>
                            <input type="date" class="form-control @error('hire_date') is-invalid @enderror"
                                   id="hire_date" name="hire_date" value="{{ old('hire_date') }}">
                            @error('hire_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Adresse</label>
                    <textarea class="form-control @error('address') is-invalid @enderror"
                              id="address" name="address" rows="2">{{ old('address') }}</textarea>
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Photo de profil -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-camera me-2"></i>
                    Photo de Profil
                </h3>

                <div class="photo-upload" onclick="document.getElementById('photo').click()">
                    <div id="photo-placeholder">
                        <i class="fas fa-cloud-upload-alt fa-3x text-muted mb-3"></i>
                        <p class="text-muted">Cliquez pour sélectionner une photo</p>
                        <small class="text-muted">JPG, PNG, GIF - Max 2Mo</small>
                    </div>
                    <img id="photo-preview" class="photo-preview" style="display: none;">
                </div>

                <input type="file" id="photo" name="photo" accept="image/*" style="display: none;"
                       class="@error('photo') is-invalid @enderror">
                @error('photo')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
            </div>

            <!-- Description et Bio -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-edit me-2"></i>
                    Description et Biographie
                </h3>

                <div class="mb-3">
                    <label for="description" class="form-label">Description courte</label>
                    <textarea class="form-control @error('description') is-invalid @enderror"
                              id="description" name="description" rows="3"
                              placeholder="Une description concise de l'agent...">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Maximum 1000 caractères</small>
                </div>

                <div class="mb-3">
                    <label for="bio" class="form-label">Biographie détaillée</label>
                    <textarea class="form-control @error('bio') is-invalid @enderror"
                              id="bio" name="bio" rows="6"
                              placeholder="Biographie complète, expérience, formation...">{{ old('bio') }}</textarea>
                    @error('bio')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Maximum 2000 caractères</small>
                </div>
            </div>

            <!-- Informations professionnelles -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-briefcase me-2"></i>
                    Informations Professionnelles
                </h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="license_number" class="form-label">Numéro de licence</label>
                            <input type="text" class="form-control @error('license_number') is-invalid @enderror"
                                   id="license_number" name="license_number" value="{{ old('license_number') }}">
                            @error('license_number')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="commission_rate" class="form-label">Taux de commission (%)</label>
                            <input type="number" class="form-control @error('commission_rate') is-invalid @enderror"
                                   id="commission_rate" name="commission_rate" value="{{ old('commission_rate') }}"
                                   min="0" max="100" step="0.01">
                            @error('commission_rate')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="experience_years" class="form-label">Années d'expérience</label>
                            <input type="number" class="form-control @error('experience_years') is-invalid @enderror"
                                   id="experience_years" name="experience_years" value="{{ old('experience_years') }}"
                                   min="0" max="50">
                            @error('experience_years')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="emergency_contact" class="form-label">Contact d'urgence</label>
                            <input type="text" class="form-control @error('emergency_contact') is-invalid @enderror"
                                   id="emergency_contact" name="emergency_contact" value="{{ old('emergency_contact') }}">
                            @error('emergency_contact')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- Spécialités -->
                <div class="mb-4">
                    <label class="form-label">Spécialités</label>
                    <div class="checkbox-group">
                        @foreach($specialties as $key => $label)
                            <div class="checkbox-item">
                                <input type="checkbox" id="specialty_{{ $key }}" name="specialties[]"
                                       value="{{ $key }}" {{ in_array($key, old('specialties', [])) ? 'checked' : '' }}>
                                <label for="specialty_{{ $key }}">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Langues -->
                <div class="mb-3">
                    <label class="form-label">Langues parlées</label>
                    <div class="checkbox-group">
                        @foreach($languages as $key => $label)
                            <div class="checkbox-item">
                                <input type="checkbox" id="language_{{ $key }}" name="languages[]"
                                       value="{{ $key }}" {{ in_array($key, old('languages', ['fr'])) ? 'checked' : '' }}>
                                <label for="language_{{ $key }}">{{ $label }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Réseaux sociaux -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-share-alt me-2"></i>
                    Réseaux Sociaux et Site Web
                </h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                <input type="url" class="form-control @error('facebook') is-invalid @enderror"
                                       id="facebook" name="facebook" value="{{ old('facebook') }}"
                                       placeholder="https://facebook.com/...">
                            </div>
                            @error('facebook')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                <input type="url" class="form-control @error('twitter') is-invalid @enderror"
                                       id="twitter" name="twitter" value="{{ old('twitter') }}"
                                       placeholder="https://twitter.com/...">
                            </div>
                            @error('twitter')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="linkedin" class="form-label">LinkedIn</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                <input type="url" class="form-control @error('linkedin') is-invalid @enderror"
                                       id="linkedin" name="linkedin" value="{{ old('linkedin') }}"
                                       placeholder="https://linkedin.com/in/...">
                            </div>
                            @error('linkedin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                <input type="url" class="form-control @error('instagram') is-invalid @enderror"
                                       id="instagram" name="instagram" value="{{ old('instagram') }}"
                                       placeholder="https://instagram.com/...">
                            </div>
                            @error('instagram')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Site web personnel</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-globe"></i></span>
                        <input type="url" class="form-control @error('website') is-invalid @enderror"
                               id="website" name="website" value="{{ old('website') }}"
                               placeholder="https://monsite.com">
                    </div>
                    @error('website')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Accomplissements et Certifications -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-trophy me-2"></i>
                    Accomplissements et Certifications
                </h3>

                <!-- Accomplissements -->
                <div class="mb-4">
                    <label class="form-label">Accomplissements</label>
                    <div id="achievements-container" class="dynamic-list">
                        <div class="achievement-item list-item">
                            <input type="text" name="achievements[]" class="form-control"
                                   placeholder="Décrivez un accomplissement..." value="{{ old('achievements.0') }}">
                            <button type="button" class="btn-remove" onclick="removeItem(this)">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <button type="button" class="btn-add" onclick="addAchievement()">
                        <i class="fas fa-plus me-1"></i> Ajouter un accomplissement
                    </button>
                </div>

                <!-- Certifications -->
                <div class="mb-3">
                    <label class="form-label">Certifications</label>
                    <div id="certifications-container" class="dynamic-list">
                        <div class="certification-item list-item">
                            <input type="text" name="certifications[]" class="form-control"
                                   placeholder="Nom de la certification..." value="{{ old('certifications.0') }}">
                            <button type="button" class="btn-remove" onclick="removeItem(this)">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <button type="button" class="btn-add" onclick="addCertification()">
                        <i class="fas fa-plus me-1"></i> Ajouter une certification
                    </button>
                </div>
            </div>

            <!-- Statuts -->
            <div class="form-section">
                <h3 class="section-title">
                    <i class="fas fa-toggle-on me-2"></i>
                    Statuts
                </h3>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                   value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Agent actif
                            </label>
                            <small class="form-text text-muted d-block">L'agent peut recevoir de nouvelles propriétés</small>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-check form-switch mb-3">
                            <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured"
                                   value="1" {{ old('is_featured') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_featured">
                                Agent en vedette
                            </label>
                            <small class="form-text text-muted d-block">Affiché en priorité sur le site</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Boutons d'action -->
            <div class="form-section">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.agents.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Retour
                    </a>

                    <div>
                        <button type="button" class="btn btn-outline-primary me-2" onclick="saveDraft()">
                            <i class="fas fa-save me-1"></i> Sauvegarder brouillon
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-check me-1"></i> Créer l'agent
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Prévisualisation de la photo
            document.getElementById('photo').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('photo-placeholder').style.display = 'none';
                        const preview = document.getElementById('photo-preview');
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Validation en temps réel
            const form = document.getElementById('agentForm');
            const inputs = form.querySelectorAll('input, textarea, select');

            inputs.forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this);
                });
            });

            // Validation de l'email en temps réel
            document.getElementById('email').addEventListener('input', function() {
                const email = this.value;
                if (email) {
                    // Vérification basique de format
                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailRegex.test(email)) {
                        this.classList.add('is-invalid');
                        showFieldError(this, 'Format d\'email invalide');
                    } else {
                        this.classList.remove('is-invalid');
                        hideFieldError(this);
                    }
                }
            });

            // Formatage automatique du téléphone
            document.getElementById('phone').addEventListener('input', function() {
                let value = this.value.replace(/\D/g, '');
                if (value.startsWith('221')) {
                    value = '+' + value;
                }
                this.value = value;
            });
        });

        function validateField(field) {
            const value = field.value.trim();

            // Validation des champs requis
            if (field.hasAttribute('required') && !value) {
                field.classList.add('is-invalid');
                showFieldError(field, 'Ce champ est obligatoire');
                return false;
            }

            // Validation spécifique par type
            if (field.type === 'email' && value) {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    field.classList.add('is-invalid');
                    showFieldError(field, 'Format d\'email invalide');
                    return false;
                }
            }

            if (field.type === 'url' && value) {
                try {
                    new URL(value);
                } catch (e) {
                    field.classList.add('is-invalid');
                    showFieldError(field, 'URL invalide');
                    return false;
                }
            }

            // Si tout est OK
            field.classList.remove('is-invalid');
            hideFieldError(field);
            return true;
        }

        function showFieldError(field, message) {
            hideFieldError(field); // Enlever l'erreur existante

            const errorDiv = document.createElement('div');
            errorDiv.className = 'invalid-feedback';
            errorDiv.textContent = message;

            field.parentNode.appendChild(errorDiv);
        }

        function hideFieldError(field) {
            const existingError = field.parentNode.querySelector('.invalid-feedback');
            if (existingError) {
                existingError.remove();
            }
        }

        function addAchievement() {
            const container = document.getElementById('achievements-container');
            const newItem = document.createElement('div');
            newItem.className = 'achievement-item list-item';
            newItem.innerHTML = `
        <input type="text" name="achievements[]" class="form-control"
               placeholder="Décrivez un accomplissement...">
        <button type="button" class="btn-remove" onclick="removeItem(this)">
            <i class="fas fa-trash"></i>
        </button>
    `;
            container.appendChild(newItem);
        }

        function addCertification() {
            const container = document.getElementById('certifications-container');
            const newItem = document.createElement('div');
            newItem.className = 'certification-item list-item';
            newItem.innerHTML = `
        <input type="text" name="certifications[]" class="form-control"
               placeholder="Nom de la certification...">
        <button type="button" class="btn-remove" onclick="removeItem(this)">
            <i class="fas fa-trash"></i>
        </button>
    `;
            container.appendChild(newItem);
        }

        function removeItem(button) {
            const item = button.closest('.list-item');
            const container = item.parentNode;

            // Garder au moins un champ
            if (container.children.length > 1) {
                item.remove();
            } else {
                // Vider le champ au lieu de le supprimer
                const input = item.querySelector('input');
                input.value = '';
            }
        }

        function saveDraft() {
            // Sauvegarder les données du formulaire en localStorage
            const formData = new FormData(document.getElementById('agentForm'));
            const data = {};

            for (let [key, value] of formData.entries()) {
                if (data[key]) {
                    if (Array.isArray(data[key])) {
                        data[key].push(value);
                    } else {
                        data[key] = [data[key], value];
                    }
                } else {
                    data[key] = value;
                }
            }

            localStorage.setItem('agent_draft', JSON.stringify(data));

            // Afficher un message de confirmation
            const toast = document.createElement('div');
            toast.className = 'toast show position-fixed top-0 end-0 m-3';
            toast.innerHTML = `
        <div class="toast-header">
            <i class="fas fa-save text-success me-2"></i>
            <strong class="me-auto">Brouillon sauvegardé</strong>
            <button type="button" class="btn-close" onclick="this.closest('.toast').remove()"></button>
        </div>
        <div class="toast-body">
            Les données du formulaire ont été sauvegardées localement.
        </div>
    `;

            document.body.appendChild(toast);

            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // Charger le brouillon au chargement de la page
        window.addEventListener('load', function() {
            const draft = localStorage.getItem('agent_draft');
            if (draft && confirm('Un brouillon a été trouvé. Voulez-vous le charger ?')) {
                const data = JSON.parse(draft);

                for (let [key, value] of Object.entries(data)) {
                    const field = document.querySelector(`[name="${key}"]`);
                    if (field) {
                        if (field.type === 'checkbox') {
                            field.checked = value === '1' || value === true;
                        } else {
                            field.value = value;
                        }
                    }
                }

                // Supprimer le brouillon après chargement
                localStorage.removeItem('agent_draft');
            }
        });
    </script>
@endpush
