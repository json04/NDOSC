<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
        <link rel="icon" type="image/png" href="img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>N.D.O.S.C Online System</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- DataTables Responsive -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.material.min.css">
        <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>

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
        {{-- TinyMCE plugin --}}
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
        <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=4on6oygd2yg58c3v6vcbktugkhz8cvz323wsxnftywc63f0x"></script>
        <script>
            tinymce.init({ 
                selector:'textarea', 
                plugins: 'lists'
            });
        </script>
    </head>
    <body>
        <!-- Navbar will come here -->
        <nav class="navbar navbar-default" role="navigation">
            <div class="container" id="nav-container">
                <div class="row">
                    
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        <img class="navbar-brand" src="{{ asset('img/intrologo.png') }}" alt="">  
                </div>
                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else

                        <li>
                            <a href="{{ url('/home') }}">Home</a>
                        </li>
                        <li>
                           <!--Middleware for Secretary-->
                            <a href="{{ url('/create') }}">Create</a>
                        </li>
                        <li class="dropdown" id="app-dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                        <strong>Logout</strong>
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
            </div>
        </nav>
        <!-- end navbar -->
        <div class="wrapper">
            @yield('content')
        </div>
        <footer class="footer footer-black" style="color:white;">
            <div class="container" align="center">
                All rights reserved &copy; <script>document.write(new Date().getFullYear())</script> - NORTH DAVAO ORTHOPAEDIC & SPINE CLINIC
            </div>
        </footer> 
    </body>
    <!--   Core JS Files   -->
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

    <!--Materialize JS-->
    <script src="{{ asset('js/material-kit.js') }}" type="text/javascript"></script>
    
    <!-- DataTables Responsive -->
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.material.min.js"></script>

    @yield('script')
</html>



