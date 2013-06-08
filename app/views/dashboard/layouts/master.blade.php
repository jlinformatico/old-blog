<!DOCTYPE html>
<html>
<head>

    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap styles -->
    <link href="{{{ asset('assets/css/bootstrap.min.css') }}}" rel="stylesheet" media="screen">
    <link href="{{{ asset('assets/css/bootstrap-responsive.min.css') }}}" rel="stylesheet" media="screen">

    <!-- Custom styles -->
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

</head>
<body>

    <!-- Start of top navbar section -->

    <div class="navbar navbar-inverse navbar-fixed-top">

        <div class="navbar-inner">

            <div class="container">

            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="brand" href="#">rkosinski</a>

                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li>{{ HTML::link('/', 'Start') }}</li>
                        @if(Auth::check())
                            <li>{{ HTML::link('dashboard', 'Dashboard') }}</li>
                            <li>{{ HTML::link('users', 'Users') }}</li>
                            <li>{{ HTML::link('logout', 'Logout') }}</li>
                        @else
                            <li>{{ HTML::link('login', 'Login') }}</li>
                        @endif
                    </ul>
                </div> <!--/.nav-collapse -->

            </div> <!-- End of container -->

        </div> <!-- End of navbar-inner -->

    </div> <!-- End of navbar -->

    <!-- End of top navbar section -->

    <div class="container">

        <div class="row-fluid">

            <!-- Start of sidebar section -->

            @section('sidebar')

            <div class="span3">
                <div class="well" style="max-width: 340px; padding: 8px 0; margin-top: 20px">
                    <ul class="nav nav-list">
                        <li class="nav-header">Menu boczne</li>
                        <li>{{ HTML::link('users', 'Lista użytkowników') }}</li>
                        <li>{{ HTML::link('users/create', 'Dodaj użytkownika') }}</li>
                    </ul>
                </div>
            </div> <!-- End of span3 -->

            @show

            <!-- End of sidebar section -->

            <!-- Start of content section -->

                @yield('content')

            <!-- End of content section -->

        </div> <!-- End of row-fluid -->

    </div> <!-- End of container-->

    <!-- jQuery section -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="{{{ asset('assets/js/bootstrap.min.js') }}}"></script>

</body>
</html>