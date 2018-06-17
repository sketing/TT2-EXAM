<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="author" content="">
      <meta name="description" content="">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon"/>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Scripts -->
      <script src={{ asset('js/app.js') }} defer></script>


      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="utf-8">
  </head>

  <body style="overflow: scroll;">
    <div id="app">
      @include('inc.banner_image')                
      @include('inc.navbar')    
      <div class="container-fluid">
        <div class="row">
          @include('inc.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="padding-top:30px;">
              <div class="container">
                @include('inc.messages')
                @yield('content')
              </div>
        </div>
      </div>
    </div>
  </body>
</html>

{{--@yield('content')--}}
</head>
</html>
