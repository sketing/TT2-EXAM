<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      @include('inc.banner_image')                
      @include('inc.navbar')    
      <div class="container-fluid">
        <div class="row">
          @include('inc.sidebar')
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
              <div class="container">
                @include('inc.messages')
                @yield('content')
              </div>
            </main> 
        </div>
      </div>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{asset('js/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('article-ckeditor'); alert("1");
    </script>

</body>
</html>
