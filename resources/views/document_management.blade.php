@extends('layouts.document_management_header')

@section('content')
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-2">
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
    @if(!empty($logos))
        @foreach($logos as $logo)
        <div class="sidebar">
      <!-- Brand Logo -->
        <a href="" class="brand-link-logo elevation-2">
          <img src="public/uploads/logos/{{ $logo->logo }}"
             alt="BRS" style="opacity: 1">
       </a>

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
                <a href="{{ route('document_management.delete_logo', $logo->id) }}" class="btn btn-default" onclick="return confirm('Do you really want to Remove this logo?')">Remove</a>
              </div>
            </div>
        </div>
      </div>
      <!-- /.upload logo -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      	<!-- .workspace-contact -->
      <div class="workspace-contact">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <label>Team</label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-10">
              <a href="" class="ohsm">BRS OHSM SYSTEM DOWNLOAD CENTER</a>
            </div>
          </div>

          <div class="row">
            <div class="col-md-10">
              <label>Workspsce contact</label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <img src="{{ asset('images/telesales.jpg') }}">
            </div>
            <div class="col-md-7">
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
              <p>Checklist: BRS H&S Committee</p>
              <p>Meeting Minutes</p>
            </div>
          </div>

        </div>
      </div>
      <!-- ./workspace-contact -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
        @endforeach
    @endif
    <!-- /.sidebar -->
  </aside>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper stats">
    <div class="col-md-12 col-sm-12 col-xs-12">
        @if(Session::has('success_msg'))
          <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
        @endif
    </div>
    <!-- Main content -->
    <section class="content">
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
            <a href="">
              <div class="info-box mb-3 brs-bg-color-blue-dark">
                <span class="info-box-icon"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Registered Users</span>
                  <span class="info-box-number">{{ $users }}</span>
                </div>
                <!-- /.info-box-content -->
              </div> 
            </a>           
            <!-- /.info-box -->

            <!-- Info Boxes Style 2 -->
            <a href="">
              <div class="info-box mb-3 brs-bg-color-blue-dark">
                <span class="info-box-icon"><i class="fas fa-comment"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Current posts</span>
                  <span class="info-box-number">{{ $posts }}</span>
                </div>
                <!-- /.info-box-content -->
              </div> 
            </a>           
            <!-- /.info-box -->

            <!-- Info Boxes Style 2 -->
            <!-- NUMBER OF FOLDERS -->
            <a href="">
              <div class="info-box mb-3 brs-bg-color-blue-dark">
                <span class="info-box-icon"><i class="fas fa-folder"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Created folders</span>
                  <span class="info-box-number">{{ $folders }}</span>
                </div>
                <!-- /.info-box-content -->
              </div>            
            </a>
            <!-- /.info-box -->

            <!-- Info Boxes Style 2 -->
            <a href="">
              <div class="info-box mb-3 brs-bg-color-blue-dark">
                <span class="info-box-icon"><i class="fas fa-file"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Current files</span>
                  <span class="info-box-number">{{ $files }}</span>
                </div>
                <!-- /.info-box-content -->
              </div> 
            </a>           
            <!-- /.info-box -->
            <!--
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-book"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Documents Approved</span>
                <span class="info-box-number">2,000</span>
              </div>
               /.info-box-content 
            </div>
            -->
            <!-- /.info-box -->

            <!--
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-cloud-upload-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Uploaded Documents</span>
                <span class="info-box-number">4,500</span>
              </div>
               /.info-box-content 
            </div>
             /.info-box -->

            <!--
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Recent Posts</span>
                <span class="info-box-number">12,000</span>
              </div>
               /.info-box-content 
            </div>
             /.info-box 
          </div>
          -->
          <!-- /.col -->
          
        </div>
        <!-- /.row -->

        
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!--------------------------------------------------
      MODAL
  --------------------------------------------------->

  <!-- .modal -->
    <div class="modal fade" id="upload-logo">

        <!-- .modal-dialog -->
        <div class="modal-dialog modal-lg">

          <!-- form -->
          <form method="post" action="{{ route('folders.uploadlogo') }}" enctype="multipart/form-data">
            @csrf

            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Upload Logo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Logo</button>
              </div>
            </div>
          <!-- /.modal-content -->
          </form>
          <!-- form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->
  <!-- .modal -->
    <div class="modal fade" id="multi-image-upload">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <form action="{{ route('folders.upload_video') }}" method="post" enctype="multipart/form-data">
              @csrf

            <div class="modal-header">
              <h4 class="modal-title">Upload Multiple Images</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="logo" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Video</button>
            </div>
          </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
  <!-- /.modal -->
@endsection