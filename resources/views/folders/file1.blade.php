<?php

//var_dump($folder); die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - Folder</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/folders.css') }}" rel="stylesheet">
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

  .file li .fa-ellipsis-v{
    position: relative;
    top: -75px;
    left: -7%;
    float: left;
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
    max-height: 80%;
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

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light bg_color">
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
        <a href="" class="nav-linkbtn btn btn-primary">Calendar</a>
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
        <a href="" class="nav-linkbtn btn btn-primary">Calendar</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-linkbtn btn btn-primary">Settings</a>
      </li>
    </ul>
    @endrole

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
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color: #fff;">
      
      @if (auth()->user()->profile_image)
        <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
      @endif
                                    
      {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <span class="caret"></span>
        </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('profile') }}">Profile
        </a>
        <a class="dropdown-item" href="{{ route('folders.settings') }}">Settings
        </a>
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
          <img src="uploads/logos/{{ $logo->logo }}"
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
            <h1>{{ $folder->name }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Files</li>
            </ol>
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
      <!-- /.section -->

      <!-- .section -->
      <section class="content">

        <!-- .tab-content -->
        <div class="tab-content" id="task-tabContent">
          <div class="tab-pane fade task" id="task-content" role="tabpanel" aria-labelledby="task-content-tab">
          
          <!-- if --> 
          @if(!empty($tasks))
            
            <!-- foreach --> 
            @foreach($tasks as $task)

            <!-- card --> 
            <div class="card card-default task-card">             

              <!-- .row -->
              <div class="row">

                <!-- .col -->
                <div class="col-md-1">
                  <input type="checkbox" checked>
                </div>
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
                                
            </div>
            <!-- /.card -->

            @endforeach
            <!-- endforeach -->

          @endif
          <!-- endif -->

          </div>
          
          <!-- tab-pane -->
          <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">   <ul class="nav nav-treeview">
                          
              <!-- if -->   
              @if(!empty($posts)) 
                
                <!-- foreach -->
                @foreach($posts as $post)
                <!-- /.container -->
                <div class="container">

                  <!-- .row -->
                  <div class="row">
                                  
                    <!-- .col -->
                    <div class="col-12">

                      <!-- card -->
                      <div class="card">
                        <!-- card-header -->              
                        <div class="card-header border-0">
                           
                          <!-- .row -->              
                          <div class="row">
                            <!-- .col -->                
                            <div class="col-md-1">
                              <img src="{{ $post->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;">
                            </div>
                            <!-- /.col -->

                            <!-- .col -->
                            <div class="col-md-6">
                            {{ $post->first_name . ' ' . $post->last_name  . ' Folder: '  }} 
                              <strong>{{ $post->project_name }}</strong><br />
                              <small class="post-time-ago">
                                {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                              </small>
                            </div>
                            <!-- /.col -->

                            <!-- .col -->
                            <div class="col-md-4"></div>
                            <!-- /.col -->

                            <!-- .col -->
                            <div class="col-md-1"></div>
                            <!-- /.col -->

                          </div>
                          <!-- /.row -->

                      </div>
                      <!-- /.card-header -->
                                      
                      <div class="card-body">

                        <!-- .row -->
                        <div class="row">

                          <!-- .col-->
                          <div class="col-md-1"></div>
                          <!-- /.col-->

                          <!-- .col-->
                          <div class="col-md-6">
                            <p>{{ $post->post_content }}</p>                           
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

                        <!-- .row -->
                        <div class="row">

                          <!-- .col-->
                          <div class="col-md-1"></div>
                          <!-- /.col-->

                          <!-- .col-->
                          <div class="col-md-6 post-footer">
                            <p>
                              <a href="#" data-toggle="modal" data-target="#my_comments">Reply</a>
                              &nbsp; 
                              <a href="">Comments(0)</a> 
                              &nbsp; 
                              <a href="">Likes(0)</a>
                            </p>
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

                </div>
                <!-- /.container -->
                @endforeach()
                <!-- endforeach -->

              @endif
              <!-- endif -->

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
                      {{ $folder->filename }}
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
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-ellipsis-v" aria-hidden=" true">                              
                              </i>
                            </a>
                            <div class="dropdown-menu ellipsis-topbar-dropdown-menu">
                              <a class="dropdown-item" href="#">See Prview</a>
                              <a class="dropdown-item" href="#">Download</a>
                              <a class="dropdown-item" href="#">Copy</a>
                              <a class="dropdown-item" href="#">Rename</a>
                              <a class="dropdown-item" href="#">Create task</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Delete</a>
                            </div>
                          </li>
                        </ul>
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

                      @if(!empty($file)) 
                      <div id="products" class="row view-group">

                        @foreach($file as $files)
                        <div class="item col-xs-3 col-lg-3">

                          <!-- .thumbnail -->
                          <div class="thumbnail card">
                            <div class="img-event">
                                {{ $files->id }}
                                <a href="{{ route('folders.file', $files->id) }}">
                                <img class="group list-group-image img-fluid" src="{{ asset('images/file-icon.jpg') }}" alt="" />
                              </a>
                            </div>

                            <!-- .caption -->
                            <div class="caption card-body">
                              <h4 class="group card-title inner list-group-item-heading">
                                {{ substr($files->filename, 0, 15) }}
                              </h4>
                              <p class="group inner list-group-item-text">
                                {{ $files->created_at }}
                              </p><!-- .row -->                       
                              <div class="row">
                                <div class="col-xs-12 col-md-12">

                                  <!-- .navbar-nav -->
                                  <ul class="navbar-nav ml-auto file">
                                    <li class="nav-item dropdown">
                                      <a class="nav-link" href="#"
                                        data-toggle="dropdown">
                                        <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                      </a>
                                      <div class="dropdown-menu ellipsis-topbar-dropdown-menu">
                                      <a class="dropdown-item" href="#">See Prview</a>
                                      <a class="dropdown-item" href="#">Download</a>
                                      <a class="dropdown-item" href="#">Copy</a>
                                      <a class="dropdown-item" href="#">Rename</a>
                                      <a class="dropdown-item" href="#">Delete</a>
                                      <a class="dropdown-item" href="#">Upload new version</a>
                                      <div class="dropdown-divider"></div>
                                      <a class="dropdown-item" href="#">Copy file link</a>
                                    </div>
                                    </li>
                                  </ul>
                                  <!-- /.navbar-nav -->

                                </div>
                              </div>
                              <!-- /.row -->
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
                            <div class="card" style="margin-top: 10px">
                              <div class="card-header border-0">
                                <div class="row">
                                  <div class="col-md-1">
                                    <img src="{{ $post->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                  </div>
                                  <div class="col-md-6">
                                    {{ $post->first_name . ' ' . $post->last_name  . ' Folder: '  }} 
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
                                  <div class="col-md-6">
                                    <p>{{ $post->post_content }}</p>
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

                              <!-- .row -->
                              <div class="row">

                                <!-- .col-->
                                <div class="col-md-1"></div>
                                <!-- /.col-->

                                <!-- .col-->
                                <div class="col-md-6 post-footer">
                                  <p>
                                    <a href="#" data-toggle="modal" data-target="#my_comments">
                                    Reply
                                    </a>
                                    &nbsp; 
                                    <a href="">Comments(0)</a>
                                     &nbsp; 
                                     <a href="">Likes(0)</a>
                                   </p>
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
                          <div class="container-fluid">

                            @if(!empty($posts))

                            @foreach($posts as $post)
                            <div class="card card-default task-card">
                              <!-- .card-body -->               

                                <!-- .row -->
                                <div class="row">
                                    <!-- .col -->
                                    <div class="col-md-2 task-user-img">
                                       <img src="{{ $post->profile_image }}">
                                    </div>
                                    <!-- /.col -->

                                    <!-- .col -->
                                    <div class="col-md-3">
                                      <p>{{ $post->first_name }}</p>
                                    </div>
                                    <!-- /.col -->

                                    <!-- .col -->
                                    <div class="col-md-5">
                                      <a href="">
                                        {{ $post->attachment }}
                                      </a>
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
                      
                          </div><!-- /.container-fluid -->
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
                      <input type="hidden" name="folder_id" value="{{ $folder->id }}">
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

</body>
</html>
