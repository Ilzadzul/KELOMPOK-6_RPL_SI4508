<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4 px-2">
                    <form action="" method="get">
                        <div class='form-group'>
                            <label for='test_id'>Test</label>
                            <select name='test_id' id='test_id' class='form-control <?php $__errorArgs = ['test_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'>
                                <option value='' selected>Semua</option>
                                <?php $__currentLoopData = $data_test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($test->id == request('test_id')): echo 'selected'; endif; ?> value='<?php echo e($test->id); ?>'><?php echo e($test->nama_test); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['test_id'];
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
                            <label for='penduduk_id'>Penduduk</label>
                            <select name='penduduk_id' id='penduduk_id'
                                class='form-control <?php $__errorArgs = ['penduduk_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>'>
                                <option value='' selected>Semua</option>
                                <?php $__currentLoopData = $data_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penduduk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if($penduduk->id == request('penduduk_id')): echo 'selected'; endif; ?> value='<?php echo e($penduduk->id); ?>'>
                                        <?php echo e($penduduk->namalengkap . ' | No. KTP : ' . $penduduk->No_ktp); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['penduduk_id'];
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
                        <div class="form-group ">
                            <div class="float-right">
                                <button class="btn btn-sm btn-secondary">Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Riwayat Hasil Test</h6>
                                <p class="text-sm">See information about Riwayat Hasil Test</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Penduduk</th>
                                        <th class="text-secondary text-xs opacity-7">No. KTP</th>
                                        <th class="text-secondary text-xs opacity-7">Nama Test</th>
                                        <th class="text-secondary text-xs opacity-7">Tanggal Pelaksana</th>
                                        <th class="text-secondary text-xs opacity-7">Tempat Pelaksana</th>
                                        <th class="text-secondary text-xs opacity-7">Anggota Test</th>
                                        <th class="text-secondary text-xs opacity-7">Rata-rata</th>
                                        <th class="text-secondary text-xs opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($item->penduduk->namalengkap); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($item->penduduk->No_ktp); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($item->test->nama_test); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <?php echo e($item->test->tanggal_pelaksanaan); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <?php echo e($item->test->tempat_pelaksanaan); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($item->test->anggota_test); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($item->rata_rata()); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <a href="<?php echo e(route('admin.riwayat-test.show', $item->id)); ?>"
                                                    class="btn btn-sm btn-info">Detail</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>

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

<?php echo $__env->make('layouts.kalogakbisa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/get-in/resources/views/riwayat-test/index.blade.php ENDPATH**/ ?>