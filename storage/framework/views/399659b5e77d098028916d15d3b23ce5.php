<?php $__env->startSection('title', 'Data Skema'); ?>

<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4 class="mb-0">Data Skema Sertifikasi</h4>
    <?php if(auth()->user()->isAdmin()): ?>
        <a href="<?php echo e(route('skema.create')); ?>" class="btn btn-primary btn-sm">+ Tambah Skema</a>
    <?php endif; ?>
</div>

<form method="GET" action="<?php echo e(route('skema.index')); ?>" class="mb-3">
    <div class="input-group" style="max-width: 450px;">
        <input type="text" name="search" class="form-control"
               placeholder="Cari kode atau nama skema..." value="<?php echo e($search); ?>">
        <button type="submit" class="btn btn-outline-secondary">Cari</button>
        <?php if($search): ?>
            <a href="<?php echo e(route('skema.index')); ?>" class="btn btn-outline-danger">Reset</a>
        <?php endif; ?>
    </div>
</form>

<div class="card">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Skema</th>
                        <th>Nama Skema</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $skemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($skemas->firstItem() + $i); ?></td>
                        <td><?php echo e($s->kode_skema); ?></td>
                        <td><?php echo e($s->nama_skema); ?></td>
                        <td>
                            <a href="<?php echo e(route('skema.show', $s->id)); ?>" class="btn btn-info btn-sm">Detail</a>
                            <?php if(auth()->user()->isAdmin()): ?>
                                <a href="<?php echo e(route('skema.edit', $s->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('skema.destroy', $s->id)); ?>" method="POST" class="d-inline"
                                      onsubmit="return confirm('Yakin ingin menghapus skema ini?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted py-4">
                            <?php if($search): ?>
                                Tidak ada skema untuk "<?php echo e($search); ?>".
                            <?php else: ?>
                                Belum ada data skema.
                                <?php if(auth()->user()->isAdmin()): ?>
                                    <a href="<?php echo e(route('skema.create')); ?>">Tambah skema</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php if($skemas->hasPages()): ?>
<div class="mt-3">
    <?php echo e($skemas->links()); ?>

</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\JWD_Aplikasi_Peserta_Sertifikasi-Muhammad Rafi Satrya\resources\views/skema/index.blade.php ENDPATH**/ ?>