<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

{{-- admin-links --}}
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
		
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<!-- Fontawesome CSS -->
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

<!-- Lineawesome CSS -->
<link rel="stylesheet" href="{{asset('assets/css/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/material.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/select2.min.css')}}">

<!-- Chart CSS -->
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">    

<!-- Main CSS -->
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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
                </div>
            </div>
        </nav> --}}

        <main class="py-4">
           {{-- Check if the current route name is not login or register --}}
@if (!in_array(Route::currentRouteName(), ['login', 'register']))
@include('layouts.header')
@include('layouts.sidebar')
@endif

        @yield('content')
          
        @include('layouts.footer')

        </main>
    </div>
    @yield('script')
    	<!-- jQuery -->
        <script data-cfasync="false" src="{{asset('assets/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="assets/js/jquery-3.7.1.min.js" type="c3844462acb1e9333a21a328-text/javascript"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		
		<!-- Slimscroll JS -->
		<script src="{{asset('js/jquery.slimscroll.min.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		<script src="{{asset('js/jquery.dataTables.min.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
		<script src="{{asset('js/dataTables.bootstrap4.min.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
        <script src="{{asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
        <script src="{{asset('js/moment.min.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
		<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
        <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
		<script src="{{asset('js/select2.min.js')}}" type="1d723db31c777fcda3486e93-text/javascript"></script>
		
		<!-- Chart JS -->
		<script src="{{asset('assets/plugins/morris/morris.min.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		<script src="{{asset('assets/js/chart.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		<script src="{{asset('assets/js/greedynav.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>

		 <!-- Theme Settings JS -->
		<script src="{{asset('assets/js/layout.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		<script src="{{asset('assets/js/theme-settings.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>

		<!-- Custom JS -->
		<script src="{{asset('assets/js/app.js')}}" type="c3844462acb1e9333a21a328-text/javascript"></script>
		
    <script src="{{asset('assets/../../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="c3844462acb1e9333a21a328-|49" defer></script>

</body>
</html>
