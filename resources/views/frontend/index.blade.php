@extends('frontend.layouts.app')

@section('content')
<section class="artikel">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-white-gray b-top-orange">
                            <div class="card-header bg-white border-bottom">
                                Politik
                            </div>
                            <div class="card-body">
                                @foreach ($posts->take(3)->get() as $key => $post)
                                    @if ($key == 0)
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
                                    @else
                                    <div class="card box-artikel bg-white shadow-md mb-2">
                                        <div class="row card-body m-0 p-0 ">
                                            <img src="{{ asset('thumbnail-artikel') . '/' .$post->thumbnail_artikel }}" class="col-md-4 card-img p-0 rounded" alt="">

                                            <div class="col-md-8 py-1">
                                                <p class="card-text text-pink font-12 font-weight-bold m-0"><i class="mdi mdi-check-circle text-blue"></i></i>{{ $post->user->name }}</p>
                                                <h1 class="font-16 m-0">
                                                    <a class="text-dark" href="{{ route('frontend.single-artikel', Str::slug($post->judul_artikel, '-')) }}">{{ $post->judul_artikel }}</a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-white-gray b-top-pink">
                            <div class="card-header bg-white border-bottom">
                                Kemasyarakatan
                            </div>
                            <div class="card-body">
                                @foreach ($posts->take(3)->get() as $key => $post)
                                    @if ($key == 0)
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
                                    @else
                                    <div class="card box-artikel bg-white shadow-md mb-2">
                                        <div class="row card-body m-0 p-0 ">
                                            <img src="{{ asset('thumbnail-artikel') . '/' .$post->thumbnail_artikel }}" class="col-md-4 card-img p-0 rounded" alt="">
                                            <div class="col-md-8 py-1">
                                                <p class="card-text text-danger font-12 font-weight-bold m-0"><i class="mdi mdi-check-circle text-blue"></i>{{ $post->user->name }}</p>
                                                <h1 class="font-16 m-0">
                                                    <a class="text-dark" href="{{ route('frontend.single-artikel', Str::slug($post->judul_artikel, '-')) }}">{{ $post->judul_artikel }}</a>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        @foreach ($posts->paginate(5) as $post)
                    <div class="card box-artikel bg-white shadow-md mb-3">
                        <div class="row ">
                            <div class="col-md-5 p-0">
                                <div class="container">
                                    <img src="{{ asset('thumbnail-artikel') . '/' .$post->thumbnail_artikel }}" class="img-responsive rounded d-block thumbnail-artikel" alt="">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="card-body d-flex flex-column py-3">
                                    <p class="text-dark font-13 font-weight-bolder"><i class="mdi mdi-check-circle text-blue"></i>{{ $post->user->name }}</p>
                                    <h1 class="font-20">
                                        <a class="text-dark" href="{{ route('frontend.single-artikel', Str::slug($post->judul_artikel, '-')) }}">{{ $post->judul_artikel }}</a>
                                    </h1>
                                    <div class="mt-auto">
                                        <small class="text-muted">Diterbitkan: {{ date('d-m-Y', strtotime($post->created_at)) }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-md">
                    <div class="card-header border-bottom bg-white">
                        <span class="font-weight-bolder">
                            KATEGORI
                        </span>
                    </div>
                    <div class="card-body p-0 bg-white-gray">
                        <ul class="list-group list-group-flush bg-transparent">
                            <li class="list-group-item list-group-item-custom">Politik</li>
                            <li class="list-group-item list-group-item-custom">Ekonomi</li>
                            <li class="list-group-item list-group-item-custom">Keuangan</li>
                            <li class="list-group-item list-group-item-custom">Olah Raga</li>
                            <li class="list-group-item list-group-item-custom">Teknologi</li>
                        </ul>
                    </div>
                </div>

                <div class="card shadow-md">
                    <div class="card-header border-bottom bg-white">
                        Post Terbaru
                    </div>

                    @foreach ($recents as $recent)
                    <div class="card-body p-1 bg-white-gray">
                        <div class="card box-artikel bg-white shadow-md mb-0">
                            <div class="row card-body m-0 p-0 ">
                                <img src="{{ asset('thumbnail-artikel') . '/' .$recent->thumbnail_artikel }}"  class="col-md-4 card-img p-0 rounded" alt="">
                                <div class="col-md-8 py-2">
                                    <p class="card-text text-muted font-11 font-weight-light m-0"><i class="mdi mdi-calendar"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</p>
                                    <h1 class="font-14 m-0">
                                        <a class="text-dark" href="{{ route('frontend.single-artikel', Str::slug($recent->judul_artikel, '-')) }}">{{ $recent->judul_artikel }}</a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
