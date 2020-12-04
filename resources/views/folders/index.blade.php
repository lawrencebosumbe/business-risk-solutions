<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Folders</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <!--<link href="{{ asset('css/main.css') }}" rel="stylesheet">-->
  
  <!-- Font Awesome Icons -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- overlayScrollbars -->
  <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- Plugins -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet" />

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">

  <!-- Plugins -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet" />

  <!-- color schemes -->
      <!--iterating throuhg your color schemes styling-->
      @if(!empty($colors))
         @foreach($colors as $color)
           <style type="text/css">
             .bg_color{
                background: {{ $color->bg_color }} !important;
                color: #fff;
             }
           </style>
         @endforeach()
      @endif
  <style>
  html, body {
    max-width: 100%;
    overflow-x: hidden;
    background: #f4f6f9;
  }

  .btn {
     margin-top: 5px;
     padding: 0.175rem 0.75rem;
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
  
  .modal{
    z-index: 9999;
  }
  
  .post-user-img{
    margin-top: 0
    margin-left: 0;
  }
    
  .post-user-img li{
    display: inline-block;
  }
    
  .post-user-img li img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
  }
  
   /*
    ------------------------------------
        TAB NAV MENU
    ------------------------------------
    */
    
  .modal-header{
    min-height: 85px;
  }
  
  .nav-pill-header{
    position: relative;
    top: -30px;
    left: 0;
    font-size: 20px;
  }
    
  .nav-pill-header li{
    width: 50%;
  }
  
  .nav-pill-header .nav-pills .nav-link{
    color: #000;
   /*background: transparent;*/
    border-radius: 0;
    padding: 0;
    text-align: center;
  }
    
  .nav-pill-header .nav-pills .nav-link:first-child{
    margin-right: 25px;
  }
  /*
  .nav-pill-header .nav-pills .active{
    border-bottom: 2px solid #007bff;
  }
*/
  .nav-pill-header .nav-pills-modal-tab .active{
    border-bottom: 2px solid #007bff;
  }

  .card-body .nav-pills {
    margin-left: 35%;
  }

  .card .task{
    margin-left: 15px;
    padding: 10px;
    font-size: 18px;
  }

  .task-disc-file-note-oview-menu{
    position: relative;
    top: 24px !important;
  }

  .content-header{
    position: relative;
    top: -40px !important;
  }


  .content-header li{
    margin-left: 5px;
  }

  .content-header ul li {
    display: inline-block;
    list-style: none;
  }

  .content-header .navbar-nav-1 li a{
    display: inline-block;
    list-style: none;
    width: 150px !important;
  }

  .navbar-nav-1 li .btn-create{
    margin-top: 15px;
  }
  /*
  ------------------------------------
        TOP NAVBAR
  ------------------------------------
  */

    section #task-tab{
      margin-bottom: 25px;
      margin-left: 30%;
    }

    section .nav-pills li a{
      background-color: #556B78;
      color: #fff !important;
      margin-left: 10px;
    }

    section .nav-pills-modal-tab li a{
      margin-left: 10px;
    }

    section .nav-pills li .active{
      background-color: #364B56 !important;
    }

    .nav-sidebar li .nav-link{
      background-color: #556B78 !important;
    }

    .nav-sidebar .nav-treeview li a{
      background-color: #fff !important; 
      color: #556B78 !important;
    }

    .project-name{
      margin: 15px;
      color: #777;
      font-size: 24px;
    }

    .task-card{
    margin-top: 25px;
    margin-left: -5px;
    height: 45px;
    padding: 10px 15px;
    font-size: 18px;
  }

  .task-user-img img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-top: -10px;
    margin-left: 45px;
  }

  .task-treeview > a{
    background: #007bff !important;
    color: #fff;
    padding: 10px;
    border-radius: 5px;
    -moz-border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: -10px;
  }

  .discussion-card{
    margin-top: 25px !important;
  }

  article{
    margin-bottom: -25px;
    font-size: 12px !important;
  }

  section .card{
    margin-bottom: -25px;
  }

  .tags{
    margin: 0;
    padding: 0;
  }

  .tags ul li{
    display: block;
    list-style: none;
  }

  .tags li a{
    color: #364B56;
    margin-left: -35px !important;
  }

  .tags li a:hover{
    color: #556B78;
    font-weight: 850;
  }

  .tags .card-body .position-relative: {
    position: relative;
    left: -15px !important;
  }

  .tag-title-bg{
    background: #556B78;
    color: #fff;
    text-align: center !important;
  }

  /*
  ------------------------------------
        SUB-TOP HEADING
  ------------------------------------
  */

  .card .card-header-sub-top li{
    margin-right: 10px;
  }

  .card .card-header-sub-top{
    color: #fff;
    background-color: #556B78;
  }


  .card .card-header-sub-top i{
    color: #fff;    
  }

/*
  .card .card-header-sub-top .nav-link{
    color: #fff;
    background-color: #567E95;
  }
  */
  .card .card-header-sub-top .nav-link:hover{
    color: #fff;
  }

  .card .card-header-sub-top li:nth-child(1) .nav-link{
    color: #fff;
    background-color: #567E95;
  }

  .card .card-header-sub-top li:nth-child(2) .nav-link{
    color: #fff;
    background-color: #567E95;
  }

  .card .card-header-sub-top li:nth-child(3) .nav-link{
    color: #fff;
    background-color: #567E95;
    width: 25px;
  }

  .card .card-header-sub-top li:nth-child(3) .fa-ellipsis-v{
    margin-left: 10px;
  }

  .card .card-header-sub-top li:nth-child(4) .nav-link{
    color: #fff;
    background-color: #567E95;
  }

  .card .card-header-sub-top li:nth-child(5) .nav-link{
    color: #fff;
    background-color: #567E95;
  }

  .card .card-header-sub-bottom{
    background-color: #fff;
    color: #556B78;
  }


  /*
  ------------------------------------
        NOTES
  ------------------------------------
  */

  .notes{
    font-size: 16px;
  }

  .notes a{
    font-size: 16px;
  }

  .notes th{
    font-size: 16px;
  }

  .notes a i{
    color: gray;
    font-size: 20px;
  }

  /*
    ------------------------------------
        DISCUSSIONS
    ------------------------------------
  */

  .content-wrapper .content-header .container section {
    background: none;
  }

