<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Settings</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/settings.css') }}" rel="stylesheet">
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

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- summernote -->
  <!--<link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">-->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote.css') }}">
  
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

  <!-- color schemes -->
      <!--iterating throuhg your color schemes styling-->

  <style type="text/css">
    html, body {
    max-width: 100%;
    overflow-x: hidden;
    background: #f4f6f9;
  }

  .btn {
     margin-top: 5px;
     padding: 0.175rem 0.75rem;
  }
  
  .bg_color{
      background: #364B56 !important;
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
    margin-top: 0;
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
.sidebar ul li .active{
  background: #567E95 !important;
}

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
  Logo
--------------------------------------------
*/

.list_logos ul{
    position: relative;
    left: -15px;
}

.list_logos ul li img{
    margin-left: 2px;
    margin-right: 2px;
    max-height: 75px;
    border: 1px solid #ccc;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
}

.logo img{
    margin-left: 2px;
    margin-right: 2px;
    max-height: 75px;
    border: 1px solid #ccc;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
}

.form-group{
    margin-left: 10px;
}

/*
  Video
--------------------------------------------
*/

video{
    margin-top: 45px;
    box-sizing: border-box;
    border-radius: 5px;
}

  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-bg-silver bg_color">

    <!-- Left navbar links -->
    <h1 class="project-name">
     
    </h1>

    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">

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
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #fff">
      
      @if (auth()->user()->profile_image)
        <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
      @endif
                                    
      {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <span class="caret"></span>
        </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
        <a class="dropdown-item" href="{{ route('folders.settings') }}">Settings</a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"> {{ __('Logout') }}
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
        <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
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
                <a href="" class="nav-lnk">
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
              </li>
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

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h5>Workspace Settings</h5>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Workspace Settings</li>
            </ol>
          </div>

          <div class="col-md-12">
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
      <!-- /.container-fluid -->
    </section>
    <!-- /content header -->
    
    <!-- .container -->
    <div class="container">
      
      <!-- .section -->
      <section class="content">
        <ul class="nav nav-pills" id="task-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link" id="task-content-tab" data-toggle="pill" href="#task-content" role="tab" aria-controls="task-content" aria-selected="true">
            General
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">
            Overview Video
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">
            Manage Disclaimers
            </a>
          </li>
          -->
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-notes-tab" data-toggle="pill" href="#custom-content-below-notes" role="tab" aria-controls="custom-content-below-notes" aria-selected="false">
            Workspace Branding
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="custom-content-below-overview-tab" data-toggle="pill" href="#custom-content-below-overview" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">
              Workspace Logo
            </a>
          </li>
        </ul>
      </section>
      <!-- /.section -->

      <!-- .section -->
      <section class="content">

        <!-- .tab-content -->
        <div class="tab-content" id="task-tabContent">
          <div class="tab-pane fade task" id="task-content" role="tabpanel" aria-labelledby="task-content-tab">
          
            <!-- .container -->
            <div class="container">
              
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

                    </div>
                    <!-- /.card-header -->

                    <!-- .card-header -->
                    <div class="card-header card-header-sub-bottom d-flex p-0">
                      <h3 class="card-title p-3">
                        ISO 45001 Health and Safety
                      </h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <!-- /.card-body -->       
                    <div class="card-body">
                            
                      <!-- container -->
                      <div class="container">

                        <!-- form -->
                        <form method="post" action=""
                        enctype="multipart/form-data">
                          @csrf

                        <!-- row -->
                        <div class="row">                        
                          
                          <div class="col-sm-8">

                            <div class="card-header">
                              <h3 class="card-title">Terms and Conditions</h3>
                            </div><br />

                          </div> 

                        <div class="col-sm-4"></div>

                      </div>
                      <!-- /.row -->

                      <!-- row -->
                      <div class="row">
                        
                        <div class="col-sm-6">
                          <br/>
                          <div id="image_preview"></div>
                  
                          <div class="form-group">
                          <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#terms-cond" >
                            Upload Terms
                          </button>
                        </div>

                        </div> 

                      <div class="col-sm-6"></div>
                      
                      </div>
                      <!-- /.row -->

                    </form>
                    <!-- /form -->

                    </div>
                    <!-- /.container -->

                  </div>
                  <!-- /.card-body -->
                         
                </div>
                <!-- ./card -->
                        
              </div>
              <!-- /.col-md-12 -->
                      
              </div>
              <!-- /.row -->

            </div>
            <!-- .container -->


          </div>
          
          <!-- tab-pane -->
          <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">   <ul class="nav nav-treeview">

            <!-- /.container -->
            <div class="container-fluid">
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

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <h3 class="card-title p-3">
                      ISO 45001 Health and Safety
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  
                  <!-- /.card-body -->       
                  <div class="card-body">
                          
                    <!-- container -->
                    <div class="container">

                      <!-- row -->
                      <div class="row">                        
                        <div class="col-sm-12">
                            <div class="card-header">
                                <h3 class="card-title">Video Setting</h3>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">

                      <div class="col-sm-12">
                            @if(!empty($video_settings))
                              @foreach($video_settings as $video)
                              <video class="col-sm-4" width="320" height="185" preload="auto" controls>
                                  <source src="/public/uploads/video_settings/{{ $video->filename }}" type="video/mp4">
                                  Please update your browser, it does not support html5 video tag.
                              </video>
                              @endforeach()
                           @endif()
                      </div>

                    </div>
                    
                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-4">

                        <div class="form-group">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#upload-video">
                              Upload Video
                            </button>
                        </div>

                      </div>

                      <div class="col-sm-8"></div>

                    </div>
                    <!-- /.row -->

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
            <!-- /.container -->

          </div>
          <!-- end tab-pane -->

          <!-- tab-pane -->
          <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">

            <!-- /.container -->
            <div class="container">
              <!-- .row -->
            <div class="row">
              <div class="col-12">
                        
                <!-- Custom Tabs -->
                <div class="card">
                          
                  <!-- .card-header -->
                  <div class="card-header card-header-sub-top d-flex p-0">
                    <h3 class="card-title p-3">
                      OHS System Manual
                    </h3>

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <h3 class="card-title p-3">
                      
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  
                  <!-- /.card-body -->       
                  <div class="card-body">
                          
                    <!-- container -->
                    <div class="container">

                      <!-- row -->
                      <div class="row">                        
                        
                        <div class="col-sm-6">

                          <!-- checkbox -->
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="radio">
                              <label class="form-check-label">Require workspace members to accept disclaimer every time they sign in.</label>
                            </div>
                          </div>

                          <div class="form-group">
                            <button class="btn btn-secondary" data-toggle="modal" data-target="#upload-disclaimer">
                              Upload Disclaimer
                            </button>
                          </div>

                        </div> 

                      <div class="col-sm-6">
                      </div>

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-6">

                        <div class="form-group">
                          <label class="form-check-label">Disclaimer</label>
                        </div>

                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="form-check-label">Preview Status</label>
                        </div>
                      </div>

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-6">

                        <div class="form-group">
                          <label class="form-check-label">01. Intro. clause.pdf</label>
                        </div>

                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="form-check-label">Processed</label>
                        </div>
                      </div>

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-6"></div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <button class="btn btn-secondary btn-sm" type="submit">
                            Download
                          </button>
                          <button class="btn btn-secondary btn-sm" type="submit">
                            Preview
                          </button>
                          <button class="btn btn-secondary btn-sm" type="submit">
                            Delete
                          </button>
                          <button class="btn btn-secondary btn-sm" type="submit">
                            Make Default
                          </button>
                        </div>
                      </div>

                    </div>
                    <!-- /.row -->

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
            <!-- /.container -->

          </div>
          <!-- /.tab-pane -->

        <div class="tab-pane fade" id="custom-content-below-notes" role="tabpanel" aria-labelledby="custom-content-below-notes-tab">
                
        <!-- /.container -->
            <div class="container">
              <!-- .row -->
            <div class="row">
              <div class="col-12">
                        
                <!-- Custom Tabs -->
                <div class="card">
                          
                  <!-- .card-header -->
                  <div class="card-header card-header-sub-top d-flex p-0">
                    <h3 class="card-title p-3">
                      OHS System Manual
                    </h3>

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <h3 class="card-title p-3">
                      
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  
                  <!-- /.card-body -->       
                  <div class="card-body">
                          
                    <!-- container -->
                    <div class="container">

                      <!-- form -->
                      <form action="{{ 
                          route('folders.setColors') }}" method="post" enctype="multipart/form-data">
                            @csrf

                      <!-- row -->
                      <div class="row">
                        <div class="col-sm-4">
                          <!-- Color Picker -->
                          <div class="form-group">
                            <label>Border top color:</label>

                            <div class="input-group border_top_color">
                              <input type="text" class="form-control" name="border_top_color" autocomplete="off">

                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                              </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form group -->
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                      </div>
                      <!-- /.row -->
                      <!-- row -->
                      <div class="row">
                        <div class="col-sm-4">
                          <!-- Color Picker -->
                          <div class="form-group">
                            <label>Background color:</label>

                            <div class="input-group bg_color">
                              <input type="text" class="form-control" name="bg_color" autocomplete="off">

                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                              </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form group -->
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                      </div>
                      <!-- /.row -->
                      <!-- row -->
                      <div class="row">
                        <div class="col-sm-4">
                          <!-- Color Picker -->
                          <div class="form-group">
                            <label>Email background color:</label>

                            <div class="input-group email_bg_color">
                              <input type="text" class="form-control" name="email_bg_color" autocomplete="off">

                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                              </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form group -->
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                      </div>
                      <!-- /.row -->
                      <!-- row -->
                      <div class="row">
                        <div class="col-sm-4">
                          <!-- Color Picker -->
                          <div class="form-group">
                            <label>Custom login border color:</label>

                            <div class="input-group custom_login_border_color">
                              <input type="text" class="form-control" name="custom_login_border_color" autocomplete="off">

                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                              </div>
                            </div>
                            <!-- /.input group -->
                          </div>
                          <!-- /.form group -->
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                      </div>
                      <!-- /.row -->
                      <!-- row -->
                      <div class="row">
                        <div class="col-sm-4">
                          <!-- Save button - colorpicker -->
                          <div class="form-group">
                              <button type="submit" class="btn btn-info">
                                Save Workspace Settings
                              </button>
                          </div>
                          <!-- /.form group -->
                        </div>
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4"></div>
                      </div>
                      <!-- /.row -->

                     </form>
                      <!-- form -->

                      <!-- row -->
                      <div class="row">                        
                        
                        <div class="col-sm-6">
                          <!--
                          <form action="{{ 
                          route('folders.uploadlogo') }}" method="post" enctype="multipart/form-data">
                            @csrf

                              <input type="file" id="logo" name="logo" multiple/>
                              <input type="hidden" name="user_id">
                              <input type="submit" class="btn btn-success" value="Upload Image"/>
                          </form>
                          -->

                          <br/>
                          <div id="image_preview"></div>
                  
                          <div class="form-group">
                          <button class="btn btn-secondary" type="button" data-toggle="modal" data-target="#multi-image-upload" >
                            Upload Logo
                          </button>
                        </div>

                        </div> 

                      <div class="col-sm-6"></div>

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-6">

                        <div class="form-group">
                          <label class="form-check-label">Or select one of the images you have already uploaded.</label>
                        </div>

                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                         <!-- <label class="form-check-label">Preview Status</label>-->
                        </div>
                      </div>

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-6">

                        <!-- image -->
                          <div class="form-group">
                            <ul>
                              @if(!empty($logos))
                                  @foreach($logos as $logo)
                                  <li>
                                    <a href="">
                                      <img src="/public/uploads/logos/{{ $logo->logo }}"
                                         alt="BRS" style="opacity: 1">
                                   </a>                               
                                </li>
                                  @endforeach
                               @endif
                            </ul>
                          </div>

                      </div>

                      <div class="col-sm-6">
                        <div class="form-group">
                          <!--<label class="form-check-label">Processed</label>-->
                        </div>
                      </div>

                    </div>
                    <!-- /.row -->

   

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
            <!-- /.container -->
        
        </div>

        <!-- .tab-pane -->
        <div class="tab-pane fade show active" id="custom-content-below-overview" role="tabpanel" aria-labelledby="custom-content-below-overview-tab">
          
          <!-- /.container -->
            <div class="container">
              <!-- .row -->
            <div class="row">
              <div class="col-12">
                        
                <!-- Custom Tabs -->
                <div class="card">
                          
                  <!-- .card-header -->
                  <div class="card-header card-header-sub-top d-flex p-0">
                    <h3 class="card-title p-3">
                      OHS System Manual
                    </h3>

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <h3 class="card-title p-3">
                      
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  
                  <!-- /.card-body -->       
                  <div class="card-body">
                          
                    <!-- container -->
                    <div class="container">

                      <!-- row -->
                      <div class="row">                        
                        
                        <div class="col-sm-7">

                          <!-- image -->
                          <div class="form-group logo">
                              @if(!empty($logos))
                                @foreach($logos as $logo)
                                  <img src="/public/uploads/logos/{{ $logo->logo }}"
                                     alt="BRS" style="opacity: 1">
                               @endforeach
                             @endif
                            </div>
                            
                            <div class="form-group" data-toggle="modal" data-target="#upload-workspace-logo">
                              <button class="btn btn-secondary" type="submit">
                                Upload Logo
                              </button>                          
                            </div>
                        
                        </div>

                        <div class="col-sm-5"></div>
                        
                        </div> 

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-7">

                        <div class="form-group">
                          <label class="form-check-label">Or select one of the images you have already uploaded.</label>
                        </div>

                      </div>

                      <div class="col-sm-5"></div>

                    </div>
                    <!-- /.row -->

                    <!-- row -->
                    <div class="row">
                      
                      <div class="col-sm-7">

                        <!-- image -->
                          <div class="form-group list_logos">
                            <ul>
                                @if(!empty($list_logos))
                                  @foreach($list_logos as $logo)
                                  <li>
                                     <img src="/public/uploads/logos/{{ $logo->logo }}"
                                         alt="BRS" style="opacity: 1">
                                  </li>
                                  @endforeach
                               @endif
                            </ul>
                          </div>

                      </div>

                      <div class="col-sm-5"></div>

                    </div>
                    <!-- /.row -->

   

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
            <!-- /.container -->

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
  <!------------- VIDEO DISCLAIMER ------------>
    <div class="modal fade" id="upload-disclaimer">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('folders.upload_disclaimer') }}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="modal-header">
              <h4 class="modal-title">Upload Disclaimer</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" name="disclaimer_file" class="custom-file-input">
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>

            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Disclaimer</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->

  <!-- .modal -->
  <!------------- VIDEO SETTINGS ------------>
    <div class="modal fade" id="upload-video">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('folders.uploadvideosettings') }}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="modal-header">
              <h4 class="modal-title">Upload Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="filename">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Video</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->
  
  <!-- .modal -->
    <div class="modal fade" id="upload-video">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('folders.uploadvideosettings') }}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="modal-header">
              <h4 class="modal-title">Upload Video</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="filename">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Video</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->

  <!-- .modal -->
    <div class="modal fade" id="multi-image-upload">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('folders.upload_video') }}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="modal-header">
              <h4 class="modal-title">Upload Multiple Images</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="disclaimer_video" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Video</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->

