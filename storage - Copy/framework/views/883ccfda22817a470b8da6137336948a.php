<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Tambah Detail Test Uji Kemampuan</h6>
                                
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="<?php echo e(route('admin.test-uji-kemampuan-detail.index', [
                                    'test_uji_kemampuan_id' => $test_uji_kemampuan->id,
                                ])); ?>"
                                    class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <form action="<?php echo e(route('admin.test-uji-kemampuan-detail.store')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input type="text" name="test_uji_kemampuan_id" value="<?php echo e($test_uji_kemampuan->id); ?>" hidden>
                            <div class='form-group mb-3'>
                                <label for='nama' class='mb-2'>Nama Detail</label>
                                <input type='text' name='nama' id='nama'
                                    class='form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e(old('nama')); ?>'>
                                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <div class='invalid-feedback'>
                                        <?php echo e($message); ?>

                                    </div>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/datatables.net/jquery.dataTables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/datatables.net-bs4/dataTables.bootstrap4.js')); ?>"></script>
    <script>
        $(function() {
            $('#dtTable').DataTable();
        })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.kalogakbisa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/get-in/resources/views/test-uji-kemampuan-detail/create.blade.php ENDPATH**/ ?>