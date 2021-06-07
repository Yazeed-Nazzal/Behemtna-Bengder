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


<div class="container">
    <div class="row" style="margin-top:100px">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color:#d19c34">#</th>
                        <th scope="col" style="color:#d19c34">Name</th>
                        <th scope="col" style="color:#d19c34">Email</th>
                        <th scope="col" style="color:#d19c34">Delete</th>
                        <th scope="col" style="color:#d19c34">Show</th>
                        <th scope="col" style="color:#d19c34">Send Task</th>
                        <th scope="col" style="color:#d19c34">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $id = 0
                    @endphp
                    @foreach($users as $user)
                    <tr>
                        @php
                        $id +=1;
                        @endphp
                        <th scope="row">{{$id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <form action="{{route('management-user.destroy',$user->id)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn"><i class="fas fa-trash-alt text-danger"></i></button>
                            </form>
                        </td>
                        <td>
                            <a href="{{route('management-user.show',$user->id)}}"><i class="fas fa-eye text-success mt-2"></i></a>
                        </td>
                        <td>
                            @if ($user->approved)
                                <a href="/SendTask/{{$user->id}}"><i class="fas fa-comments text-warning"></i></a>

                            @else
                                <p class=" btn btn-sm btn-danger">You Can't Send Tasks Before Approve Member </p>
                            @endif
                        </td>
                        @if ($user->approved)
                            <td><a  href="UserBlock/{{$user->id}}"><i class="fas fa-ban text-danger"></i></a></td>
                        @else
                            <td><a href="UserApproved/{{$user->id}}"><i class="fas fa-user-plus text-success"></i></a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
