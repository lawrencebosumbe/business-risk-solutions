<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - Create File @yield('title')</title>
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
              @if(!empty($projects))
                  @foreach($projects as $project)
                  <li class="nav-item">
                    <a href="{{ route('folders.project', $project->id) }}" class="nav-link">
                      <i class="fas fa-folder-open nav-icon"></i>
                      <p>{{ $project->project_name }}</p>
                    </a>
                  </li>
                  @endforeach
               @endif
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
                    <a class="nav-link" href="">Add File</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">
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
                    <!-- .row -->
              <div class="row">

                <!-- .col -->
                <div class="col-md-12">

                  <!-- form -->
                  <form method="post" action="{{ route('document_control.insert_document') }}" enctype="multipart/form-data">
                    @csrf
                  <!-- .card -->
                  <div class="card">
                    <!-- .card-header -->
                    <div class="card-header">
                        <div class="revised-doc-header">
                          <h5 class="card-title">
                            Document Identification
                          </h5>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- .card-body -->
                    <div class="card-body">

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid"><br/><br/>
                              <div class="row mb-2">
                                <div class="col-sm-2">
                                  <label>
                                    Document Number
                                  </label>
                                  @if(!empty($doc_number))
                                    @foreach($doc_number as $doc)
                                      <p>
                                        {{ $doc->doc_number }}
                                      </p>
                                    @endforeach
                                  @endif
                                  <input type="hidden" name="doc_number">
                                </div>
                                <div class="col-sm-4">
                                  <label>
                                    Title
                                  </label>
                                  <input type="text" name="filename" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                  <label>
                                    Revision
                                  </label>
                                  <input type="text" name="revision" class="form-control" value="0" readonly>
                                </div>
                                @if(!empty($iso_systems))
                                <div class="col-sm-4">
                                  <label>
                                    Department
                                  </label>
                                  <select class=" form-control" name="department">
                                    @foreach($iso_systems as $iso)
                                    <option value="{{ $iso->name }}">
                                        {{ $iso->name }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                @endif
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row mb-2">
                                @if(!empty($users))
                                <div class="col-sm-6">
                                  <label>
                                    Originator
                                  </label>
                                  <select class="form-control" name="originator">
                                      @foreach($users as $user)
                                      <option value="{{$user->first_name}}">{{$user->first_name}} {{ $user->last_name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                @endif
                                <div class="col-sm-2">
                                  <label>
                                    Originate Date
                                  </label>
                                  <input type="text" name="original_date" class="form-control" id="original_datepicker">
                                </div>
                                <div class="col-sm-2">
                                  <label>
                                    Effective Date
                                  </label>
                                  <input type="text" name="effective_date" class="form-control" id="effective_datepicker">
                                </div>
                                <div class="col-sm-2">
                                  <label>
                                    Review Date
                                  </label>
                                  <input type="text" name="review_date" class="form-control" id="review_datepicker">
                                </div>
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-sm-6">
                                  <label>
                                    Location
                                  </label>
                                  <select class="form-control" name="location">
                                      <option>
                                        Eastern Cape
                                      </option>
                                      <option>
                                        Free State
                                      </option>
                                      <option>
                                        Gauteng
                                      </option>
                                      <option>
                                        Kwa-Zulu Natal
                                      </option>
                                      <option>
                                        Limpopo
                                      </option>
                                      <option>
                                        Mpumalanga
                                      </option>
                                      <option>
                                        Northern Cape
                                      </option>
                                      <option>
                                        North West
                                      </option>
                                      <option>
                                        Western Cape
                                      </option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                  <label>
                                    Additional Security
                                  </label>
                                  <input type="text" name="additional_security" class="form-control">
                                </div>
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row mb-2">
                                <div class="col-sm-6">
                                  <label>
                                    Owner
                                  </label>

                                  @if(!empty($users))
                                  <select class="form-control" name="owner">
                                    @foreach($users as $user)
                                      <option value="{{$user->first_name}}">{{ $user->first_name}}
                                        {{ $user->last_name}}
                                      </option>
                                    @endforeach
                                  </select>
                                  @endif

                                </div>
                                @if(!empty($users))
                                <div class="col-sm-6">
                                  <label>
                                    Reviewers List
                                  </label>
                                  <select class="form-control" name="reviewer">
                                      @foreach($users as $user)
                                      <option value="{{$user->first_name}}">{{$user->first_name}} {{ $user->last_name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                                @endif
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row mb-2">
                                <div class="col-sm-6">
                                  <label>
                                    Electronic Distribution List
                                  </label>
                                  <select class=" form-control" name="electronic_distribution">
                                      <option>
                                        Document Control Manager
                                      </option>
                                      <option>
                                        Document Control Reader
                                      </option>
                                      <option>
                                        Document Corentrol Reviewer
                                      </option>
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                  <label>
                                    Hardcopy Distribution List
                                  </label>
                                  <select class="form-control" name="hardcopy">
                                      <option>
                                        Production Office
                                      </option>
                                      <option>
                                        Sales & Collection
                                      </option>
                                      <option>
                                        Procurement
                                      </option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row mb-2">
                                @if(!empty($folders))
                                <div class="col-sm-6">
                                  <label>
                                    Categories
                                  </label>
                                  <select class=" form-control" name="category">
                                    @foreach($folders as $folder)
                                    <option value="{{ $folder->name }}">
                                        {{ $folder->name }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                @endif

                                @if(!empty($projects))
                                <div class="col-sm-6">
                                  <label>
                                    System Element
                                  </label>
                                  <select class=" form-control" name="system_element">
                                    @foreach($projects as $project)
                                    <option value="{{ $project->project_name }}">
                                        {{ $project->project_name }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                @endif
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row mb-2">
                                <div class="col-sm-12">
                                  <label>
                                    Description
                                  </label>
                                  <textarea class="form-control" name="description"></textarea>
                                </div>

                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid">
                              <div class="row mb-2">
                                @if(!empty($projects))
                                <div class="col-sm-4">
                                  <label>
                                    My Folder
                                  </label>
                                  <select class=" form-control" name="folder_id">
                                    @foreach($folders as $folder)
                                    <option value="{{ $folder->id }}">
                                        {{ $folder->name }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                @endif
                                @if(!empty($projects))
                                <div class="col-sm-4">
                                  <label>
                                    My Project
                                  </label>
                                  <select class=" form-control" name="project_id">
                                    @foreach($projects as $project)
                                    <option value="{{ $project->id }}">
                                        {{ $project->project_name }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                @endif
                                @if(!empty($iso_systems))
                                <div class="col-sm-4">
                                  <label>
                                    My ISO Document
                                  </label>
                                  <select class=" form-control" name="iso_management_id">
                                    @foreach($iso_systems as $iso)
                                    <option value="{{ $iso->id }}">
                                        {{ $iso->name }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                @endif
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                    </div>
                    <!-- /.body -->

                    <!-- .card-header -->
                    <div class="card-header">
                        <div class="revised-doc-header">
                          <h5 class="card-title">
                            Document Body
                          </h5>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <!-- .card-body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <label>
                            Attachment
                          </label>
                          <input type="file" name="url" class="form-control">
                      </div>
                      <div class="col-sm-9"></div>
                    </div>
                    </div>
                    <!-- /.card-body -->

                    <!-- .card-footer -->
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4">
                          <button type="submit" class="btn btn-primary">
                            Save & Close
                          </button>
                          <button type="reset" class="btn btn-primary">
                            Reset
                          </button>
                          <a href="{{ route('document_control.document_life_cycle') }}" class="btn btn-primary">
                            Cancel
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-footer -->

                  </div>
                  <!-- /.card -->

                  </form>
                  <!-- form -->

                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
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
<script src="https://ajax.googleapis.com/ajax/libs/
jquery/3.4.1/jquery.min.js"></script>
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
      $('#resource_date').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#review_date').datepicker({
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

<!-- DATEPICKER -->
<script>
  $(function(){
      $('#original_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#effective_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<!-- DATEPICKER -->
<script>
  $(function(){
      $('#review_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#started_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#completed_datepicker').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
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

</body>
</html>