/*
------------------------------------
  TOP-LEFT LOGO
------------------------------------
*/
.wrapper .brand-link {
        height: calc(4rem + 1px) !important;
        background-color: #556B78 !important;
        border-bottom: 1px solid #556B78 !important;
      }

      .wrapper .brand-link ul li{
        display: inline-block;
        list-style: none;      
      }

      .wrapper .brand-link li a i{
        position: relative;
        top: 5px;
        color: #fff;
        font-size: 28px !important;
        margin-right: 5px;
      }

      .wrapper .brand-link li a img{
        width: 35px;
        margin-right: 10px;                 
      }

      .wrapper .brand-link ul {
        margin-right: 5px;
        color: #fff;
        font-size: 15px; 
      }

      .wrapper .brand-link ul i{
        font-size: 15px;
      }

      .elevation-2{
        width: 90%;
        margin-left: 5%;
        border-radius: 15px;
      }

      .brand-link-logo {
        display: block;
        height: calc(5.5rem + 1px) !important;
        margin-top: 15px;
        margin-bottom: 35px;
        font-size: 1.25rem;
        line-height: 1.5;
        padding: 0.8125rem 0.5rem;
        transition: width 0.3s ease-in-out;
        white-space: nowrap;
      }

      .brand-link-logo ul li{
        display: inline-block;
        list-style: none;
      }

      .brand-link-logo img{
        width: 125px;
        margin-top: -5px;
        margin-left: 25px;
      }

/*
------------------------------------
        TASKS
------------------------------------
*/

.top-wrapper .wrapper-inner{
    margin-top: 15px;
    height: 43px;
    width: 90%;    
  }

  .top-wrapper .wrapper-inner input[type="text"]{
    border: 0;
  }

  .top-wrapper .wrapper-inner .name{
    width: 75%;
  }

  .top-wrapper .wrapper-inner .datepicker{
    width: 10%;
    border: 1px solid #ccc;
  }

  .top-wrapper .wrapper-inner .user{
    margin-right: : -15px;
  }

  .top-wrapper button{
    position: absolute;
    top: 50px;
    right: 25px;
  }

  .task-user-img img{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-top: -10px;
    margin-left: 45px;
  }
/*
------------------------------------
        FOLDERS
------------------------------------
*/

.caption h4{
  font-weight: bold;
}

/*
  grid & list-view
--------------------------------------------
*/

.view-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
}
.thumbnail
{
    margin-bottom: 30px;
    padding: 5px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
    border: 1px solid #ccc;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 30px;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0 1rem;
    border: 0;
}
.item.list-group-item .img-event {
    float: left;
    width: 30%;
    margin-bottom: 15px;
    padding: 15px;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
    display: inline-block;
}
.item.list-group-item .caption
{
    float: left;
    width: 70%;
    margin: 0;
}

.thumbnail{
    width: 100% !important;
}
.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item:after
{
    clear: both;
}

/*
--------------------------------------------
  ELLIPSIS DROPDOWN MENU
--------------------------------------------
*/
.ellipsis-topbar-dropdown-menu{
  margin-top: 10px;
  margin-right: 8%;  
}

.ellipsis-topbar-dropdown-menu a{
  max-width: 100%;
}

.ellipsis-topbar-dropdown-menu .dropdown-item{
  background: #fff !important;
  color: #556B78 !important;
  margin: 0;
}

.ellipsis-topbar-dropdown-menu .dropdown-item:hover{
  background: #556B78 !important;
  color: #fff !important;
}

/*
-----------------------------------------------------
    TASKS MANAGEMENT OFF-THE-CANVAS
-----------------------------------------------------
*/
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 45px;
  right: 0;
  background-color: #fff;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  border: 1px solid #556B78; 
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.sidenav textarea{
    width: 90%;
    margin-left: 5%;
    height: 105px;
    resize: none;
}

.sidenav .checked-task{
    margin-left: 5%;
    margin-right: 5%;
    color: #556B78;
}

.sidenav .checked-task label{
    margin-left: 10px;
}

.sidenav hr{
    border-bottom: 1px solid #556B78;
}

.sidenav ul li{
    display: inline-block;
    list-style: none;
    margin-left: -5%;
}

.sidenav li:first-child(2){
    margin-left: 2%;
}

.sidenav li:nth-child(2){
    margin-left: 2%;
}

.sidenav li:nth-child(3){
    margin-left: 1%;
}

.sidenav li img{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 2px solid #556B78;
}

.sidenav li a .fa-calendar-alt{
    
}

.sidenav li .datepicker{
    width: 50% !important;
    height: 25px;
}

.sidenav li i{
    position: relative;
    left: 50%;
    color: #556B78;
}

.sidenav li span{
    position: relative;
    top: -25px;
    left: 50%;
    color: #556B78;
}

.sidenav .attachment{
    margin-left: 5%;
    margin-right: 5%;
    color: #556B78;
}

.sidenav .task-btn{
    margin-left: 5%;
    margin-right: 5%;
    color: #556B78;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
  margin-right = "7.5%";
  margin-top: -7.5%;
}

