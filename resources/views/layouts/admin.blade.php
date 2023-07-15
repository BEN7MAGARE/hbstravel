<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - HBSTravel</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('fonts/flaticon.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('fonts/line-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
</head>

<body style="overflow: visible;">

    <div id="preloader" style="display: none;">
        <div id="status" style="display: none;"></div>
    </div>

    @include('includes.header')

    <section class="breadcrumb-main pb-2" style="background-image: url(images/bg/bg8.jpg);">
        <div class="dot-overlay"></div>
    </section>
    
    <div id="dashboard" class="pt-10 pb-10">
        <div class="container">
            <div class="dashboard-main">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="back-to-top">
        <a href="#"></a>
    </div>

    @include('includes.footer')


    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugin.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/custom-nav.js') }}"></script>
    <script src="{{ asset('js/jpanelmenu.min.js') }}"></script>
    <script src="{{ asset('js/dashboard-custom.js') }}"></script>
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <script src="{{ asset('js/iziToast.min.js') }}"></script>

    @yield('footer_scripts')


    <div id="lightboxOverlay" tabindex="-1" class="lightboxOverlay" style="display: none;"></div>
    <div id="lightbox" tabindex="-1" class="lightbox" style="display: none;">
        <div class="lb-outerContainer">
            <div class="lb-container"><img class="lb-image"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    alt="">
                <div class="lb-nav"><a class="lb-prev" aria-label="Previous image" href=""></a><a
                        class="lb-next" aria-label="Next image" href=""></a></div>
                <div class="lb-loader"><a class="lb-cancel"></a></div>
            </div>
        </div>
        <div class="lb-dataContainer">
            <div class="lb-data">
                <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
                <div class="lb-closeContainer"><a class="lb-close"></a></div>
            </div>
        </div>
    </div>
</body>

</html>
