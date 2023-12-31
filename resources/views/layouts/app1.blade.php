<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.png')}}">
        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/components.css')}}" rel="stylesheet" type="text/css">
        <!--Custom CSS-->
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
        <!--Plugin CSS-->
        <link href="{{asset('css/plugin.css')}}" rel="stylesheet" type="text/css">
        <!--Flaticons CSS-->
        <link href="{{asset('fonts/flaticon.css')}}" rel="stylesheet" type="text/css">
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
        <link rel="stylesheet" href="{{asset('fonts/line-icons.css')}}" type="text/css">
        <!-- App Style -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('css/select2.min.css')}}" type="text/css">
        @yield('jsHead')
    </head>
    <body>
         <!-- Preloader -->
            {{-- <div id="preloader">
                <div id="status"></div>
            </div> --}}
        <!-- Preloader Ends -->
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

        @include('widgets.modal')

        <!-- *Scripts* -->
        <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
        {{-- <script src="{{asset('js/components.js')}}"></script> --}}
        <script src="{{asset('js/particles.js')}}"></script>
        <script src="{{asset('js/particlerun.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
        <script src="{{asset('js/custom-swiper.js')}}"></script>
        <script src="{{asset('js/custom-nav.js')}}"></script>
        <script src="{{asset('js/custom-date.js')}}"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>
        <script src="{{asset('js/iziToast.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>

        @yield('footer_scripts')
    </body>
</html>
