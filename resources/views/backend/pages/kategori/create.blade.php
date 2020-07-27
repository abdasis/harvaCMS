@extends('backend.layouts.app')
@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Kategori</a></li>
                    <li class="breadcrumb-item active">Tambah Kategori</li>
                </ol>
            </div>
            <h4 class="page-title">Tambah Artikel</h4>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        @if (Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif
    </div>
</div>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Tambah Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.kategori.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" class="form-control" name="nama_kategori" required placeholder="Masukan Nama Kategori">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Tambah Kategori</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <table id="basic-datatable" class="table table-sm dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Dibuat</th>
                                    <th>Diupdate</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
        
        
                            <tbody>
                                @foreach ($categories as $key => $category)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $category->nama_kategori }}</td>
                                    <td>{{ date('d-m-Y', strtotime($category->created_at)) }}</td>
                                    <td>{{ date('d-m-Y', strtotime($category->updated_at)) }}</td>
                                    <td>
                                        <div class="button-list row">
                                            <a href="{{ route('admin.artikel.edit', $category->id) }}">
                                                <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                            </a>
                                            <form action="{{ route('admin.artikel.destroy', $category->id) }}" method="post" onsubmit="return confirm('Apakah anda yakin ingin hapus artikel ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                            </form>
                                            <a href="{{ route('frontend.single-artikel', Str::slug($category->judul_artikel, '-')) }}">
                                                <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
<!-- third party js -->
<script src="{{ url('/') }}/backend/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{ url('/') }}/backend/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ url('/') }}/backend/assets/js/pages/datatables.init.js"></script>
@endsection

@section('css')
 <!-- third party css -->
 <link href="{{ url('/') }}/backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <link href="{{ url('/') }}/backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <link href="{{ url('/') }}/backend/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <link href="{{ url('/') }}/backend/assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
 <!-- third party css end -->
@endsection
