<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>BRS - Document Management @yield('title')</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/document_management.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

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
	  background-color: #364B56;
	  border-color: #556B78;
	}
	
	.btn-primary:hover {
	  color: #fff;
	  background-color: #556B78;
	  border-color: #556B78;
	}
	
	.document-top-cards{
        color: #000;
        text-decoration: none;
    }
      
    .document-top-cards:hover{
        color: #000;
        text-decoration: none;
    }
    
    .document-top-cards .info-box{
        color: #fff;
        background: #556B78;
    }
    
	.small-box{
        margin-top: 24px !important;
     }
	 
    .small-box h3{
        font-size: 24px !important;
        color: #fff;
     }
     
     .small-box span{
        font-size: 42px;
        color: #fff;
        margin-left: 35%;
     } 
     
     .small-box .small-box-footer{
        color: #fff !important;     
     }

     /*
      -------------------------------------
        SIDEBAR
      -------------------------------------
     */
     .sidebar{
        min-width: 100%;
     }

     .wrapper .brand-link {
        height: calc(5.5rem + 1px) !important;
        background-color: #556B78;
      }

      .wrapper .brand-link ul li{
        display: inline-block;
        list-style: none;
      }

      .wrapper .brand-link li a img{
        width: 35px;
        margin-right: 10px;
      }

     .main-sidebar .sidebar-logo{
        margin-top: 45px;
        height: 125px !important;
     }

     .main-sidebar .sidebar-logo img{
        height: 100%;
        border-radius: 5px;
        border: 1px Solid #556B78;
     }

     .main-sidebar .upload_logo{
        margin-top 15px;
        height: 125px;
        width: 115%;
        margin-bottom: 15px;
     }

      .workspace-contact {
        height: 425px;
        width: 115%;
        margin-bottom: 15px;
      }

      .workspace-contact a{
        color: #007bff !important;
        font-size: 13px;
      }

       .workspace-contact label{
        margin-top: 15px;
      }

      .workspace-contact img{
        width: 65px;
        height: 65px;
        border-radius: 50%;
        border: 1px Solid #ccc;
      }

      .workspace-contact p{
        margin-top: 5px;
      }

      .workspace-contact .send-message{
        position: relative;
        top: -15px;
      }

      .workspace-contact .checklist p{
        font-size: 12px;
      }

      .navbar-nav .navbarDropdown{
        color: #fff;
      }
      
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-bg-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-linkbtn btn btn-primary">Dashboard</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-linkbtn btn btn-primary">Document Modules</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-linkbtn btn btn-primary">RSS Feed</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-linkbtn btn btn-primary">Calendar</a>
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
                            <li class="nav-item dropdown user-img">
                                <img src="{{ Auth::user()->profile_image }}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle user-auth" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name . ' ' . Auth::user()->last_name}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('profile') }}">Settings</a>
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
    <div class="brand-link" style="background: #556B78;">
      <ul>
        <li>
          <a href="{{ route('modules') }}">
            <img src="{{ asset('images/home.png') }}" />
          </a>
        </li>
        <li>
          <a href="">
            <img src="{{ asset('images/iso-icon.png') }}" />
          </a>
        </li>
        <li>
          <a href="">
            <img src="{{ asset('images/msg.png') }}" />
          </a>
        </li>
      </ul>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <div class="content-header">
        <div class="row">
          <div>
            <card>
              aw
            </card>
          </div>
      </div>
      <!-- Sidebar logo -->
      <div class="sidebar-logo">
        <img src="{{ asset('images/side-logo.png') }} " alt="BRS" class="brand-image brs-img elevation-3"
           style="opacity: .9">
      </div>
      <!-- /.sidebar-logo -->

      <!-- .upload logo -->
      <div class="upload_logo">
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#upload-logo">
                  Upload logo
                </button>
              </div>
              <div class="col-md-6">
                <button type="button" class="btn btn-default">Remove</button>
              </div>
            </div>
        </div>
      </div>
      <!-- /.upload logo -->

      <!-- .workspace-contact -->
      <div class="workspace-contact">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
              <label>Team</label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <a href="" class="ohsm">BRS OHSM SYSTEM DOWNLOAD CENTER</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <label>Workspsce contact</label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/telesales.jpg') }}">
            </div>
            <div class="col-md-8">
              <p>BRS Admin</p>
              <a href="" class="send-message">Send Message</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <p>Links</p>
            </div>
            <div class="col-md-8">
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 checklist">
              <p>Checklist: BRS Fire Fighting Equipment</p>
              <p>Checklist: BRS H&S Committee Meeting Minutes</p>
            </div>
          </div>

        </div>
      </div>
      <!-- ./workspace-contact -->

    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
     	 
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   	<section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Incident Statistics</h3>

                <span>
                    <i class="fas fa-chart-pie text-white"></i>
                </span>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">Incident Statistics <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- .col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>Accident Statistics</h3>
                <span>
                    <i class="fas fa-chart-area text-white"></i>
                </span>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">Accident Statistics <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Health &  Safety Issues</h3>
                 <span>
                    <i class="fas fa-chart-bar text-white"></i>
                </span>   
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">Health &  Safety Issues <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>KPI Risk Compliance</h3>
                <span>
                    <i class="fas fa-chart-line text-white"></i>
                </span>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">KPI Risk Compliance <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center"><strong>Document Management</strong></h3>
              </div>
              
            </div>
            <!-- /.card -->
            
            <div class="card">
                <div class="card-body">
                  <h2>Document Management System</h2>
                  
                <div class="tab-content p-0">
                <h4>Where can I get some?</h4>
                 
                 <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which 
                    don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.

                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. <br/><br/>
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br /><br />
                    
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even 
                    slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    
                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.<br /><br />
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                    
                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. <br /><br />
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. 
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. 
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which 
                    don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    
                    Kind regards,
                    BRS Management Team 
                 </p>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center"><strong>Notifications</strong></h3>
              </div>
              <!-- /.card-header -->
              
            </div>
            <!-- /.card -->
            
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Registered Users</span>
                <span class="info-box-number">1,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Documents Approved</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-cloud-upload-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uploaded Documents</span>
                <span class="info-box-number">4,500</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Recent Posts</span>
                <span class="info-box-number">12,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  <!--------------------------------------------------
      MODAL
  --------------------------------------------------->

  <!-- .modal -->
      <div class="modal fade" id="upload-logo">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Upload Logo</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save Logo</button>
            </div>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>
</body>
</html>
