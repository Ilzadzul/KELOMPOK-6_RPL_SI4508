<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Test Uji Kemampuan Detail</h6>
                                <p class="text-sm">See information about all members</p>
                            </div>
                            <div class="ms-auto d-flex">
                                <a href="<?php echo e(route('admin.test-uji-kemampuan.index')); ?>"
                                    class="btn btn-warning mx-3 ">Kembali</a>

                                <a href="<?php echo e(route('admin.test-uji-kemampuan-detail.create', [
                                    'test_uji_kemampuan_id' => $test_uji_kemampuan->id,
                                ])); ?>"
                                    class="btn btn-primary">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-2">
                        <div class="table-responsive p-0">
                            <table id="dtTable" class="table mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                        <th class="text-secondary text-xs opacity-7">Test Uji Kemampuan</th>
                                        <th class="text-secondary text-xs opacity-7">Detail</th>
                                        <th class="text-secondary text-xs opacity-7">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-secondary text-xs opacity-7">
                                                <?php echo e($item->test_uji_kemampuan->nama_test); ?></td>
                                            <td class="text-secondary text-xs opacity-7"><?php echo e($item->nama); ?>

                                            </td>
                                            <td class="text-secondary text-xs opacity-7">
                                                <a href="<?php echo e(route('admin.test-uji-kemampuan-detail.edit', $item->id)); ?>"
                                                    class="btn btn-sm btn-info">Edit</a>
                                                <form
                                                    action="<?php echo e(route('admin.test-uji-kemampuan-detail.destroy', $item->id)); ?>"
                                                    method="post" class="d-inline">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
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

<?php echo $__env->make('layouts.kalogakbisa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/get-in/resources/views/test-uji-kemampuan-detail/index.blade.php ENDPATH**/ ?>