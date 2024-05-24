@extends('layouts.kalogakbisa')

@section('content')
<div class="card mb-3 m-lg-6 p-4"> 
    <form id="jobForm">
        <div class="card mb-3 m-lg-6 p-8 shadow-none" style="background-color: #F3FAFF;">
            <h2 class="text-center">Produksi dan Manufaktur</h2>
            <div id="jobDescriptionContainer">
                <p id="jobDescription">
                    <strong>Posisi:</strong><br>
                    Operator Produksi<br><br>
                    <strong>Deskripsi Pekerjaan:</strong><br>
                    Operator Produksi bertanggung jawab untuk mengoperasikan mesin dan peralatan di lantai produksi, memastikan proses produksi berjalan lancar sesuai dengan standar yang telah ditetapkan. Tugas utamanya meliputi mengawasi dan mengontrol mesin produksi, menjaga kualitas produk, serta melakukan perawatan dasar pada peralatan produksi.<br><br>
                    <strong>Tugas dan Tanggung Jawab:</strong><br>
                    - Mengoperasikan dan mengawasi mesin produksi.<br>
                    - Memastikan produk yang dihasilkan sesuai dengan standar kualitas.<br>
                    - Melakukan pengecekan dan pemeliharaan rutin pada mesin dan peralatan produksi.<br>
                    - Menyusun laporan harian mengenai hasil produksi dan masalah yang dihadapi.<br>
                    - Mematuhi prosedur keselamatan kerja dan kebersihan di area produksi.<br>
                    - Berkoordinasi dengan tim untuk memecahkan masalah teknis yang terjadi selama proses produksi.<br><br>
                    <strong>Kualifikasi:</strong><br>
                    - Pendidikan minimal SMA/SMK, lebih disukai dari jurusan Teknik atau sejenis.<br>
                    - Pengalaman kerja minimal 1 tahun di bidang produksi/manufaktur.<br>
                    - Mampu mengoperasikan mesin produksi dan peralatan terkait.<br>
                    - Mengerti dasar-dasar keselamatan kerja di lingkungan manufaktur.<br>
                    - Bersedia bekerja dalam sistem shift.<br>
                    - Memiliki kemampuan komunikasi yang baik dan mampu bekerja dalam tim.<br><br>
                    <strong>Lokasi:</strong><br>
                    Bandung - Jawa Barat<br><br>
                    <strong>Gaji:</strong><br>
                    Rp5.000.000,-<br><br>
                    <strong>Cara Melamar:</strong><br>
                    Kirimkan CV dan surat lamaran lengkap ke getin@gmail.com atau melalui situs web Get-IN sebelum 20 Agustus 2024.
                </p>
            </div>

            <!-- Hidden Trix Editor for Editing -->
            <input id="x" type="hidden" name="content">
            <trix-editor id="trixEditor" input="x" class="d-none"></trix-editor>
            
            <!-- Buttons for Edit, Save, and Cancel -->
            <div class="text-center">
                <button type="button" id="editButton" class="btn btn-primary">Edit</button>
                <button type="button" id="saveButton" class="btn btn-success d-none">Save</button>
                <button type="button" id="cancelButton" class="btn btn-secondary d-none">Cancel</button>
            </div>
        </div>
    </form>
</div>

<!-- Include Trix Editor CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editButton = document.getElementById('editButton');
        const saveButton = document.getElementById('saveButton');
        const cancelButton = document.getElementById('cancelButton');
        const jobDescriptionContainer = document.getElementById('jobDescriptionContainer');
        const jobDescription = document.getElementById('jobDescription');
        const trixEditor = document.getElementById('trixEditor');
        const trixInput = document.getElementById('x');

        editButton.addEventListener('click', function () {
            jobDescription.classList.add('d-none');
            trixInput.value = jobDescription.innerHTML.trim();
            trixEditor.classList.remove('d-none');
            trixEditor.editor.loadHTML(trixInput.value);
            editButton.classList.add('d-none');
            saveButton.classList.remove('d-none');
            cancelButton.classList.remove('d-none');
        });

        saveButton.addEventListener('click', function () {
            jobDescription.innerHTML = trixEditor.editor.getDocument().toString();
            jobDescription.classList.remove('d-none');
            trixEditor.classList.add('d-none');
            editButton.classList.remove('d-none');
            saveButton.classList.add('d-none');
            cancelButton.classList.add('d-none');
        });

        cancelButton.addEventListener('click', function () {
            jobDescription.classList.remove('d-none');
            trixEditor.classList.add('d-none');
            editButton.classList.remove('d-none');
            saveButton.classList.add('d-none');
            cancelButton.classList.add('d-none');
        });
    });
</script>
@endsection
