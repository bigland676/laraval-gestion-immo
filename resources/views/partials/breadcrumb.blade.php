<nav aria-label="breadcrumb" class="breadcrumb-nav">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">
                    <i class="fas fa-home"></i> Accueil
                </a>
            </li>

            @if(request()->routeIs('properties.*'))
                <li class="breadcrumb-item">
                    <a href="{{ route('properties.index') }}">Propriétés</a>
                </li>
                @if(request()->routeIs('properties.show'))
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $property->title ?? 'Détail' }}
                    </li>
                @endif
            @endif

            @if(request()->routeIs('agents.*'))
                <li class="breadcrumb-item">
                    <a href="{{ route('agents.index') }}">Agents</a>
                </li>
                @if(request()->routeIs('agents.show'))
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ $agent->name ?? 'Profil' }}
                    </li>
                @endif
            @endif

            @if(request()->routeIs('contact'))
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            @endif

            @if(request()->routeIs('about'))
                <li class="breadcrumb-item active" aria-current="page">À propos</li>
            @endif
        </ol>
    </div>
</nav>

<style>
    .breadcrumb-nav {
        background: #f8f9fa;
        padding: 15px 0;
        border-bottom: 1px solid #e9ecef;
    }

    .breadcrumb {
        margin: 0;
        background: transparent;
        padding: 0;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
    }

    .breadcrumb-item a {
        color: #007bff;
        text-decoration: none;
    }

    .breadcrumb-item a:hover {
        color: #0056b3;
    }

    .breadcrumb-item.active {
        color: #6c757d;
    }
</style>
