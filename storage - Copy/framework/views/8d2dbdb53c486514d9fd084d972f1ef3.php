<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Edit Jadwal Bimbingna Karir</h6>
                                
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="<?php echo e(route('admin.jadwal-bimbingan-karir.index')); ?>"
                                    class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <form action="<?php echo e(route('admin.jadwal-bimbingan-karir.update', $item->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>
                            <div class='form-group mb-3'>
                                <label for='' class='mb-2'>Nama Lengkap <span class='text-danger'>*</span></label>
                                <input type='text' name='' id=''
                                    class='form-control <?php $__errorArgs = [''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'
                                    value='<?php echo e($item->penduduk->namalengkap); ?>' readonly>
                                <?php $__errorArgs = [''];
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
                            <div class='form-group mb-3'>
                                <label for='' class='mb-2'>No. KTP <span class='text-danger'>*</span></label>
                                <input type='text' name='' id=''
                                    class='form-control <?php $__errorArgs = [''];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'
                                    value='<?php echo e($item->penduduk->No_ktp); ?>' readonly>
                                <?php $__errorArgs = [''];
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
                            <div class='form-group mb-3'>
                                <label for='waktu' class='mb-2'>Waktu <span class='text-danger'>*</span></label>
                                <input type='datetime-local' name='waktu' id='waktu'
                                    class='form-control <?php $__errorArgs = ['waktu'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e($item->waktu); ?>'>
                                <?php $__errorArgs = ['waktu'];
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
                            <div class='form-group mb-3'>
                                <label for='tempat' class='mb-2'>Tempat <span class='text-danger'>*</span></label>
                                <input type='text' name='tempat' id='tempat'
                                    class='form-control <?php $__errorArgs = ['tempat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value='<?php echo e($item->tempat); ?>'>
                                <?php $__errorArgs = ['tempat'];
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
                            <div class='form-group mb-3'>
                                <label for='nama_mentor' class='mb-2'>Nama Mentor <span
                                        class='text-danger'>*</span></label>
                                <input type='text' name='nama_mentor' id='nama_mentor'
                                    class='form-control <?php $__errorArgs = ['nama_mentor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'
                                    value='<?php echo e($item->nama_mentor); ?>'>
                                <?php $__errorArgs = ['nama_mentor'];
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
                            <div class='form-group'>
                                <label for='status'>Status <span class='text-danger'>*</span></label>
                                <select name='status' id='status'
                                    class='form-control <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'>
                                    <option value='' selected disabled>Pilih Status</option>
                                    <option <?php if($item->status === 'scheduled'): echo 'selected'; endif; ?> value="scheduled">Dijadwalkan</option>
                                    <option <?php if($item->status === 'completed'): echo 'selected'; endif; ?> value="completed">Selesai</option>
                                    <option <?php if($item->status === 'canceled'): echo 'selected'; endif; ?> value="canceled">Dibatalkan</option>
                                    <option <?php if($item->status === 'rescheduled'): echo 'selected'; endif; ?> value="rescheduled">Dijadwal Ulang</option>
                                    <option <?php if($item->status === 'in_progress'): echo 'selected'; endif; ?> value="in_progress">Sedang Berlangsung</option>
                                    <option <?php if($item->status === 'no_show'): echo 'selected'; endif; ?> value="no_show">Tidak Hadir</option>
                                    <option <?php if($item->status === 'pending'): echo 'selected'; endif; ?> value="pending">Tertunda</option>
                                </select>
                                <?php $__errorArgs = ['status'];
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
                                <button class="btn btn-primary">Update Data</button>
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

<?php echo $__env->make('layouts.kalogakbisa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/get-in/resources/views/jadwal-bimbingan-karir/edit.blade.php ENDPATH**/ ?>