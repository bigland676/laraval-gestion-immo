<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; }
        .login-card { max-width: 400px; margin: auto; }
        .card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .btn-primary { background: linear-gradient(45deg, #667eea, #764ba2); border: none; border-radius: 25px; }

        .test-account-btn {
            padding: 2px 6px;
            font-size: 12px;
            transition: all 0.3s ease;
        }

        .test-account-btn:hover {
            transform: scale(1.1);
        }

        .test-account-btn:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="login-card">
        <div class="card">
            <div class="card-header text-center bg-transparent border-0 pt-4">
                <h3><i class="fas fa-building"></i> ImmobilierPro</h3>
                <p class="text-muted">Connectez-vous à votre compte</p>
            </div>
            <div class="card-body p-4">
                @if(session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <div class="mb-3 p-3 bg-light rounded">
                    <h6><i class="fas fa-key"></i> Comptes de test</h6>

                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <small>Super: super@example.com / password</small>
                        <button type="button" class="btn btn-sm btn-outline-primary test-account-btn"
                                data-email="super@example.com"
                                data-password="password"
                                title="Remplir les champs">
                            <i class="fas fa-clipboard"></i>
                        </button>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <small>Admin: admin@example.com / password</small>
                        <button type="button" class="btn btn-sm btn-outline-primary test-account-btn"
                                data-email="admin@example.com"
                                data-password="password"
                                title="Remplir les champs">
                            <i class="fas fa-clipboard"></i>
                        </button>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <small>Agent: agent@example.com / password</small>
                        <button type="button" class="btn btn-sm btn-outline-primary test-account-btn"
                                data-email="agent@example.com"
                                data-password="password"
                                title="Remplir les champs">
                            <i class="fas fa-clipboard"></i>
                        </button>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <small>Client: client@example.com / password</small>
                        <button type="button" class="btn btn-sm btn-outline-primary test-account-btn"
                                data-email="client@example.com"
                                data-password="password"
                                title="Remplir les champs">
                            <i class="fas fa-clipboard"></i>
                        </button>
                    </div>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email"
                               value="{{ old('email') }}" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Se souvenir de moi</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-sign-in-alt"></i> Connexion
                    </button>
                </form>

                <div class="text-center">
                    <p><a href="{{ route('password.request') }}" class="text-decoration-none">Mot de passe oublié ?</a></p>
                    <p><a href="{{ route('register') }}" class="text-decoration-none">Créer un compte</a></p>
                    <p><a href="{{ route('home') }}" class="text-decoration-none">← Retour au site</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const testAccountButtons = document.querySelectorAll('.test-account-btn');

        testAccountButtons.forEach(button => {
            button.addEventListener('click', function() {
                const email = this.getAttribute('data-email');
                const password = this.getAttribute('data-password');

                // Remplir les champs
                const emailInput = document.querySelector('input[name="email"]');
                const passwordInput = document.querySelector('input[name="password"]');

                if (emailInput) {
                    emailInput.value = email;
                    emailInput.focus();
                    emailInput.blur();
                }

                if (passwordInput) {
                    passwordInput.value = password;
                }

                // Effet visuel de confirmation
                const icon = this.querySelector('i');
                icon.classList.remove('fa-clipboard');
                icon.classList.add('fa-check', 'text-success');

                setTimeout(() => {
                    icon.classList.remove('fa-check', 'text-success');
                    icon.classList.add('fa-clipboard');
                }, 1000);
            });
        });
    });
</script>

</body>
</html>