#main span{
  cursor: pointer;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
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

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
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

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Brand Logo -->
      @if(!empty($logos))
        @foreach($logos as $logo)
        <a href="" class="brand-link-logo elevation-2">
          <img src="/public/uploads/logos/{{ $logo->logo }}"
             alt="BRS" style="opacity: 1">
       </a>
       @endforeach
     @endif

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview my-organization">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-building"></i>
              <p>
                My Organization
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="" class="nav-link">
                  <i class="fas fa-tachometer-alt nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Policies & Procedures</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Health & Safety</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <img src="{{ asset('images/iso-icon.png') }}" class="iso-icon" alt="BRS" style="width: 10%"/>
              <p>
                ISO Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Health & Safety</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-paste nav-icon"></i>
                  <p>Quality Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Environmental Man.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Deviation Nonconform.</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>CAPA</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Change Control</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Document Control</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-paperclip"></i>
              <p>
                My Works
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-comments nav-icon"></i>
                  <p>My Discussions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-paste nav-icon"></i>
                  <p>My Tasks</p>
                </a>
              </li>F
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>My Files</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-balance-scale"></i>
              <p>
                Compliances
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Security Incidents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Environmental Incidents</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Customer Complaints</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Nonconformities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Corrective Actions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Internal Audits</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Folder Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>Security Controls</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-folder"></i>              
              <p>
                Projects                
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('folders.add_project') }}" class="nav-link">
                <i class="nav-icon far fa-plus-square right"></i>
                  <p>Create Project</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- .container -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
             <div>
                @if($errors->any())
                  <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach()
                  </div>
                @endif
                @if(Session::has('success_msg'))
                  <div class="alert alert-success">
                    {{ Session::get('success_msg') }}
                  </div>
                @endif
             </div>
        </div>
      </div>
      <!-- .section -->
      <section class="content task-disc-file-note-oview-menu">
        <ul class="nav nav-pills" id="task-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="task-content-tab" data-toggle="pill" href="#task-content" role="tab" aria-controls="task-content" aria-selected="true">
            Tasks
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">
            Discussions
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">
            Files
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-notes-tab" data-toggle="pill" href="#custom-content-below-notes" role="tab" aria-controls="custom-content-below-notes" aria-selected="false">
            Notes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-overview-tab" data-toggle="pill" href="#custom-content-below-overview" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">
              Overview
            </a>
          </li>
        </ul>
      </section>
      <hr />
      <!-- /.section -->

      <!-- .section -->
      <section class="content">

        <!-- .tab-content -->
        <div class="tab-content" id="task-tabContent">
          <div class="tab-pane fade task" id="task-content" role="tabpanel" aria-labelledby="task-content-tab">
          
          <!-- Form -->
          <!--
          <form action="{{ route('folders.insert_task') }}" method="POST" class="form-horizontal">
             @csrf
          -->
          <!-- Content Header (Page header) TASK -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1></h1>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="nav-item d-none d-sm-inline-block">
                      <button type="button" class="nav-linkbtn btn btn-primary btn-sm" onclick="openNav()">Add Task</button> 
                    </li>
                    <!--
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="iso_document_management_modules" class="nav-linkbtn btn btn-primary btn-sm">Add Section</a>
                    </li>
                    -->
                  </ol>
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </section>
          <!-- /content header -->

            <!-- if --> 
            @if(!empty($tasks))
            
            <!-- foreach --> 
            @foreach($tasks as $task)
            <form action="{{ route('folders.add_task') }}" method="POST" class="form-horizontal">
             @csrf
            <div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="checked-task">
                  <input type="hidden" name="project_id" value="{{ $task->project_id }}" />
                  
                  @if(!empty($task_projects))
                  <select class="form-control" name="project_id">
                      @foreach($task_projects as $proj)
                      <option value="{{ $proj->id }}">{{ $proj->project_name }}</option>
                      @endforeach
                  </select><br />
                  @endif
              </div>
              <div>
                  <textarea class="form-control" name="description" placeholder="task description"></textarea>
              </div>
              <hr />
              <div>
                  <ul>
                      <li><img src="{{ $task->profile_image }}"></li>
                      <li>
                        <i class="fa fa-calendar-alt"></i>                     
                        <input type="text" name="deadline" id="datepicker" class="datepicker"> 
                      </li>
                      <!--<li><i class="fa fa-bell"></i> </li>-->
                  </ul>
                  <ul>
                      <li></li>
                      <li>
                        <span>set task dealine</span>
                      </li>
                      <li></li>
                  </ul>
              </div>
              <hr />
              <div class="attachment">
                  <input type="file" class="form-control" name="attachment" id="attachment" /><br />
                  <input type="text" class="form-control" name="name" id="name" placeholder="task name"/>
              </div>
              <hr />
              <div class="task-btn">
                  <button type="submit" class="btn btn-primary btn-block">Create Task</button>
              </div>
            </div>
            </form>
            @endforeach
            
            @endif
          <!-- endif -->
            
            <div id="main">
              <span id="open" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Flip to create task</span>
              <!-- Main content -->    
          <section class="content">

            <div class="top-wrapper">

                    <!-- .wrapper-inner -->
                    <!--
                    <div class="wrapper-inner form-control">                
                        <input type="text" name="name" autofocus class="name"> 
                        <a href="#"> 
                          <i class="fa fa-calendar-alt"></i>                     
                          <input type="text" name="deadline" id="datepicker" class="datepicker"> 
                        </a>
                        @if(!empty($users))
                        <select class="user" name="user_id">
                          <option value="" selected="selected">Select User</option>
                          @foreach($users as $user)                          
                          <option value="{{$user->id}}">{{ $user->first_name }}</option>
                          @endforeach
                        </select>
                        @endif
                    </div>
                    -->
                    <!-- /.wrapper-inner -->
                </form>
                <!-- Form -->

                
              
            </div>
            <!-- /.container-fluid -->

          </section>
          <!-- /.content -->

          <!-- if --> 
          @if(!empty($projects))
            
            <!-- foreach --> 
            @foreach($projects as $project)

            <!-- card --> 
            <div class="card card-default task-card">             

              <!-- .row -->
              <div class="row">

                <!-- .col -->
                <div class="col-md-1">
                  <!--<input type="checkbox" onclick="taskChecked(this)" name="project_name" value="{{ $project->project_name }}" id="project_name">-->   
                </div>
                <!-- /.col -->

                <!-- .col -->
                <div class="col-md-6">
                  <label><p id="project_name">{{ $project->project_name }}</label>
                </div>
                <!-- /.col -->

                <!-- .col -->
                <div class="col-md-3">
                  <!--<p> task -> deadline </p>-->
                </div>
                <!-- /.col -->

                <!-- .col -->
                <div class="col-md-2">
                  <a href="" class="task-user-img">
                    <img src="{{ $project->profile_image }}">
                  </a>
                </div>
                <!-- /.col -->

              </div>              
              <!-- /.row -->
                                
            </div>
            <!-- /.card -->

            @endforeach
            <!-- endforeach -->

          @endif
          <!-- endif -->
            </div>
            
          </div>
         
         
         
         <!--</form> -->
         
          <!-- tab-pane -->
          <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">   <ul class="nav nav-treeview">
          
          <!-- Content Header (Page header) DISCUSSIONS -->
          <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-10">
                  <ul class="navbar-nav-1">
                    <li class="nav-item d-none d-sm-inline-block">
                      <a href="#" class="btn btn-primary btn-create" data-toggle="modal" data-target="#my_discussions">  
                        Create a message
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-2">
                </div>
              </div>
            </div>
            <!-- /.container-fluid -->
          </section>
          <!-- /content header -->
            
          <!-------------------------------------------------------------->
          <!-- Main content -->
      <div class="container-fluid" style="margin-top: -42px">
        <div class="row">
          <!-- if -->   
              @if(!empty($posts)) 
                
                <!-- foreach -->
                @foreach($posts as $post)                
                <div class="col-md-8">
                  <div class="card">
                    <div class="card-header border-0">
                      <div class="d-flex justify-content-between">
                        <!-- .col -->
                        <div class="col-md-1">
                          <img src="{{ $post->user->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;">
                        </div>
                        <!-- .col -->
                        <!-- .col -->
                        <div class="col-md-8">
                          {{ 
                            $post->user->first_name . ' ' . $post->user->last_name . ', Project: '
                          }}
                          <strong> {{ $post->project_name }}</strong><br /> 
                            <small class="post-time-ago">
                              {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                            </small>
                        </div>
                        <!-- /.col -->

                        <!-- .col -->
                        <div class="col-md-2"></div>
                        <!-- /.col -->

                        <!-- .col -->
                        <div class="col-md-1"></div>
                        <!-- /.col -->
                      </div>
                    </div>
                    <div class="card-body" height="200">
                        <div class="row">
                        <!-- .col-->
                        <div class="col-md-1"></div>
                        <!-- /.col-->

                        <!-- .col-->
                        <div class="col-md-10">
                          <p>{{ $post->post_content }}</p>

                         
                            @foreach($post->comments as $comment)
                            <div class="card-header border-0">
                              <p><img src="{{ $comment->user->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;"></p>
                            </div>
                            <div class="card-body">
                              
                              <div>
                                  <p>{{ $comment->comment_content }}</p>
                                  <small class="post-time-ago">
                                      {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                  </small>
                              </div>
                            </div>
                            @endforeach
                          
                        </div>
                        <!-- /.col-->
                        <div class="col-md-1"></div>
                        </div>
                        
                        <!-- comment row -->
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                            <form action="{{ route('folders.insert_comment') }}" method="post" autocomplete="off">
                                @csrf
                                <input type="text" name="comment_content" class="form-control" />
                                <input type="hidden" name="post_id" value="{{ $post->id }}" />
                                <button type="submit" class="btn btn-primary btn-sm">Comment</button>
                            </form>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <!-- end comment row-->
                        
                    </div>
                    <div class="card-footer">
                        <!-- .col-->
                                <div class="col-md-1"></div>
                                <!-- /.col-->

                                <!-- .col-->
                                <div class="col-md-6 post-footer">
                                  <p>
                                      <!--
                                    <a href="#" data-toggle="modal" data-target="#my_comments" class="btn btn-primary btn-sm">Reply
                                    </a>-->
                                    &nbsp; 
                                    <label style="color: #999">
                                      Comments ({{ count($post->comments) }})
                                    </label>
                                    &nbsp; 
                                  </p>
                                </div>
                                <!-- /.col-
                                <!-- .col-->
                                <div class="col-md-4">
                                </div>
                                <!-- /.col-->

                    </div>
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->

                <!-- /.col-md-6 -->
                @endforeach()
              @endif()
        </div>
        
        <!---------------------------------------------------------------
            LEFT MENU
        -------------------------------------------------------------->

        <div style="position: absolute; top: 135px; left: 77%; z-index: 999; width: 20%; margin-left: 15px; margin-bottom: 125px">
            <!-- .card -->
            <div class="card tags">
                  <div class="card-header tag-title-bg">
                    <div class="d-flex">
                      <h3 class="card-title text-center">Tags</h3>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="position-relative mb-4">
                      @if(!empty($iso_management_systems))
                          @foreach($iso_management_systems as $iso)
                          <ul>
                            <li><a href=""> {{ $iso->name }}</a></li>
                          </ul>
                          @endforeach
                        @endif
                    </div>
                  </div>
            </div>
            <!-- /.card -->
            <!-- .card -->
            <div class="card">
                  <div class="card-header tag-title-bg">
                    <div class="d-flex">
                      <h3 class="card-title text-center">Users</h3>
                    </div>
                  </div>
                  <div class="card-body">
                    @if(!empty($users))
                            @foreach($users as $project)
                               <img src="{{ $project->profile_image }}" style="width:45px; height: 45px; border-radius: 50%" /> {{ $project->first_name . ' ' . $project->last_name }} <br/>
                            @endforeach
                          @endif
                    <div class="position-relative mb-4">
                      <canvas id="sales-chart" height="200"> </canvas>
                    </div>
                  </div>
            </div>
            <!-- /.card -->

        </div>
        <!---------------------------------------------------------------
            END LEFT MENU
        -------------------------------------------------------------->

      </div>
      <!-- /.container-fluid -->

    <!-- /.content -->
          <!-------------------------------------------------------------->

            </ul>  

          </div>
          <!-- end tab-pane -->

          <!-- tab-pane -->
          <div class="tab-pane fade show active" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">

            <!-- .row -->
            <div class="row">
              <div class="col-12">
                        
                <!-- Custom Tabs -->
                <div class="card">
                          
                  <!-- .card-header -->
                  <div class="card-header card-header-sub-top d-flex p-0">
                    <h3 class="card-title p-3">
                      ISO 45001 Health and Safety
                    </h3>

                    <!-- ul .nav-pills -->
                    <ul class="nav nav-pills ml-auto p-2">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('folders.create_folder') }}" >Add Folder
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('folders.create_file') }}">Add File
                        </a>
                      </li>
                      <li class="nav-item">

                        <!-- .navbar-nav -->
                        <!--
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden=" true" >                              
                              </i>
                            </a>
                            <div class="dropdown-menu ellipsis-topbar-dropdown-menu">
                              <a class="dropdown-item" href="#">See Preview</a>
                              <a class="dropdown-item" href="#">Download</a>
                              <a class="dropdown-item" href="#">Rename</a>
                              <a class="dropdown-item" href="#">Delete</a>
                              <a class="dropdown-item" href="#">Create task</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Copy file link</a>
                            </div>
                          </li>
                        </ul>
                        -->
                        <!-- /.navbar-nav -->

                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link" id="grid">
                          <i class="fas fa-th-large"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" id="list">
                          <i class="fas fa-th-list"></i>
                        </a>
                      </li>
                    </ul>
                    <!-- /ul .nav-pills -->

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <h3 class="card-title p-3">
                      ISO 45001 Health & Safety
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  
                  <!-- /.card-body -->       
                  <div class="card-body">
                          
                    <!-- container -->
                    <div class="container">

                      @if(!empty($folders))
                      <div id="products" class="row view-group">

                        @foreach($folders as $folder)
                        <div class="item col-xs-3 col-lg-3">

                          <!-- .thumbnail -->
                          <div class="thumbnail card">
                            <div class="img-event">
                              
                              <a href="{{ route('folders.folder', $folder->id) }}">
                                <img class="group list-group-image img-fluid" src="{{ asset('images/folder-icon.jpg') }}" alt="" />
                              </a>
                            </div>

                            <!-- .caption -->
                            <div class="caption card-body">
                              <h4 class="group card-title inner list-group-item-heading">
                                 {{ substr($folder->name, 0, 15) }}
                              </h4>
                              <p class="group inner list-group-item-text">
                                {{ $folder->created_at }}
                              </p> 
                              <label style="color: #999">
                                  files ({{ count($folder->files) }})
                              </label>
                            </div>
                            <!-- /.caption  -->

                          </div>
                          <!-- /.thumbnail -->
                        </div>
                        <!-- /.col-md-4 -->

                        @endforeach
                        <!-- endforeach -->

                      </div>
                      <!-- /.view-group -->

                      @endif
                      <!-- endif -->

                  </div>
                  <!-- .container -->

                </div>
                <!-- /.card-body -->
                       
              </div>
              <!-- ./card -->
                      
            </div>
            <!-- /.col-md-12 -->
                    
            </div>
            <!-- /.row -->

          </div>
          <!-- /.tab-pane -->

        <div class="tab-pane fade" id="custom-content-below-notes" role="tabpanel" aria-labelledby="custom-content-below-notes-tab">
                
        <article class="notes">
                      
          <!-- /.row -->
          <div class="row">
                         
            <!-- /.col -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Notes</h3>
                </div>
                            
                <!-- /.card-header -->
                @if(!empty($notes))
                <div class="card-body p-0">       
                  <table class="table">

                    @foreach($notes as $note)
                    <thead>
                      <tr>
                        <th style="width: 0"></th>
                        <th>{{ $note->name }}</th>
                        <th></th>
                        <th style="width: 40px;"> 
                          <a href="{{ route('folders.delete_note', $note->id) }}"
                          onclick="return confirm('Are you sure to delete {{ $note->name }} ?')"
                                      >
                            <i class="fas fa-trash nav-icon"></i>    
                          </a>
                        </th>
                      </tr>
                    </thead>
                    @endforeach()
                                
                    <tbody>
                      <tr>
                        <td></td>
                        <td>
                          <a href="" data-toggle="modal" data-target="#notes"> 
                            Add Note
                          </a>
                        </td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>                 
                </div>
                <!-- /.card-body -->
                            
                @endif
                </div>
                <!-- /.card -->

              </div>
              <!-- /.col -->
            
            </div>
            <!-- /.row -->
          
          </article>                   
        
        </div>

        <!-- .tab-pane -->
        <div class="tab-pane fade" id="custom-content-below-overview" role="tabpanel" aria-labelledby="custom-content-below-overview-tab">
          
          <!-- Recent Tasks ul .treeview -->
          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          
            <li class="nav-item has-treeview task-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-paste nav-icon"></i>
                <p>
                Recent Taks
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                        
                <!-- Main content -->    
                <section class="content">
                  <div class="container-fluid">

                    @if(!empty($tasks))

                      @foreach($tasks as $task)
                      <div class="card card-default task-card">
                    
                      <!-- .row -->
                      <div class="row">

                        <!-- .col -->
                        <div class="col-md-1"></div>
                        <!-- /.col -->

                        <!-- .col -->
                        <div class="col-md-6">
                          <p>{{ $task->name }}</p>
                        </div>
                        <!-- /.col -->

                        <!-- .col -->
                        <div class="col-md-3">
                          <p>{{ $task->deadline }}</p>
                        </div>
                        <!-- /.col -->

                        <!-- .col -->
                        <div class="col-md-2">
                          <a href="" class="task-user-img">
                            <img src="{{ $task->profile_image }}">
                          </a>
                        </div>
                        <!-- /.col -->

                      </div>              
                      <!-- /.row -->
                                
                    <!-- /.card-body -->
                              
                  </div>
                  <!-- /.card -->
                  @endforeach

                @endif
                      
                </div>
                <!-- /.container-fluid -->
                        
              </section>
              <!-- /.content -->
            </li>

            </ul>
          </ul>
          <!-- /ul .treeview -->

          <!-- Recent Discussions ul .treeview -->
          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          
            <li class="nav-item has-treeview task-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-paste nav-icon"></i>
                <p>
                Recent Discussions
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                        
                <!-- Main content -->    
                <section class="content">
                  <div class="container-fluid">
                            
                    <!-- Main content -->   
                  @if(!empty($posts)) 
                    @foreach($posts as $post)
                    
                        <div class="row">
                                  
                          <!-- .col -->
                          <div class="col-12">

                            <!-- card -->
                            <div class="card">
                              <div class="card-header border-0">
                                <div class="row">
                                  <div class="col-md-1">
                                    <img src="{{ $post->user->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                  </div>
                                  <div class="col-md-6">
                                    {{ $post->user->first_name . ' ' . $post->user->last_name  . ' Folder: '  }} 
                                    <strong>{{ $post->project_name }}</strong><br />
                                    <small class="post-time-ago">
                                      {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                                    </small>
                                  </div>
                                  <div class="col-md-4"></div>
                                  <div class="col-md-1"></div>
                                </div>
                              </div>
                              <!-- /.card-header -->
                                      
                              <div class="card-body">

                                <!-- .row -->
                                <div class="row">

                                  <!-- .col-->
                                  <div class="col-md-1"></div> 
                                  <!-- /.col-->

                                  <!-- .col-->
                                  <div class="col-md-8">
                                    <p>{{ $post->post_content }}</p>
                                    
                                    @foreach($post->comments as $comment)
                                    <div class="card-header border-0">
                                      <p><img src="{{ $comment->user->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;"></p>
                                    </div>
                                    <div class="card-body">
                                      
                                      <div>
                                          <p>{{ $comment->comment_content }}</p>
                                          <small class="post-time-ago">
                                              {{ Carbon\Carbon::parse($comment->created_at)->diffForHumans() }}
                                          </small>
                                      </div>
                                    </div>
                                    @endforeach
                                    
                                  </div>
                                  <!-- /.col-->

                                  <!-- .col-->
                                  <div class="col-md-2"></div>
                                  <!-- /.col-->

                                  <!-- .col-->
                                  <div class="col-md-1"></div>
                                  <!-- /.col-->

                                </div>
                                <!-- /.row -->

                              <!-- .row -->
                              <div class="row">

                                <!-- .col-->
                                <div class="col-md-1"></div>
                                <!-- /.col-->

                                <!-- .col-->
                                <div class="col-md-6 post-footer">
                                  <label style="color: #999">
                                      Comments ({{ count($post->comments) }})
                                  </label>
                                </div>
                                <!-- /.col-->

                                <!-- .col-->
                                <div class="col-md-4"></div>
                                <!-- /.col-->

                                <!-- .col-->
                                <div class="col-md-1"></div>
                                <!-- /.col-->

                              </div>
                              <!-- /.row -->
                                      
                              </div>
                              <!-- /.card-body -->

                            </div>
                            <!-- ./card -->   
                          </div>
                          <!-- /.col -->
                                
                        </div>
                        <!-- /.row -->
                    @endforeach()
                  @endif
                  <!-- /.content -->
                      
                  </div>
                  <!-- /.container-fluid -->
                        
              </section>
              <!-- /.content -->
            </li>

            </ul>

          </ul>
          <!-- /ul .treeview -->

          <!-- Recent Files ul .treeview -->
          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          
            <li class="nav-item has-treeview task-treeview">
              <a href="#" class="nav-link">
                <i class="fas fa-paste nav-icon"></i>
                <p>
                Recent Files
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                        
                <!-- Main content -->    
                <section class="content">
                    <!-- .container-fluid -->
                    <div class="container-fluid">

                            @if(!empty($posts))

                            @foreach($posts as $post)
                            <div class="card card-default task-card">
                              <!-- .card-body -->               

                                <!-- .row -->
                                <div class="row">
                                    <!-- .col -->
                                    <div class="col-md-2 task-user-img">
                                       <img src="{{ $post->user->profile_image }}">
                                    </div>
                                    <!-- /.col -->

                                    <!-- .col -->
                                    <div class="col-md-3">
                                      <p>{{ $post->user->first_name . ' ' . $post->user->last_name }}</p>
                                    </div>
                                    <!-- /.col -->
                                    
                                    <!-- .col -->
                                    <div class="col-md-5">
                                      @foreach($folder->files as $file)
                                      <a href="{{ route('folders.file', $file->id) }}">
                                        {{ $post->attachment }}
                                      </a>
                                      @endforeach
                                    </div>
                                    <!-- /.col -->
                                    
                                    <!-- .col -->
                                    <div class="col-md-2">
                                      <p>{{ $post->created_at }}</p>
                                    </div>
                                    <!-- /.col -->                              
                                </div>              
                                <!-- /.row -->
                                
                              <!-- /.card-body -->
                              
                            </div>
                            <!-- /.card -->
                            @endforeach

                          @endif
                      
                          </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->

            </li>

            </ul>
          </ul>
          <!-- /ul .treeview -->

        </div>
        <!-- /.tab-pane -->

      </section>
      <!-- /.section -->

      </div>
      <!-- /.container-fluid -->
 
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  <!----------------------------------------------------------
                MODAL
  ------------------------------------------------------------>

  <!-- .modal -->
  <div class="modal fade" id="notes">
    <form action="{{ route('folders.insert_note', $folder->id) }}" method="post">      
      @csrf
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Note</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- /.col -->
              <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-body">
                    <div class="form-group">
                      <input class="form-control" placeholder="Name" name="name">
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <!--<input type="hidden" name="folder_id" value="">-->
                    </div>
                    <div class="form-group">
                        <textarea id="compose-textarea" class="form-control" style="height: 300px" placeholder="Write note here" name="description"></textarea>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">
                Save Note
              </button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </form>
  </div>
  
  <!-- POST & MESSAGE -->

  <!-- Main content -->
  <section class="content modal fade" id="my_discussions">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header border-0">
                  <h4 class="modal-title">Create New Discussion</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          <div class="nav-pill-header">
              <ul class="nav nav-pills-modal-tab" id="pills-tab" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Post in the project
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Send a private message
                      </a>
                  </li>
              </ul>
            </div>
            <div class="modal-body">
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <section class="content">
                      <div class="container-fluid">
                        
                      <!----------- DISCUSSION -------------------------->  
                      <!-- Form -->
                      <form action="{{ route('folders.insert_discussion') }}" method="POST" class="form-horizontal">
                          @csrf
                          <div class="card card-default">
                            <div class="card-body">
                
                            <!-- .row -->
                            <div class="row">
                              <!-- .col -->
                                <div class="col-md-2">
                                    <ul class='post-user-img'>
                                        <li>
                                            @if (auth()->user()->profile_image)
                                            <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                                
                                <!-- .col -->
                                <div class="col-md-10">
                                    @if(!empty($iso_management_systems))     
                                <div class="form-group">
                                    <select id="iso_management_id" name="iso_management_id" class="form-control select2" style="width: 100%;" /> 
                                        <option value="">Select System Project</option>
                                        @foreach($iso_management_systems as $iso)
                                        <option value="{{$iso->id}}">{{$iso->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                    @endif
                                </div>
                                <!-- /.col -->
                                
                            </div>  
                            
                            
                            <!-- /.row -->
                            <div class="row">
                                <!-- .col -->
                                <div class="col-md-2">
                                
                                </div>
                                <!-- /.col -->
                                <div class="col-md-10">
                                <div class="form-group">
                                 <!-- <label>Project Description</label>-->
                                    <div class="card card-outline">
                                        <!-- /.card-header -->
                                        <div class="card-body pad">
                                          <div class="mb-3">
                                            <textarea class="textarea" placeholder="Place some text here"  name="post_content"
                                                style="width: 100%; height: 100px; font-size: 1p; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                          </div>
                                        </div>
                                      </div>
                                </div>
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->
                              
                            </div>
                            <!-- /.row -->
                            
                            <!-- .row -->
                            <div class="row">
                                <!-- .col -->
                                
                            <div class="col-md-2"></div>
                                <!-- /.col -->
                                
                            <!-- .col -->
                            <div class="col-md-10">
                                    
                                @if(!empty($users))
                                <div class="form-group">
                                    <select id="user_id" name="user_id" class="form-control select2" style="width: 100%;" /> 
                                      <option value="">Notify user</option>
                                          @foreach($users as $user)
                                      <option value="{{$user->id}}">{{$user->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                            </div>
                            <!-- /.col -->
                                
                            </div>    
                            <!-- /.row -->
                            
                          </div>
                          <!-- /.card-body -->
                          <div class="">
                            
                              <!-- .row -->
                              <div class="row">
                                
                                  <!-- .col -->
                                  <div class="col-md-2"></div>
                                <!-- /.col -->
                                
                                <!-- .col -->
                                <div class="col-md-4">
                                    <div class="paperclip_attachment">
                                      <i class="fa fa-paperclip"></i>
                                      <input type="file" id="attach_post" name="attachment" />              
                                    </div>
                                    <a href="javascript:void(0)" id="post_filename" class="paperclip_attachment_a"></a>                 
                                </div>
                                <!-- /.col -->
                                
                                <!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Post Discussion</button> 
                                        </div>
                                    </div> 
                                  </div>
                                  
                                </div>
                                <!-- /.col -->
                                
                            </div>    
                            <!-- /.row -->
                          </div>
                          
                        </div>
                        <!-- /.card -->
                        </form>
                        <!-- Form -->
                        
                      
                      </div><!-- /.container-fluid -->
                  </section>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                <!-- Main content -->
                <section class="content">
                  <div class="container">
                    
                    <!----------- MESSAGE ------------------------------------------>   
                    <!-- Form -->
                    <form action="{{ route('folders.send_message') }}" method="POST" class="form-horizontal">
                        @csrf
                    <div class="card card-default">
                      <div class="card-body">
                        
                        <!-- .row -->
                        <div class="row">

                          <!-- .col -->
                          <div class="col-md-2">
                              <ul class='post-user-img'>
                                  <li>
                                      @if (auth()->user()->profile_image)
                                          <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                      @endif
                                  </li>
                              </ul>
                          </div>
                          <!-- /.col -->
                                
                          <!-- .col -->
                          <div class="col-md-10">
                              @if(!empty($iso_management_systems))     
                                <div class="form-group">
                                    <select id="iso_management_id" name="iso_management_id" class="form-control select2" style="width: 100%;" /> 
                                        <option value="">Select System Project</option>
                                        @foreach($iso_management_systems as $iso)
                                        <option value="{{$iso->id}}">{{$iso->name}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                    @endif
                          </div>
                          <!-- /.col -->
                            
                        </div>    
                        <!-- /.row -->
                        
                        <!-- /.row -->
                        <div class="row">

                            <!-- .col -->
                            <div class="col-md-2">
                                <ul class='post-user-img'></div>
                            <!-- /.col -->

                            <div class="col-md-10">
                            <div class="form-group">
                                <div class="card card-outline">

                                    <!-- /.card-header -->
                                    <div class="card-body pad">
                                      <div class="mb-3">
                                        <textarea class="textarea" placeholder="Place some text here"  name="msg_content"
                                        style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.form-group -->

                          </div>
                          <!-- /.col -->
                          
                        </div>
                        <!-- /.row -->
                        
                        <!-- .row -->
                        <div class="row">

                            <!-- .col -->
                            <div class="col-md-2"></div>
                            <!-- /.col -->

                            <!-- .col -->
                            <div class="col-md-10">
                                @if(!empty($users))
                                <div class="form-group">
                                    <select id="user_id" name="user_id" class="form-control select2" style="width: 100%;" /> 
                                        <option value="">Notify user</option>
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->first_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @endif
                            </div>
                            <!-- /.col -->
                            
                        </div>    
                        <!-- /.row -->
                        
                      </div>
                      <!-- /.card-body -->
                      <div>
                        <!-- .row -->
                        <div class="row">
                            <!-- .col -->
                            <div class="col-md-2"></div>
                            <!-- /.col -->

                            <!-- .col -->
                            <div class="col-md-4">
                                    <div class="paperclip_attachment">
                                      <i class="fa fa-paperclip"></i>
                                      <input type="file" id="attach_msg" name="attachment" />  
                                    </div>
                                    <a href="javascript:void(0)" id="msg_filename" class="paperclip_attachment_a"></a>                 
                                </div>
                            <!-- /.col -->
                            
                            <!-- .col -->
                            <div class="col-md-6">
                                <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-success">Send Message</button> 
                                    </div>
                                </div> 
                              </div>
                              
                            </div>
                            <!-- /.col -->
                            
                        </div>    
                        <!-- /.row -->
                      </div>
                      
                    </div>
                    <!-- /.card -->
                    </form>
                    <!-- Form -->
                    
                  </div><!-- /.container-fluid -->
                </section>
                <!-- /.content --> 
              </div>
            </div>
            </div>
          </div>
          <!-- /.modal-content -->

        </div>
        <!-- /.modal-dialog -->

    <!-- /.card -->
  
  </section>
  <!-- /.content -->
  
  <!-- COMMENTS -->

  <!-- Main content -->
  <section class="content modal fade" id="my_comments">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Post reply</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            <div class="modal-body">
                  <section class="content">
                      <div class="container-fluid">
                        
                      <!----------- COMMENTS -------------------------->  
                      <!-- Form -->
                  <form action="{{ route('folders.insert_comment') }}" method="POST" class="form-horizontal">
                          @csrf
                          <div class="card card-default">
                            <div class="card-body">
                
                            <!-- .row -->
                            <div class="row">
                              <!-- .col -->
                                <div class="col-md-2">
                                    <ul class='post-user-img'>
                                        <li>
                                            @if (auth()->user()->profile_image)
                                            <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.col -->
                                
                                <!-- /.col -->
                                <div class="col-md-10">
                                <div class="form-group">
                                 <!-- <label>Project Description</label>-->
                                    <div class="card card-outline">
                                        <!-- /.card-header -->
                                        <div class="card-body pad">
                                          @if (auth()->user()->profile_image)
                                          <div class="mb-3">
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <textarea class="textarea" placeholder="Reply here"  name="comment_content"
                                                style="width: 100%; height: 100px; font-size: 1p; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                          </div>
                                          @endif
                                        </div>
                                      </div>
                                </div>
                                <!-- /.form-group -->
                              </div>
                              <!-- /.col -->
                                
                            </div>                            
                          
                            
                          </div>
                          <!-- /.card-body -->
                          <div class="">
                            
                              <!-- .row -->
                              <div class="row">
                                
                                  <!-- .col -->
                                  <div class="col-md-2"></div>
                                <!-- /.col -->
                                
                                <!-- .col -->
                                <div class="col-md-4">                 
                                </div>
                                <!-- /.col -->
                                
                                <!-- .col -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6"></div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-success">Reply this Post</button> 
                                        </div>
                                    </div> 
                                  </div>
                                  
                                </div>
                                <!-- /.col -->
                                
                            </div>    
                            <!-- /.row -->
                          </div>
                          
                        </div>
                        <!-- /.card -->
                        </form>
                        <!-- Form -->
                        
                      
                      </div><!-- /.container-fluid -->
                  </section>

            </div>
          </div>
          <!-- /.modal-content -->

        </div>
        <!-- /.modal-dialog -->

    <!-- /.card -->
  
  </section>
  <!-- /.content -->

  <!-- /.modal -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>&copy; <?php echo date('Y'); ?> <a href="https://www.brsriskgroup.com">Business Risk Solutions Operation (Pty) Ltd | (BRS)</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->
  
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('') }}dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('plugins/jquery-mapael/maps/world_countries.min.js') }}"></script>

<!-- OJQUERY UI -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}" type="text/javascript"></script>

<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>

<!-- OJQUERY UI -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- DATEPICKER -->
<script>
  $(function(){
      $('#start_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#finish_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<!-- DATEPICKER -->
<script>
  $(function(){
      $('#datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<!-- FRAME DIVIDER -->
<script type="text/javascript">
    
</script>

<!-- POST PAPERCLIP ATTACHMENT -->
<script type="text/javascript">
    function getPostFileName() {
        var varfile = $('#attach_post').val().replace(/.*(\/|\\)/, '');
        $("#post_filename").text(varfile);
    }
    $("#attach_post").on('change', function() {
           getPostFileName();
    });
</script>

<!-- MESSAGE PAPERCLIP ATTACHMENT -->
<script type="text/javascript">
    function getMessageFileName() {
        var varfile = $('#attach_msg').val().replace(/.*(\/|\\)/, '');
        $("#msg_filename").text(varfile);
    }
    $("#attach_msg").on('change', function() {
           getMessageFileName();
    });
</script>

<script type="text/javascript">
  //window.onload = myFunction;

  //Hide the list navigation onload event

/*
  function myFunction() {
    //document.getElementsByTagName("li").style.display = "none";
    var nav = document.getElementsByTagName("nav-actions");
    var i;
    for (i = 0; i < nav.length; i++) {
      nav[i].style.display = "none";
    }
  }
*/
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");
  var img = document.getElementsByClassName("folder-bg");
  var ft = document.getElementsByClassName("small-box-footer");
  var nav = document.getElementsByClassName("nav-actions");

  // Define a loop variable
  var i;

  // List View
  function listView() {
    for (i = 0; i < elements.length && i < img.length && i < ft.length && i < nav.length; i++) {
      elements[i].style.width = "100%";
      img[i].style.width = "25%";
      ft[i].style.position = "relative";
      ft[i].style.left = "55%";
      nav[i].style.display = "inline-block";
    }
  }

  // Grid View
  function gridView() {
    for (i = 0; i < elements.length && i< img.length && i < ft.length && i < nav.length; i++) {
      elements[i].style.width = "25%";
      img[i].style.width = "100%";
      ft[i].style.width = "100%";
      nav[i].style.display = "none";
    }
  }


  /*grid-list*/

  $(document).ready(function() {
      $('#list').click(function(event){
          event.preventDefault();
          $('#products .item').addClass('list-group-item');
          $('#products .item').addClass('thumbnail');
          });

      $('#grid').click(function(event){
        event.preventDefault();
        $('#products .item').removeClass('list-group-item');
        $('#products .item').addClass('grid-group-item');
      });
  });

</script>
<script type="text/javascript">
  $("document").ready(function(){
      setTimeout(function(){
          $("div.alert").fadeOut();
      }, 5000 ); // 5 secs

  });
</script>
<script>
  $(function(){
    $(document).on('change','#iso_list', function(){
       var select_value = $(this).val();
       $('#iso_hidden').val(select_value);

    });
  });
</script>

<script>
    $("document").ready(function(){
        $("#add").click(function(){\
            $.ajax({
                type: 'post',
                url: 'folders.add_comment',
                data: {
                    '_token': $('input[name=_token]').val(),
                    'name': $('input[name=comment_content]').val()
                },
                success: function(data){
                    if ((data.errors)) {
                        $('.error').removeClass('hidden');
                        $('.error').text(data.errors.name);
                    }else{
                        $('.error').remove();
                    }
                }
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
    /*
    -------------------------------------------------
        TASKS MANAGEMENT OFF-THE-CANVAS
    -------------------------------------------------
    */
    function openNav() {
      document.getElementById("mySidenav").style.width = "22.5%";
      document.getElementById("main").style.marginRight = "7.5%";
      document.getElementById("main").style.width = "70%";
      document.getElementById("open").innerHTML = "&#9776; Creating Task";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.getElementById("main").style.width = "100%";
      document.getElementById("open").innerHTML = "&#9776; Flip to create task";
    }
    
    function taskChecked(checkbox){
    //If it is checked.
        if(checkbox.checked){
            openNav();
            
        }
        //If it has been unchecked.
        else{
            closeNav();
        }
    }
    
     $(document).ready(function() {
        $("#project_name").click(function(){
            var favorite = [];
            $.each($("input[name='project_name']:checked"), function(){
                favorite.push($(this).val());
            });
			$("#myvalue").val(favorite);
        });
    });
</script>

<script type="text/javascript">
  // Get the elements with class="column"
  var elements = document.getElementsByClassName("column");
  var img = document.getElementsByClassName("folder-bg");
  var ft = document.getElementsByClassName("small-box-footer");
  var nav = document.getElementsByClassName("nav-actions");

  // Define a loop variable
  var i;

  // List View
  function listView() {
    for (i = 0; i < elements.length && i < img.length && i < ft.length && i < nav.length; i++) {
      elements[i].style.width = "100%";
      img[i].style.width = "25%";
      ft[i].style.position = "relative";
      ft[i].style.left = "55%";
      nav[i].style.display = "inline-block";
    }
  }

  // Grid View
  function gridView() {
    for (i = 0; i < elements.length && i< img.length && i < ft.length && i < nav.length; i++) {
      elements[i].style.width = "25%";
      img[i].style.width = "100%";
      ft[i].style.width = "100%";
      nav[i].style.display = "none";
    }
  }


  /*grid-list*/

  $(document).ready(function() {
      $('#list').click(function(event){
          event.preventDefault();
          $('#products .item').addClass('list-group-item');
          //$('#products .item').addClass('thumbnail');
          });

      $('#grid').click(function(event){
        event.preventDefault();
        $('#products .item').removeClass('list-group-item');
       // $('#products .item').addClass('grid-group-item');
      });
  });

</script>
</body>
</html>
