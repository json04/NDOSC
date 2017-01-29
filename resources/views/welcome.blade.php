<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>NORTH DAVAO CLINIC Online System</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/material-kit.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet"/>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

    </head>

    <body>

        <!-- Navbar will come here -->
        <nav class="navbar navbar-danger navbar-transparent navbar-absolute" id="index-navbar">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <p class="navbar-brand" id="welcome-brand">NORTH DAVAO ORTHOPAEDIC & SPINE CLINIC</p>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                        <li>
                            <!--Middleware for Secretary-->
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        <li>
                            <!--Middleware for Secretary-->
                            <a href="{{ url('/screate') }}">Create</a>
                        </li>
                        <li>
                            <!--Middleware for Secretary-->
                            <a href="{{ url('/print') }}">Print</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                        </li>
                    </ul>
            </div>
            </div>
        </nav>
    <!-- end navbar -->
    <div class="wrapper">
        <div class="header">

        </div>
        <!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
        <div class="page-header header-filter" id="index-header" style="background-image: url('css/img/introbg.png');">
            <div class="container" align="Center">
                <div class="row">
                    <div class="col-md-12">
                        <img src="/css/img/intrologo.png" alt="logo" id="intrologo">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-black">
        <div class="container">
            <div class="copyright pull-center">
                All rights reserved &copy; <script>document.write(new Date().getFullYear())</script> - <strong>NORTH DAVAO ORTHOPAEDIC & SPINE CLINIC</strong>
            </div>
        </div>
    </footer>

    </body>
<!--   Core JS Files   -->
<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/material.min.js') }}"></script>

<!--    Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('js/nouislider.min.js') }}" type="text/javascript"></script>

<!--    Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

<!--    Plugin for Select Form control, full documentation here: https://github.com/FezVrasta/dropdown.js -->
<script src="{{ asset('js/jquery.dropdown.js') }}" type="text/javascript"></script>

<!--    Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
<script src="{{ asset('js/jquery.tagsinput.js') }}"></script>

<!--    Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>
@yield('script')

</html>

