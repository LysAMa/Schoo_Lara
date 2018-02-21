<!doctype html>
<html lang="en" data-ng-app="dashboardApp">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title> {{isset($title) ? $title. ' | ' : ''}} School of Data</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!--     Semantic UI     -->
    <link rel="stylesheet" type="text/css" href="{{ asset('libs/semantic/dist/semantic.min.css')}}">
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=1.2.0')}}">
    <!--  CSS fo Demo Purpose, don t includ it in your project     -->
    <link rel="stylesheet" href="{{ asset('css/demo.css')}}">
    <!--     Fonts and icons     -->
    <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/css.css')}}" rel='stylesheet' type='text/css'>
    <!-- Custom CSS     -->
    <link href="{{ asset('css/custom-dashboard.css')}}" rel='stylesheet' type='text/css'>
    
</head>

<body data-ng-controller="DashboardCtrl">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="{{asset('images/sidebar-1.jpg')}}">
            <div class="logo">
                <a href="#" class="simple-text">
                    Schoda
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{route('home')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/profile')}}">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/projects')}}">
                            <i class="material-icons">content_paste</i>
                            <p>Projects</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/investigations')}}">
                            <i class="material-icons">library_books</i>
                            <p>Investigations</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/inbox')}}">
                            <i class="material-icons">inbox</i>
                            <p>Inbox</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="material-icons">location_on</i>
                            <p>Maps</p>
                        </a>
                    </li>
                    <li class="active-pro">

                        <a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                            <i class="material-icons">unarchive</i>
                            <p>LOG OUT</p>
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="#"> Material Dashboard </a>
                            </div>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li>
                                        <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="material-icons">dashboard</i>
                                            <p class="hidden-lg hidden-md">Dashboard</p>
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="material-icons">notifications</i>
                                            <span class="notification">5</span>
                                            <p class="hidden-lg hidden-md">Notifications</p>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="#">Mike John responded to your email</a>
                                            </li>
                                            <li>
                                                <a href="#">You have 5 new tasks</a>
                                            </li>
                                            <li>
                                                <a href="#">You re now friend with Andrew</a>
                                            </li>
                                            <li>
                                                <a href="#">Another Notification</a>
                                            </li>
                                            <li>
                                                <a href="#">Another One</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="material-icons">person</i>
                                            <p class="hidden-lg hidden-md">Profile</p>
                                        </a>
                                    </li>
                                </ul>
                                <form class="navbar-form navbar-right" role="search">
                                    <div class="form-group  is-empty">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <span class="material-input"></span>
                                    </div>
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                        <div class="ripple-container"></div>
                                    </button>
                                </form>
                            </div>
                        </div>
            </nav>
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
    
        <!--   Core JS Files   -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('libs/semantic/dist/semantic.min.js')}} type="text/javascript""></script><!--  Semantic UI Plugin -->
    <script src="{{asset('js/angular.min.js')}}" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="{{asset('js/chartist.min.js')}}"></script>
    <!--  Dynamic Elements plugin -->
    <script src="{{asset('js/arrive.min.js')}}"></script>
    <!--  PerfectScrollbar Library -->
    <script src="{{asset('js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('js/bootstrap-notify.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{asset('js/material-dashboard.js')}}"></script>

    <!-- Material Dashboard DEMO methods, don t it in your project! -->
    <script src="{{asset('js/demo.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

        });
    </script>

    <!-- Angular Apps -->
    <script src="{{asset('js/angular/Controllers/userProfileCtrl.js')}}"></script>
    <script src="{{asset('js/angular/Controllers/dashboardCtrl.js')}}"></script>
    <script src="{{asset('js/angular/Apps/dashboardApp.js')}}"></script>

</body>


</html>