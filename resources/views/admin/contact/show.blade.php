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
                <li><a class="nav-link scrollto " href="">User Mangement</a></li>
                <li><a class="nav-link scrollto " href="{{route('management_contact')}}">Contact Menagement</a></li>
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


<div class="container" style="margin-top:200px">

    <div class="row justify-content-center">
        <div class="col-8" style="border:2px solid #d19c34">
            <div class="your_info p-5">
                <h3 class="text-center mb-5"><span style="color:#d19c34">Name</span> :{{$contact->name}}
                    <h3>
                        <p><span style="color:#d19c34">Email</span> : {{$contact->email}}</p>
                        <p><span style="color:#d19c34">Subject</span> : {{$contact->subject}}</p>
                        <p><span style="color:#d19c34">Message</span> : {{$contact->message}}</p>
            </div>
        </div>
    </div>
</div>

@endsection
