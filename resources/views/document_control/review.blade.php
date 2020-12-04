<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Document Review</title>
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

  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">

  <!-- Plugins -->
  <link href="{{ asset('plugins/jquery-ui/jquery-ui.css') }}" rel="stylesheet" type="text/css" />

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
  .col-md-12 ul{margin-top: 25px;}
  .breadcrumb-wrap {
  font-family: sans-serif;
  font-size: 15.5px;
  font-weight: bold;
  color: #64768a;
  border: 1px solid #d7dade;
  border-radius: 5px;
  width: 100%;
}

.breadcrumb-title {
  font-size: 22px;
  padding: 10px 20px;
}

.breadcrumb-li {
  list-style: none;
  overflow: hidden;
  padding: 0;
  margin: 0;
  border-top: 1px solid #d7dade;
}

.breadcrumb-li li {
  float: left;
}

.breadcrumb-li li a {
  color: #64768a;
  text-decoration: none;
  padding: 20px 0px 20px 50px;
  background: #ffffff;
  position: relative;
  display: block;
  float: left;
}

.breadcrumb-li li a:after {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 30px solid #ffffff;
  position: absolute;
  top: 50%;
  margin-top: -50px;
  left: 100%;
  z-index: 2;
}

.breadcrumb-li li a:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-top: 50px solid transparent;
  border-bottom: 50px solid transparent;
  border-left: 30px solid #d7dade;
  position: absolute;
  top: 50%;
  margin-top: -50px;
  margin-left: 2px;
  left: 100%;
  z-index: 1;
}

.breadcrumb-li li:first-child a {
  padding-left: 20px;
}

.breadcrumb-li li:last-child a {
  background: #ffffff;
  color: #64768a;
  cursor: pointer;
}

.breadcrumb-li li:last-child a:hover {
  background: #eff4f7;
}

.breadcrumb-li li:last-child a:after {
  border-left-color: #ffffff;
}

.breadcrumb-li li:last-child a:hover:after {
  border-left-color: #eff4f7;
}

.breadcrumb-li li a:hover {
  background: #eef3f6;
}

.breadcrumb-li li a:hover:after {
  border-left-color: #eef3f6;
}

/*-----------------------------*/
.breadcrumb-li li:nth-child(4) a {
  background: #28a745;
  color: #fff;
  cursor: pointer;
}

.breadcrumb-li li:nth-child(4) a:hover {
  background: #ffffff;
  color: #28a745;
}

.breadcrumb-li li:nth-child(4) a:after {
  border-left-color: #28a745;
}

.breadcrumb-li li:nth-child(4) a:hover:after {
  border-left-color: #ffffff;
}

/*-----------------------------*/

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

  .card .card-header-sub-bottom{
    background-color: #fff;
    color: #556B78;
  }

  .card .card-header-sub-bottom img{
    width: 25px;
  }

  /*
  ----------------------------------------
    BREADCRUMB
  ----------------------------------------
  */
.card-header-sub-bottom ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #fff;
}

/* Display list items side by side */
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}

/* Add a slash symbol (/) before/behind each list item */
ul.breadcrumb li+li:before {
  padding: 8px;
  font-size: 19px;
  color: #007bff;
  content: ">\00a0";
}

/* Add a color to all links inside the list */
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}

/* Add a color on mouse-over */
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: none;
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
        <a href="#" class="nav-linkbtn btn btn-primary">RSS Feed</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('folders.settings') }}" class="nav-linkbtn btn btn-primary">Calendar</a>
      </li>
    </ul>
    @else
    <ul class="navbar-nav-1">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('iso_management_modules') }}" class="nav-linkbtn btn btn-primary">Document Modules</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-linkbtn btn btn-primary">RSS Feed</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('folders.settings') }}" class="nav-linkbtn btn btn-primary">Calendar</a>
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

          <li class="nav-item has-treeview my-organization menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-file-alt"></i>
              <p>
                Pending Documents
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item active">
                <a href="{{ route('document_control.document_life_cycle') }}" class="nav-link">
                  <i class="fas fa-user-alt nav-icon"></i>
                  <p>By Assigned</p>
                </a>
                <li class="nav-item active">
                <a href="{{ route('document_control.document_by_department') }}" class="nav-link">
                  <i class="fas fa-building nav-icon"></i>
                  <p>By Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('document_control.document_duedate') }}" class="nav-link">
                  <i class="fas fa-calendar nav-icon"></i>
                  <p>By Due Date</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('document_control.document_phase') }}" class="nav-link">
                  <i class="fas fa-recycle nav-icon"></i>
                  <p>By Phase</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('document_control.document_by_type') }}" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>By Type</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="fas fa-file-medical-alt nav-icon"></i>
              <p>
                Control Review
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('document_control.document_control_review') }}" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Review Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-thumbs-up nav-icon"></i>
                  <p>Approve Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-ban nav-icon"></i>
                  <p>Reject Review</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>
                Initial Approval
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Review Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-thumbs-up nav-icon"></i>
                  <p>Send to approval board</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-ban nav-icon"></i>
                  <p>Reject Approval</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-file-medical"></i>
              <p>
                Review
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Review Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-thumbs-up nav-icon"></i>
                  <p>Send to approval board</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>
                Final Approval
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Review Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-thumbs-up nav-icon"></i>
                  <p>Send to approval board</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-ban nav-icon"></i>
                  <p>Reject Approval</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-file-word"></i>
              <p>
                Awaiting Release
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Review Document</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-thumbs-up nav-icon"></i>
                  <p>Release Document</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-file-import"></i>
              <p>
                Release
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                  <p>Released Documents</p>
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

                  <div class="col-md-12">
                    <div class="breadcrumb-wrap">
              <ul class="breadcrumb-li">
                <li>
                  <a href="{{ route('document_control.document_new_draft') }}">Draft</a>
                </li>
                <li><a href="{{ route('document_control.document_control_review') }}">Control Review</a></li>
                <li><a href="{{ route('document_control.initial_approval') }}">Initial Approval</a></li>
                <li><a href="{{ route('document_control.review') }}">Review</a></li>
                <li><a href="{{ route('document_control.final_approval') }}">Final Approval</a></li>
                <li><a href="{{ route('document_control.awaiting_release') }}">Awaiting Release</a></li>
                <li><a href="{{ route('document_control.release') }}">Release</a></li>
              </ul>
            </div>
                  </div>

      <!-- .section -->
      <section class="content task-disc-file-note-oview-menu">
        <ul class="nav nav-pills" id="task-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="task-content-tab" data-toggle="pill" href="#task-content" role="tab" aria-controls="task-content" aria-selected="true">
            Document Infos
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">
            Related Docs
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill" href="#custom-content-below-messages" role="tab" aria-controls="custom-content-below-messages" aria-selected="false">
            Revision History
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-notes-tab" data-toggle="pill" href="#custom-content-below-notes" role="tab" aria-controls="custom-content-below-notes" aria-selected="false">
            Training
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="custom-content-below-overview-tab" data-toggle="pill" href="#custom-content-below-overview" role="tab" aria-controls="custom-content-below-settings" aria-selected="false">
              Access Control
            </a>
          </li>
        </ul>
      </section>
      <hr />
      <!-- /.section -->

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
                <div class="card-header card-header-sub-top d-flex p-0">
                  <!-- ul .nav-pills -->
                  <ul class="nav nav-pills ml-auto p-2">

                  </ul>
                  <!-- /ul .nav-pills -->
                </div>

                <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <ul class="breadcrumb card-title p-3">
                      <li><img src="{{ asset('images/iso-icon.png') }}">
                      </li>
                      <li>
                        <a href="{{ route('iso_management_modules') }}">
                          Document Management System
                        </a>
                      </li>
                      <li>Document Control</li>
                      <li class="color-primary">Review</li>
                    </ul>
                  </div>
                  <!-- /.card-header -->

              </div>

              <!-- .row -->
              <div class="row">

                <!-- .col -->
                <div class="col-md-12">

                  <!-- form -->
                  <form method="post" action="{{ route('document_control.insert_review') }}" enctype="multipart/form-data">
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
                        @if(!empty($review_files))
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid"><br/><br/>
                              <div class="row mb-2">
                                <div class="col-sm-2">
                                  <label>
                                    Revision
                                  </label>
                                  <input type="text" name="revision" class="form-control" value="4" readonly>
                                  @foreach($review_files as $approval)
                                  <input type="hidden" name="file_id" value="{{ $approval->file_id }}">
                                  <input type="hidden" name="initial_approval_id" value="{{ $approval->initial_approval_id }}">
                                  <input type="hidden" name="phase_id" value="4">
                                  @endforeach
                                </div>
                                <div class="col-sm-4">
                                  <label>
                                    Reviewed by
                                  </label>
                                  <select class=" form-control" name="reviewed_by">
                                    @foreach($review_files as $approval)
                                    <option value="{{ $approval->approved_by }}">
                                        {{ $approval->approved_by }}
                                    </option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="col-sm-6">
                                  <label>
                                    Review Date
                                  </label>
                                  <input type="text" name="review_date" class="form-control" id="approval_datepicker">
                                </div>
                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        @endif
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
                                    Comment
                                  </label>
                                  <textarea class="form-control" name="comment"></textarea>
                                </div>

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

                    <!-- .card-body -->
                    <div class="card-body">
                      <div class="row">

                        <div class="col-sm-3">
                          <label>
                            Attachment
                          </label><br />
                          <select class="form-control">
                              @foreach($review_files as $approval)
                              <option name="attachment" value="{{ $approval->url }}">
                                <a href="{{ route('document_control.get_file_to_approve', $file->id) }}">
                                {{ $approval->url }}
                              </a>
                              </option>
                              @endforeach
                          </select><br />
                              <a href="{{ route('document_control.get_file_to_approve', $file->id) }}">
                                <input type="text" name="attachment" value="{{ $approval->url }}" class="form-control"/>
                              </a>
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

            </div>
          </div>
          <!-- /.row -->

          </div>

          <!-- tab-pane -->
          <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
          <!-- .row -->
          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">
                <!-- .card-header -->
                <div class="card-header card-header-sub-top d-flex p-0">
                  <!-- ul .nav-pills -->
                  <ul class="nav nav-pills ml-auto p-2">

                  </ul>
                  <!-- /ul .nav-pills -->
                </div>

                <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <ul class="breadcrumb card-title p-3">
                      <li><img src="{{ asset('images/iso-icon.png') }}">
                      </li>
                      <li>
                        <a href="{{ route('iso_management_modules') }}">
                          Document Management System
                        </a>
                      </li>
                      <li>Document Control</li>
                      <li class="color-primary">Related Documents</li>
                    </ul>
                  </div>
                  <!-- /.card-header -->

              </div>

              <!-- .row -->
              <div class="row">

                <!-- .col -->
                <div class="col-md-12">

                  <div class="card">

                    <!-- .card-body -->
                    <!--<div class="card-body">-->

                      <!-- .row -->
                      <div class="row">

                        <!-- .col- -->
                        <div class="col-md-12">
                          <section class="content-header">
                            <!-- .container-fluid -->
                            <div class="container-fluid"><br/><br/>
                              <div class="row mb-2 mr-5">
                                <!-- ----->

                                <!-- /.card-body -->
                  <div class="card-body">

                      @if(!empty($approved_docs))
                      <div id="products" class="row view-group">

                        @foreach($approved_docs as $docs)
                        <div class="item col-xs-3 col-lg-3">

                          <!-- .thumbnail -->
                          <div class="thumbnail card">
                            <div class="img-event">
                              <a href="{{ route('folders.file', $docs->id) }}">
                                <img class="group list-group-image img-fluid" src="{{ asset('images/file-icon.jpg') }}" alt="" />
                              </a>
                            </div>

                            <!-- .caption -->
                            <div class="caption card-body">
                              <h4 class="group card-title inner list-group-item-heading">
                                {{ $docs->filename }}
                              </h4>
                              <p class="group inner list-group-item-text">
                                {{ $docs->approval_date }}
                              </p>

                              <!-- .row -->
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
                  <!-- /.card-body -->

                                <!-- ----->

                              </div>
                            </div>
                            <!-- /.container-fluid -->
                          </section>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    <!--</div>-->
                    <!-- /.body -->
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
          <!-- end tab-pane -->

          <!-- tab-pane -->
          <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel" aria-labelledby="custom-content-below-messages-tab">

            <!-- .row -->
            <div class="row">
              <div class="col-12">

                <!-- Custom Tabs -->
                <div class="card">

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-top d-flex p-0">

                    <!-- ul .nav-pills -->
                    <ul class="nav nav-pills ml-auto p-2">

                    </ul>
                    <!-- /ul .nav-pills -->

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <ul class="breadcrumb card-title p-3">
                      <li><img src="{{ asset('images/iso-icon.png') }}">
                      </li>
                      <li>
                        <a href="{{ route('iso_management_modules') }}">
                          Document Management System
                        </a>
                      </li>
                      <li>Document Control</li>
                      <li class="color-primary">Revision History</li>
                    </ul>
                  </div>
                  <!-- /.card-header -->

                  <!-- /.card-body -->
                  <div class="card-body">

                    <!-- container -->
                    <div class="container">

                      <!-- .row -->
                      <div class="row">

                        <!-- .col -->
                        <div class="col-md-12">

                          <div class="card">
                            <div class="card-header">
                              <div class="revised-doc-header">
                                <h5 class="card-title">
                                Reason for New Revised Document</h5>
                              </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <section class="content-header">
                                    <div class="container-fluid">
                                      <div class="row mb-2">
                                        <div class="col-sm-6">
                                          <h5><br /><br />
                                            <strong>
                                              Reason
                                            </strong>
                                          </h5>
                                        </div>
                                        <div class="col-sm-6">
                                        </div>
                                      </div>

                                      <div class="row mb-2">
                                        <div class="col-sm-12">
                                        </div>
                                        <textarea>


                                        </textarea>
                                      </div>
                                    </div><!-- /.container-fluid -->
                                  </section>
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>

                            <div class="card-header">
                              <div class="revised-doc-header">
                                <h5 class="card-title">
                                  Obsolete Request
                                </h5>
                              </div>
                            </div>

                            <div class="card-body">

                              <div class="row">
                                <div class="col-md-12">
                                  <section class="content-header">
                                    <div class="container-fluid">
                                      <div class="row mb-2">
                                        <div class="col-sm-6">
                                          <h5>
                                          </h5>
                                        </div>
                                        <div class="col-sm-6">
                                        </div>
                                      </div>

                                      <div class="row mb-2">
                                        <div class="col-sm-12">
                                        </div>

                                      </div>
                                    </div><!-- /.container-fluid -->
                                  </section>
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>

                            <div class="card-header">
                              <div class="revised-doc-header">
                                <h5 class="card-title">
                                  Revision History
                                </h5>
                              </div>
                            </div>

                            <div class="card-body">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="card">
                                    <div class="card-header">
                                      <h3 class="card-title">Documents In Review</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                      <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Reason</th>
                                          </tr>
                                        </thead>
                                        @if(!empty($doc_reviews))
                                        <tbody>
                                          @foreach($doc_reviews as $rev)
                                          <tr>
                                            <td>{{ $rev->id }}</td>
                                            <td>{{ $rev->assigned_to }}</td>
                                            <td>{{ $rev->review_date }}</td>
                                            <td><span class="tag tag-success">Pending</span></td>
                                            <td>{{ $rev->comment }}</td>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                        @endif
                                      </table>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                  <!-- /.card -->
                                </div>
                                <!-- /.col -->
                              </div>
                              <!-- /.row -->
                            </div>

                            <!-- ./card-body -->
                            <div class="card-footer">
                              <div class="row">
                                <div class="col-sm-8 col-6">
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-1 col-6">
                                  <div>
                                    <button class="btn btn-primary">
                                      Save
                                    </button>
                                  </div>
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-2 col-6">
                                  <div>
                                    <button class="btn btn-primary">
                                      Save and Close
                                    </button>
                                  </div>
                                  <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-1 col-6">
                                  <div>
                                    <button class="btn btn-primary">
                                      Close
                                    </button>

                                  </div>
                                  <!-- /.description-block -->
                                </div>
                              </div>
                              <!-- /.row -->
                            </div>
                            <!-- /.card-footer -->
                          </div>
                          <!-- /.card -->
                        </div>
                        <!-- /.col -->

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
          <!-- /.tab-pane -->


        <div class="tab-pane fade" id="custom-content-below-notes" role="tabpanel" aria-labelledby="custom-content-below-notes-tab">

          <!-- .row -->
          <div class="row">
            <div class="col-12">
              <!-- Custom Tabs -->
              <div class="card">
                <!-- .card-header -->
                <div class="card-header card-header-sub-top d-flex p-0">
                  <!-- ul .nav-pills -->
                  <ul class="nav nav-pills ml-auto p-2">

                  </ul>
                  <!-- /ul .nav-pills -->
                </div>

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <ul class="breadcrumb card-title p-3">
                      <li><img src="{{ asset('images/iso-icon.png') }}">
                      </li>
                      <li>
                        <a href="{{ route('iso_management_modules') }}">
                          Document Management System
                        </a>
                      </li>
                      <li>Document Control</li>
                      <li class="color-primary">Training</li>
                    </ul>
                  </div>
                  <!-- /.card-header -->

              </div>

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

              <form method="post" action="{{ route('document_control.add_training') }}">
                @csrf

              <!-- .card-header -->
              <div class="card">
                <!-- .card-header -->
                <div class="card-header">
                  <div class="revised-doc-header">
                    <h5>Training Information</h5>
                  </div>
                </div>

                <div class="card-body">
                  <div class="row">
                      <div class="col-md-12">
                        <section class="content-header">
                          <div class="container-fluid">
                            <div class="row mb-2">
                              <div class="col-sm-6"><br/>
                                <!-- form-group -->
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="training_infos">
                                    <label class="form-check-label">
                                    Training Information is required
                                    </label>
                                  </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input hide-controls" type="checkbox">
                                    <label class="form-check-label hide-controls" id="allow-self-training">
                                    Allow self training
                                    </label>
                                  </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input hide-controls" type="checkbox">
                                    <label class="form-check-label hide-controls">
                                    Notify to the user related to the selected requirement groups
                                    </label>
                                  </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="hide-controls">
                                    Training and required for the following
                                    </label>
                                    <textarea class="form-control hide-controls" name="has_training">

                                    </textarea>
                                  </div>
                                </div>
                                <!-- /form-group -->

                                <!-- form-group -->
                                <div class="form-group">
                                  <div class="form-check">
                                    <label class="hide-controls">
                                    Training and required for the following (Optional)
                                    </label>
                                    <textarea class="form-control hide-controls">

                                    </textarea>
                                  </div>
                                </div>
                                <!-- /form-group -->

                              </div>
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-md-3">
                                    <label style="margin-top: 30px" class="form-check-label hide-controls">
                                      Delay
                                    </label>
                                  </div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control hide-controls" style="width: 100%; margin-top: 25px; margin-left: -75px" name="delay">
                                  </div>
                                  <div class="col-md-3">
                                    <label style="margin-top: 30px" class="form-check-label hide-controls">
                                      Delay Unit
                                    </label>
                                  </div>
                                  <div class="col-md-3">
                                    <select class="form-control hide-controls" style="width: 100%; margin-top: 25px; margin-left: -35px" name="delay_unit">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                                </div><br /><br />

                                <div class="row">
                                  <div class="col-md-6">
                                    <label class="form-check-label hide-controls">
                                      Start Date
                                    </label>
                                    <input type="text" name="started_at" id="started_datepicker" class="hide-controls form-control">
                                  </div>
                                  <div class="col-md-6">
                                    <label class="form-check-label hide-controls">
                                      Complete Date
                                    </label>
                                    <input type="text" name="completed_at" id="completed_datepicker" class="hide-controls form-control">
                                  </div>
                                </div>
                                <br /><br />


                              <div class="row">
                                <div class="col-md-12">
                                <!-- form-group -->
                                <!--
                                <div class="form-group">
                                  <div class="form-check hidden_controls">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                    Test is required
                                    </label>
                                  </div>
                                </div>
                                -->
                                <!-- /form-group -->
                                  </div>
                                </div>

                              </div>
                            </div>

                            <div class="row mb-2">
                              <div class="col-sm-12">
                              </div>
                            </div>
                          </div>
                          <!-- /.container-fluid -->
                        </section>
                      </div>
                      <!-- /.col -->
                    </div>
                </div>

                <!-- footer -->
                <div class="card-footer">
                    <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4 hide-controls">
                        <button type="submit" class="btn btn-primary">
                          Save
                        </button>
                        <button type="reset" class="btn btn-primary">
                          Reset
                        </button>
                        <a href="{{ route('document_control.document_new_draft') }}" class="btn btn-primary">
                          Cancel
                        </a>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                  </div>
                <!-- /footer -->
              </div>
              <!-- /.card -->
              </form>

            </div>
          </div>
          <!-- /.row -->

        </div>

        <!-- tab-pane -->
        <div class="tab-pane fade" id="custom-content-below-overview" role="tabpanel" aria-labelledby="custom-content-below-overview-tab">

            <!-- .row -->
            <div class="row">
              <div class="col-12">

                <!-- Custom Tabs -->
                <div class="card">

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-top d-flex p-0">

                    <!-- ul .nav-pills -->
                    <ul class="nav nav-pills ml-auto p-2">
                    </ul>
                    <!-- /ul .nav-pills -->

                  </div>
                  <!-- /.card-header -->

                  <!-- .card-header -->
                  <div class="card-header card-header-sub-bottom d-flex p-0">
                    <ul class="breadcrumb card-title p-3">
                      <li><img src="{{ asset('images/iso-icon.png') }}">
                      </li>
                      <li>
                        <a href="{{ route('iso_management_modules') }}">
                          Document Management System
                        </a>
                      </li>
                      <li>Document Control</li>
                      <li class="color-primary">Access Control</li>
                    </ul>
                  </div>
                  <!-- /.card-header -->

                  <div class="card-body">

                    <!-- container -->
                    <div class="container">

                      <!-- .row -->
                      <div class="row">

                        <!-- .col -->
                        <div class="col-md-12">

                          <!-- Phase Tracking ul .treeview -->
                          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item has-treeview task-treeview">
                              <a href="#" class="nav-link">
                                <i class="fas fa-recycle nav-icon"></i>
                                <p>
                                  Document Tracking
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">

                                <!-- Main content -->
                                <section class="content">
                                  <div class="container">
                                    <div class="row">
                                      <div class="col-12">
                                        <div class="card">
                                          <!-- /.card-header -->
                                          <div class="card-body table-responsive p-0">
                                            <table class="table table-hover">
                                              <thead>
                                                <tr>
                                                  <th>ID</th>
                                                  <th>Filename</th>
                                                  <th>Document No</th>
                                                  <th>Status</th>
                                                  <th>Revision</th>
                                                  <th>Phase</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @if(!empty($files))
                                                @foreach($files as $doc)
                                                <tr>

                                                  <td>{{ $doc->id }}</td>
                                                  <td>{{ $doc->filename }}</td>
                                                  <td>{{ $doc->doc_number }}</td>
                                                  <td><span class="tag tag-success">Pending</span></td>
                                                  <td>{{ $doc->revision }}</td>
                                                  <td>{{ $doc->phase_id }}</td>
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
                                    </div>
                                    <!-- /.row -->
                                  </div><!-- /.container-fluid -->
                                </section>
                                <!-- /.content -->

                            </li>

                            </ul>
                          </ul>
                          <!-- /ul .treeview -->

                          <!-- Electronic Signature ul .treeview -->
                          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item has-treeview task-treeview">
                              <a href="#" class="nav-link">
                                <i class="fas fa-signature nav-icon"></i>
                                <p>
                                  Electronic Signature
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">

                                <!-- Main content -->
                                <section class="content">
                                  <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-12">
                                        <div class="card">
                                          <!-- /.card-header -->
                                          <div class="card-body table-responsive p-0">
                                            <table class="table table-hover">
                                              <thead>
                                                <tr>
                                                  <th>ID</th>
                                                  <th>Owner</th>
                                                  <th>Reviewer</th>
                                                  <th>Originator</th>
                                                  <th>Digital Signature</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @if(!empty($files))
                                                @foreach($files as $doc)
                                                <tr>

                                                  <td>{{ $doc->id }}</td>
                                                  <td>{{ $doc->owner }}</td>
                                                  <td>{{ $doc->reviewer }}</td>
                                                  <td><span class="tag tag-success">{{ $doc->originator }}</span></td>
                                                  <td>{{ $doc->electronic_distribution }}</td>
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
                                    </div>
                                    <!-- /.row -->
                                  </div><!-- /.container-fluid -->
                                </section>
                                <!-- /.content -->

                            </li>

                            </ul>
                          </ul>
                          <!-- /ul .treeview -->

                          <!-- Additional Document Security ul .treeview -->
                          <ul class="nav nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item has-treeview task-treeview">
                              <a href="#" class="nav-link">
                                <i class="fas fa-shield-alt nav-icon"></i>
                                <p>
                                  Additional Document Security
                                  <i class="right fas fa-angle-left"></i>
                                </p>
                              </a>
                              <ul class="nav nav-treeview">

                                <!-- Main content -->
                                <section class="content">
                                  <div class="container-fluid">
                                    <div class="row">
                                      <div class="col-12">
                                        <div class="card">
                                          <!-- /.card-header -->
                                          <div class="card-body table-responsive p-0">
                                            <table class="table table-hover">
                                              <thead>
                                                <tr>
                                                  <th>ID</th>
                                                  <th>Owner</th>
                                                  <th>Reviewer</th>
                                                  <th>Originator</th>
                                                  <th>Document Security</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @if(!empty($files))
                                                @foreach($files as $doc)
                                                <tr>

                                                  <td>{{ $doc->id }}</td>
                                                  <td>{{ $doc->owner }}</td>
                                                  <td>{{ $doc->reviewer }}</td>
                                                  <td><span class="tag tag-success">{{ $doc->originator }}</span></td>
                                                  <td>{{ $doc->additional_security }}</td>
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
                                    </div>
                                    <!-- /.row -->
                                  </div><!-- /.container-fluid -->
                                </section>
                                <!-- /.content -->

                            </li>

                            </ul>
                          </ul>
                          <!-- /ul .treeview -->

                        </div>
                        <!-- /.col -->

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

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<!--
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
-->
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>

<!-- OJQUERY UI -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.js') }}" type="text/javascript"></script>

<!-- OPTIONAL SCRIPTS -->
<!--
<script src="{{ asset('dist/js/demo.js') }}"></script>
-->
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<!--
<script src="{{ asset('plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
-->
<!--
<script src="{{ asset('plugins/raphael/raphael.min.js') }}"></script>
-->
<!--
<script src="{{ asset('plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
-->
<!-- ChartJS -->
<!--
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
-->
<!-- PAGE SCRIPTS -->
<!--
<script src="{{ asset('dist/js/pages/dashboard2.js') }}"></script>
-->
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
<script type="text/javascript">
  $(document).ready(function(){
    var show_controls = $(".hidden_controls").show();
    $("#allow-self-training").click(function(){
        if($(this).is(":checked")){
          $(show_controls).show();
        }else{
          $(show_controls).hide();
        }
    });
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
      $('#approval_datepicker').datepicker({
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
