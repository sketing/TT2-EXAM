<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-US-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>StarWars</title>
    </head>
    <body>
        <!-- TOP PART-->
        <div id='site_top'>
            <div id='logo'>@include('inc.logo')</div>
            <div id='banner'>
                <div id='banner_image'>@include('inc.banner_image')</div>
                <div id='banner_menu'>
                    <div id='left'></div>
                    <div id='right'></div>
                </div>
            </div>
        </div>
        
        <!-- MAIN PART -->
        <div id='main'>
            <div id='sidebar'>@include('inc.sidebar')</div>
            <div id='main'>
                <div id='top_menu'>
                    <div id='left'></div>
                    <div id='right'></div>
                </div>
                <div id='main_part'>@yield('content')</div>
            </div>
        </div>
        
        <!-- BOTTOM PART-->    
        
        @include('inc.sidebar')
        
    </body>
</html>

