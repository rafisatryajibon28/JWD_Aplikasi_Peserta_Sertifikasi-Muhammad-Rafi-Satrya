<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP Sertifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary: #3F3B73;
            --text: #1A1A2E;
            --muted: #6B7280;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            background: #F8F7FC;
            color: var(--text);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        .nav {
            padding: 1.25rem 2rem;
            background: #fff;
            border-bottom: 1px solid #E5E7EB;
        }

        .logo {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .main {
            flex: 1;
            display: flex;
            align-items: center;
            padding: 3rem 2rem;
        }

        .wrapper {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
        }

        .left {
            flex: 1;
        }

        .welcome {
            font-size: 1.35rem;          /* ← diperbesar */
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 0.85rem;
        }

        h1 {
            font-size: 2rem;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        p {
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.65;
            max-width: 440px;
        }

        .right {
            flex-shrink: 0;
            width: 280px;
        }

        .buttons {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .btn-primary {
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 0.85rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            text-align: center;
            transition: background 0.2s;
        }

        .btn-primary:hover {
            background: #2A2650;
            color: #fff;
        }

        .btn-outline {
            background: transparent;
            color: var(--text);
            border: 1px solid #D1D5DB;
            padding: 0.85rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            text-align: center;
            transition: all 0.2s;
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        @media (max-width: 768px) {
            .main {
                padding: 2.5rem 1.5rem;
            }
            .wrapper {
                flex-direction: column;
                gap: 2.5rem;
                text-align: center;
            }
            .left p {
                max-width: 100%;
            }
            .right {
                width: 100%;
                max-width: 300px;
            }
            h1 {
                font-size: 1.7rem;
            }
            .welcome {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>

<nav class="nav">
    <a href="#" class="logo">
        <i class="bi bi-shield-fill-check"></i>
        SIAP SERTIFIKASI
    </a>
</nav>

<main class="main">
    <div class="wrapper">
        <div class="left">
            <div class="welcome">Selamat datang di SIAP Sertifikasi</div>
            <h1>Sistem Pengelolaan Data Peserta & Skema Sertifikasi</h1>
            <p>
                Solusi digital untuk pendaftaran peserta, validasi berkas, dan manajemen skema uji kompetensi secara transparan dan aman.
            </p>
        </div>

        <div class="right">
            <div class="buttons">
                <a href="{{ route('login') }}" class="btn-primary">Masuk ke Sistem</a>
                <a href="{{ route('register') }}" class="btn-outline">Daftar Akun Baru</a>
            </div>
        </div>
    </div>
</main>

</body>
</html>