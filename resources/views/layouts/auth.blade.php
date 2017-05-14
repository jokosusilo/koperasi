<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Project App') }}</title>
  
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/skin-black.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <script>
    window.Laravel = {!! json_encode([
        'csrfToken' => csrf_token(),
    ]) !!};
  </script>
</head>
<body class="layout-top-nav hold-transition skin-black">
<div class="wrapper" style="height: auto;">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/') }}" class="navbar-brand"><b>{{ config('app.name', 'Project App') }}</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li><a href="{{ route('login') }}">Login</a></li>
            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="content-wrapper" style="min-height: 315px;">
    <div class="container">
      <section class="content">
        @yield('content')
      </section>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/admin-lte.js') }}"></script>
</body>
</html>
