<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BRS - Document Management  @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/document_management.css') }}" rel="stylesheet">
    <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <!-
    - Themes Styles -->
    <link href="{{ asset('dist/css/adminlte.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- overlayScrollbars -->
    <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">

    <!-- color schemes -->
    @if(!empty($colors))

        @foreach($colors as $c)
        <style type="text/css">
            .bg_color{
                background: {{ $c->bg_color }} !important;
            }
        </style>
        @endforeach()
    @endif

</head>
<body class="layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-bg-dark">
    <!-- Left navbar links -->
    @role('admin')
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/brs" class="nav-linkbtn btn btn-primary">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('iso_management_modules') }}" class="nav-linkbtn btn btn-primary">Document Modules</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('event') }}" class="nav-linkbtn btn btn-primary">Calendar</a>
      </li>
    </ul>
    @else
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('iso_management_modules') }}" class="nav-linkbtn btn btn-primary">Document Modules</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('event') }}" class="nav-linkbtn btn btn-primary">Calendar</a>
      </li>
    </ul>
    @endrole
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto" style="z-index: 9999; position: relative; left: -20%;">
                        <!-- Authentication Links -->
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
                            <li class="nav-item dropdown user-img">
                                <img src="{{ Auth::user()->profile_image }}" style="position: relative; left: -15%">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle user-auth" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; left: 5%">
                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('folders.settings') }}">Settings</a>
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
                    </ul>
  </nav>
  <!-- /.navbar -->

        <main class="py-4">
            @yield('content')
        </main>

        <!-- FOOTER -->
        <footer class="main-footer">
            <strong>&copy; <?php echo date('Y'); ?> <a href="https://www.brsriskgroup.com">Business Risk Solutions Operation (Pty) Ltd | (BRS)</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
              <b>Version</b> 2.1.0
            </div>
        </footer>
        <!-- END FOOTER -->

        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <script type="application/javascript">
            $('input[type="file"]').change(function(e){
                var fileName = e.target.files[0].name;
                $('.custom-file-label').html(fileName);
            });
        </script>
        <script type="text/javascript">
            $("document").ready(function(){
                setTimeout(function(){
                    $("div.alert").fadeOut();
                }, 5000 ); // 5 secs

            });
        </script>
    </div>
</body>
</html>
