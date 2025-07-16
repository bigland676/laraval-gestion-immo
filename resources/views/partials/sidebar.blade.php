<!-- Dashboard -->
<li class="nav-item">
    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>Dashboard</p>
    </a>
</li>

@if(auth()->user()->hasAnyRole(['super']))
    <!-- SUPER ADMIN MENU -->
    <li class="nav-header">SUPER ADMINISTRATION</li>
    <li class="nav-item">
        <a href="{{ route('super.dashboard') }}" class="nav-link {{ request()->routeIs('super.dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-crown"></i>
            <p>Super Dashboard</p>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('super.users.*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->routeIs('super.users.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users-cog"></i>
            <p>
                Gestion Utilisateurs
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('super.users.index') }}" class="nav-link {{ request()->routeIs('super.users.index') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tous les utilisateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('super.users.create') }}" class="nav-link {{ request()->routeIs('super.users.create') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Créer un utilisateur</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('super.settings') }}" class="nav-link {{ request()->routeIs('super.settings') ? 'active' : '' }}">
            <i class="nav-icon fas fa-cogs"></i>
            <p>Paramètres</p>
        </a>
    </li>
@endif

@if(auth()->user()->hasAnyRole(['super', 'admin']))
    <!-- ADMIN MENU -->
    <li class="nav-header">ADMINISTRATION</li>
    <li class="nav-item">
        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-chart-line"></i>
            <p>Admin Dashboard</p>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('admin.users.*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Utilisateurs
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.users.index') }}" class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Liste des utilisateurs</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.users.create') }}" class="nav-link {{ request()->routeIs('admin.users.create') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter un utilisateur</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ request()->routeIs('admin.properties.*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->routeIs('admin.properties.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-building"></i>
            <p>
                Propriétés
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('admin.properties.index') }}" class="nav-link {{ request()->routeIs('admin.properties.index') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Toutes les propriétés</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.properties.create') }}" class="nav-link {{ request()->routeIs('admin.properties.create') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter une propriété</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.reports') }}" class="nav-link {{ request()->routeIs('admin.reports') ? 'active' : '' }}">
            <i class="nav-icon fas fa-file-alt"></i>
            <p>Rapports</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.statistics') }}" class="nav-link {{ request()->routeIs('admin.statistics') ? 'active' : '' }}">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>Statistiques</p>
        </a>
    </li>
@endif

@if(auth()->user()->hasAnyRole(['super', 'admin', 'agent']))
    <!-- AGENT MENU -->
    <li class="nav-header">AGENT</li>
    <li class="nav-item">
        <a href="{{ route('agent.dashboard') }}" class="nav-link {{ request()->routeIs('agent.dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>Agent Dashboard</p>
        </a>
    </li>
    <li class="nav-item {{ request()->routeIs('agent.properties.*') ? 'menu-open' : '' }}">
        <a href="#" class="nav-link {{ request()->routeIs('agent.properties.*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Mes Propriétés
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('agent.properties.index') }}" class="nav-link {{ request()->routeIs('agent.properties.index') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mes propriétés</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('agent.properties.create') }}" class="nav-link {{ request()->routeIs('agent.properties.create') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter une propriété</p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item">
        <a href="{{ route('agent.clients') }}" class="nav-link {{ request()->routeIs('agent.clients') ? 'active' : '' }}">
            <i class="nav-icon fas fa-handshake"></i>
            <p>Mes Clients</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('agent.appointments') }}" class="nav-link {{ request()->routeIs('agent.appointments') ? 'active' : '' }}">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Rendez-vous</p>
        </a>
    </li>
@endif

@if(auth()->user()->hasAnyRole(['super', 'admin', 'agent', 'client']))
    <!-- CLIENT MENU -->
    <li class="nav-header">CLIENT</li>
    <li class="nav-item">
        <a href="{{ route('client.dashboard') }}" class="nav-link {{ request()->routeIs('client.dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-user"></i>
            <p>Client Dashboard</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('client.favorites') }}" class="nav-link {{ request()->routeIs('client.favorites') ? 'active' : '' }}">
            <i class="nav-icon fas fa-heart"></i>
            <p>Mes Favoris</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('client.appointments') }}" class="nav-link {{ request()->routeIs('client.appointments') ? 'active' : '' }}">
            <i class="nav-icon fas fa-calendar-check"></i>
            <p>Mes Rendez-vous</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('client.messages') }}" class="nav-link {{ request()->routeIs('client.messages') ? 'active' : '' }}">
            <i class="nav-icon fas fa-envelope"></i>
            <p>Messages</p>
        </a>
    </li>
@endif

<!-- GENERAL MENU -->
<li class="nav-header">GÉNÉRAL</li>
<li class="nav-item">
    <a href="{{ route('properties.index') }}" class="nav-link {{ request()->routeIs('properties.index') ? 'active' : '' }}">
        <i class="nav-icon fas fa-search"></i>
        <p>Rechercher</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('profile') }}" class="nav-link {{ request()->routeIs('profile') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user-edit"></i>
        <p>Mon Profil</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link" target="_blank">
        <i class="nav-icon fas fa-external-link-alt"></i>
        <p>Site Public</p>
    </a>
</li>
