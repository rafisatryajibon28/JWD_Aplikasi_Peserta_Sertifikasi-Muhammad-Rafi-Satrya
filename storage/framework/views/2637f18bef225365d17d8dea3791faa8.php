<?php $__env->startSection('title', 'Dashboard Peserta'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Dashboard Peserta</h4>
    <span class="text-muted">Halo, <?php echo e($user->name); ?></span>
</div>

<?php if(!$profil): ?>
    <div class="card mb-4">
        <div class="card-body text-center py-5">
            <h5 class="mb-2">Anda belum mendaftar skema</h5>
            <p class="text-muted mb-3">
                Silakan daftar skema sertifikasi yang ingin diikuti.
                Data yang Anda kirim akan muncul di dashboard admin.
            </p>
            <a href="<?php echo e(route('profil.create')); ?>" class="btn btn-primary">Daftar Skema</a>
        </div>
    </div>
<?php else: ?>
    <div class="alert alert-success">
        Anda sudah terdaftar sebagai peserta.
    </div>

    <div class="card mb-3">
        <div class="card-header bg-white d-flex justify-content-between align-items-center">
            <strong>Data Saya</strong>
            <a href="<?php echo e(route('profil.edit')); ?>" class="btn btn-warning btn-sm">Edit Data</a>
        </div>
        <div class="card-body">
            <table class="table table-borderless mb-0">
                <tr>
                    <td width="180" class="text-muted">Nama Lengkap</td>
                    <td class="fw-semibold"><?php echo e($profil->nama); ?></td>
                </tr>
                <tr>
                    <td class="text-muted">NIK</td>
                    <td><?php echo e($profil->nik); ?></td>
                </tr>
                <tr>
                    <td class="text-muted">Email</td>
                    <td><?php echo e($profil->email ?? '-'); ?></td>
                </tr>
                <tr>
                    <td class="text-muted">No. HP</td>
                    <td><?php echo e($profil->no_hp ?? '-'); ?></td>
                </tr>
                <tr>
                    <td class="text-muted">Alamat</td>
                    <td><?php echo e($profil->alamat ?? '-'); ?></td>
                </tr>
                <tr>
                    <td class="text-muted">Skema</td>
                    <td>
                        <?php if($profil->skema): ?>
                            <?php echo e($profil->skema->kode_skema); ?> - <?php echo e($profil->skema->nama_skema); ?>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JWD_Aplikasi_Peserta_Sertifikasi-Muhammad Rafi Satrya\resources\views/dashboard_peserta.blade.php ENDPATH**/ ?>