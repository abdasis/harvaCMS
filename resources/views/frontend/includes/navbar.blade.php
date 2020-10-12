@php
    $categories = App\Models\Category::all();
@endphp


<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    <div class="container-fluid">
        <!-- LOGO -->
        <a class="logo text-uppercase" href="{{ url('/') }}">
             <img src="{{ url('/') }}/backend/assets/images/logo-arah-indonesia.jpg" alt="" class="logo-light" height="50" />
            {{-- <img src="{{ url('/') }}/frontend/assets/images/logo-dark.png" alt="" class="logo-dark" height="20" />  --}}
            {{-- <h4 class="text-dark font-weight-bolder">ARAH INDONESIA</h4> --}}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto" id="mySidenav">
                @foreach ($categories as $category)
                <li class="nav-item">
                    <b><a href="{{ $category->slug }}" class="nav-link">{{ $category->nama_kategori }}</a></b>
                </li>
                @endforeach
            </ul>

        </div>
    </div>
</nav>
