<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-5">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Detail Hasil Test</h6>
                                <p class="text-sm">See information about Detail hasil test</p>
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="<?php echo e(route('admin.riwayat-test.index')); ?>" class="btn btn-warning mx-3 ">Kembali</a>

                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <table class="table table-borderless">
                            <tr>
                                <th>Nama Penduduk</th>
                                <td> : </td>
                                <td><?php echo e($item->penduduk->namalengkap); ?></td>
                            </tr>
                            <tr>
                                <th>No. KTP</th>
                                <td> : </td>
                                <td><?php echo e($item->penduduk->No_ktp); ?></td>
                            </tr>
                            <tr>
                                <th>No. Telepon</th>
                                <td> : </td>
                                <td><?php echo e($item->penduduk->phonenumber); ?></td>
                            </tr>
                            <tr>
                                <th>Nama Test</th>
                                <td> : </td>
                                <td><?php echo e($item->test->nama_test); ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Pelaksanaan</th>
                                <td> : </td>
                                <td><?php echo e($item->test->tanggal_pelaksanaan); ?></td>
                            </tr>
                            <tr>
                                <th>Anggota Test</th>
                                <td> : </td>
                                <td><?php echo e($item->test->anggota_test); ?></td>
                            </tr>
                            <tr>
                                <th>Rata-rata</th>
                                <td> : </td>
                                <td><?php echo e($item->rata_rata()); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Test Uji Kemampuan Detail</h6>
                                <p class="text-sm">See information about Test Uji Kemampuan Detail</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Detail</th>
                                        <th class="text-secondary text-xs opacity-7">Nilai</th>
                                        
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php $__currentLoopData = $item->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7">
                                                <?php echo e($detail->test_detail->nama); ?></td>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($detail->nilai); ?>

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

<?php echo $__env->make('layouts.kalogakbisa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/get-in/resources/views/riwayat-test/show.blade.php ENDPATH**/ ?>