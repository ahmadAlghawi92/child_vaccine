<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Child Care</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dist/img/child_icon_15.png')}}" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
<!--    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('dist/img/child_icon_5.png')}}" alt="Logo" height="200" width="200">
    </div>-->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/home" class="nav-link">Home</a>
            </li>

        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if(\Auth::user()->type == "2")

                        {{ Auth::user()->name }} <span class="caret"></span>
                        @else
                            {{ 'Nurse'}} <span class="caret"></span>


                            @endif
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="{{ asset('dist/img/child_icon_16.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 1">
            <span class="brand-text font-weight-light">Child Care</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/profile_icon.png" class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="info">
                    <a  class="d-block">{{Auth::user()->name}} </a>
            </div>

        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            <!-- Sidebar user panel (optional) -->
                 <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if(\Auth::user()->type == "1")
                <li class="nav-item ">
                    <a href="/search" class="nav-link active">
                        <i class="fas fa-baby"></i>
                        <p>
                               Children Table
                         </p>
                    </a>

                </li>
                @endif
                @if(\Auth::user()->type == "1")
                    <li class="nav-item ">
                        <a href="/searchParent"  class="nav-link" onclick="change_autorefreshdiv();">
                            <i class="fas fa-male">  </i>
                            <p>
                                Parents Table
                            </p>
                        </a>

                    </li>
                @endif
                @if(\Auth::user()->type == "2")
                    <li class="nav-item ">
                        <a href="#" class="nav-link active">
                            <i class="fas fa-calendar-alt"></i>
                            <p>
                                My Children Visit
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item ">
                                <a   class="nav-link active">
                                    <div id="childs"></div>
                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                    <script>
                                        function getChild () {
                                            $.ajax(
                                                {url: "/test",
                                                    success: function(result){
                                                        //console.log(result);
                                                        var table_data = "<table > <th>Name </th><th>Visit Date </th>"
                                                        for(var i = 0 ; i < result.length ; ++i) {
                                                            table_data = table_data + "<tr><td >"+result[i]["name"]+"</td><td>"+result[i]["visit_date"]+"</td></tr>"
                                                        }
                                                        table_data = table_data + "</table>"
                                                        $("#childs").html(table_data);
                                                    }
                                                }
                                            );
                                        }
                                        setInterval(getChild, 1000);
                                    </script>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                @if(\Auth::user()->type == "2")
                    <li class="nav-item">
                        <a href="/my_child" class="nav-link">
                            <i class="fas fa-baby"></i>
                            <p>
                                My Children
                             </p>
                        </a>
                    </li>
                @endif
                @if(\Auth::user()->type == "2")
                    <li class="nav-item">
                        <a href="/add_child_view/?user_id={{ucwords(Auth::user()->id)}}" class="nav-link">
                            <i class="fas fa-plus-circle"></i>
                            <p>
                                Add Child
                            </p>
                        </a>
                    </li>
                @endif


                @if(\Auth::user()->type == "1")
                    <li class="nav-header">Add | Edit | Delete</li>

                    <li class="nav-item">
                    <a href="/add_visit_view" class="nav-link">
                        <i class="fas fa-calendar-week"></i>
                        <p>
                            Visit
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/add_vaccine_view" class="nav-link">
                        <i class='fas fa-syringe'></i>
                        <p>
                            Vaccine
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                @endif
                @if(\Auth::user()->type == "2")

                <li class="nav-header">Information</li>
                    <li class="nav-item">
                        <a href="/beforeTheVisit" class="nav-link">
                            <i class="fas fa-user-nurse"></i>

                            <p>
                                 The Visit

                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/vaccineInfo" class="nav-link">
                            <i class="fas fa-syringe"></i>
                            <p>
                                Vaccines by Age

                            </p>
                        </a>
                    </li>
                @endif

                <li class="nav-header">Action</li>
                <!-- Navbar Search -->
                <!-- <li class="nav-item d-none d-sm-inline-block">
                      <a href="index3.html" class="nav-link">Home</a>
                    </li> -->
                <li class="nav-item">
                    <div class="theme-switch-wrapper nav-link">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox"   id="checkbox">
                            <span class="slider round"></span>
                            <p> Dark Mode </p>
                        </label>
                    </div>
                </li>
                <!-- <li class="nav-item">
                      <em class="nav-link">Enable Dark Mode!</em>
                    </li> -->
                <li class="nav-item">
                    <a href="/change_password" class="nav-link">
                        <i class="fas fa-key"></i>
                        <p>
                            Change Password
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i>

                        <p>   {{ __('Logout') }} </p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                 </li>
            </ul>

        </nav>

        </div>
             <!-- SidebarSearch Form -->


            <!-- Sidebar Menu -->

            <!-- /.sidebar-menu -->
    </aside>
         <!-- /.sidebar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @yield('content')

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong><a href="/">home</a>.</strong>

        <div class="float-right d-none d-sm-inline-block">
            <b>Child Care © Ahmad Al-Ghawi  </b>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script>
    var toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');
    var currentTheme = localStorage.getItem('theme');
    var mainHeader = document.querySelector('.main-header');

    if (currentTheme) {
        if (currentTheme === 'dark') {
            if (!document.body.classList.contains('dark-mode')) {
                document.body.classList.add("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-light')) {
                mainHeader.classList.add('navbar-dark');
                mainHeader.classList.remove('navbar-light');
            }
            toggleSwitch.checked = true;
        }
    }

    function switchTheme(e) {
        if (e.target.checked) {
            if (!document.body.classList.contains('dark-mode')) {
                document.body.classList.add("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-light')) {
                mainHeader.classList.add('navbar-dark');
                mainHeader.classList.remove('navbar-light');
            }
            localStorage.setItem('theme', 'dark');
        } else {
            if (document.body.classList.contains('dark-mode')) {
                document.body.classList.remove("dark-mode");
            }
            if (mainHeader.classList.contains('navbar-dark')) {
                mainHeader.classList.add('navbar-light');
                mainHeader.classList.remove('navbar-dark');
            }
            localStorage.setItem('theme', 'light');
        }
    }

    toggleSwitch.addEventListener('change', switchTheme, false);
</script>

</body>
</html>
