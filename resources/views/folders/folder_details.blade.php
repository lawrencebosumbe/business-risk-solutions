<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ONLYOFFICE | Folder details</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="{{ asset('fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet') }}">
</head>
<style>
    html {
        height: 100%;
        width: 100%;
    }

    body {
        background: #fff;
        color: #333;
        font-family: Arial, Tahoma,sans-serif;
        font-size: 12px;
        font-weight: normal;
        height: 100%;
        margin: 0;
        overflow-y: visible;
        padding: 0;
        text-decoration: none;
    }

    form {
        height: 100%;
    }

    div {
        margin: 0;
        padding: 0;
    }

    nav {
        max-height: 65px;
        background-color: #556B78 !important;
    }

    nav li img {
        position: relative;
        top: 20px;
        width: 55px;
        height: 55px;
        border-radius: 50%;
    }

    nav li .user-auth{
        position: relative;
        top: -25px;
        left: 25px !important;
        font-size: 16px;
        color: white !important;
    }

    nav .navbar-nav-1{
        position: relative;
        top: 10px;
    }

    .btn-primary {
        color: #fff;
        background-color: #364B56;
        border-color: #556B78;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #556B78;
        border-color: #556B78;
    }

    /*-------------------------------------------------
        TOP-LEFT ICONS NAV-BAR
    ---------------------------------------------------
    */
    
    .left-nav {
        position: absolute;
        top: -1px;
        left: 0;
        width: 100%;
        max-height: 100%;
        background-color: #556B78 !important;
    }

    .left-nav .brand-link li a img, .left-nav brand-link li {
        width: 30px;
        height: 30px;
    }

    .left-nav .brand-link {
        height: calc(4rem + 1px) !important;
        background-color: #556B78 !important;
        /* border-bottom: 1px solid #556B78 !important; */
    }

    .left-nav .brand-link ul li{
        display: inline-block;
        list-style: none;
    }

    .left-nav .brand-link li a i{
        position: relative;
        top: 5px;
        color: #fff;
        font-size: 28px !important;
        margin-right: 5px;
    }

    .left-nav .brand-link li a img{
        width: 35px;
        margin-right: 10px;
    }

    .left-nav .brand-link ul {
        margin-right: 5px;
        color: #fff;
        font-size: 15px;
    }

    .left-nav .brand-link ul i{
        font-size: 15px;
    }
</style>
<body class="hold-transition layout-top-nav">
    <div class="left-nav">
        <div class="brand-link">
            <ul>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('modules') }}">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('iso_management_modules') }}">
                        <img src="{{ asset('images/iso-icon.png') }}">
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#">
                        <img src="{{ asset('images/msg.png') }}">
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#">
                        <i class="fa fa-bell"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-bg-dark">
        <!-- Left navbar links -->

        @role('admin')
        <ul class="navbar-nav-1">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="/brs" class="nav-linkbtn btn btn-primary">Dashboard</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="" class="nav-linkbtn btn btn-primary">RSS Feeds</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-linkbtn btn btn-primary">Calendar</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('folders.settings') }}" class="nav-linkbtn btn btn-primary">Settings</a>
            </li>
        </ul>
        @else
            <ul class="navbar-nav-1">
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-linkbtn btn btn-primary">RSS Feeds</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-linkbtn btn btn-primary">Calendar</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('folders.settings') }}" class="nav-linkbtn btn btn-primary">Settings</a>
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

        <div id="placeholder"></div>
<script type="text/javascript" src="http://34.241.147.117/web-apps/apps/api/documents/api.js"></script> 
<script>
<?php
function cvf_ps_generate_random_code($length=10) {

  $string = '';
  // You can define your own characters here.
  $characters = "23456789ABCDEFHJKLMNPRTVWXYZabcdefghijklmnopqrstuvwxyz";

  for ($p = 0; $p < $length; $p++) {
      $string .= $characters[mt_rand(0, strlen($characters)-1)];
  }

  return $string;

}
$session_id = cvf_ps_generate_random_code(8);


?>
var docEditor = new DocsAPI.DocEditor("placeholder", {
    "document": {
        "fileType": "docx",
        "key": "<?php echo $session_id; ?>",
        "title": "Only office Example",
        "url": "http://brs.phpapplord.co.za/public/uploads/files/{{ $file[0]->url }}"
    },
    "documentType": "text",
    "editorConfig": {
        "callbackUrl": "https://brs.phpapplord.co.za/url-to-callback.ashx"
    }
});

</script>
        <!-- jQuery -->
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
