<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - Create Folder @yield('title')</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
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
    left: 15px;
    font-size: 20px;
  }
    
  .nav-pill-header li{
    width: 50%;
  }
  
  .nav-pill-header .nav-pills .nav-link{
    color: #000;
    background: transparent;
    border-radius: 0;
    padding: 0;
    text-align: center;
  }
    
  .nav-pill-header .nav-pills .nav-link:first-child{
    margin-right: 25px;
  }
  
  .nav-pill-header .nav-pills .active{
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

     /*
    ------------------------------------
        TOP NAVBAR
    ------------------------------------
    */

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

  article{
    margin-bottom: -25px;
    font-size: 12px !important;
  }

  section .card{
    margin-bottom: -25px;
  }

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

  .card .card-header-sub-top .nav-link{
    color: #fff;
    background-color: #567E95;
  }

  .card .card-header-sub-top .nav-link:hover{
    color: #fff;
  }

  .card .card-header-sub-top li:nth-child(4) .nav-link{
    color: #fff;
    background-color: #556B78;
  }

  .card .card-header-sub-top li:nth-child(5) .nav-link{
    color: #fff;
    background-color: #556B78;
  }

  .card .card-header-sub-bottom{
    background-color: #fff;
    color: #556B78;
  }

  .card .card-header-title{
    color: #fff;
    background-color: #556B78;
    height: 45px;
    padding: 15px;
  }

  .folder-actions ul li{
    display: inline-block;
    list-style: none;
  }
  
  .folder-actions li a{
    width: 125px;
  }

  .folder-img img{
    width: 75px;
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
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-bg-silver">

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
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      
      @if (auth()->user()->image)
        <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
      @endif
                                    
      {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <span class="caret"></span>
        </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('images/brs_logo.png') }} " alt="BRS" class="brand-image brs-img elevation-3"
           style="opacity: .9">
    </a>

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
                <a href="pages/layout/boxed.html" class="nav-link">
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
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
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
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Document Control</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-paperclip"></i>
              <p>
                My Works
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('folders.my_discussions') }}" class="nav-link">
                  <i class="fas fa-comments nav-icon"></i>
                  <p>My Discussions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('folders.my_tasks') }}" class="nav-link">
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
                  <p>Project Detail</p>
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
    <div class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-12">
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
                        
            <!-- Custom Tabs -->
            <div class="card">
                          
              <!-- .card-header -->
              <div class="card-header card-header-sub-top d-flex p-0">
                <h3 class="card-title p-3">
                  ISO 45001 Health & Safety
                </h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <li class="nav-item">
                    <a class="nav-link active" href="{{ route('folders.create_folder') }}" >Add Folder
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('folders.create_file') }}">Add File</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <i class="fas fa-th-large" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      <i class="fas fa-th-list" aria-hidden="true"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
                          
              <!-- .card-header -->
              <div class="card-header card-header-sub-bottom d-flex p-0">
                <h3 class="card-title p-3">
                  ISO 45001 Health & Safety
                </h3>
              </div>
              <!-- /.card-header -->
              
              <!-- .card-body -->           
              <div class="card-body">
                
                <!-- .tab-content -->          
                <div class="tab-content">
                              
                  <!-- Main content -->
                  <section class="content">
                    
                    <!-- .container-fluid -->
                    <div class="container-fluid">
                                 
                        <!-- Select2 Example -->
                        <div class="card card-default ">
                          
                          <!-- .card-header -->
                          <div class="card-header-title">
                            <h3 class="card-title">Add New Folder</h3>
                          </div>
                          <!-- /.card-header -->

                          <!-- .card-body -->
                          <div class="card-body">

                            <!-- form -->
                            <form action="{{ route('folders.store_folder') }}" method="post">
                                <!-- Cross-site Rolderest Forgery -->
                                @csrf

                                <!-- .row -->
                                <div class="row">
                                  <!-- .col --> 
                                  <div class="col-md-6">
                                          <label>Name</label>
                                          <div class="form-group">
                                            <input type="text" name="name" id="name"class="form-control">
                                          </div>
                                  </div>
                                  <!-- /.col -->     

                                  <!-- .col --> 
                                  <div class="col-md-6"></div>
                                  <!-- /.col --> 

                                </div>
                                <!-- /.row -->

                                <!-- .row -->
                                <div class="row">

                                  <!-- .col -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Description</label>
                                      <textarea name="description" id="description" class="form-control"></textarea>
                                    </div>
                                  </div>
                                  <!-- /.col -->

                                  <!-- .col -->
                                  <div class="col-md-6"></div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- .row -->
                                <div class="row">
                                  <!-- .col -->
                                  <div class="col-md-6">
                                    <!-- /.form-group--> 
                                    <div class="form-group">

                                      @if(!empty($isomanagements))          
                                      <select class="form-control" name="iso_management_id" id="iso_management_id">
                                      <option selected="selected">
                                        Select Management Module
                                      </option>
                                      @foreach($isomanagements as $iso)
                                      <option value="{{$iso->id}}">
                                        {{ $iso->name }}
                                      </option>
                                      @endforeach
                                      </select>                     
                                      @endif

                                    </div>
                                    <!-- /.form-group--> 
                                  </div>
                                  <!-- /.col -->  
                                  <!-- .col -->
                                  <div class="col-md-6"></div>
                                  <!-- ./col -->                   
                                </div>
                                <!-- /.row -->

                                <!-- .row -->
                                <div class="row">
                                  <!-- .col -->
                                  <div class="col-md-6">
                                    <label>Icon Type</label>
                                    <!-- .form-group -->
                                    <div class="form-group">
                                      <input type="radio"> Default
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                      <input type="radio"> Custom
                                    </div>
                                    <!-- /.form-group -->
                                  </div>
                                  <!-- /.col -->

                                  <!-- .col -->
                                  <div class="col-md-6"></div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- .row -->
                                <div class="row">
                                  <!-- .col -->                     
                                  <div class="col-md-6">

                                    <!-- Sidebar Menu -->
                                    <nav class="mt-2">
                                      <!-- ul .nav-sidebar -->
                                      <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                        <li class="nav-item has-treeview">
                                          <a href="#" class="nav-link active">
                                          <p>
                                            Advance Options
                                            <i class="fas fa-angle-left right">                        
                                            </i>
                                          </p>
                                          </a>
                                            <ul class="nav nav-treeview">
                                              <li class="nav-item">
                                                      
                                                <!-- .row -->
                                                <div class="row">
                                                  <!-- .col -->
                                                  <div class="col-md-6">
                                                    <label>Enable Review Date</label>
                                                    
                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                      <input type="radio"> <br /><br />

                                                      <label>Review Date Settings</label>

                                                    </div>

                                                  </div>                  
                                                  <!-- /.col -->

                                                  <!-- .col -->
                                                  <div class="col-md-6"></div>
                                                  <!-- /.col -->

                                                </div>
                                                <!-- ./row -->

                                                <!-- .row -->
                                                <div class="row">
                                                      
                                                  <!-- .col -->
                                                  <div class="col-md-6">
                                                    <label>Application Settings
                                                    </label>
                                                          
                                                    <div class="form-group">
                                                      <input type="radio"> Global Default
                                                    </div>
                                                  </div>
                                                  <!-- /.col -->

                                                  <!-- .col -->
                                                  <div class="col-md-6"></div>
                                                  <!-- /.col -->

                                                </div>
                                                <!-- ./row -->

                                                <!-- .row -->
                                                <div class="row">
                                                  
                                                  <!-- .col -->
                                                  <div class="col-md-6">
                                                    <label>Mandatory Review Date
                                                    </label>
                                                    <input type="radio">
                                                  </div>
                                                  <!-- /.col -->

                                                  <!-- .col -->
                                                  <div class="col-md-6"></div>
                                                </div>
                                                <!-- ./row -->

                                                <!-- .row -->
                                                <div class="row">
                                                  <!-- .col -->
                                                  <div class="col-md-6">
                                                    <label>
                                                      Alert Recipients
                                                    </label>

                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                      <input type="radio"> Publisher
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                    <input type="radio"> Select Group(s)
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                      <input type="radio"> Select User(s)
                                                    </div>
                                                  </div>
                                                  <!-- /.form-group -->
                                                  <!-- /.col -->

                                                  <!-- .col -->
                                                  <div class="col-md-6"></div>
                                                  <!-- /.col -->
                                                </div>
                                                <!-- ./row -->

                                                <!-- .row -->
                                                <div class="row">

                                                  <!-- .col -->
                                                  <div class="col-md-6">
                                                    <label>Default Order</label>

                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                      <select class="form-control">
                                                        <option selected="selected">
                                                          Select Order
                                                        </option>
                                                        <option>
                                                          Alphabetical
                                                        </option>
                                                        <option>
                                                          Descending
                                                        </option>
                                                      </select> 
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                      <input type="radio"> Select Group(s)
                                                    </div>
                                                    <!-- /.form-group -->

                                                    <!-- .form-group -->
                                                    <div class="form-group">
                                                      <select class="form-control">
                                                        <option selected="selected">
                                                        Select Layout
                                                        </option>
                                                        <option>
                                                          Thumbnails
                                                        </option>
                                                        <option>
                                                          List
                                                        </option>
                                                      </select>
                                                    </div>
                                                  </div>
                                                  <!-- /.col -->

                                                  <!-- .col -->
                                                  <div class="col-md-6"></div>
                                                  <!-- /.col -->

                                                </div>
                                                <!-- ./row -->

                                            </li>
                                          </ul>
                                        </li>
                                      </ul>
                                      <!-- /ul .nav-sidebar -->

                                    </nav>
                                    <!-- /.sidebar-menu -->

                                  </div>
                                  <!-- /.col -->
                                  <!-- .col -->
                                  <div class="col-md-6"></div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- .row -->
                                <div class="row">
                                  <!-- .col -->
                                  <div class="col-md-4"></div>
                                  <!-- /.col -->
                                  <!-- .col -->
                                  <div class="col-md-6 folder-actions">
                                    <ul>
                                      <li class="nav-item">
                                        <button class="btn btn-primary" type="submit">
                                          Save      
                                        </button>  
                                      </li>
                                      <li>
                                        <a href="" class="btn btn-primary"> Reset
                                        </a>
                                      </li>
                                      <li>
                                        <a href="" class="btn btn-primary">
                                          Close
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                  <!-- /.col -->

                                  <!-- .col -->
                                  <div class="col-md-2"></div>
                                  <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- .row -->
                                <div class="row">
                                  
                                </div>
                                <!-- /.row -->

                            </form>
                            <!-- form -->

                          </div>
                          <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.container-fluid -->

                  </section>
                  <!-- /.content -->

                </div>
                <!-- /.tab-content -->

              </div>
              <!-- /.card-body -->                          

            </div>
            <!-- ./card -->

          </div>
          <!-- /.col -->
        </div>
      </div><!-- /.container-fluid -->

    </div>
    <!-- /.content-header -->

    <!-- /Main content -->
 
    <!-- /.content -->
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

</body>
</html>
