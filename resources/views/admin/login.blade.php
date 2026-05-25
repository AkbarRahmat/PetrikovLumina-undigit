<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - DIGICOM CIKSEL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: #0F0F1A;
            color: #F5F5F5;
            font-family: 'Outfit', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-card {
            background: rgba(255,255,255,0.03);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 1.5rem;
            padding: 3rem;
            max-width: 420px;
            margin: 0 auto;
        }
        .form-control {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 0.75rem;
            padding: 1rem;
            color: white;
        }
        .form-control:focus {
            background: rgba(255,255,255,0.08);
            border-color: #C9A961;
            box-shadow: 0 0 0 3px rgba(201,169,97,0.1);
            color: white;
        }
        .form-control::placeholder { color: #9CA3AF; }
        .btn-gold {
            background: linear-gradient(135deg, #C9A961, #E8D5A3);
            color: #0F0F1A;
            border: none;
            padding: 1rem;
            border-radius: 3rem;
            font-weight: 600;
            width: 100%;
        }
        .btn-gold:hover { color: #0F0F1A; transform: translateY(-2px); }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-card">
            <div class="text-center mb-4">
                <i class="fa-solid fa-crown text-warning mb-3" style="font-size: 2.5rem;"></i>
                <h3 class="fw-bold">Admin Dashboard</h3>
                <p class="text-muted">Masukkan password untuk melanjutkan</p>
            </div>

            @if(session('error'))
                <div class="alert alert-danger bg-transparent text-danger border-danger">
                    <i class="fa-solid fa-circle-exclamation me-2"></i>{{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.post') }}">
                @csrf
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password Admin" required>
                </div>
                <button type="submit" class="btn btn-gold">
                    <i class="fa-solid fa-right-to-bracket me-2"></i>Masuk
                </button>
            </form>

            <div class="text-center mt-3">
                <a href="/" class="small text-decoration-none" style="color: #9CA3AF;">
                    <i class="fa-solid fa-arrow-left me-1"></i>Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</body>
</html>