<?php $__env->startSection('content'); ?>
    <div class="card card-rounded">
        <div class="card-body">
            <h4 class="card-title">List Panen</h4>
            <p class="card-description">
                <a href="" class="btn btn-rounded btn-success">Add Data Panen</a>
            </p>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Lahan</th>
                            <th>Petani</th>
                            <th>Tanggal Panen</th>
                            <th>Target</th>
                            <th>Capaian</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $panen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($p->id_lahan); ?></td>
                                <td><?php echo e($p->id_petani); ?></td>
                                <td><?php echo e($p->tgl_panen); ?></td>
                                <td><?php echo e($p->target); ?></td>
                                <td><?php echo e($p->capaian); ?></td>
                                <td><?php echo e($p->keterangan); ?></td>
                                <td>
                                    <a href="<?php echo e(route('lahan-edit', $p->id)); ?>" class="btn btn-warning btn-rounded">Edit</a>
                                    <form action="<?php echo e(route('lahan-delete', $p->id)); ?>" method="post" class="d-inline">
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

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhli\Documents\Kuliah\Semester 4\PKM DOSEN 1\bbpp2024\resources\views/pages/panen/index.blade.php ENDPATH**/ ?>