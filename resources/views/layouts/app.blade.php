<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>247Monitor Management Portal</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flag-icon.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fakeLoader.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/scoop-vertical.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery.mCustomScrollbar.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="fakeLoader"></div>
        <div id="scoop" class="scoop">
            <div class="scoop-overlay-box"></div>
            <div class="scoop-container">  
                <header class="scoop-header">
                    <div class="scoop-wrapper"> 
                        <div class="scoop-left-header"> 
                            <div class="scoop-logo"> 
                                <a href="{{ url('/') }}"><span class="logo-icon"><i class="ion-stats-bars"></i></span>
                                    <span class="logo-text">247Monitor<span class="hide-in-smallsize"></span></span></a>
                            </div> 
                        </div>
                        <div class="scoop-right-header"> 
                            <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="icon-menu"></i></a></div> 
                            <div class="scoop-rr-header">
                                <ul> 
                                    @if (!Auth::guest())
                                    <li class="icons">
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            Welcome {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li class="icons">
                                        <a href="javascript:void(0)" title="Logout" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="scoop-main-container">
                    <div class="scoop-wrapper">

                        <nav class="scoop-navbar">  
                            <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                            <div class="scoop-inner-navbar"> 
                                @if (Auth::guest())
                                <ul class="scoop-item scoop-brand">
                                    <li class="active">
                                        <a href="{{ route('login') }}">
                                            <span class="scoop-micon"><i class="icon-speedometer"></i></span>
                                            <span class="scoop-mtext">Login</span>
                                            <span class="scoop-mcaret"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('register') }}">
                                            <span class="scoop-micon"><i class="icon-speedometer"></i></span>
                                            <span class="scoop-mtext">Register</span>
                                            <span class="scoop-mcaret"></span>
                                        </a>
                                    </li>
                                </ul> 
                                @else
                                <ul class="scoop-item scoop-brand">
                                    <li class="active">
                                        <a href="javascript:void(0)">
                                            <span class="scoop-micon"><i class="icon-speedometer"></i></span>
                                            <span class="scoop-mtext">DashBoard</span>
                                            <span class="scoop-mcaret"></span>
                                        </a>
                                    </li>
                                </ul> 
                                @endif
                            </div> 
                        </nav> 


                        @yield('content')
                    </div> 
                </div>
            </div>
        </div>

        <script src="{{ asset('js/jquery.1.11.3.min.js') }}"></script>
        <script src="{{ asset('js/lib/fakeLoader.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scoop.min.js') }}"></script>
        <script src="{{ asset('js/vertical-demo.js') }}"></script>
        <script src="{{ asset('js/lib/echarts/echarts-all.js') }}"></script>
        <script src="{{ asset('js/lib/echarts/theme/echarts-theme.js') }}"></script>
        <script src="{{ asset('js/lib/sparkline.min.js') }}"></script>
        <script src="{{ asset('js/lib/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ asset('js/lib/jquery.mousewheel.min.js') }}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->    
    </body>
</html>