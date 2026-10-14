<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SIAP Sertifikasi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        :root {
            --primary: #3F3B73;
            --primary-hover: #302C5B;
            --background: #F7F7FA;
            --border: #E8E7EF;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            background: var(--background);
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        .auth-card {
            max-width: 420px;
            margin: auto;
            border: 1px solid var(--border);
            border-radius: 10px;
        }

        .app-name {
            color: var(--primary);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .form-label {
            font-size: 13px;
            font-weight: 600;
        }

        .form-control {
            padding: 10px 12px;
            border-color: #DEDEE8;
            border-radius: 7px;
            font-size: 13px;
        }

        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(63, 59, 115, .1);
        }

        .form-check-input:checked {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-primary {
            padding: 10px;
            background: var(--primary);
            border-color: var(--primary);
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        a {
            color: var(--primary);
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container px-3">
    <div class="card auth-card shadow-sm">
        <div class="card-body p-4">

            <div class="text-center mb-4">
                <div class="app-name mb-2">SIAP SERTIFIKASI</div>
                <h4 class="fw-bold mb-1">Login</h4>
                <p class="text-muted small mb-0">
                    Aplikasi Pengelolaan Data Peserta Sertifikasi
                </p>
            </div>

            <?php if(session('success')): ?>
                <div class="alert alert-success py-2 small">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger py-2 small">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email"
                           class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           value="<?php echo e(old('email')); ?>"
                           required autofocus>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password"
                           class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                           required>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-check mb-4">
                    <input type="checkbox" name="remember"
                           class="form-check-input" id="remember">
                    <label class="form-check-label small" for="remember">
                        Ingat saya
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>
            </form>

            <p class="text-center text-muted mt-4 mb-0">
                Belum punya akun?
                <a href="<?php echo e(route('register')); ?>" class="fw-semibold">Daftar</a>
            </p>

        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\laragon\www\JWD_Aplikasi_Peserta_Sertifikasi-Muhammad Rafi Satrya\resources\views/auth/login.blade.php ENDPATH**/ ?>