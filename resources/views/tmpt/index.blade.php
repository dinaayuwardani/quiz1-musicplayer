<!DOCTYPE html>
<html>
    <head>
        <title>MelodyMemory</title>
        <link href="{{ asset('css/application.min.css') }}" rel="stylesheet">
        <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
        <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
        <![endif]-->
        <link rel="shortcut icon" href="img/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Sing App - Bootstrap 4 Admin Dashboard Template">
        <meta name="keywords" content="bootstrap admin template,admin template,admin dashboard,admin dashboard template,admin,dashboard,bootstrap,template">
        <meta name="author" content="Flatlogic LLC">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script>
            /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
            chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
            https://code.google.com/p/chromium/issues/detail?id=332189
            */
        </script>
    </head>
    <body class="">
        <!--
          Main sidebar seen on the left. may be static or collapsing depending on selected state.
        
            * Collapsing - navigation automatically collapse when mouse leaves it and expand when enters.
            * Static - stays always open.
        -->
        <nav id="sidebar" class="sidebar" role="navigation">
            <!-- need this .js class to initiate slimscroll -->
            <div class="js-sidebar-content">
                <header class="logo d-none d-md-block">
                    <a href="https://demo.flatlogic.com/sing-app/"><span>Melody Memory</span></a>
                </header>
                <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
                     looks good, so adding it and enhancing with notifications -->
                <div class="sidebar-status d-md-none">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="thumb-sm avatar float-right">
                            <img class="rounded-circle" src="demo/img/people/a5.jpg" alt="...">
                        </span>
                        <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                             should be used with bg-* and text-* classes for colors -->
                        <span class="circle bg-warning fw-bold text-gray-dark">
                            13
                        </span>
                        &nbsp;
                        Philip <strong>Smith</strong>
                        <b class="caret"></b>
                    </a>
                    <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
                </div>
                <!-- main notification links are placed inside of .sidebar-nav -->
                <ul class="sidebar-nav">
                    <li class=" active ">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="{{ url('/') }}">
                            <span class="icon">
                                <i class="fi flaticon-home"></i>
                            </span>
                            Dashboard
                        </a>
                    </li>
                </ul>
                <!-- every .sidebar-nav may have a title -->
                <h5 class="sidebar-nav-title">Melody Memory<a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
                <ul class="sidebar-nav">


                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="{{ url('artist') }}">
                            <span class="icon">
                                <i class="fi flaticon-controls"></i>
                            </span>
                            Artist
                        </a>
                    </li>
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="{{ url('album') }}">
                            <span class="icon">
                                <i class="fi flaticon-equal-1"></i>
                            </span>
                            Album
                        </a>
                    </li>
                    <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="{{ url('track') }}">
                            <span class="icon">
                                <i class="fi flaticon-alarm"></i>
                            </span>
                            Track
                        </a>
                    </li>
                     <li class="">
                        <!-- an example of nested submenu. basic bootstrap collapse component -->
                        <a href="{{ url('played') }}">
                            <span class="icon">
                                <i class="fi flaticon-layers"></i>
                            </span>
                            Played
                        </a>
                    </li>
                </ul>

                 
                 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                
                
                <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Dina Ayu Wardani</b>
            </div>
        </div>


                    </div>
                </div>
            </div>
        </nav>            <!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
            <nav class="page-controls navbar navbar-dashboard">
                 
                <div class="container-fluid">
                    <!-- .navbar-header contains links seen on xs & sm screens -->
                    <div class="navbar-header mr-md-3">
                        <ul class="nav navbar-nav">
                            <li class="nav-item">
                                <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                                <a class="d-none d-lg-block nav-link" id="nav-state-toggle" href="#">
                                    <i class="la la-bars"></i>
                                </a>
                                <!-- shown on xs & sm screen. collapses and expands navigation -->
            
                                <a class="d-lg-none nav-link" id="nav-collapse-toggle" href="#">
                                    <span class="square square-lg d-md-none"><i class="la la-bars"></i></span>
                                    <i class="la la-bars d-none d-md-block"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="la la-refresh"></i></a></li>
                            <li class="nav-item ml-n-xs d-none d-md-block ml-3"><a href="#" class="nav-link"><i class="la la-times"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right d-md-none">
                            <li class="nav-item">
                                <!-- toggles chat -->
                                <a class="nav-link" href="#" data-toggle="chat-sidebar">
                                    <span class="square square-lg"><i class="la la-globe"></i></span>
                                </a>
                            </li>
                        </ul>
                        <!-- xs & sm screen logo -->
                    </div>
            
                    <!-- this part is hidden for xs screens -->
                    <div class="navbar-header mobile-hidden">
                        <!-- search form! link it to your search server -->
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <div class="input-group input-group-no-border ml-4">
                                    <input class="form-control" id="main-search" type="text" placeholder="Search Dashboard">
                                    <span class="input-group-append">
                                        <span class="input-group-text">
                                            <i class="la la-search"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </nav>            

        <div class="content-wrap">
            <!-- main page content. the place to put widgets in. usually consists of .row > .col-lg-* > .widget.  -->
            <main id="content" class="content" role="main">
                <!-- Page content -->
                    @yield('content')
            </main>
        </div>

        

        <!-- The Loader. Is shown when pjax happens -->
        <div class="loader-wrap hiding hide">
            <i class="fa fa-circle-o-notch fa-spin-fast"></i>
        </div>

   


        <!-- common app js -->
        <script src="{{ asset('js/settings.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>


        <!-- page specific js -->
        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>