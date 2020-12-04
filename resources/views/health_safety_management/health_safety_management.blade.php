<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - Health & Safety Management @yield('title')</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('plugins/summernote/summernote-bs4.css') }}" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- overlayScrollbars -->
  <link href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" rel="stylesheet">
  
  <!-- Theme style -->
  <link href="{{ asset('dist/css/adminlte.min.css') }}" rel="stylesheet">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style>
  	.btn {
		margin-top: 15px;
		padding: 0.475rem 0.75rem;
	}
	
  	.btn-primary {
	  color: #fff;
	  background-color: #556B78;
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
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('health_safety_management.add_project') }}" class="nav-link btn btn-primary">Create Project</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('health_safety_management.my_discussions') }}" class="nav-link btn btn-primary">Create Discussion</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('health_safety_management.my_tasks') }}" class="nav-link btn btn-primary">Create Task</a>
      </li>
    </ul>

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
                                    @if (auth()->user()->profile_image)
                                        <img src="{{ asset(auth()->user()->profile_image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
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
                <a href="{{ route('health_safety_management') }}" class="nav-link">
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
                  </li>
                  @endforeach
               @endif
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-folder"></i>              
              <p>
                Folders                
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
              @if(!empty($folders))
                  @foreach($folders as $folder)
                  <li class="nav-item">
                    <a href="{{ route('health_safety_management.folder', $folder->id) }}" class="nav-link">
                      <i class="fas fa-folder-open nav-icon"></i>
                      <p>{{ $folder->name }}</p>
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
      <div class="container-fluid">
      	 <div class="row">
         	<div class="col-md-12 col-sm-12 col-xs-12">
            	<div>
                    @if(Session::has('success_msg'))
                    <div class="alert alert-success">{{ Session::get('success_msg') }}
                    </div>
                    @endif
                </div>
            </div>
         </div>
     	 <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Health and Safety Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Health and Safety Management</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

<!-- PAGE SCRIPTS -->
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
<script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>

<script type="text/javascript">

	$("document").ready(function(){
    	setTimeout(function(){
       		$("div.alert").fadeOut();
    	}, 5000 ); // 5 secs

	});
</script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>  
</body>
</html>
