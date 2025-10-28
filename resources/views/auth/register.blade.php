<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1a1f3a 50%, #0f172a 100%);
            min-height: 100vh;
            display: flex;
            overflow: hidden;
        }

        .register-container {
            display: flex;
            width: 100%;
            height: 100vh;
            position: relative;
        }

        .animated-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: float 15s infinite ease-in-out;
        }

        .blob1 {
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #0ea5e9, #06b6d4);
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .blob2 {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #1e40af, #1e3a8a);
            bottom: -50px;
            right: -50px;
            animation-delay: 2s;
        }

        .blob3 {
            width: 300px;
            height: 300px;
            background: linear-gradient(135deg, #0369a1, #0c4a6e);
            top: 50%;
            right: 10%;
            animation-delay: 4s;
        }

        @keyframes float {
            0%, 100% {
                transform: translate(0, 0) scale(1);
            }
            33% {
                transform: translate(30px, -50px) scale(1.1);
            }
            66% {
                transform: translate(-20px, 20px) scale(0.9);
            }
        }

        .hero-section {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px 40px;
            position: relative;
            z-index: 1;
            color: white;
        }

        .hero-content {
            max-width: 500px;
            text-align: center;
        }

        .hero-icon {
            font-size: 80px;
            margin-bottom: 30px;
            display: inline-block;
            animation: bounce 3s infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .hero-title {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #0ea5e9, #06b6d4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 18px;
            color: #cbd5e1;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .hero-features {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 50px;
            text-align: left;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px;
            background: rgba(15, 23, 42, 0.5);
            border-left: 3px solid #0ea5e9;
            border-radius: 8px;
            backdrop-filter: blur(10px);
        }

        .feature-icon {
            font-size: 24px;
            min-width: 30px;
        }

        .feature-text {
            font-size: 14px;
            color: #cbd5e1;
        }

        .form-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 40px;
            position: relative;
            z-index: 1;
            overflow-y: auto;
        }

        .register-card {
            width: 100%;
            max-width: 450px;
            background: rgba(30, 41, 59, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(148, 163, 184, 0.2);
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
            my-auto: auto;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-header-icon {
            font-size: 50px;
            margin-bottom: 15px;
            display: inline-block;
        }

        .form-header h1 {
            font-size: 28px;
            color: white;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .form-header p {
            font-size: 14px;
            color: #94a3b8;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            font-weight: 600;
            color: #e2e8f0;
            margin-bottom: 10px;
        }

        .form-group label span {
            font-size: 16px;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(148, 163, 184, 0.3);
            border-radius: 10px;
            color: white;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-group input::placeholder {
            color: #64748b;
        }

        .form-group input:focus {
            outline: none;
            background: rgba(15, 23, 42, 0.8);
            border-color: #0ea5e9;
            box-shadow: 0 0 0 3px rgba(14, 165, 233, 0.1);
        }

        .register-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #0ea5e9, #0369a1);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(14, 165, 233, 0.3);
            margin-top: 10px;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(14, 165, 233, 0.4);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        .form-footer {
            margin-top: 30px;
            padding-top: 25px;
            border-top: 1px solid rgba(148, 163, 184, 0.2);
            text-align: center;
            font-size: 12px;
            color: #64748b;
        }

        .form-footer p {
            margin: 8px 0;
        }

        .login-link {
            color: #0ea5e9;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .login-link:hover {
            color: #06b6d4;
        }

        .security-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            color: #0ea5e9;
            margin-top: 10px;
        }

        .error-message {
            background: rgba(239, 68, 68, 0.1);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .error-item {
            margin: 5px 0;
        }

        @media (max-width: 1024px) {
            .hero-section {
                display: none;
            }

            .form-section {
                flex: 1;
            }

            .register-card {
                max-width: 100%;
            }
        }

        @media (max-width: 768px) {
            .register-container {
                flex-direction: column;
            }

            .hero-section {
                display: flex;
                padding: 40px 20px;
                min-height: 200px;
            }

            .hero-title {
                font-size: 32px;
            }

            .hero-subtitle {
                font-size: 14px;
            }

            .form-section {
                padding: 30px 20px;
            }

            .register-card {
                padding: 30px 25px;
            }

            .form-header h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="animated-bg">
            <div class="blob blob1"></div>
            <div class="blob blob2"></div>
            <div class="blob blob3"></div>
        </div>

        <div class="hero-section">
            <div class="hero-content">
                <div class="hero-icon">🎓</div>
                <h1 class="hero-title">Portal Pengaduan</h1>
                <p class="hero-subtitle">Sistem Pengaduan & Konsultasi Siswa Yang Aman Dan Terpercaya</p>

                <div class="hero-features">
                    <div class="feature-item">
                        <div class="feature-icon">🔒</div>
                        <div class="feature-text">Privasi Terjamin Dengan Enkripsi Tingkat Tinggi</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">👥</div>
                        <div class="feature-text">Konselor Profesional Siap Membantu Anda</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">⏰</div>
                        <div class="feature-text">Respon Cepat Dan Dukungan Berkelanjutan</div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon">✅</div>
                        <div class="feature-text">Solusi Nyata Untuk Setiap Masalah Anda</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-section">
            <div class="register-card">
                <div class="form-header">
                    <div class="form-header-icon">📝</div>
                    <h1>Daftar Akun</h1>
                    <p>Buat Akun Baru Untuk Mengakses Portal</p>
                </div>

                @if ($errors->any())
                    <div class="error-message">
                        @foreach ($errors->all() as $error)
                            <div class="error-item">{{ $error }}</div>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">
                            <span>👤</span>
                            Nama Lengkap
                        </label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            placeholder="Masukkan Nama Lengkap Anda"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >
                    </div>

                    <div class="form-group">
                        <label for="email">
                            <span>📧</span>
                            Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Masukkan Email Anda"
                            value="{{ old('email') }}"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password">
                            <span>🔑</span>
                            Password
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Buat Password Yang Kuat"
                            required
                        >
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">
                            <span>✓</span>
                            Konfirmasi Password
                        </label>
                        <input 
                            type="password" 
                            id="password_confirmation" 
                            name="password_confirmation" 
                            placeholder="Konfirmasi Password Anda"
                            required
                        >
                    </div>

                    <button type="submit" class="register-btn">Daftar Sekarang</button>
                </form>

                <div class="form-footer">
                    <p>Sudah Punya Akun? <a href="{{ route('login') }}" class="login-link">Masuk Di Sini</a></p>
                    <div class="security-badge">
                        <span>🛡️</span>
                        <span>Sistem Ini Aman Dan Terpercaya</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>