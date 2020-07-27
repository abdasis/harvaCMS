@extends('frontend.layouts.app')

@section('content')
<section class="artikel">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-white-gray b-top-orange">
                            <div class="card-header bg-white border-bottom font-weight-bolder">
                                Politik
                            </div>
                            <div class="card-body">
                                @foreach ($posts->where('kategori_artikel', 'POLITIK')->take(3)->get() as $key => $post)
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
                            <div class="card-header bg-white border-bottom font-weight-bolder">
                                Keuangan
                            </div>
                            <div class="card-body">
                                @foreach (App\Models\Post::where('kategori_artikel', 'KEUANGAN')->take(3)->get() as $key => $post)
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
                        @foreach (App\Models\Post::paginate(5) as $post)
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
                    <div class="col-md-12">
                        {{ App\Models\Post::paginate(5)->links() }}
                    </div>
                </div>
            </div>

            @include('frontend.includes.sidebar')
        </div>
    </div>
</section>
@endsection
