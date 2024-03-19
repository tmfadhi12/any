<?php $__env->startSection('content'); ?>
    <div class="card card-rounded">
        <div class="card-body">
        <div class="card-body">
                  <h4 class="card-title">Lahan</h4>
                  <form class="form-sample" method="post" action="<?php echo e(route('store-lahan')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nama Lahan</label>
                          <div class="col-sm-9">
                            <input name="nama_lahan" type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Koordinat</label>
                          <div class="col-sm-9">
                            <input name="koordinat" type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sub</label>
                          <div class="col-sm-9">
                            <select name="id_sub" class="form-control">
                            <?php $__currentLoopData = $lahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($l->id_sub); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tanaman</label>
                          <div class="col-sm-9">
                            <select name="id_tanaman" class="form-control">
                              <?php $__currentLoopData = $lahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option><?php echo e($l->id_tanaman); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input name="keterangan" type="text" class="form-control">
                            </div>
                            </div>
                        </div>
                    </div>

                      <button type="submit" class="btn btn-success btn-rounded">Save</button>
                  </form>
                </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Fadhli\Documents\Kuliah\Semester 4\PKM DOSEN 1\bbpp2024\resources\views/pages/lahan/add.blade.php ENDPATH**/ ?>