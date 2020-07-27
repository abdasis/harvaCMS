@extends('layouts.app')
@section('title')
    Login Page
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 ">
            <div class="card rounded-sm shadow-lg">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Login</h3>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email"">{{ __('email') }}</label>
                            <input placeholder="Masukan email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password"">{{ __('password') }}</label>
                            <input placeholder="Masukan Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-pink btn-block waves-effect">
                                <i class="mdi mdi-login"></i>Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
