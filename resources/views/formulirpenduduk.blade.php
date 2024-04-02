@extends('layouts.kalogakbisa')
@section('content')

    <div class="card mb-3 m-lg-6 p-4"> 
        <form>
            <div class="card mb-3 m-lg-6 p-8 shadow-none" style="background-color: #F3FAFF;">
                <h2 class="text-center">Formulir Data Penduduk</h2>
                <h5 class="bold">Step 1 : Melengkapi Data Diri</h5>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tempat/Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Telepon</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">No. KTP</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="inputPassword3">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary mt-3" onclick="addFormField()">
                            <i class="fas fa-plus"></i> Tambah Kolom
                        </button>
                    </div>
                </div>
                <h5 class="bold">Step 2 : Melengkapi Riwayat Pendidikan</h5>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Riwayat Pendidikan Terakhir</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Institusi</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tahun Masuk</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Tahun Lulus (Sesuai Dengan Ijazah)</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary mt-3" onclick="addFormField()">
                            <i class="fas fa-plus"></i> Tambah Kolom
                        </button>
                    </div>
                </div>
                <h5 class="bold">Step 3 : Pengalaman Kerja</h5>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Pengalaman Kerja</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Bidang Pekerjaan</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-4 col-form-label">Dari Tahun - Hingga</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div id="form-fields">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Posisi Sebagai</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3">
                        </div>
                    </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="button" class="btn btn-primary mt-3" onclick="addFormField()">
                            <i class="fas fa-plus"></i> Tambah Kolom
                        </button>
                    </div>
                </div>
                <div class="text-center mt-3" id="button-container">
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button type="button" class="btn btn-secondary" style="background-color: #DDE2E5; color: #8D8D8D">Cancel</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Fungsi untuk menambahkan kolom pada formulir
        function addFormField() {
            var formFields = document.getElementById("form-fields");
            var newField = document.createElement("div");
            newField.innerHTML = `
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Judul Kolom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judulKolom" contenteditable="true">
                    </div>
                </div>
            `;
            var nikRow = document.getElementById("inputPassword3").closest('.row');
            formFields.insertBefore(newField, nikRow.nextSibling);
            var label = prompt("Masukkan nama untuk label baru:");
            newField.querySelector('label').innerText = label;
        }

        // Fungsi untuk menyimpan kolom
        function saveColumn() {
            var judulKolom = document.getElementById("judulKolom").value;
            // Lakukan sesuatu dengan judul kolom yang disimpan, misalnya kirim ke server
            console.log("Judul Kolom: ", judulKolom);
        }

        // Fungsi untuk membatalkan formulir
        function cancelForm() {
            // Lakukan sesuatu ketika tombol "Cancel" ditekan
        }
    </script>

@endsection
