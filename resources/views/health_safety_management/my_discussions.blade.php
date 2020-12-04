<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - My Discussions @yield('title')</title>
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
	
  /*
    ------------------------------------
        PAPERCLIP ATTACHMENT
    ------------------------------------
    */

    .paperclip_attachment{
      position:relative;
      display:inline-block;
      left:-4px;
      bottom:-6px;
      width: 55px;
      height: 45px;
      overflow:hidden;
    }

    .paperclip_attachment input[type="file"]{
      opacity: 0;
      font-size: 50px;
      width: 75px; 
      filter:alpha(opacity: 0);  
      position: relative; 
      top: -25px; 
      left: -15px;
    }

    .paperclip_attachment_a{
      cursor:pointer;
      margin-top:15px;
      text-decoration:none;
    }

    .paperclip_attachment i{
      position: relative;
      left: 15px;
      top: 20px;
      font-size: 22px;
      color: #007bff;
      cursor: pointer;
    }

    .paperclip_attachment label{
      position: absolute;
      left: 25px;
      top: -5px;
      font-size: 12px;
      color: #007bff;
      cursor: pointer;
      z-index: 999;
    }

    .card-header{
      border-bottom: 0;
    }

     /*
    ------------------------------------
        POST
    ------------------------------------
    */

    .post-time-ago{
      color: #999;
    }

    .post-footer{
      position: relative;
      top: 25px;
      color: #007bff;
      font-size: 14px;
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
        <a href="#" class="nav-link btn btn-primary" data-toggle="modal" data-target="#my_discussions">Create Message</a>
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
     	 <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Discussions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">My Discussions</li>
            </ol>
          </div><!-- /.col -->
       </div><!-- /.row -->
        
          <!-- Main content -->   
          @if(!empty($posts)) 
            @foreach($posts as $post)
            <section class="content">
            <div class="container">
                <div class="row">
                  <!-- .col -->
                  <div class="col-12">
                    <!-- Custom Tabs -->
                    <div class="card">
                      <div class="card-header">
                         <div class="row">
                            <div class="col-md-1">
                                <img src="{{ $post->profile_image }}" style="width: 40px; height: 40px; border-radius: 50%;">
                            </div>
                            <div class="col-md-6">
                              {{ $post->first_name . ' ' . $post->last_name  . ' Project: '  }} 
                              <strong>{{ $post->project_name }}</strong><br />
                              <small class="post-time-ago">
                                {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}
                              </small>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-1">
                                <ul class="nav ml-auto">
                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                      <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" tabindex="-1" href="#">Add Tags</a>
                                      <a class="dropdown-item" tabindex="-1" href="#">Email Me</a>
                                    </div>
                                  </li>
                                </ul>
                            </div>
                         </div>
                      </div><!-- /.card-header -->
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
                              <p><a href="#" data-toggle="modal" data-target="#my_comments">Reply</a>&nbsp; <a href="">Comments(0)</a> &nbsp; <a href="">Likes(0)</a></p>
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
                      </div><!-- /.card-body -->
                    </div>
                    <!-- ./card -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
            </section>
            @endforeach()
          @endif
          <!-- /.content -->
    
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
  
  <!-- POST & MESSAGE -->

  <!-- Main content -->
  <section class="content modal fade" id="my_discussions">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">Create New Dicussion</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          <div class="nav-pill-header">
            	<ul class="nav nav-pills" id="pills-tab" role="tablist">
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
                      <form action="{{ route('health_safety_management.insert_discussion') }}" method="POST" class="form-horizontal">
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
                                    @if(!empty($projects))
                                    <div class="form-group">
                                        <select id="project_id" name="project_id" class="form-control select2" style="width: 100%;" /> 
                                            @foreach($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
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
                    <form action="{{ route('health_safety_management.send_message') }}" method="POST" class="form-horizontal">
                        @csrf
                    <div class="card card-default">
                      <div class="card-body">
                        
                        <!-- .row -->
                        <div class="row">

                        	<!-- .col -->
                          <div class="col-md-2">
                              <ul class='post-user-img'>
                                  <li>
                                      @if (auth()->user()->image)
                                          <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
                                      @endif
                                  </li>
                              </ul>
                          </div>
                          <!-- /.col -->
                                
                          <!-- .col -->
                          <div class="col-md-10">
                              @if(!empty($projects))
                              <div class="form-group">
                                  <select id="project_id" name="project_id" class="form-control select2" style="width: 100%;" /> 
                                      <option value="">Select Project</option>
                                        @foreach($projects as $project)
                                      <option value="{{$project->id}}">{{$project->project_name}}</option>
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
                  <h4 class="modal-title">Comment this post</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
            <div class="modal-body">
                  <section class="content">
                      <div class="container-fluid">
                        
                      <!----------- COMMENTS -------------------------->  
                      <!-- Form -->
                      <form action="" method="POST" class="form-horizontal">
                          @csrf
                          <div class="card card-default">
                            <div class="card-body">
                
                            <!-- .row -->
                            <div class="row">
                              <!-- .col -->
                                <div class="col-md-2">
                                    <ul class='post-user-img'>
                                        <li>
                                            @if (auth()->user()->image)
                                            <img src="{{ asset(auth()->user()->image) }}" style="width: 40px; height: 40px; border-radius: 50%;">
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
                                          @if (auth()->user()->image)
                                          <div class="mb-3">
                                            <input type="hidden" name="{{auth()->user()->id}}"/>
                                            <textarea class="textarea" placeholder="Place some text here"  name="comment_content"
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
                                            <button type="submit" class="btn btn-success">Post Comment</button> 
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

</body>
</html>
