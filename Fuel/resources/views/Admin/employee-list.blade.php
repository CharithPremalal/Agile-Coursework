<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->



<head>
    <meta charset="UTF-8">
    <title>Fuel App</title>
    <link rel="shortcut icon" href="{{URL::asset('dist/images/logo.png')}}">
    <meta name="viewport" content="width=device-width,initial-scale=1')}}">

    <!-- START: Template CSS-->
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/jquery-ui/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dist/vendors/flags-icon/css/flag-icon.min.css')}}">
    <!-- END Template CSS-->

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
                    <a href="/dashboard" class="horizontal-logo text-left">
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
                        <li><a href="/dashboard"><i class="icon-grid"></i> Analytic</a></li>
                        <li class="active"><a href="{{url('employee-list')}}"><i class="icon-people"></i> Employee List</a></li>
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
                        <li><a href="{{url('profile')}}"><i class="icon-user"></i>View Profile</a></li>
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
                        <div class="w-sm-100 mr-auto">
                            <h4 class="mb-0">Employee List</h4>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="/dashboard">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Employee List</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row row-eq-height">
                <div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
                    <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                    <div class="card border h-100 contact-menu-section">
                        <div class="card-header d-flex justify-content-between align-items-center">

                            <a href="{{route('dashboaord.create')}}" class="bg-primary py-2 px-2 rounded ml-auto text-white w-100 text-center">
                                <i class="icon-plus align-middle text-white"></i> <span class="d-none d-xl-inline-block">Add New Employee</span>
                            </a>
                            <!-- Add Contact -->

                            <!-- Edit Contact -->


                        </div>

                        <ul class="nav flex-column contact-menu">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-contacttype="contact">
                                    <i class="icon-list"></i> All
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-contacttype="friend-contact">
                                    <i class="icon-people"></i> Manager
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-contacttype="office-contact">
                                    <i class="icon-user-follow"></i> S Employee
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-contacttype="family-contact ">
                                    <i class="icon-check"></i> Trainer
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#" data-contacttype="business-contact">
                                    <i class="icon-layers"></i> Business
                                </a>
                            </li> -->

                        </ul>

                    </div>
                </div>
                <div class="col-12 col-lg-10 mt-3 pl-lg-0">
                    <div class="card border h-100 contact-list-section">
                        <div class="card-header border-bottom p-1 d-flex">
                            <a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
                            <input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search" placeholder="Search ...">
                            <a href="#" class="list-style search-bar-menu border-0 active"><i class="icon-list"></i></a>
                            <a href="#" class="grid-style search-bar-menu"><i class="icon-grid"></i></a>
                        </div>
                        <div class="card-body p-0">

                            <div class="contacts list">
                            @foreach($employees as $employee)
                                <div class="contact friend-contact">
                                    <div class="contact-content">
                                        <div class="contact-profile">
                                            <img src="dist/images/avatr.png" alt="avatar" class="user-image img-fluid">
                                            <div class="contact-info">
                                                <p class="contact-name mb-0">{{$employee->name}}</p>
                                                <p class="contact-position mb-0 small font-weight-bold text-muted">{{$employee->role ? $employee->role->name:''}}</p>
                                            </div>
                                        </div>
                                        <div class="contact-email">
                                            <p class="mb-0 small">Email: </p>
                                            <p class="user-email">{{$employee->email}}</p>
                                        </div>
                                        <div class="contact-location">
                                            <p class="mb-0 small">Location: </p>
                                            <p class="user-location">{{$employee->location}}</p>
                                        </div>
                                        <div class="contact-phone">
                                            <p class="mb-0 small">Phone: </p>
                                            <p class="user-phone">{{$employee->phone_number}}</p>
                                        </div>
                                        <div class="line-h-1 h5">
                                            <a class="text-success edit-contact" href="{{route('dashboaord.edit', $employee->id)}}"><i class="icon-pencil"></i></a>
                                            <a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
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
    <footer class="site-footer">

    </footer>
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

    <!-- START: Page JS-->
    <script src="{{URL::asset('dist/js/app.contactlist.js')}}"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->



</html>
