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

  <!-- overlayScrollbars -->
  <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- Plugins -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet" />
  
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
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-bg-silver">
    <!-- Left navbar links -->
    <!--
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-linkbtn btn btn-primary">Dashboard</a>
      </li>
    </ul>
    -->
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
              <li class="nav-item">
                <a href="" class="nav-link active">
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
                <a href="" class="nav-link active">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-paperclip"></i>
              <p>
                My Works
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('health_safety_management.my_discussions') }}" class="nav-link">
                  <i class="fas fa-comments nav-icon"></i>
                  <p>My Discussions</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('health_safety_management.my_tasks') }}" class="nav-link">
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
                <a href="{{ route('health_safety_management.add_project') }}" class="nav-link">
                <i class="nav-icon far fa-plus-square right"></i>
                  <p>Create Project</p>
                </a>
              </li>
              @if(!empty($projects))
                  @foreach($projects as $project)
                  <li class="nav-item">
                    <a href="{{ route('health_safety_management.project', $project->id) }}" class="nav-link">
                      <i class="fas fa-folder-open nav-icon"></i>
                      <p>{{ $project->project_name }}</p>
                    </a>
                  </li>{{ route('health_safety_management.project', $project->id) }}
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
        <form action="{{ route('health_safety_management.insert_project') }}" method="POST" class="form-horizontal">
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
                    <label>ISO Management</label>
                    <select id="project_manager" name="project_manager" class="form-control select2" style="width: 100%;" /> 
                      <option value="" selected="selected">
                        Please select ISO Document
                      </option>
                        @foreach($iso_man as $iso)
                        <option value="{{$iso->id}}">{{$iso->name}}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Project Team</label>
                  <button type="button" class="btn btn-primary btn-block" style="width: 100%;" data-toggle="modal" data-target="#team">Add Team</button>
                </div>
                
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="inputEstimatedDuration">Estimated Project Duration (in days)</label>
                    <input type="number" id="estimated_duration" name="estimated_duration" class="form-control">
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
