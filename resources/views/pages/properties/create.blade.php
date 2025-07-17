{{-- resources/views/properties/create.blade.php --}}
@extends('layouts.dashboard')

@section('title', 'Ajouter une propriété')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <i class="fas fa-plus"></i> Ajouter une nouvelle propriété
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('properties.store') }}" enctype="multipart/form-data" data-validate>
                        @csrf

                        <!-- Informations principales -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="title" class="form-label">Titre *</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                       id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="description" class="form-label">Description *</label>
                                <textarea class="form-control @error('description') is-invalid @enderror"
                                          id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Type et catégorie -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="type" class="form-label">Type *</label>
                                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type" required>
                                    <option value="">Sélectionner un type</option>
                                    <option value="vente" {{ old('type') === 'vente' ? 'selected' : '' }}>Vente</option>
                                    <option value="location" {{ old('type') === 'location' ? 'selected' : '' }}>Location</option>
                                </select>
                                @error('type')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="category" class="form-label">Catégorie *</label>
                                <select class="form-select @error('category') is-invalid @enderror" id="category" name="category" required>
                                    <option value="">Sélectionner une catégorie</option>
                                    <option value="maison" {{ old('category') === 'maison' ? 'selected' : '' }}>Maison</option>
                                    <option value="appartement" {{ old('category') === 'appartement' ? 'selected' : '' }}>Appartement</option>
                                    <option value="terrain" {{ old('category') === 'terrain' ? 'selected' : '' }}>Terrain</option>
                                    <option value="commercial" {{ old('category') === 'commercial' ? 'selected' : '' }}>Commercial</option>
                                </select>
                                @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Prix et localisation -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="price" class="form-label">Prix (FCFA) *</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror"
                                       id="price" name="price" value="{{ old('price') }}" min="0" required>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="location" class="form-label">Localisation *</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror"
                                       id="location" name="location" value="{{ old('location') }}"
                                       placeholder="Ex: Almadies, Dakar" required>
                                @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Caractéristiques -->
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label for="area" class="form-label">Superficie (m²)</label>
                                <input type="number" class="form-control @error('area') is-invalid @enderror"
                                       id="area" name="area" value="{{ old('area') }}" min="1">
                                @error('area')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="bedrooms" class="form-label">Chambres</label>
                                <input type="number" class="form-control @error('bedrooms') is-invalid @enderror"
                                       id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}" min="0">
                                @error('bedrooms')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="bathrooms" class="form-label">Salles de bain</label>
                                <input type="number" class="form-control @error('bathrooms') is-invalid @enderror"
                                       id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}" min="0">
                                @error('bathrooms')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Image principale -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="main_image" class="form-label">Image principale *</label>
                                <input type="file" class="form-control @error('main_image') is-invalid @enderror"
                                       id="main_image" name="main_image" accept="image/*" required>
                                @error('main_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Formats acceptés: JPG, PNG, GIF (max 2MB)</div>
                            </div>
                        </div>

                        <!-- Galerie -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label for="gallery" class="form-label">Galerie d'images</label>
                                <input type="file" class="form-control @error('gallery') is-invalid @enderror"
                                       id="gallery" name="gallery[]" accept="image/*" multiple>
                                @error('gallery')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">Vous pouvez sélectionner plusieurs images (max 5MB chacune)</div>
                            </div>
                        </div>

                        <!-- Caractéristiques supplémentaires -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Caractéristiques</label>
                                <div class="row">
                                    @php
                                        $features = [
                                            'piscine' => 'Piscine',
                                            'garage' => 'Garage',
                                            'jardin' => 'Jardin',
                                            'terrasse' => 'Terrasse',
                                            'balcon' => 'Balcon',
                                            'climatisation' => 'Climatisation',
                                            'chauffage' => 'Chauffage',
                                            'ascenseur' => 'Ascenseur',
                                            'parking' => 'Parking',
                                            'securite' => 'Sécurité',
                                            'internet' => 'Internet',
                                            'meuble' => 'Meublé'
                                        ];
                                    @endphp
                                    @foreach($features as $key => $label)
                                        <div class="col-md-3 col-sm-6 mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox"
                                                       name="features[]" value="{{ $key }}"
                                                       id="feature_{{ $key }}"
                                                    {{ in_array($key, old('features', [])) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="feature_{{ $key }}">
                                                    {{ $label }}
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- Options spéciales -->
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Options spéciales</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="is_featured" value="1" id="is_featured"
                                                {{ old('is_featured') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_featured">
                                                <i class="fas fa-star text-warning"></i> Propriété vedette
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="is_premium" value="1" id="is_premium"
                                                {{ old('is_premium') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_premium">
                                                <i class="fas fa-crown text-dark"></i> Propriété premium
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"
                                                   name="is_popular" value="1" id="is_popular"
                                                {{ old('is_popular') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_popular">
                                                <i class="fas fa-thumbs-up text-info"></i> Propriété populaire
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Statut -->
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="status" class="form-label">Statut</label>
                                <select class="form-select @error('status') is-invalid @enderror" id="status" name="status">
                                    <option value="available" {{ old('status', 'available') === 'available' ? 'selected' : '' }}>Disponible</option>
                                    <option value="pending" {{ old('status') === 'pending' ? 'selected' : '' }}>En attente</option>
                                </select>
                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <!-- Boutons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('properties.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left"></i> Retour
                            </a>
                            <div>
                                <button type="reset" class="btn btn-outline-secondary me-2">
                                    <i class="fas fa-undo"></i> Réinitialiser
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Preview des images
            document.getElementById('main_image').addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        let preview = document.getElementById('main_image_preview');
                        if (!preview) {
                            preview = document.createElement('img');
                            preview.id = 'main_image_preview';
                            preview.className = 'img-thumbnail mt-2';
                            preview.style.maxWidth = '200px';
                            e.target.parentNode.appendChild(preview);
                        }
                        preview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Validation du formulaire
            const form = document.querySelector('form[data-validate]');
            form.addEventListener('submit', function(e) {
                let isValid = true;

                // Validation du titre
                const title = document.getElementById('title');
                if (title.value.trim().length < 5) {
                    showError(title, 'Le titre doit contenir au moins 5 caractères.');
                    isValid = false;
                }

                // Validation du prix
                const price = document.getElementById('price');
                if (parseFloat(price.value) <= 0) {
                    showError(price, 'Le prix doit être supérieur à 0.');
                    isValid = false;
                }

                if (!isValid) {
                    e.preventDefault();
                }
            });

            function showError(field, message) {
                field.classList.add('is-invalid');
                let feedback = field.parentNode.querySelector('.invalid-feedback');
                if (!feedback) {
                    feedback = document.createElement('div');
                    feedback.className = 'invalid-feedback';
                    field.parentNode.appendChild(feedback);
                }
                feedback.textContent = message;
            }
        });
    </script>
@endsection