<!-- .modal -->
    <div class="modal fade" id="upload-workspace-logo">

        <!-- .modal-dialog -->
        <div class="modal-dialog modal-lg">

          <!-- form -->
          <form method="post" action="{{ route('folders.uploadlogo') }}" enctype="multipart/form-data">
            @csrf

            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Upload Logo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Logo</button>
              </div>
            </div>
          <!-- /.modal-content -->
          </form>
          <!-- form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->
  
  <!-- .modal -->
    <div class="modal fade" id="terms-cond">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('folders.upload_terms') }}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="modal-header">
              <h4 class="modal-title">Upload Terms and Conditions</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="terms" multiple>
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Terms</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
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
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->

<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- bootstrap color picker -->
<script src="{{ asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!--<script src="{{ asset('plugins/summernote/summernote-bs4.js') }}"></script>-->



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

<script type="text/javascript">

  $("document").ready(function(){
      setTimeout(function(){
          $("div.alert").fadeOut();
      }, 5000 ); // 5 secs

  });
</script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
<script>
  $(function () {

    //Colorpicker
    $('.border_top_color').colorpicker()
    $('.bg_color').colorpicker()
    $('.email_bg_color').colorpicker()
    $('.custom_login_border_color').colorpicker()

    //color picker with addon
    $('.border_top_color').on('colorpickerChange', function(event) {
      $('.border_top_color .fa-square').css('color', event.color.toString());
    });
    $('.bg_color').on('colorpickerChange', function(event) {
      $('.bg_color .fa-square').css('color', event.color.toString());
    });
    $('.email_bg_color').on('colorpickerChange', function(event) {
      $('.email_bg_color .fa-square').css('color', event.color.toString());
    });
    $('.custom_login_border_color').on('colorpickerChange', function(event) {
      $('.custom_login_border_color .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>

<script type="text/javascript">
  $("#uploadFile").change(function(){
     $('#image_preview').html("");
     var total_file=document.getElementById("uploadFile").files.length;


     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");
     }


  });


  $('form').ajaxForm(function() 
   {
    alert("Uploaded SuccessFully");
   }); 
</script>

</body>
</html>
