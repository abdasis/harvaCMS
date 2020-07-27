@extends('backend.layouts.app')
@section('page-title')
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Artikel</a></li>
                    <li class="breadcrumb-item active">Semua Artikel</li>
                </ol>
            </div>
            <h4 class="page-title">Semua Artikel</h4>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row mb-2">
    <div class="col-12">
        <a href="{{ route('admin.artikel.create') }}" class="">
            <button type="button" class="btn btn-primary waves-effect">
                <i class="mdi mdi-plus mr-1"></i>Tambah Artikel
            </button> 
        </a>

        <a href="{{ route('admin.kategori.create') }}" class="">
            <button type="button" class="btn btn-danger waves-effect">
                <i class="mdi mdi-plus mr-1"></i>Tambah Kategori
            </button> 
        </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @if (Session::has('status'))
            <div class="alert alert-success">
                {{ Session::get('status') }}
            </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Seluruh Artikel</h4>
                <p class="text-muted font-13 mb-4">
                    Semua artikel yang berstatus akan di tampilkan di Beranda dan di lihat oleh public
                </p>

                <table id="basic-datatable" class="table table-sm dt-responsive nowrap w-100">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Penulis</th>
                            <th>Komentar</th>
                            <th>Status</th>
                            <th>Ditulis</th>
                            <th>Diupdate</th>
                            <th>Option</th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($posts as $key => $post)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $post->judul_artikel }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ $post->jumlah_komentar }} Komentar</td>
                            <td>
                                @if ($post->status_artikel == 'Published')
                                    <div class="badge badge-soft-success p-1">{{ $post->status_artikel }}</div>
                                @elseif($post->status_artikel == 'Drafted')
                                    <div class="badge badge-soft-dark p-1">{{ $post->status_artikel }}</div>
                                @else
                                    <div class="badge badge-soft-info p-1">{{ $post->status_artikel }}</div>
                                @endif
                            </td>
                            <td>{{ (date('d-m-Y', strtotime($post->created_at))) }}</td>
                            <td>{{ (date('d-m-Y', strtotime($post->updated_at))) }}</td>
                            <td>
                                <div class="button-list row">
                                    <a href="{{ route('admin.artikel.edit', $post->id) }}">
                                        <button class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                    </a>
                                    <form action="{{ route('admin.artikel.destroy', $post->id) }}" method="post" onsubmit="return confirm('Apakah anda yakin ingin hapus artikel ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button>
                                    </form>
                                    <a href="{{ route('frontend.single-artikel', Str::slug($post->judul_artikel, '-')) }}">
                                        <button class="btn btn-success btn-sm"><i class="fa fa-eye"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
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
