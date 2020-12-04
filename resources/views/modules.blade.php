<style>
.custom-card{
    box-shadow: 0px 8px 20px #000000 !important;
}

.custom-card:hover{
    box-shadow: 0px 8px 10px #3C3A3A !important;
    /* border: 1px solid black !important; */
}
</style>

@extends('layouts.modules_header')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4"></div>
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-4">
                <div class="mb-3">
                    <div class="info-box-content">
                        <i class="fa fa-home"></i><label>Modules</label><i class="fa fa-home"></i>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4"></div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->

<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-outline custom-card">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/training.jpg') }}" alt="User profile picture">
                        </div>


                        <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>

                        <h3 class="profile-username text-center">Contracter Management and Information Training</h3>

                        <p class="text-muted text-justified">
                            A pre-qualification tool for new contractors to ensure they are pre-qualified before starting with the organization. <br />
                            Have all contractors gone through an online pre-qualifation questionnaire? Any personal information you need as part of
                            your contractors on-boarding to ensure they are compliant and approved to work for your organization.
                        </p>

                        <span class="bottom-logo">
                            <img src="{{ asset('images/brs_logo.png') }}" alt="Logo">
                        </span>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->

            <div class="col-md-4">

                <!-- Profile Image -->
                <a href="document_management">
                    <div class="card card-outline custom-card">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/management.jpg') }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">ISO Document Management System</h3>

                            <p class="text-muted text-justified">
                                Centralize your company document and intellectual property. <br />
                                Access your documents from any where. Get nofitfied before document expires. Keep versions history of your
                                document. Ensure compliance with industry standard.
                            </p>

                            <span class="bottom-logo">
                                <img src="{{ asset('images/brs_logo.png') }}" alt="Logo">
                            </span>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </a>
                <!-- /.card -->

            </div>
            <!-- /.col -->

            <div class="col-md-4">

                <!-- Profile Image -->
                <div class="card card-outline custom-card">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/compliance.jpg') }}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">SHEQ Compliance</h3>
                        <div class="ribbon ribbon-top-left"><span>Coming Soon</span></div>
                        <p class="text-muted text-justified">
                            Achieve greater visibility with your organizationh's safety performance and ensure compliance with South African regulatory
                            requirements and international standard such as ISO 45002, 9001 and 14001.
                        </p>

                        <span class="bottom-logo">
                            <img src="{{ asset('images/brs_logo.png') }}" alt="Logo">
                        </span>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection