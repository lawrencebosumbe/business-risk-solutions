<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Document Control</title>
  <!-- Bootstrap 4 -->
  <link href="{{ asset('bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/color-palette.css') }}" rel="stylesheet">
  <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">


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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" rel="stylesheet" />
  
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

  .task-disc-file-note-oview-menu ul{
    margin-left: 15% !important;
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
      background-color: #556B78 !important;
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

  .card .card-header-sub-top {
    height: 35px;
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

  .card .card-header-sub-bottom {
    background-color: #556B78;
    color: #fff;
  }
  
  .card .card-header-sub-bottom ul{
    list-style: none;
  }

  .card .card-header-sub-bottom img{
    width: 25px;
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

.card textarea{
  width: 100%;
}

/*
--------------------------------------------
  DOCUMENT LIFE CYCLE
--------------------------------------------
*/

.revised-doc-header{
  background: #556B78;
  color: #fff;
  padding: 5px;
  padding-left: 25px;
}

.mr-5{
  margin-left: 5% !important;
}

.mr-5{
  margin-right: 5% !important;
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
        <a href="{{ route('iso_management_modules') }}" class="nav-linkbtn btn btn-primary">Document Modules</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('event') }}" class="nav-linkbtn btn btn-primary">Calendar</a>
      </li>
    </ul>
    @else
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('iso_management_modules') }}" class="nav-linkbtn btn btn-primary">Document Modules</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('event') }}" class="nav-linkbtn btn btn-primary">Calendar</a>
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

          <li class="nav-item has-treeview">
            <a href="{{ route('changecontrol.hierarchy_control') }}" class="nav-link active">
              <img src="{{ asset('images/iso-icon.png') }}" class="iso-icon" alt="BRS" style="width: 10%"/>
              <p>
                Hierarchy Control
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('changecontrol.hierarchy_control') }}" class="nav-link">
                  <i class="fas fa-sitemap nav-icon"></i>
                  <p>Hierarchy Control</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('changecontrol.quality_representative') }}" class="nav-link">
                  <i class="fas fa-user-check nav-icon"></i>
                  <p>Quality Representative</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('changecontrol.corrective_action') }}" class="nav-link">
                  <i class="fas fa-user-cog nav-icon"></i>
                  <p>Corrective Action</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('changecontrol.failure_mode') }}" class="nav-link">
                  <i class="fas fa-wheelchair nav-icon"></i>
                  <p>Failure Mode</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('changecontrol.non_conformance_descriptions') }}" class="nav-link">
                  <i class="fas fa-exclamation-triangle nav-icon"></i>
                  <p>Non Conformance Descr</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('changecontrol.non_conformance_details') }}" class="nav-link">
                  <i class="fas fa-exclamation-circle nav-icon"></i>
                  <p>Non Conformance Detail</p>
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
      
      <!-- MESSAGE DISPLAY -->
      <div class="row">
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
      <!-- END MESSAGE -->
      <!-- .section -->
      <section class="content">

        <!-- .tab-content -->
        <div class="tab-content" id="task-tabContent">


          <div class="tab-pane task fade show active" id="task-content" role="tabpanel" aria-labelledby="task-content-tab">

          <!-- .row -->
          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">

                <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <ul class="card-title p-3">
                      <li>
                          Non Conformance Details
                      </li>
                    </ul>
                  </div>
                  <!-- /.card-header -->

              </div>

              <!-- .row -->
              <div class="row">
                  
                 <!-- .col -->
                <div class="col-md-8">
                    
                    <!-- .card -->
                    <div class="card">
                    
                        <!-- .card-header -->
                        <div class="card-header">
                            <label class="card-title">
                                Non Conformance Details
                            </label>
                        </div>
                        <!-- /.card-header -->
                        
                        <!-- .card-body -->
                        
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                  <th>Hierarcy Control</th>
                                  <th>Reporting Person</th>
                                  <th>Time Duration</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(!empty($details))
                                    @foreach($details as $d)
                                    <tr>
                                      <td>{{ $d->department }}</td>
                                      <td>{{ $d->first_name . ' ' . $d->last_name }}</td>
                                      <td>{{ $d->occurred_time_hour .':' . $d->occurred_time_minute . ' hour(s)' }}</td>
                                    </tr>
                                    @endforeach
                                @endif
                                </tbody>
                
                              </table>
                        </div>
                        
                        <!-- /.card-body -->
                        
                    </div>
                    <!-- /.card -->
                    
                </div>
                <!-- /.col -->
                
                <!-- .col -->
                <div class="col-md-4">
                    <!-- .card -->
                    <div class="card">
                    
                        <!-- .card-header -->
                        <div class="card-header">
                            <label class="card-title">
                                Non Conformance 
                            </label>
                        </div>
                        <!-- /.card-header -->
                        
                            <!-- /.card-body -->
                            <div class="card-body">
                                <!-- Phase Tracking ul .treeview -->
                                <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                    
                                    <li class="nav-item has-treeview task-treeview">
                                       
                                      <a href="#" class="nav-link">
                                        <i class="fas fa-sitemap nav-icon"></i>
                                        <p>
                                          Hierarchy of Control
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
        
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                
                                              <!-- form start -->
                                              <form method="post" action="{{ route('changecontrol.store_hierarchy_control') }}" enctype="multipart/form-data">
                                                  @csrf
                                                <div class="card-body">
                                                  <div class="form-group">
                                                    <label for="division">Division</label>
                                                    <input type="text" class="form-control" id="division" name="division" placeholder="Division" autocomplete=off>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="department">Department</label>
                                                    <input type="text" class="form-control" id="department" name="department" placeholder="Department" autocomplete=off>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="site">Site</label>
                                                    <input type="text" class="form-control" id="site" name="site" placeholder="Site" autocomplete=off>
                                                  </div>
                                                </div>
                                                <!-- /.card-body -->
                                
                                                <div class="card-footer">
                                                  <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                              </form>
                                            </div>
                                            <!-- /.card -->
                                        </section>
                                        <!-- /.content -->
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview task-treeview">
                                       
                                      <a href="#" class="nav-link">
                                        <i class="fas fa-exclamation-circle nav-icon"></i>
                                        <p>
                                          Non Conformance Details
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
        
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                
                                              <!-- form start -->
                                              <form method="post" action="{{ route('changecontrol.store_non_conformance_details') }}" enctype="multipart/form-data">
                                                  @csrf
                                                
                                                <div class="card-body">
                                                  @if(!empty($users))
                                                  <div class="form-group">
                                                    <label for="reporting_person">Reporting Person</label>
                                                    <select class="form-control" id="reporting_person" name="reporting_person">
                                                        <option selected="selected">Select Person</option>
                                                        @foreach($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->first_name . ' ' . $user->last_name }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif
                                                  
                                                  @if(!empty($hierarchies))
                                                  <div class="form-group">
                                                    <label for="hierarchy">Hierarchy Control</label>
                                                    <select class="form-control" id="hierarchy_id" name="hierarchy_id">
                                                        <option selected="selected">Select Hierarchy Control</option>
                                                        @foreach($hierarchies as $hierarchy)
                                                        <option value="{{ $hierarchy->id }}">{{ $hierarchy->department }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif
                                                  
                                                  <div class="form-group">
                                                  <label>Date Reported</label>
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" id="reported_date" name="reported_date" autocomplete=off>
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                  </div>
                                                  <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                                
                                                <div class="form-group">
                                                  <label>Date Occurred</label>
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" id="occurred_date" name="occurred_date" autocomplete=off>
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                  </div>
                                                  <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->


                                                  <div class="form-group">
                                                      <label>Occur Time</label>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                        <select class="form-control" id="occurred_time_hour" name="occurred_time_hour">
                                                        <option selected="selected">Select Hour</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                    </select>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control" id="occurred_time_minute" name="occurred_time_minute">
                                                        <option selected="selected">Select Minute</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                        <option value="32">32</option>
                                                        <option value="33">33</option>
                                                        <option value="34">34</option>
                                                        <option value="35">35</option>
                                                        <option value="36">36</option>
                                                        <option value="37">37</option>
                                                        <option value="38">38</option>
                                                        <option value="39">39</option>
                                                        <option value="40">40</option>
                                                        <option value="41">41</option>
                                                        <option value="42">42</option>
                                                        <option value="43">43</option>
                                                        <option value="44">44</option>
                                                        <option value="45">45</option>
                                                        <option value="46">46</option>
                                                        <option value="47">47</option>
                                                        <option value="48">48</option>
                                                        <option value="49">49</option>
                                                        <option value="50">50</option>
                                                        <option value="51">51</option>
                                                        <option value="52">52</option>
                                                        <option value="53">53</option>
                                                        <option value="54">54</option>
                                                        <option value="55">55</option>
                                                        <option value="56">56</option>
                                                        <option value="57">57</option>
                                                        <option value="58">58</option>
                                                        <option value="59">59</option>
                                                        <option value="60">60</option>
                                                    </select>
                                                    </div>
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label>Process</label>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="process" name="process" value="Internal">
                                                                <label class="form-check-label">Internal</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="process" name="process" value="External">
                                                                <label class="form-check-label">External</label>
                                                            </div>
                                                        </div>
                                                      </div>
  
                                                   </div>
                                                   
                                                   <div class="form-group">
                                                      <label>Affiliation</label>
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="affiliation" name="affiliation" value="Employee">
                                                                <label class="form-check-label">Employee</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="affiliation" name="affiliation" value="Contractor">
                                                                <label class="form-check-label" for="exampleCheck1">Contractor</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="affiliation" name="affiliation" value="Other">
                                                                <label class="form-check-label" for="exampleCheck1">Other</label>
                                                            </div>
                                                        </div>
                                                      </div>
  
                                                   </div>
                                                  
                                            </div>
                                            <!-- /.card-body -->
                                
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                          </form>
                                         </div>
                                            <!-- /.card -->
                                        
                                        </section>
                                        <!-- /.content -->
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview task-treeview">
                                       
                                      <a href="#" class="nav-link">
                                        <i class="fas fa-exclamation-triangle nav-icon"></i>
                                        <p>
                                          Non Conformance Description
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
        
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                
                                              <!-- form start -->
                                              <form method="post" action="{{ route('changecontrol.store_non_conformance_description') }}" enctype="multipart/form-data">
                                                  @csrf
                                                <div class="card-body">
                                                  <div class="form-group">
                                                      <label for="detection_method">Detection Method</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <input type="text" class="form-control" id="detection_method" name="detection_method"  placeholder="Detection Method" autocomplete=off>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label for="reported_date">Describe the Non Conformance</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <textarea class="form-control" id="describe_non_performance" name="describe_non_performance"  placeholder="Describe the Non Conformance"></textarea>
                                                          </div>
                                                       </div>
                                                  </div>
                                                  
                                                  @if(!empty($hierarchies))
                                                  <div class="form-group">
                                                      <label>Hierarchy Control</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <select class="form-control" id="hierarchy_id" name="hierarchy_id">
                                                                <option selected="selected">Select Document</option>
                                                                @foreach($hierarchies as $h)
                                                                <option value="{{ $h->id }}">{{ $h->department}}</option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  @endif
                                                  
                                                  @if(!empty($files))
                                                  <div class="form-group">
                                                      <label for="document">Document Specification</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <select class="form-control" id="document" name="document">
                                                                <option selected="selected">Select Document</option>
                                                                @foreach($files as $file)
                                                                <option value="{{ $file->url }}">{{ $file->url}}</option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  @endif
                                                  
                                                  @if(!empty($files))
                                                  <div class="form-group">
                                                      <label for="specification_document">Specification Document where</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <select class="form-control" id="specification_document" name="specification_document">
                                                                <option selected="selected">Select Specification Document</option>
                                                                @foreach($files as $file)
                                                                <option value="{{ $file->id }}">{{ $file->filename}}</option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  @endif
                                                  
                                                  <div class="form-group">
                                                      <div class="row">
                                                          <label for="reference">Reference</label>
                                                          <div class="col-md-12">
                                                            <input type="text" class="form-control" id="reference" name="reference" autocomplete=off>
                                                          </div>
                                                      </div>
                                                  </div>

                                                  @if(!empty($users))
                                                  <div class="form-group">
                                                      <label for="specification_owner">Specification Owner</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <select class="form-control" id="specification_owner" name="specification_owner">
                                                                <option selected="selected">Select Specification Owner</option>
                                                                @foreach($users as $user)
                                                                <option value="{{ $user->id }} ">{{ $user->first_name . ' ' . $user->last_name }}</option>
                                                                @endforeach
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  @endif
                                                  
                                                  <div class="form-group">
                                                      <label for="report_type">Report Type</label>
                                                      <div class="row">
                                                          <div class="col-md-12">
                                                            <select class="form-control" id="report_type" name="report_type">
                                                                <option selected="selected">Select Report Type</option>
                                                                <option value="Compliance">Compliance</option>
                                                                <option value="Violance">Violance</option>
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                            </div>
                                            <!-- /.card-body -->
                                
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                          </form>
                                         </div>
                                            <!-- /.card -->
                                        </section>
                                        <!-- /.content -->
                                        </ul>
                                    </li>

                                    <li class="nav-item has-treeview task-treeview">
                                       
                                      <a href="#" class="nav-link">
                                        <i class="fas fa-user-cog nav-icon"></i>
                                        <p>
                                          Corrective Actions
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
        
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                
                                              <!-- form start -->
                                              <form method="post" action="{{ route('changecontrol.store_corrective_action') }}" enctype="multipart/form-data">
                                                  @csrf
                                                <div class="card-body">
                                                  
                                                  <div class="form-group">
                                                    <label for="immediate_corrective_action">Immediate Corrective Action</label>
                                                    <input type="text" class="form-control" id="immediate_corrective_action" name="immediate_corrective_action" placeholder="Immediate Action" autocomplete=off>
                                                  </div>
                                                  @if(!empty($hierarchies))
                                                  <div class="form-group">
                                                    <label for="hierarchy">Hierarchy Control</label>
                                                    <select class="form-control" id="hierarchy_id" name="hierarchy_id">
                                                        <option selected="selected">Select Person</option>
                                                        @foreach($hierarchies as $hierarchy)
                                                        <option value="{{ $hierarchy->id }}">{{ $hierarchy->department }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif
                                                  <div class="form-group">
                                                      <label>Corrective Action</label>
                                                      <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="corrective_action" name="corrective_action" value="Correction">
                                                                <label class="form-check-label">Correction</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input type="radio" class="form-check-input" id="corrective_action" name="corrective_action" value="Concession">
                                                                <label class="form-check-label" for="exampleCheck1">Concession</label>
                                                            </div>
                                                        </div>
                                                      </div>
  
                                                   </div>
                                                   
                                                   @if(!empty($users))
                                                   <div class="form-group">
                                                    <label for="action_taken_by">Action Taken By Who</label>
                                                    <select class="form-control" id="action_taken_by" name="action_taken_by">
                                                        <option selected="selected">Select Person Taken Action</option>
                                                        @foreach($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->first_name . ' ' . $user->last_name }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif

                                                  <div class="form-group">
                                                  <label>Action Date</label>
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" id="corrective_action_date" name="action_date" autocomplete=off>
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                  </div>
                                                  <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->

                                                  
                                            </div>
                                            <!-- /.card-body -->
                                
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                          </form>
                                         </div>
                                            <!-- /.card -->
                                        </section>
                                        <!-- /.content -->
        
                                        </ul>
                                    </li>
                                
                                    <li class="nav-item has-treeview task-treeview">
                                       
                                      <a href="#" class="nav-link">
                                        <i class="fas fa-wheelchair nav-icon"></i>
                                        <p>
                                          Failure Mode
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
        
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                
                                              <!-- form start -->
                                              <form method="post" action="{{ route('changecontrol.insert_failure_mode') }}" enctype="multipart/form-data">
                                                  @csrf
                                                <div class="card-body">
                                                  
                                                   <div class="form-group">
                                                    <label for="product_problem_code">Product Problem Code</label>
                                                    <select class="form-control" id="product_problem_code" name="product_problem_code">
                                                        <option selected="selected">Select Product Problem Code</option>
                                                        <option>BRS-001</option>
                                                        <option>BRS-002</option>
                                                        <option>BRS-003</option>
                                                        <option>BRS-004</option>
                                                        <option>BRS-005</option>
                                                        <option>BRS-006</option>
                                                        <option>BRS-007</option>
                                                        <option>BRS-008</option>
                                                        <option>BRS-009</option>
                                                        <option>BRS-010</option>
                                                        <option>BRS-011</option>
                                                        <option>BRS-012</option>
                                                        <option>BRS-013</option>
                                                        <option>BRS-014</option>
                                                        <option>BRS-015</option>
                                                        <option>BRS-016</option>
                                                        <option>BRS-017</option>
                                                        <option>BRS-018</option>
                                                        <option>BRS-019</option>
                                                        <option>BRS-020</option>
                                                    </select>
                                                  </div>
                                                  @if(!empty($hierarchies))
                                                  <div class="form-group">
                                                    <label for="hierarchy">Hierarchy Control</label>
                                                    <select class="form-control" id="hierarchy_id" name="hierarchy_id">
                                                        <option selected="selected">Select Hierarchy Control</option>
                                                        @foreach($hierarchies as $hierarchy)
                                                        <option value="{{ $hierarchy->id }}">{{ $hierarchy->department }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif
                                                  <div class="form-group">
                                                  <label>Action Date</label>
                                                  <div class="input-group">
                                                    <input type="text" class="form-control" id="failure_mode_action_date" name="action_date" autocomplete=off>
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                                    </div>
                                                  </div>
                                                  <!-- /.input group -->
                                                </div>
                                                <!-- /.form group -->
                                                 

                                                  
                                            </div>
                                            <!-- /.card-body -->
                                
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                          </form>
                                         </div>
                                            <!-- /.card -->
                                        </section>
                                        <!-- /.content -->
        
                                        </ul>
                                    </li>
        
                                    <li class="nav-item has-treeview task-treeview">
                                       
                                      <a href="#" class="nav-link">
                                        <i class="fas fa-user-check nav-icon"></i>
                                        <p>
                                          Area Quality Representative
                                          <i class="right fas fa-angle-left"></i>
                                        </p>
                                      </a>
                                      <ul class="nav nav-treeview">
        
                                        <!-- Main content -->
                                        <section class="content">
                                            <!-- general form elements -->
                                            <div class="card card-primary">
                                
                                              <!-- form start -->
                                              <form method="post" action="{{ route('changecontrol.store_area_quality_representative') }}" enctype="multipart/form-data">
                                                  @csrf
                                                <div class="card-body">
                                                   @if(!empty($users))
                                                   <div class="form-group">
                                                    <label for="area_representative">Area Quality Representative</label>
                                                    <select class="form-control" id="area_representative" name="area_representative">
                                                        <option selected="selected">Select a reprentative</option>
                                                        @foreach($users as $user)
                                                        <option value="{{ $user->id }}"> {{ $user->first_name . ' ' . $user->last_name }} </option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif
                                                  @if(!empty($hierarchies))
                                                  <div class="form-group">
                                                    <label for="hierarchy">Hierarchy Control</label>
                                                    <select class="form-control" id="hierarchy_id" name="hierarchy_id">
                                                        <option selected="selected">Select Person</option>
                                                        @foreach($hierarchies as $hierarchy)
                                                        <option value="{{ $hierarchy->id }}">{{ $hierarchy->department }}</option>
                                                        @endforeach
                                                    </select>
                                                  </div>
                                                  @endif
                                            </div>
                                            <!-- /.card-body -->
                                
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                          </form>
                                         </div>
                                            <!-- /.card -->
                                        </section>
                                        <!-- /.content -->
                                      </ul>
                                    </li>
                                </ul>
                                <!-- /ul .treeview -->
                            </div>
                            <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                
              </div>
              <!-- /.row -->

            </div>
          </div>
          <!-- /.row -->

          </div>

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

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>

<!-- Bootstrap -->plugins/jquery/jquery.min.js
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}" type="text/javascript"></script>


<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/world_countries.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}" type="text/javascript"></script>

<!-- JQUERY UI -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}" type="text/javascript"></script>

<!-- PAGE SCRIPTS -->
<script src="dist/js/pages/dashboard2.js"></script>

<!-- DATEPICKER -->
<script>
  $(function(){
      $('#reported_date').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#occurred_date').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<!-- DATEPICKER -->
<script>
  $(function(){
      $('#corrective_action_date').datepicker({
        dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true
      });
    });
</script>
<script>
  $(function(){
      $('#failure_mode_action_date').datepicker({
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

<script type="text/javascript">
  $(document).ready(function(){
    var hide_controls = $(".hide-controls").hide();
    $("#training_infos").click(function(){
        if($(this).is(":checked")){
          $(hide_controls).show();
        }else{
          $(hide_controls).hide();
        }
    });
  });
</script>
</body>
</html>
