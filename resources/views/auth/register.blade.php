@extends('layouts.app')

@section('content')
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <h1><a href="{{ url('/') }}"><img src="{{asset('imge/logo.png')}}" alt="logo" style="width:70px;height:70px;max-height:70px;" /></a></h1>

        </div>

        <nav id="navbar" class="navbar order-last order-lg-0 justify-content-center">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('index')}}">Home</a></li>
                @guest
                @if (Route::has('login'))
                <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                @endif
                @if (Route::has('register'))
                <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">
            <a href="https://twitter.com/BeHmtna?s=09" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.facebook.com/BeHmtna/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://instagram.com/bhmtna_bnqdr?igshid=bfj7elosumfp" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href=" https://t.me/Be9mtna" class="linkedin"><i class="fab fa-telegram"></i></i></a>
        </div>

    </div>
</header><!-- End Header -->


<div class="container">
    <div class="row justify-content-center" style="margin-top:200px">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="background-color:#d19c34;color:#fff;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" style="color:#d19c34">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="color:#d19c34">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="color:#d19c34">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color:#d19c34">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="border:none;background-color:#d19c34">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
