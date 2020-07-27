@extends('frontend.layouts.app')

@section('content')
<section class="artikel">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Berita dikategori: <span class="text-danger">{{ $category->nama_kategori }}</span></h3>
                    </div>
                </div>
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card shadow-md mb-2">
                            <img class="card-img-top thumbnail-artikel" src="{{ asset('thumbnail-artikel') . '/' .$post->thumbnail_artikel }}" alt="Card image cap" height="215px">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-dark" href="{{ route('frontend.single-artikel', Str::slug($post->judul_artikel, '-')) }}">{{ $post->judul_artikel }}</a>
                                </h5>
                                <p class="card-text">
                                     <small class="text-muted">Diterbitkan: {{ date('d-m-Y' , strtotime($post->created_at)) }}</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

            @include('frontend.includes.sidebar')
        </div>
    </div>
</section>
@endsection
