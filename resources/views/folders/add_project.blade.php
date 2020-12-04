<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - Create Project @yield('title')</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">

  <!-- overlayScrollbars -->
  <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- Plugins -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
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
		margin-top: 15px;
		padding: 0.475rem 0.75rem;
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
		 
	 .content-header{
        margin-top: 85px;
    }

  /*
--------------------------------
  FOLDER STYLES
--------------------------------
  */
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

   <!--
      @if(!empty($projects))
        @foreach($projects as $project)
          <li class="nav-item">
            <a href="{{ route('folders.project', $project->id) }}" class="nav-link">
            <i class="fas fa-folder-open nav-icon"></i>
            <p>{{ $project->project_name }}</p>
            </a>
          </li>{{ route('folders.project', $project->id) }}
        @endforeach
      @endif
  -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
     	 <div class="row mb-2">
          <div class="col-sm-6">
            <div>
              @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach()
              </div>
              @endif
              @if(Session::has('success_msg'))
                <div class="alert alert-success">{{   
                  Session::get('success_msg') }}
                </div>
              @endif
            </div>
            <h1 class="m-0 text-dark">Create Project</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Create Project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        
          <!-- Main content -->    
          <section class="content">
      <div class="container-fluid">
          
        <!-- Form -->
        <form action="{{ route('folders.insert_project') }}" method="POST" class="form-horizontal">
            @csrf
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Project Information</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Project Name</label>
                  <input type="text" id="project_name" name="project_name" class="form-control" style="width: 100%;" autocomplete="off">
                </div>
                @if(!empty($users))
                <div class="form-group">
                    <label>Project Manager</label>
                    <select id="project_manager" name="project_manager" class="form-control select2" style="width: 100%;" /> 
                      <option value="" selected="selected">
                        Please select Project Manager
                      </option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->first_name}}</option>
                        @endforeach
                    </select>                    
                </div>
                @endif
                <!-- /.form-group -->
                <!--
                <div class="form-group">
                  <label>Project Team</label>
                  <button type="button" class="btn btn-primary btn-block" style="width: 100%;" data-toggle="modal" data-target="#team">Add Team</button>
                </div>
                -->
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                    <label>ISO Management</label>
                    <select id="iso_management_id" name="iso_management_id" class="form-control select2" style="width: 100%;" /> 
                      <option value="" selected="selected">
                        Please select ISO Document
                      </option>0
                        @foreach($iso_managements as $iso_management)
                        <option value="{{$iso_management->id}}">
                          {{$iso_management->name}}
                        </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputEstimatedDuration">Start Date</label>
                            <input type="text" id="start_datepicker" name="started_at" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEstimatedDuration">Finish Date</label>
                            <input type="text" id="finish_datepicker" name="finished_at" class="form-control" autocomplete="off"> 
                        </div>
                    </div> 
                  </div>
               </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-md-12">
                <div class="form-group">
                 <!-- <label>Project Description</label>-->
                    <div class="card card-outline">
                        <div class="card-header">
                          <h3 class="card-title">
                            Project Description
                          </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body pad">
                          <div class="mb-3">
                            <textarea class="textarea form-control" placeholder="Place some text here"  name="project_desc"
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
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <!-- .row -->
            <div class="row">
            
                <!-- .col -->
                <div class="col-md-6">
                    <input type="hidden" value = "{{Auth::user()->id}}" name = "user_id">
                    <select class="form-control select2 visibility-status" name="visibility_status" style="width: 100%;">
                        <option value="visibility" selected>Select Visibility Status</option>
                        <option value="Public">Public</option>
                        <option value="Member">Project Member Only</option>
                  </select>
                </div>
                <!-- /.col -->
                
                <!-- .col -->
                <div class="col-md-6">
                    <div class="form-group">
                    <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success swalDefaultSuccess">Create Project</button> 
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
    
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
 
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
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
<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

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
  
</body>
</html>
