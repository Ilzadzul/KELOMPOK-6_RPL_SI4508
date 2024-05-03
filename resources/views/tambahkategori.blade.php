@extends('layouts.kalogakbisa')
@section('content')

<div class="card mb-3 m-lg-6 p-4"> 
    <form method="post">
        <div class="card mb-3 m-lg-6 p-8 shadow-none" style="background-color: #F3FAFF;">
            <h2 class="text-center">Tambahkan Kategori Pekerjaan Baru</h2>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Kategori Pekerjaan</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="bodyTextarea" class="col-sm-4 col-form-label">Body (Teks)</label>
                <div class="col-sm-10">
                    <textarea id="bodyTextarea" name="bodyTextarea"></textarea>
                </div>
            </div>
            <div class="text-center mt-3" id="button-container">
                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                <button type="button" class="btn btn-secondary" style="background-color: #DDE2E5; color: #8D8D8D">Batal</button>
            </div>
        </div>
    </form>
</div>


<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    });
  </script>
@endsection
