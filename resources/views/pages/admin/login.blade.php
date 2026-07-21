<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Administrator – PARNA</title>

    <!-- Google Fonts & Bootstrap 5 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --parna-maroon: #4A1515;
            --parna-gold: #C59B27;
            --parna-bg: #FAF6F0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--parna-bg);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .login-card {
            background: #FFFFFF;
            border: 1px solid #EFE6DC;
            border-top: 5px solid var(--parna-gold);
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(74, 21, 21, 0.12);
            width: 100%;
            max-width: 440px;
            padding: 2.5rem 2rem;
        }

        .brand-header {
            text-align: center;
            margin-bottom: 2rem;
        }

        .brand-icon-wrap {
            width: 60px;
            height: 60px;
            background: var(--parna-maroon);
            color: var(--parna-gold);
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 12px rgba(74, 21, 21, 0.25);
        }

        .brand-title {
            font-family: 'Cinzel', serif;
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--parna-maroon);
            letter-spacing: 1px;
            margin: 0;
        }

        .brand-sub {
            font-size: 0.78rem;
            font-weight: 700;
            color: #786B60;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-top: 4px;
        }

        .btn-admin-login {
            background-color: var(--parna-maroon);
            color: #FFFFFF;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding: 12px;
            border-radius: 50px;
            border: none;
            width: 100%;
            transition: all 0.2s ease;
        }

        .btn-admin-login:hover {
            background-color: #5D1A1A;
            color: #FFFFFF;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="brand-header">
        <div class="brand-icon-wrap">
            <i class="bi bi-shield-lock-fill"></i>
        </div>
        <h1 class="brand-title">PORTAL ADMIN PARNA</h1>
        <p class="brand-sub">Masuk untuk Kelola Data Parna</p>
    </div>

    @if (session('status'))
        <div class="alert alert-info small rounded-3 mb-3">
            <i class="bi bi-info-circle-fill me-1"></i> {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger small rounded-3 mb-3">
            <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('admin.login.submit') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label small fw-bold text-dark">Email Administrator</label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-envelope-fill text-secondary"></i></span>
                <input type="email" name="email" value="{{ old('email', 'admin@parna.or.id') }}" class="form-control" required placeholder="admin@parna.or.id">
            </div>
        </div>

        <div class="mb-3">
            <label class="form-label small fw-bold text-dark">Kata Sandi (Password)</label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-key-fill text-secondary"></i></span>
                <input type="password" name="password" value="password" class="form-control" required placeholder="••••••••">
            </div>
        </div>

        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" checked>
            <label class="form-check-label small text-secondary" for="remember">
                Ingat Sesi Login Ini
            </label>
        </div>

        <button type="submit" class="btn btn-admin-login">
            <i class="bi bi-box-arrow-in-right me-1"></i> MASUK SEBAGAI ADMIN
        </button>
    </form>

    <div class="mt-4 pt-3 border-top text-center small text-muted">
        <a href="{{ route('home') }}" class="text-decoration-none text-secondary"><i class="bi bi-arrow-left me-1"></i> Kembali ke Website Utama</a>
    </div>
</div>

</body>
</html>
