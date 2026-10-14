
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title', 'SIAP Sertifikasi'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        :root {
            --primary: #3F3B73;
            --primary-hover: #302C5B;
            --primary-light: #ECEAF7;
            --background: #F7F7FA;
            --text: #29283A;
            --muted: #77768B;
            --border: #E8E7EF;
        }

        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: var(--background);
            color: var(--text);
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
        }

        /* NAVBAR */

        .main-navbar {
            background: var(--primary);
            padding: 12px 0;
        }

        .main-navbar .navbar-brand {
            color: #fff;
            font-size: 16px;
            font-weight: 700;
        }

        .main-navbar .nav-link {
            color: rgba(255, 255, 255, .8);
            font-size: 13px;
            padding: 8px 12px !important;
            border-radius: 6px;
        }

        .main-navbar .nav-link:hover,
        .main-navbar .nav-link.active {
            color: #fff;
            background: rgba(255, 255, 255, .12);
        }

        .main-navbar .navbar-toggler {
            border-color: rgba(255, 255, 255, .3);
            box-shadow: none;
        }

        .user-toggle {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .user-name {
            color: #fff;
            font-size: 13px;
        }

        .user-role {
            color: rgba(255, 255, 255, .7);
            font-size: 11px;
            text-transform: capitalize;
        }

        .dropdown-menu {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 5px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, .06);
        }

        .dropdown-item {
            padding: 9px 12px;
            border-radius: 5px;
            font-size: 13px;
        }

        .dropdown-item:hover {
            background: var(--primary-light);
            color: var(--primary);
        }

        /* CONTENT */

        .main-content {
            flex: 1;
            width: 100%;
            padding-top: 28px;
            padding-bottom: 36px;
        }

        .page-title {
            color: var(--text);
            font-weight: 700;
        }

        .page-subtitle {
            color: var(--muted);
            font-size: 13px;
        }

        /* CARD */

        .card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 10px;
            box-shadow: none;
        }

        .card-header {
            padding: 15px 18px;
            background: #fff;
            color: var(--text);
            font-weight: 700;
            border-bottom: 1px solid var(--border);
        }

        .card-body {
            padding: 18px;
        }

        .card-footer {
            padding: 13px 18px;
            background: #fff;
            border-top: 1px solid var(--border);
        }

        .stat-card {
            border-left: 3px solid var(--primary);
        }

        /* TABLE */

        .table {
            --bs-table-bg: transparent;
            margin-bottom: 0;
            font-size: 13px;
            vertical-align: middle;
        }

        .table th {
            background: #F3F2F8;
            color: var(--primary);
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
            padding: 12px 14px;
            border-bottom: 1px solid var(--border);
        }

        .table td {
            padding: 12px 14px;
            border-color: var(--border);
            color: #46445A;
        }

        .table tbody tr:hover > * {
            --bs-table-bg: #FAF9FC;
        }

        /* BUTTON */

        .btn {
            padding: 8px 14px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-primary {
            --bs-btn-bg: var(--primary);
            --bs-btn-border-color: var(--primary);
            --bs-btn-hover-bg: var(--primary-hover);
            --bs-btn-hover-border-color: var(--primary-hover);
            --bs-btn-active-bg: var(--primary-hover);
            --bs-btn-active-border-color: var(--primary-hover);
        }

        .btn-outline-primary {
            --bs-btn-color: var(--primary);
            --bs-btn-border-color: #D6D3E7;
            --bs-btn-hover-bg: var(--primary);
            --bs-btn-hover-border-color: var(--primary);
            --bs-btn-hover-color: #fff;
        }

        .btn-light {
            --bs-btn-bg: var(--primary-light);
            --bs-btn-border-color: var(--primary-light);
            --bs-btn-color: var(--primary);
            --bs-btn-hover-bg: #E2DFF1;
            --bs-btn-hover-border-color: #E2DFF1;
            --bs-btn-hover-color: var(--primary);
        }

        /* FORM */

        .form-label {
            margin-bottom: 6px;
            color: #49475F;
            font-size: 13px;
            font-weight: 600;
        }

        .form-control,
        .form-select {
            padding: 9px 11px;
            border: 1px solid #DEDEE8;
            border-radius: 7px;
            color: var(--text);
            font-family: inherit;
            font-size: 13px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(63, 59, 115, .1);
        }

        .form-control::placeholder {
            color: #A3A2B2;
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        /* ALERT */

        .alert {
            padding: 12px 15px;
            margin-bottom: 18px;
            border: none;
            border-radius: 8px;
            font-size: 13px;
        }

        .alert-success {
            background: #E8F5EE;
            color: #216D55;
        }

        .alert-danger {
            background: #FBECEE;
            color: #A63B50;
        }

        .alert-warning {
            background: #FFF4DF;
            color: #8A6722;
        }

        .alert-info {
            background: var(--primary-light);
            color: var(--primary);
        }

        /* BOOTSTRAP COLOR OVERRIDES */

        .text-primary {
            color: var(--primary) !important;
        }

        .bg-primary {
            background-color: var(--primary) !important;
        }

        .bg-primary-subtle {
            background-color: var(--primary-light) !important;
        }

        /* FOOTER */

        .main-footer {
            padding: 14px 0;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 12px;
        }

        .footer-brand {
            color: var(--primary);
            font-weight: 700;
        }

        /* RESPONSIVE */

        @media (max-width: 991.98px) {
            .main-navbar .navbar-collapse {
                padding-top: 12px;
            }

            .main-navbar .nav-link {
                padding: 9px 10px !important;
            }

            .user-toggle {
                width: fit-content;
                margin-top: 8px;
            }
        }

        @media (max-width: 575.98px) {
            .main-content {
                padding-top: 20px;
                padding-bottom: 25px;
            }

            .card-body {
                padding: 15px;
            }

            .card-header {
                padding: 13px 15px;
            }

            .table th,
            .table td {
                padding: 10px;
            }
        }
    </style>
</head>

<body>

<?php if(auth()->guard()->check()): ?>
<nav class="navbar navbar-expand-lg navbar-dark main-navbar">
    <div class="container">

        <a class="navbar-brand" href="<?php echo e(route('dashboard')); ?>">
            SIAP Sertifikasi
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMain"
                aria-controls="navMain"
                aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">

            <ul class="navbar-nav me-auto ms-lg-3">

                <li class="nav-item">
                    <a class="nav-link <?php echo e(request()->routeIs('dashboard') ? 'active' : ''); ?>"
                       href="<?php echo e(route('dashboard')); ?>">
                        Dashboard
                    </a>
                </li>

                <?php if(auth()->user()->isAdmin()): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('peserta.*') ? 'active' : ''); ?>"
                           href="<?php echo e(route('peserta.index')); ?>">
                            Data Peserta
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('skema.*') ? 'active' : ''); ?>"
                           href="<?php echo e(route('skema.index')); ?>">
                            Data Skema
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('users.*') ? 'active' : ''); ?>"
                           href="<?php echo e(route('users.index')); ?>">
                            Kelola Akun
                        </a>
                    </li>
                <?php endif; ?>

                <?php if(auth()->user()->isPeserta()): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo e(request()->routeIs('skema.*') ? 'active' : ''); ?>"
                           href="<?php echo e(route('skema.index')); ?>">
                            Daftar Skema
                        </a>
                    </li>

                    <li class="nav-item">
                        <?php if(auth()->user()->peserta): ?>
                            <a class="nav-link <?php echo e(request()->routeIs('profil.*') ? 'active' : ''); ?>"
                               href="<?php echo e(route('profil.edit')); ?>">
                                Edit Profil
                            </a>
                        <?php else: ?>
                            <a class="nav-link <?php echo e(request()->routeIs('profil.*') ? 'active' : ''); ?>"
                               href="<?php echo e(route('profil.create')); ?>">
                                Daftar Skema Saya
                            </a>
                        <?php endif; ?>
                    </li>
                <?php endif; ?>

            </ul>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle user-toggle"
                       href="#"
                       id="userDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        <span class="user-name">
                            <?php echo e(auth()->user()->name); ?>

                        </span>
                        <span class="user-role">
                            (<?php echo e(auth()->user()->role); ?>)
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="userDropdown">
                        <li>
                            <form action="<?php echo e(route('logout')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="dropdown-item">
                                    Logout
                                </button>
                            </form>
                        </li>
                    </ul>

                </li>
            </ul>

        </div>
    </div>
</nav>
<?php endif; ?>

<main class="container main-content">

    <?php if(session('success')): ?>
        <div class="alert alert-success alert-dismissible fade show"
             role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    <?php endif; ?>

    <?php if(session('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">
            <?php echo e(session('error')); ?>

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    <?php endif; ?>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger alert-dismissible fade show"
             role="alert">
            <strong>Periksa kembali data yang dimasukkan.</strong>

            <ul class="mb-0 mt-2 ps-3">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Tutup"></button>
        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\JWD_Aplikasi_Peserta_Sertifikasi-Muhammad Rafi Satrya\resources\views/layouts/app.blade.php ENDPATH**/ ?>