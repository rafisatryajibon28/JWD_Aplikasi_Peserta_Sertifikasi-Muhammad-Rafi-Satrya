<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAP Sertifikasi - Sistem Pengelolaan Data Peserta</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary: #3F3B73;
            --primary-dark: #2A2650;
            --accent-bg: #F4F3F9;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #F8F9FA;
            color: #2D3748;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .navbar-custom {
            background: #ffffff;
            border-bottom: 1px solid #E2E8F0;
            padding: 16px 40px;
        }

        .navbar-brand-custom {
            font-weight: 800;
            color: var(--primary);
            font-size: 18px;
            letter-spacing: 0.5px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hero-wrapper {
            flex: 1;
            display: flex;
            align-items: stretch;
        }

        .hero-main {
            flex: 1.3;
            padding: 50px 70px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }

        .hero-sidebar {
            flex: 0.7;
            background: var(--accent-bg);
            border-left: 1px solid #E2E8F0;
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .badge-tag {
            display: inline-block;
            padding: 6px 14px;
            background: #ECEAF7;
            color: var(--primary);
            font-weight: 700;
            font-size: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            letter-spacing: 0.5px;
        }

        h1 {
            font-size: 38px;
            font-weight: 800;
            color: var(--primary-dark);
            line-height: 1.25;
            margin-bottom: 16px;
        }

        .hero-desc {
            font-size: 15px;
            color: #4A5568;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        /* Daftar poin penjelasan agar teks jauh lebih berisi */
        .feature-list {
            list-style: none;
            padding: 0;
            margin: 0 0 30px 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
            border-top: 1px solid #E2E8F0;
            padding-top: 24px;
        }

        .feature-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 14px;
            color: #4A5568;
            line-height: 1.5;
        }

        .feature-list li i {
            color: var(--primary);
            font-size: 18px;
            margin-top: 2px;
            flex-shrink: 0;
        }

        .action-card {
            background: #ffffff;
            border: 1px solid #CBD5E0;
            border-radius: 12px;
            padding: 36px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
        }

        .btn-custom-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            color: #fff;
            padding: 12px;
            font-weight: 600;
            font-size: 14px;
            border-radius: 8px;
            width: 100%;
            transition: background 0.2s;
        }

        .btn-custom-primary:hover {
            background-color: var(--primary-dark);
            color: #fff;
        }

        .btn-custom-outline {
            background-color: #ffffff;
            border-color: #CBD5E0;
            color: #2D3748;
            padding: 12px;
            font-weight: 600;
            font-size: 14px;
            border-radius: 8px;
            width: 100%;
            transition: all 0.2s;
        }

        .btn-custom-outline:hover {
            background-color: #F7FAFC;
            border-color: var(--primary);
            color: var(--primary);
        }

        footer {
            background: #ffffff;
            border-top: 1px solid #E2E8F0;
            padding: 20px 40px;
            text-align: center;
            font-size: 13px;
            color: #718096;
        }

        @media (max-width: 992px) {
            .hero-wrapper {
                flex-direction: column;
            }
            .hero-main, .hero-sidebar {
                padding: 40px 24px;
            }
            .feature-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>

<!-- Top Bar -->
<nav class="navbar-custom">
    <a href="#" class="navbar-brand-custom">
        <i class="bi bi-shield-fill-check fs-5"></i> SIAP SERTIFIKASI
    </a>
</nav>

<!-- Main Section Full Width -->
<div class="hero-wrapper">
    
    <!-- Sisi Kiri: Teks & Penjelasan Padat Berisi -->
    <div class="hero-main">
        <div>
            <span class="badge-tag">PLATFORM UJI KOMPETENSI TERPADU</span>
            <h1>Sistem Pengelolaan Data Peserta & Skema Sertifikasi</h1>
            <p class="hero-desc">
                SIAP Sertifikasi adalah solusi digital terpusat yang dirancang khusus untuk mengoptimalkan alur pendaftaran peserta, validasi kelayakan berkas secara otomatis, serta manajemen skema uji kompetensi secara transparan, akurat, dan terstruktur.
            </p>

            <!-- List Poin Penjelasan Operasional Sistem -->
            <ul class="feature-list">
                <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                        <strong>Validasi Input Ketat</strong>
                        <p class="mb-0 text-muted" style="font-size: 13px;">Penyaringan ketat format NIK dan nomor kontak untuk meminimalisir kesalahan data.</p>
                    </div>
                </li>
                <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                        <strong>Manajemen Skema</strong>
                        <p class="mb-0 text-muted" style="font-size: 13px;">Pengelompokan bidang sertifikasi dan kode keahlian yang terstruktur rapi.</p>
                    </div>
                </li>
                <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                        <strong>Multi-Hak Akses</strong>
                        <p class="mb-0 text-muted" style="font-size: 13px;">Pemisahan kontrol penuh antara panel administrator dan dasbor peserta.</p>
                    </div>
                </li>
                <li>
                    <i class="bi bi-check-circle-fill"></i>
                    <div>
                        <strong>Keamanan Data</strong>
                        <p class="mb-0 text-muted" style="font-size: 13px;">Sistem autentikasi terenkripsi untuk menjaga kerahasiaan profil pengguna.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Sisi Kanan: Panel Aksi / Tombol Masuk -->
    <div class="hero-sidebar">
        <div class="action-card">
            <h3 class="fw-bold fs-4 mb-2 text-dark">Mulai Akses</h3>
            <p class="text-muted mb-4" style="font-size: 14px;">Silakan masuk menggunakan akun terdaftar atau buat akun baru untuk melakukan pendaftaran.</p>

            <div class="d-grid gap-3">
                <a href="<?php echo e(route('login')); ?>" class="btn btn-custom-primary text-center text-decoration-none">
                    <i class="bi bi-box-arrow-in-right me-2"></i> Masuk ke Sistem
                </a>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-custom-outline text-center text-decoration-none">
                    <i class="bi bi-person-plus me-2"></i> Daftar Akun Baru
                </a>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<footer>
    &copy; 2026 SIAP Sertifikasi. Seluruh hak cipta dilindungi undang-undang.
</footer>

</body>
</html><?php /**PATH C:\laragon\www\JWD_Aplikasi_Peserta_Sertifikasi-Muhammad Rafi Satrya\resources\views/welcome.blade.php ENDPATH**/ ?>