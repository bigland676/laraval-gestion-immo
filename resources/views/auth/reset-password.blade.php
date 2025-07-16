<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Réinitialiser le mot de passe - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; }
        .reset-card { max-width: 450px; margin: auto; }
        .card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .card-header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 20px 20px 0 0; text-align: center; padding: 30px 20px; }
        .btn-primary { background: linear-gradient(45deg, #667eea, #764ba2); border: none; border-radius: 25px; }
        .form-control { border-radius: 10px; border: 2px solid #e9ecef; padding: 12px 15px; }
        .password-strength { height: 5px; border-radius: 3px; transition: all 0.3s ease; margin-top: 5px; }
        .strength-weak { background-color: #dc3545; }
        .strength-medium { background-color: #ffc107; }
        .strength-strong { background-color: #28a745; }
    </style>
</head>
<body>
<div class="container">
    <div class="reset-card">
        <div class="card">
            <div class="card-header">
                <div class="mb-3"><i class="fas fa-lock-open fa-3x"></i></div>
                <h3>Nouveau mot de passe</h3>
                <p class="mb-0 opacity-75">Choisissez un mot de passe sécurisé</p>
            </div>
            <div class="card-body p-4">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" name="email"
                               value="{{ $email ?? old('email') }}" required readonly>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Nouveau mot de passe</label>
                        <input type="password" class="form-control" name="password"
                               id="password" required minlength="6">
                        <div class="password-strength" id="strengthBar"></div>
                        <small class="text-muted">Minimum 6 caractères</small>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" name="password_confirmation" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-save me-2"></i>Réinitialiser le mot de passe
                    </button>
                </form>

                <div class="text-center">
                    <p><a href="{{ route('login') }}" class="text-decoration-none">← Retour à la connexion</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Indicateur de force du mot de passe
    document.getElementById('password').addEventListener('input', function() {
        const password = this.value;
        const strengthBar = document.getElementById('strengthBar');

        let strength = 0;
        if (password.length >= 6) strength++;
        if (password.match(/[a-z]/)) strength++;
        if (password.match(/[A-Z]/)) strength++;
        if (password.match(/[0-9]/)) strength++;
        if (password.match(/[^a-zA-Z0-9]/)) strength++;

        strengthBar.className = 'password-strength ';
        if (strength < 3) {
            strengthBar.classList.add('strength-weak');
            strengthBar.style.width = '33%';
        } else if (strength < 4) {
            strengthBar.classList.add('strength-medium');
            strengthBar.style.width = '66%';
        } else {
            strengthBar.classList.add('strength-strong');
            strengthBar.style.width = '100%';
        }
    });
</script>
</body>
</html>
