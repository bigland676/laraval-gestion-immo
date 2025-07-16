<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mot de passe oublié - Gestion Immobilière</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); min-height: 100vh; display: flex; align-items: center; }
        .forgot-card { max-width: 450px; margin: auto; }
        .card { border: none; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        .card-header { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white; border-radius: 20px 20px 0 0; text-align: center; padding: 30px 20px; }
        .btn-primary { background: linear-gradient(45deg, #667eea, #764ba2); border: none; border-radius: 25px; }
        .form-control { border-radius: 10px; border: 2px solid #e9ecef; padding: 12px 15px; }
        .info-box { background: #f8f9fa; border-radius: 10px; padding: 20px; margin-bottom: 20px; border-left: 4px solid #667eea; }
    </style>
</head>
<body>
<div class="container">
    <div class="forgot-card">
        <div class="card">
            <div class="card-header">
                <div class="mb-3"><i class="fas fa-key fa-3x"></i></div>
                <h3>Mot de passe oublié</h3>
                <p class="mb-0 opacity-75">Récupérez l'accès à votre compte</p>
            </div>
            <div class="card-body p-4">
                @if(session('status'))
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>{{ session('status') }}
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alert-danger">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        @foreach($errors->all() as $error){{ $error }}@endforeach
                    </div>
                @endif

                <div class="info-box">
                    <h6><i class="fas fa-info-circle text-primary me-2"></i>Comment ça fonctionne</h6>
                    <small class="text-muted">
                        Saisissez votre email ci-dessous. Nous vous enverrons un lien
                        sécurisé pour réinitialiser votre mot de passe.
                    </small>
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Adresse email</label>
                        <input type="email" class="form-control" name="email"
                               value="{{ old('email') }}" placeholder="votre@email.com" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-3">
                        <i class="fas fa-paper-plane me-2"></i>Envoyer le lien
                    </button>
                </form>

                <div class="text-center">
                    <p><a href="{{ route('login') }}" class="text-decoration-none">← Retour à la connexion</a></p>
                    <p><a href="{{ route('register') }}" class="text-decoration-none">Créer un compte</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
