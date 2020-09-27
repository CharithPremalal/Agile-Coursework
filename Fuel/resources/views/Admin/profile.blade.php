<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->



<head>
    <meta charset="UTF-8">
    <title>Fuel App</title>
    <link rel="shortcut icon" href="{{URL::asset('dist/images/logo.png')}}">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/flags-icon/css/flag-icon.min.css')}}">
    <!-- END Template CSS-->

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/ionicons/css/ionicons.min.css')}}">

    <!-- START: Page CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/quill/quill.snow.css')}}">
    <!-- END: Page CSS-->

    <!-- START: Custom CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/css/main.css')}}">
    <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">
    <!-- START: Pre Loader-->
    <div class="se-pre-con">
        <div class="loader"></div>
    </div>
    <!-- END: Pre Loader-->

    <!-- START: Header-->
    <div id="header-fix" class="header fixed-top">
        <div class="site-width">
            <nav class="navbar navbar-expand-lg  p-0">
                <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
                    <a href="{{url('dashboard')}}" class="horizontal-logo text-left">
                        <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">Fuel</span>
                    </a>
                </div>
                <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                    <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                </div>

                <form class="float-left d-none d-lg-block search-form">
                    <div class="form-group mb-0 position-relative">
                        <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                        <div class="btn-search position-absolute top-0">
                            <a href="#"><i class="h6 icon-magnifier"></i></a>
                        </div>
                        <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                            </a>

                    </div>
                </form>
                <div class="navbar-right ml-auto h-100">
                    <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                        <li class="d-inline-block align-self-center  d-block d-lg-none">
                            <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                                </a>
                        </li>
                        <li class="dropdown align-self-center d-inline-block">
                            <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                                    <span class="badge badge-default"> <span class="">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                        </li>
                        <li class="dropdown user-profile align-self-center d-inline-block">
                            <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
                                <div class="media">
                                    <img src="dist/images/avatr.png" class="d-flex img-fluid rounded-circle" width="29">
                                </div>
                            </a>

                            <div class="dropdown-menu border dropdown-menu-right p-0">
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                <a href="{{url('profile')}}" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                                <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                    <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                                <div class="dropdown-divider"></div>
                                <a href="page-login.html" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                    <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                            </div>

                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- END: Header-->

    <!-- START: Main Menu-->
    <div class="sidebar">
        <div class="site-width">

            <!-- START: Menu-->
            <ul id="side-menu" class="sidebar-menu">
                <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>
                    <ul>
                        <li><a href="{{url('dashboard')}}"><i class="icon-grid"></i> Analytic</a></li>
                        <li><a href="{{url('employee-list')}}"><i class="icon-people"></i> Employee List</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i>Manage</a>
                    <ul>
                        <li><a href="{{url('to-do-list')}}"><i class="icon-support"></i> Todo</a></li>
                        <li><a href="{{url('task-board')}}"><i class="icon-event"></i> Task Board</a></li>
                        <li><a href="{{url('notes')}}"><i class="icon-tag"></i> Notes</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><i class="icon-people mr-1"></i> Profile</a>
                    <ul>
                        <li class="active"><a href="{{url('profile')}}"><i class="icon-user"></i>View Profile</a></li>
                        <li><a href="#"><i class="icon-pencil"></i> Edit Profile</a></li>
                        <li><a href="#"><i class="icon-settings"></i> Account Settings</a></li>
                        <li><a href="#"><i class="icon-lock"></i> Lockscreen</a></li>
                    </ul>
                </li>
            </ul>
            <!-- END: Menu-->
            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- START: Main Content-->
    <main>
        <div class="container-fluid site-width">
            <!-- START: Breadcrumbs-->
            <div class="row ">
                <div class="col-12  align-self-center">
                    <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                        <div class="w-sm-100 mr-auto"><span class="h4 my-auto">User Profile</span></div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="position-relative">
                        <div class="background-image-maker py-5"></div>
                        <div class="holder-image">
                            <img src="dist/images/cover.jpg" alt="" class="img-fluid d-none">
                        </div>
                        <div class="position-relative px-3 py-5">
                            <div class="media d-md-flex d-block">
                                <a href="#"><img src="dist/images/avatr.png" width="100" alt="" class="img-fluid rounded-circle"></a>
                                <div class="media-body z-index-1">
                                    <div class="pl-4 mt-4">
                                        <h4 class="display-6 text-uppercase text-white mb-0">Thuwan Dilshan</h4>
                                        <h6 class="text-uppercase text-white mb-0">Manager</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu mt-4 theme-background border  z-index-1 p-2">
                        <div class="d-sm-flex">
                            <div class="align-self-center">
                                <ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
                                    <!-- <li class="nav-item ml-0">
                                        <a class="nav-link  py-2 px-3 px-lg-4 " data-toggle="tab" href="#timeline"> Timeline</a>
                                    </li> -->
                                    <li class="nav-item ml-0">
                                        <a class="nav-link  py-2 px-4 px-lg-4 active" data-toggle="tab" href="#about"> About</a>
                                    </li>
                                    <!-- <li class="nav-item ml-0">
                                        <a class="nav-link py-2 px-4 px-lg-4" data-toggle="tab" href="#activities">Activities </a>
                                    </li>
                                    <li class="nav-item ml-0 mb-2 mb-sm-0">
                                        <a class="nav-link py-2 px-4 px-lg-4" data-toggle="tab" href="#message"> Message</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="align-self-center ml-auto text-center text-sm-right">

                            </div>

                        </div>

                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <h5 class="card-title mb-3 mt-2">Thuwan Dilshan</h5>
                                <p class="card-text">Phasellus ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Phasellus ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.</p>
                                <div class="row mt-4 mb-3">
                                    <div class="col-6">
                                        <b><i class="ion ion-android-call"></i> Phone</b><br> +94 77 123 1234
                                    </div>
                                    <div class="col-6">
                                        <b><i class="ion ion-android-pin"></i> Location</b><br> Kandy, No 44308
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: Card DATA-->
        </div>
    </main>
    <!-- END: Content-->



    <!-- START: Footer-->
    <!-- <footer class="site-footer">
        2020 © PICK
    </footer> -->
    <!-- END: Footer-->


    <!-- START: Back to top-->
    <a href="#" class="scrollup text-center">
        <i class="icon-arrow-up"></i>
    </a>
    <!-- END: Back to top-->

    <!-- START: Template JS-->
    <script src="{{URL::asset('dist/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{URL::asset('dist/vendors/moment/moment.js')}}"></script>
    <script src="{{URL::asset('dist/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('dist/vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- END: Template JS-->

    <!-- START: APP JS-->
    <script src="{{URL::asset('dist/js/app.js')}}"></script>
    <!-- END: APP JS-->
</body>
<!-- END: Body-->



</html>