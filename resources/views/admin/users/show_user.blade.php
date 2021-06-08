@extends('layouts.app')


@section('content')



<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <h1><a href="{{ url('/') }}"><img src="{{asset('imge/logo.png')}}" alt="logo" style="width:70px;height:70px;max-height:70px;" /></a></h1>

        </div>

        <nav id="navbar" class="navbar order-last order-lg-0 justify-content-center">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('home')}}">Home</a></li>
                <li><a class="nav-link scrollto " href="{{route('management-user.index')}}">User Mangement</a></li>
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


@if(is_null($user))
<div class="container">
    <form action="{{route('save_info')}}" method="POST">
        @csrf
        <div class="row " style="margin-top:60px">
            <div class="col-lg-6">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="age">Age</label>
                <input type="text" name="age" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="academic_year">Academic Year</label>
                <input type="text" name="academic_year" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="university_id">University ID</label>
                <input type="text" name="university_id" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="facebook_link">Facebook page link</label>
                <input type="text" name="facebook_link" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="mobile">Mobile number</label>
                <input type="text" name="mobile" class="form-control">
            </div>
            <div class="col-lg-6">
                <label for="reason">Reason for joining</label>
                <textarea name="reason" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>

            <div class="col-lg-6">
                <label for="team_join">The name of the team you want to join </label>
                <br>
                <div class="row">
                    <div class="col-lg-3">
                        <input type="radio" name="team" value="mega team"> Mega team
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="team" value="وعد الهمه"> وعد الهمة
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="team" value="قانوني هماوي"> قانوني هماوي
                    </div>
                    <div class="col-lg-3">
                        <input type="radio" name="team" value="منابر الفقه"> منابر الفقه
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <button type="submit" class="btn btn-success mt-5">Save Info</button>
            </div>
        </div>
    </form>
</div>
@else
<div class="container">
    <div class="row " style="margin-top:100px">
        <div class="col-lg-12">

            <h2>{{$user->first_name}} Information</h2>
            <p>
                First Name : {{$user->first_name}}
            </p>

            <p>
                Last Name : {{$user->last_name}}
            </p>

            <p>
                Age : {{$user->age}}
            </p>

            <p>
                Academic Year : {{$user->academic_year}}
            </p>


            <p>
                University ID : {{$user->university_id}}
            </p>

            <p>
                Facebook page link : {{$user->facebook_link}}
            </p>

            <p>
                Mobile number : {{$user->mobile}}
            </p>

            <p>
                Reason for joining : {{$user->reason}}
            </p>


            <p>
                The name of the team you want to join: {{$user->team}}
            </p>




        </div>

    </div>
</div>
@endif



@endsection
