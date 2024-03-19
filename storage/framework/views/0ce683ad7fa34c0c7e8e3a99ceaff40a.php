<?php $__env->startSection('content'); ?>
    <div class="card card-rounded">
        <div class="card-body">
            <h4 class="card-title">List Lahan</h4>
            <p class="card-description">
                <a href="lahan-add" class="btn btn-rounded btn-success">Add Data Lahan</a>
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lahan</th>
                            <th>Koordinat</th>
                            <th>Keterangan</th>
                            <th>Sub</th>
                            <th>Tanaman</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $lahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($l->nama_lahan); ?></td>
                            <td><?php echo e($l->koordinat); ?></td>
                            <td><?php echo e($l->keterangan); ?></td>
                            <td><?php echo e($l->id_sub); ?></td>
                            <td><?php echo e($l->id_tanaman); ?></td>
                            <td>
                                <a href="<?php echo e(route('lahan-edit', $l->id)); ?>" class="btn btn-warning btn-rounded">Edit</a>
                                <form action="<?php echo e(route('lahan-delete', $l->id)); ?>" method="post" class="d-inline">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhli\Documents\Kuliah\Semester 4\PKM DOSEN 1\bbpp2024\resources\views/pages/lahan/index.blade.php ENDPATH**/ ?>