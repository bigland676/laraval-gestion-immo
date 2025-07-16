<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Dashboard') - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root { --primary-color: #667eea; --secondary-color: #764ba2; }
        body { font-family: 'Segoe UI', sans-serif; background-color: #f8f9fa; }
        .navbar { background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%) !important; }
        .card { border: none; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); }
        .btn-gradient { background: linear-gradient(45deg, var(--primary-color), var(--secondary-color)); border: none; color: white; border-radius: 25px; }
        .dashboard-header { background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%); color: white; padding: 40px 0; margin-bottom: 30px; }
        .dashboard-icon { width: 80px; height: 80px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; color: white; margin: 0 auto 20px; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            <i class="fas fa-building me-2"></i>ImmobilierPro
        </a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('home') }}">Site Public</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">Déconnexion</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>

<main>@yield('content')</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
