{{-- resources/views/admin/agents/index.blade.php --}}
@extends('layouts.admin')

@section('title', 'Gestion des Agents')

@push('styles')
    <style>
        .agent-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .agent-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .agent-photo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .stats-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .stats-card.success {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .stats-card.warning {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }

        .stats-card.info {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            color: #333;
        }

        .filter-bar {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .status-active {
            background: #d4edda;
            color: #155724;
        }

        .status-inactive {
            background: #f8d7da;
            color: #721c24;
        }

        .status-featured {
            background: #fff3cd;
            color: #856404;
        }

        .agent-actions {
            display: flex;
            gap: 5px;
        }

        .btn-icon {
            width: 35px;
            height: 35px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
        }

        .table-responsive {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .table th {
            background: #f8f9fa;
            border: none;
            font-weight: 600;
            color: #333;
        }

        .table td {
            border-color: #e9ecef;
            vertical-align: middle;
        }

        @media (max-width: 768px) {
            .agent-card {
                margin-bottom: 15px;
            }

            .stats-card {
                margin-bottom: 15px;
            }

            .filter-bar {
                padding: 15px;
            }
        }
    </style>
@endpush

@section('page-title', 'Gestion des Agents')

@section('page-actions')
    <div class="d-flex gap-2">
        <a href="{{ route('admin.agents.export') }}" class="btn btn-outline-primary">
            <i class="fas fa-download me-1"></i> Exporter
        </a>
        <a href="{{ route('admin.agents.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Nouvel Agent
        </a>
    </div>
@endsection

@section('admin-content')
    <div class="container-fluid">

        <!-- Statistiques -->
        <div class="row mb-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-card">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $stats['total'] }}</h3>
                            <p class="mb-0">Total Agents</p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-users fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-card success">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $stats['active'] }}</h3>
                            <p class="mb-0">Agents Actifs</p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-user-check fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-card warning">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $stats['featured'] }}</h3>
                            <p class="mb-0">En Vedette</p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-star fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="stats-card info">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{ $stats['new_this_month'] }}</h3>
                            <p class="mb-0">Nouveaux ce mois</p>
                        </div>
                        <div class="stats-icon">
                            <i class="fas fa-user-plus fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barre de filtres -->
        <div class="filter-bar">
            <form method="GET" action="{{ route('admin.agents.index') }}" id="filterForm">
                <div class="row align-items-end">
                    <div class="col-md-3">
                        <label for="search" class="form-label">Recherche</label>
                        <input type="text"
                               class="form-control"
                               id="search"
                               name="search"
                               value="{{ request('search') }}"
                               placeholder="Nom, email, téléphone...">
                    </div>

                    <div class="col-md-2">
                        <label for="status" class="form-label">Statut</label>
                        <select name="status" id="status" class="form-select">
                            <option value="">Tous</option>
                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Actifs</option>
                            <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactifs</option>
                            <option value="featured" {{ request('status') == 'featured' ? 'selected' : '' }}>En vedette</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="specialty" class="form-label">Spécialité</label>
                        <select name="specialty" id="specialty" class="form-select">
                            <option value="">Toutes</option>
                            <option value="residential" {{ request('specialty') == 'residential' ? 'selected' : '' }}>Résidentiel</option>
                            <option value="commercial" {{ request('specialty') == 'commercial' ? 'selected' : '' }}>Commercial</option>
                            <option value="luxury" {{ request('specialty') == 'luxury' ? 'selected' : '' }}>Luxe</option>
                            <option value="investment" {{ request('specialty') == 'investment' ? 'selected' : '' }}>Investissement</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <label for="sort" class="form-label">Trier par</label>
                        <select name="sort" id="sort" class="form-select">
                            <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Nom</option>
                            <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>Date création</option>
                            <option value="hire_date" {{ request('sort') == 'hire_date' ? 'selected' : '' }}>Date embauche</option>
                        </select>
                    </div>

                    <div class="col-md-1">
                        <select name="order" class="form-select">
                            <option value="asc" {{ request('order') == 'asc' ? 'selected' : '' }}>↑</option>
                            <option value="desc" {{ request('order') == 'desc' ? 'selected' : '' }}>↓</option>
                        </select>
                    </div>

                    <div class="col-md-2">
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                            <a href="{{ route('admin.agents.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-undo"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- Liste des agents -->
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                <tr>
                    <th width="5%">
                        <input type="checkbox" id="selectAll" class="form-check-input">
                    </th>
                    <th width="15%">Agent</th>
                    <th width="20%">Contact</th>
                    <th width="15%">Statuts</th>
                    <th width="15%">Statistiques</th>
                    <th width="10%">Embauche</th>
                    <th width="20%">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($agents as $agent)
                    <tr>
                        <td>
                            <input type="checkbox" class="form-check-input agent-checkbox" value="{{ $agent->id }}">
                        </td>

                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ $agent->photo_url }}"
                                     alt="{{ $agent->name }}"
                                     class="agent-photo me-3">
                                <div>
                                    <h6 class="mb-1">{{ $agent->name }}</h6>
                                    <small class="text-muted">{{ $agent->title ?? 'Agent' }}</small>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div>
                                <div class="mb-1">
                                    <i class="fas fa-envelope text-muted me-1"></i>
                                    {{ $agent->email }}
                                </div>
                                @if($agent->phone)
                                    <div>
                                        <i class="fas fa-phone text-muted me-1"></i>
                                        {{ $agent->phone }}
                                    </div>
                                @endif
                            </div>
                        </td>

                        <td>
                            <div class="d-flex flex-column gap-1">
                                <span class="status-badge {{ $agent->is_active ? 'status-active' : 'status-inactive' }}">
                                    {{ $agent->is_active ? 'Actif' : 'Inactif' }}
                                </span>
                                @if($agent->is_featured)
                                    <span class="status-badge status-featured">
                                        <i class="fas fa-star me-1"></i>Vedette
                                    </span>
                                @endif
                            </div>
                        </td>

                        <td>
                            <div class="small">
                                <div><strong>{{ $agent->properties_count ?? 0 }}</strong> propriétés</div>
                                <div><strong>{{ $agent->sold_properties_count ?? 0 }}</strong> vendues</div>
                                <div><strong>{{ $agent->available_properties_count ?? 0 }}</strong> disponibles</div>
                            </div>
                        </td>

                        <td>
                            @if($agent->hire_date)
                                <div class="small">
                                    {{ $agent->hire_date->format('d/m/Y') }}
                                    <div class="text-muted">
                                        {{ $agent->hire_date->diffForHumans() }}
                                    </div>
                                </div>
                            @else
                                <span class="text-muted">-</span>
                            @endif
                        </td>

                        <td>
                            <div class="agent-actions">
                                <a href="{{ route('admin.agents.show', $agent) }}"
                                   class="btn btn-outline-primary btn-icon"
                                   title="Voir">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <a href="{{ route('admin.agents.edit', $agent) }}"
                                   class="btn btn-outline-warning btn-icon"
                                   title="Modifier">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button type="button"
                                        class="btn btn-outline-{{ $agent->is_featured ? 'warning' : 'info' }} btn-icon"
                                        onclick="toggleFeatured({{ $agent->id }})"
                                        title="{{ $agent->is_featured ? 'Retirer vedette' : 'Mettre en vedette' }}">
                                    <i class="fas fa-star"></i>
                                </button>

                                <button type="button"
                                        class="btn btn-outline-{{ $agent->is_active ? 'secondary' : 'success' }} btn-icon"
                                        onclick="toggleActive({{ $agent->id }})"
                                        title="{{ $agent->is_active ? 'Désactiver' : 'Activer' }}">
                                    <i class="fas fa-power-off"></i>
                                </button>

                                <button type="button"
                                        class="btn btn-outline-danger btn-icon"
                                        onclick="deleteAgent({{ $agent->id }})"
                                        title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-5">
                            <div class="text-muted">
                                <i class="fas fa-users fa-3x mb-3"></i>
                                <h5>Aucun agent trouvé</h5>
                                <p>Commencez par créer votre premier agent</p>
                                <a href="{{ route('admin.agents.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-1"></i> Créer un agent
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($agents->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Affichage de {{ $agents->firstItem() }} à {{ $agents->lastItem() }}
                    sur {{ $agents->total() }} résultats
                </div>
                <div>
                    {{ $agents->links() }}
                </div>
            </div>
        @endif

        <!-- Actions en lot -->
        <div class="bulk-actions mt-4" style="display: none;">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <span id="selected-count">0</span> agent(s) sélectionné(s)
                        </div>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-outline-success" onclick="bulkActivate()">
                                <i class="fas fa-check me-1"></i> Activer
                            </button>
                            <button type="button" class="btn btn-outline-secondary" onclick="bulkDeactivate()">
                                <i class="fas fa-ban me-1"></i> Désactiver
                            </button>
                            <button type="button" class="btn btn-outline-warning" onclick="bulkFeature()">
                                <i class="fas fa-star me-1"></i> Mettre en vedette
                            </button>
                            <button type="button" class="btn btn-outline-danger" onclick="bulkDelete()">
                                <i class="fas fa-trash me-1"></i> Supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation -->
    <div class="modal fade" id="confirmModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p id="confirmMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmAction">Confirmer</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-submit des filtres
            const filterForm = document.getElementById('filterForm');
            const filterInputs = filterForm.querySelectorAll('select, input');

            filterInputs.forEach(input => {
                if (input.name !== 'search') {
                    input.addEventListener('change', function() {
                        filterForm.submit();
                    });
                }
            });

            // Recherche avec debounce
            const searchInput = document.getElementById('search');
            let searchTimeout;

            searchInput.addEventListener('input', function() {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => {
                    filterForm.submit();
                }, 500);
            });

            // Gestion des sélections
            const selectAll = document.getElementById('selectAll');
            const checkboxes = document.querySelectorAll('.agent-checkbox');
            const bulkActions = document.querySelector('.bulk-actions');
            const selectedCount = document.getElementById('selected-count');

            selectAll.addEventListener('change', function() {
                checkboxes.forEach(checkbox => {
                    checkbox.checked = this.checked;
                });
                updateBulkActions();
            });

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', updateBulkActions);
            });

            function updateBulkActions() {
                const selected = document.querySelectorAll('.agent-checkbox:checked');
                selectedCount.textContent = selected.length;

                if (selected.length > 0) {
                    bulkActions.style.display = 'block';
                } else {
                    bulkActions.style.display = 'none';
                }

                selectAll.indeterminate = selected.length > 0 && selected.length < checkboxes.length;
                selectAll.checked = selected.length === checkboxes.length;
            }
        });

        function toggleFeatured(agentId) {
            fetch(`/admin/agents/${agentId}/toggle-featured`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Erreur lors de la mise à jour');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Erreur lors de la mise à jour');
                });
        }

        function toggleActive(agentId) {
            fetch(`/admin/agents/${agentId}/toggle-active`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                }
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Erreur lors de la mise à jour');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Erreur lors de la mise à jour');
                });
        }

        function deleteAgent(agentId) {
            showConfirmModal(
                'Êtes-vous sûr de vouloir supprimer cet agent ? Cette action est irréversible.',
                () => {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = `/admin/agents/${agentId}`;
                    form.innerHTML = `
                <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').content}">
                <input type="hidden" name="_method" value="DELETE">
            `;
                    document.body.appendChild(form);
                    form.submit();
                }
            );
        }

        function bulkActivate() {
            bulkAction('activate', 'Activer les agents sélectionnés ?');
        }

        function bulkDeactivate() {
            bulkAction('deactivate', 'Désactiver les agents sélectionnés ?');
        }

        function bulkFeature() {
            bulkAction('feature', 'Mettre en vedette les agents sélectionnés ?');
        }

        function bulkDelete() {
            bulkAction('delete', 'Supprimer définitivement les agents sélectionnés ? Cette action est irréversible.');
        }

        function bulkAction(action, message) {
            const selected = Array.from(document.querySelectorAll('.agent-checkbox:checked')).map(cb => cb.value);

            if (selected.length === 0) {
                alert('Aucun agent sélectionné');
                return;
            }

            showConfirmModal(message, () => {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = `/admin/agents/bulk-${action}`;
                form.innerHTML = `
            <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').content}">
            <input type="hidden" name="agents" value="${selected.join(',')}">
        `;
                document.body.appendChild(form);
                form.submit();
            });
        }

        function showConfirmModal(message, onConfirm) {
            document.getElementById('confirmMessage').textContent = message;
            document.getElementById('confirmAction').onclick = () => {
                bootstrap.Modal.getInstance(document.getElementById('confirmModal')).hide();
                onConfirm();
            };
            new bootstrap.Modal(document.getElementById('confirmModal')).show();
        }
    </script>
@endpush
