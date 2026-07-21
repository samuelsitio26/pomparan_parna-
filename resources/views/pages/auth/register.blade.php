<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun Baru – PARNA Parsadaan Pomparan Ni Raja Nai Ambaton</title>

    <!-- Google Fonts & Bootstrap Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/auth.css') }}">
</head>
<body>

<div class="auth-wrapper">
    <!-- Brand Top Header -->
    <div class="auth-header">
        <a href="{{ route('home') }}" style="text-decoration: none; display: inline-block;">
            <div class="auth-brand-icon">
                <i class="bi bi-shield-shaded"></i>
            </div>
            <h1 class="auth-brand-title">PARNA</h1>
            <p class="auth-brand-sub">PARSADAAN POMPARAN NI RAJA NAI AMBATON</p>
        </a>
        <p class="auth-tagline">
            Bersatu dalam adat, berpegang pada tarombo, melestarikan warisan leluhur untuk generasi masa depan.
        </p>
    </div>

    <!-- Center Register Form Card -->
    <div class="auth-card" style="max-width: 580px;">
        <h2 class="auth-card-title">BUAT AKUN BARU</h2>
        <p class="auth-card-sub">Bergabunglah bersama Pomparan Parna</p>

        <!-- Tabs Switcher -->
        <div class="auth-tabs">
            <a href="{{ route('login') }}" class="auth-tab-link">
                <i class="bi bi-box-arrow-in-right"></i> Masuk
            </a>
            <a href="{{ route('register') }}" class="auth-tab-link active">
                <i class="bi bi-person-plus-fill"></i> Daftar
            </a>
        </div>

        @if($errors->any())
            <div style="background: #FFEBEE; border: 1px solid #FFCDD2; color: #C62828; padding: 10px 14px; border-radius: 8px; font-size: 0.84rem; margin-bottom: 1.2rem;">
                <i class="bi bi-exclamation-circle-fill"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <!-- Row 1: Nama Lengkap & Username -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="auth-field-group">
                    <label>Nama Lengkap</label>
                    <div class="auth-input-icon-wrap">
                        <i class="bi bi-person left-icon"></i>
                        <input type="text" name="name" required value="{{ old('name') }}" placeholder="Masukkan nama lengkap">
                    </div>
                </div>
                <div class="auth-field-group">
                    <label>Username</label>
                    <div class="auth-input-icon-wrap">
                        <i class="bi bi-person-badge left-icon"></i>
                        <input type="text" name="username" required value="{{ old('username') }}" placeholder="Pilih username">
                    </div>
                </div>
            </div>

            <!-- Email Field -->
            <div class="auth-field-group">
                <label>Email</label>
                <div class="auth-input-icon-wrap">
                    <i class="bi bi-envelope left-icon"></i>
                    <input type="email" name="email" required value="{{ old('email') }}" placeholder="Masukkan email aktif Anda">
                </div>
            </div>

            <!-- Row 2: Telepon & Marga Dropdown -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                <div class="auth-field-group">
                    <label>Nomor Telepon</label>
                    <div class="auth-input-icon-wrap">
                        <i class="bi bi-telephone left-icon"></i>
                        <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Masukkan nomor telepon">
                    </div>
                </div>
                <div class="auth-field-group">
                    <label>Marga</label>
                    <div class="auth-input-icon-wrap">
                        <i class="bi bi-award left-icon"></i>
                        <select name="marga">
                            <option value="">Pilih marga Anda</option>
                            @foreach($margas as $m)
                                <option value="{{ $m->name }}" {{ old('marga') == $m->name ? 'selected' : '' }}>{{ $m->name }} ({{ $m->branch_group }})</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <!-- Password Field -->
            <div class="auth-field-group">
                <label>Kata Sandi</label>
                <div class="auth-input-icon-wrap">
                    <i class="bi bi-lock left-icon"></i>
                    <input type="password" id="pwdReg" name="password" required placeholder="Buat kata sandi">
                    <i class="bi bi-eye-slash toggle-pwd" onclick="togglePasswordVisibility('pwdReg', this)"></i>
                </div>
            </div>

            <!-- Confirm Password Field -->
            <div class="auth-field-group">
                <label>Konfirmasi Kata Sandi</label>
                <div class="auth-input-icon-wrap">
                    <i class="bi bi-lock left-icon"></i>
                    <input type="password" id="pwdConf" name="password_confirmation" required placeholder="Konfirmasi kata sandi Anda">
                    <i class="bi bi-eye-slash toggle-pwd" onclick="togglePasswordVisibility('pwdConf', this)"></i>
                </div>
            </div>

            <!-- Checkbox Terms -->
            <div style="font-size: 0.82rem; margin-bottom: 1.5rem;">
                <label style="display: flex; align-items: flex-start; gap: 8px; cursor: pointer; color: var(--parna-text-main); line-height: 1.4;">
                    <input type="checkbox" name="terms" checked required style="accent-color: var(--parna-maroon); width: 16px; height: 16px; margin-top: 2px;">
                    <span>Saya setuju dengan <a href="#" style="color: var(--parna-maroon); font-weight: 700;">Syarat & Ketentuan</a> dan <a href="#" style="color: var(--parna-maroon); font-weight: 700;">Kebijakan Privasi</a></span>
                </label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn-primary-maroon btn-block" style="padding: 12px; font-size: 0.95rem; border-radius: 10px;">
                <i class="bi bi-person-plus-fill"></i> Daftar Akun
            </button>

            <!-- Bottom Link -->
            <div style="text-align: center; font-size: 0.85rem; color: var(--parna-text-muted); margin-top: 1.5rem;">
                Sudah punya akun? <a href="{{ route('login') }}" style="color: var(--parna-maroon); font-weight: 700; text-decoration: none;">Masuk di sini</a>
            </div>
        </form>
    </div>

    <!-- Bottom Footer Highlights (3 Items) -->
    <div class="auth-footer-highlights">
        <div class="auth-highlight-box">
            <i class="bi bi-people-fill"></i>
            <h5>Komunitas</h5>
            <p>Bersatu dalam kekeluargaan Pomparan Parna</p>
        </div>
        <div class="auth-highlight-box">
            <i class="bi bi-shield-shaded"></i>
            <h5>Warisan Leluhur</h5>
            <p>Melestarikan tarombo dan nilai-nilai adat Batak Toba</p>
        </div>
        <div class="auth-highlight-box">
            <i class="bi bi-globe"></i>
            <h5>Informasi Terpercaya</h5>
            <p>Sumber informasi resmi dan terpercaya</p>
        </div>
    </div>

    <!-- Copyright -->
    <div style="font-size: 0.78rem; color: #A09080; text-align: center;">
        &copy; {{ date('Y') }} Parsadaan Pomparan Ni Raja Nai Ambaton (Parna). All Rights Reserved.
    </div>
</div>

<script>
    function togglePasswordVisibility(inputId, icon) {
        const input = document.getElementById(inputId);
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.remove('bi-eye-slash');
            icon.classList.add('bi-eye');
        } else {
            input.type = 'password';
            icon.classList.remove('bi-eye');
            icon.classList.add('bi-eye-slash');
        }
    }
</script>

</body>
</html>
