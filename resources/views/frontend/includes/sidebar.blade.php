@php
    $recents = App\Models\Post::orderBy('created_at' , 'DESC')->paginate(5);
    $categories = App\Models\Category::all();
@endphp

<div class="col-md-3">
                <div class="card shadow-md">
                    <div class="card-header border-bottom bg-white">
                        <span class="font-weight-bolder">
                            KATEGORI
                        </span>
                    </div>
                    <div class="card-body p-0 bg-white-gray">
                        <ul class="list-group list-group-flush bg-transparent">
                            @foreach ($categories as $categori)
                            <li class="list-group-item list-group-item-custom"><a class="font-weight-bold" href="{{ route('artikel.kategori', $categori->slug) }}">{{ $categori->nama_kategori }}</a></li>
                            @endforeach
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
                                <img src="{{ asset('thumbnail-artikel') . '/' .$recent->thumbnail_artikel }}"  class="col-md-4 card-img p-0 rounded" height="100" width="100" alt="" style="object-fit: cover; object-position: center">
                                <div class="col-md-8 py-2">
                                    <p class="card-text text-muted font-11 font-weight-light m-0"><i class="mdi mdi-calendar"></i> {{ date('d-m-Y', strtotime($recent->created_at)) }}</p>
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
