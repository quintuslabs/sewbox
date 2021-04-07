<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="LILY Tailor Management System">
        <meta name="author" content="MD INZAMUL HAQUE">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset($setting->fav_icon)}}">
        <!-- App title -->
        <title>@yield('title') | {{ $setting->title }}</title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App css -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/core.css') }}" rel="stylesheet">    
        <link href="{{ asset('css/components.css') }}" rel="stylesheet">      
        <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/login.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>


        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">

        <section id="wrapper" class="login-register">
            <!--<div class="title-box">
                <img src="{{ asset('images/lily-logo-min.png') }}" width="80px"><p class="font-size-20 dtext">A simple Tailor Shop Management System.</p>-->
            </div>
            <div class="login-box login-sidebar">
                <div class="white-box">

                    <a href="javascript:void(0)" class="text-center db">
                            <img src="{{ asset($setting->logo)}}" alt="Home" width="100px" />
                            
                        </a>      

                    @yield('content')

                    <footer class="page-copyright">
	                    <p>BY <a class="font-w600" href="http://quintuslabs.com" target="_blank"> Quintus Labs</a></p>
	                    <p>© <span>{{date('Y')}}</span>. All RIGHT RESERVED.</p>
	                </footer>

                </div>
            </div>
        </section>    

        <!-- jQuery -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/detect.js') }}"></script>
        <script src="{{ asset('js/fastclick.js') }}"></script>
        <script src="{{ asset('js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('js/waves.js') }}"></script>
        <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    </body>
</html>
