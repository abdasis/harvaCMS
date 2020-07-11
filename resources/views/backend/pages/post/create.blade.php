@extends('backend.layouts.app')
@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Artikel</a></li>
                    <li class="breadcrumb-item active">Tambah Artikel</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Artikel</h4>
        </div>
    </div>
</div>
@endsection
@section('content')
<form action="{{ route('admin.artikel.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-12">
            @if (Session::has('status'))
                <div class="alert alert-success">{{ Session::get('status') }}</div>
            @endif
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Tambah Artikel</h3>

                    <div class="form-group">
                        <label for="">Judul Artikel</label>
                        <input type="text" value="{{ old('judul_artikel') }}" class="form-control" placeholder="Masukan Judul Artikel" name="judul_artikel">
                    </div>

                    <div class="form-group">
                        <label for="">Isi Artikel</label>
                        <textarea name="isi_artikel" placeholder="Tulis isi artikel disini" id="editor1" rows="10" cols="80">
                            {{ old('isi_artikel') }}
                        </textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Option</h3>
                    <div class="form-group">
                        <button class="btn btn-block btn-info"><i class="fa fa-paper-plane mr-1"></i>Simpan Artikel</button>
                    </div>

                    <div class="form-group">
                        <label>Pilih Status</label>
                        <select id="status_artikel" name="status_artikel" class="form-control">
                            <option>Drafted</option>
                            <option>Published</option>
                            <option>Featured</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pilih Kategori</label>
                        <select id="status_artikel" name="kategori_artikel" class="form-control">
                            <option>Pilih Kategori</option>
                            <option>Politik</option>
                            <option>Kemasyarakatan</option>
                            <option>Ruang Milineal</option>
                            <option>Ruang Desa</option>
                        </select>
                    </div>

                    <div class="form-group mb-0">
                        <label>Tambah Featured Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="thumbnail_artikel" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Pilih Gambar</label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('js')
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    $(document).ready(function() {
        tinymce.init({
            selector: "textarea",
            height : "480",
            relative_urls: false,
            paste_data_images: true,
            image_title: true,
            statusbar: false,
            menubar: false,
            automatic_uploads: true,
            images_upload_url: "/pmii-admin/ckeditor/upload",
            file_picker_types: "image",
            image_class_list: [
                {title: 'Full width', value: 'img-fluid img-responsive img-thumbnail'},
                {title: 'Bootstrap', value: 'w-100'},
            ],
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar1:
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
            // override default upload handler to simulate successful upload
            file_picker_callback: function(cb, value, meta) {
                var input = document.createElement("input");
                input.setAttribute("type", "file");
                input.setAttribute("accept", "image/*");
                input.onchange = function() {
                    var file = this.files[0];

                    var reader = new FileReader();
                    reader.readAsDataURL(file);
                    reader.onload = function() {
                        var id = "blobid" + new Date().getTime();
                        var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                        var base64 = reader.result.split(",")[1];
                        var blobInfo = blobCache.create(id, file, base64);
                        blobCache.add(blobInfo);
                        cb(blobInfo.blobUri(), { title: file.name });
                    };
                };
                input.click();
            }
        });
    });

    </script>
    <script src="{{ url('/') }}/backend/assets/libs/selectize/js/standalone/selectize.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/mohithg-switchery/switchery.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/multiselect/js/jquery.multi-select.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/select2/js/select2.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/jquery-mockjax/jquery.mockjax.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ url('/') }}/backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

    <!-- Init js-->
    <script src="{{ url('/') }}/backend/assets/js/pages/form-advanced.init.js"></script>
@endsection


@section('css')
<!-- Plugins css -->
<link href="{{ url('/') }}/backend/assets/libs/mohithg-switchery/switchery.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
<link href="{{ url('/') }}/backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css" />
@endsection
