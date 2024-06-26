<?php $__env->startSection('content'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.9/xlsx.full.min.js"></script>
    <div class="container-fluid py-4 px-5">
        <div class="row">
            <div class="col-12">
                <div class="card border shadow-xs mb-4">
                    <div class="card-header border-bottom pb-0">
                        <div class="d-sm-flex align-items-center">
                            <div>
                                <h6 class="font-weight-semibold text-lg mb-0">Members list</h6>
                                <p class="text-sm">See information about all members</p>
                            </div>
                            <div class="ms-auto d-flex">
                                <button id="exportToExcel" class="btn btn-primary">Export to Excel</button>
                            </div>
                            <form action="" method="GET">
                                <div class="input-group w-sm-100">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                                        </svg>
                                    </span>
                                    <input type="text" name="keyword" class="form-control" placeholder="Search" value="<?php echo e(old('keyword', $keyword)); ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body px-0 py-0">

                        <div class="table-responsive p-0">
                            <table id= "myTable" class="table align-items-center mb-0">
                                <thead class="bg-gray-100">
                                    <tr>
                                    <th class="text-secondary text-xs opacity-7 orderable"></th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama Lengkap</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Tempat/Tanggal Lahir</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Jenis Kelamin</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Agama</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Alamat Lengkap</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Nomor Telepon</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Almat Email</th>
                                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">NIK</th>

                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Pendidikan</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Intitusi</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Jurusan</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Tahun masuk</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Tahun lulus</th>

                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Pengalaman kerja</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Bidang</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Tahun</th>
                                    <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Posisi</th>
                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $count = 0; // Initialize count variable
                                    ?>
                                    <?php $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $count++; // Increment count for each item
                                    ?>
                                    <tr>
                                        

                                        <td>
                                            <div class="dropdown">
                                                
                                                <a href="#" class="btn bg-gradient-dark dropdown-toggle d-flex justify-content-center align-items-center" data-bs-toggle="dropdown" id="navbarDropdownMenuLink2" style="width: 3px; height: 25px;">
                                                    <?php echo e($count); ?>

                                                </a>
                                                <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink2">
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo e(route('editpenduduk', $kontak->id)); ?>">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16" style="margin-right: 10px;">
                                                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
                                                                </svg>
                                                                edit
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo e(route('deletependuduk', $kontak->id)); ?>">
                                                            <div>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16" style="margin-right: 10px;">
                                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                                                </svg>
                                                                hapus
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                
                                                <div class="d-flex flex-column justify-content-center ms-1">
                                                    <h6 class="mb-0 text-sm font-weight-semibold"><?php echo e($kontak->namalengkap); ?></h6>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->TTL); ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <?php if($kontak->gender == 'Wanita'): ?>
                                                <span class="badge badge-sm border border-success text-success"><?php echo e($kontak->gender); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-sm border border-secondary text-secondary"><?php echo e($kontak->gender); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->agama); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->alamat); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->phonenumber); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->email); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->No_ktp); ?></p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <?php if($kontak->pendidikan == 'Tidak ada'): ?>
                                                <span class="badge badge-sm border border-danger text-danger"><?php echo e($kontak->pendidikan); ?></span>
                                            <?php elseif($kontak->pendidikan == 'SD atau setara'): ?>
                                                <span class="badge badge-sm border border-warning text-warning"><?php echo e($kontak->pendidikan); ?></span>
                                            <?php elseif($kontak->pendidikan == 'SMP atau setara'): ?>
                                                <span class="badge badge-sm border border-info text-info"><?php echo e($kontak->pendidikan); ?></span>
                                            <?php elseif($kontak->pendidikan == 'SMA atau setara'): ?>
                                                <span class="badge badge-sm border border-dark text-dark"><?php echo e($kontak->pendidikan); ?></span>
                                            <?php elseif($kontak->pendidikan == 'D3 atau setara'): ?>
                                                <span class="badge badge-sm border border-secondary text-secondary"><?php echo e($kontak->pendidikan); ?></span>
                                            <?php elseif($kontak->pendidikan == 'Pendidikan tinggi atau setara'): ?>
                                                <span class="badge badge-sm border border-primary text-primary"><?php echo e($kontak->pendidikan); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge-sm border border-danger text-danger">nope</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->institusi); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->jurusan); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->tahunmasuk); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->tahunlulus); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->pengalaman); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->bidang); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->tahun); ?></p>
                                        </td>
                                        <td>
                                            <p class="text-sm text-dark font-weight-semibold mb-0"><?php echo e($kontak->posisi); ?></p>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <?php

                        use App\Models\Penduduk;

                        // Get the total number of items from the 'users' table
                        $totalItems = Penduduk::count();

                        // Number of items per page
                        $itemsPerPage = 5;

                        // Calculate the total number of pages
                        $totalPages = ceil($totalItems / $itemsPerPage);

                        // Determine the current page number
                        $currentPage = request()->query('page', 1);

                        // Calculate the offset for the current page
                        $offset = ($currentPage - 1) * $itemsPerPage;

                        // Fetch items for the current page
                        $items = Penduduk::skip($offset)->take($itemsPerPage)->get();

                        // Display items for the current page
                        foreach ($items as $item) {
                            // echo "Item: $item->id - $item->name<br>";
                        }

                        // Display pagination controls
                    ?>
                    <div class="border-top py-3 px-3 d-flex align-items-center">
                        <p class="font-weight-semibold mb-0 text-dark text-sm">Page <?php echo $currentPage; ?> of <?php echo $totalPages; ?></p>
                        <div class="ms-auto">
                            <?php if ($currentPage > 1) : ?>
                                <a href="?page=<?php echo $currentPage - 1; ?>" class="btn btn-sm btn-white mb-0">Previous</a>
                            <?php endif; ?>
                            <?php if ($currentPage < $totalPages) : ?>
                                <a href="?page=<?php echo $currentPage + 1; ?>" class="btn btn-sm btn-white mb-0">Next</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            // Function to export data to Excel
            function exportToExcel() {
                var data = [
                    ['Nama Lengkap', 'TTL', 'Jenis Kelamin', 'Agama', 'Nomor Telepon', 'Email', 'NIK',
                        'Pendidikan Terakhir', 'Institusi', 'Jurusan', 'Tahun masuk', 'Tahun lulus',
                        'Pengalaman Kerja', 'Bidang', 'Tahun bekerja', 'Posisi'
                    ],
                    <?php $__empty_1 = true; $__currentLoopData = $kontaks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kontak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        ['<?php echo e($kontak->namalengkap); ?>', '<?php echo e($kontak->TTL); ?>', '<?php echo e($kontak->gender); ?>', '<?php echo e($kontak->agama); ?>', '<?php echo e($kontak->phonenumber); ?>', '<?php echo e($kontak->email); ?>', '<?php echo e($kontak->No_ktp); ?>',
                        '<?php echo e($kontak->pendidikan); ?>', '<?php echo e($kontak->institusi); ?>', '<?php echo e($kontak->jurusan); ?>', '<?php echo e($kontak->tahunmasuk); ?>', '<?php echo e($kontak->tahunlulus); ?>',
                        '<?php echo e($kontak->pengalaman); ?>', '<?php echo e($kontak->bidang); ?>', '<?php echo e($kontak->tahun); ?>', '<?php echo e($kontak->posisi); ?>'
                        ],
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        // No data
                    <?php endif; ?>
                ];

                var wb = XLSX.utils.book_new();
                var ws = XLSX.utils.aoa_to_sheet(data);
                XLSX.utils.book_append_sheet(wb, ws, 'Data');
                XLSX.writeFile(wb, 'Data.xlsx');
            }

            $('#exportToExcel').click(function () {
                exportToExcel();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Script untuk menampilkan SweetAlert setelah berhasil mengedit admin
        <?php if(session('success')): ?>
            Swal.fire({
                title: 'Berhasil!',
                text: '<?php echo e(session('success')); ?>',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>

        // Custom JavaScript to prevent dropdown menu from auto-closing
        document.addEventListener('DOMContentLoaded', function () {
            // Get all dropdown toggles
            var dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            // Loop through dropdown toggles and attach click event listener
            dropdownToggles.forEach(function (toggle) {
                toggle.addEventListener('click', function (event) {
                    // Prevent default behavior (closing dropdown)
                    event.preventDefault();
                    event.stopPropagation();

                    // Check if the dropdown menu is already open
                    var isOpen = this.getAttribute('aria-expanded') === 'true';

                    // Toggle the aria-expanded attribute to manually control the dropdown menu visibility
                    this.setAttribute('aria-expanded', !isOpen);

                    // Toggle the 'show' class to manually control the dropdown menu visibility
                    var dropdownMenu = this.nextElementSibling;
                    dropdownMenu.classList.toggle('show');
                });
            });

            // Close dropdown menu when clicking outside
            document.addEventListener('click', function (event) {
                var dropdownMenus = document.querySelectorAll('.dropdown-menu');
                dropdownMenus.forEach(function (menu) {
                    if (!menu.contains(event.target)) {
                        menu.classList.remove('show');
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.kalogakbisa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/get-in/resources/views/databasependuduk.blade.php ENDPATH**/ ?>