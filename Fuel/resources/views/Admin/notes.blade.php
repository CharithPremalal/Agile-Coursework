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
                        <li class="active"><a href="{{url('notes')}}"><i class="icon-tag"></i> Notes</a></li>
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
                            <h4 class="mb-0">App Notes</h4>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('dashboard')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Notes</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->

            <!-- START: Card Data-->
            <div class="row">
                <div class="col-12 col-lg-3 col-xl-2 mb-4 mt-3 pr-lg-0 flip-menu">
                    <a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
                    <div class="card border h-100 mail-menu-section ">
                        <div class="media d-block text-center  p-3">
                            <a href="#" class="bg-primary w-100 d-block py-2 px-2 rounded text-white" data-toggle="modal" data-target="#addnote">
                                <i class="icon-plus align-middle text-white"></i> <span>Add Note</span>
                            </a>
                        </div>

                        <!-- Add Note -->
                        <div class="modal fade" id="addnote">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <i class="icon-pencil"></i> New Note
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="icon-close"></i>
                                            </button>
                                    </div>

                                    <form class="add-note-form">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Title</label>
                                                <input type="text" class="form-control" id="title">
                                            </div>

                                            <div class="form-group">
                                                <label for="description" class="col-form-label">Description</label>
                                                <textarea class="form-control" rows="10" id="description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="chkbox">                                                        
                                                        <input type="checkbox" class="starred" id="starred">
                                                        <span class="checkmark"></span>
                                                        Starred
                                                    </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="chkbox">                                                        
                                                        <input type="checkbox" class="important" id="important">
                                                        <span class="checkmark"></span>
                                                        Important
                                                    </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Label</label>
                                                <select class="form-control" id="type">
                                                        <option value="private-note">Private</option>
                                                        <option value="business-note">Business</option>
                                                        <option value="social-note">Supervisor</option>
                                                        <option value="personal-note">S Employee</option>
                                                        <option value="work-note">Trainer</option>
                                                    </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary add-todo">Add Note</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Edit Note -->
                        <div class="modal fade" id="editnote">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <i class="icon-pencil"></i> Edit Note
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i class="icon-close"></i>
                                            </button>
                                    </div>

                                    <form class="edit-note-form">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Title</label>
                                                <input type="text" class="form-control" id="edit-title">
                                            </div>

                                            <div class="form-group">
                                                <label for="description" class="col-form-label">Description</label>
                                                <textarea class="form-control" rows="10" id="edit-description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="chkbox">                                                        
                                                        <input type="checkbox" class="starred" id="edit-starred">
                                                        <span class="checkmark"></span>
                                                        Starred
                                                    </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="chkbox">                                                        
                                                        <input type="checkbox" class="important" id="edit-important">
                                                        <span class="checkmark"></span>
                                                        Important
                                                    </label>
                                            </div>
                                            <div class="form-group">
                                                <label for="title" class="col-form-label">Label</label>
                                                <select class="form-control" id="edit-type">
                                                    <option value="private-note">Private</option>
                                                    <option value="business-note">Business</option>
                                                    <option value="social-note">Supervisor</option>
                                                    <option value="personal-note">S Employee</option>
                                                    <option value="work-note">Trainer</option>
                                                    </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <input type="hidden" class="note-date')}}">
                                            <button type="submit" class="btn btn-primary add-todo">Edit Note</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


                        <ul class="list-unstyled inbox-nav  mb-0 mt-2 notes-menu">
                            <li class="nav-item"><a href="#" data-notetype="all" class="nav-link active"><i class="icon-envelope pr-2"></i> All Notes</a></li>
                            <li class="nav-item"><a href="#" data-notetype="starred" class="nav-link"><i class="icon-star pr-2"></i> Starred</a></li>
                            <li class="nav-item"><a href="#" data-notetype="important" class="nav-link"><i class="icon-exclamation pr-2"></i> Important</a></li>
                        </ul>
                        <div class="eagle-divider"></div>
                        <div class="card-header py-1 mt-4">
                            <h6 class="mb-0">Labels</h6>
                        </div>
                        <ul class="nav flex-column font-weight-bold mt-3 note-label" id="myTab1" role="tablist">
                            <li class="nav-item  px-3">
                                <a class="nav-link text-danger" data-label="private-note" href="#">
                                    <i class="icon-pin"></i> Private
                                </a>
                            </li>
                            <li class="nav-item  px-3">
                                <a class="nav-link text-primary" data-label="business-note" href="#">
                                    <i class="icon-pin"></i> Business
                                </a>
                            </li>
                            <li class="nav-item  px-3">
                                <a class="nav-link text-warning" data-label="social-note" href="#">
                                    <i class="icon-pin"></i> Supervisor
                                </a>
                            </li>
                            <li class="nav-item  px-3 ">
                                <a class="nav-link text-success" data-label="personal-note" href="#">
                                    <i class="icon-pin"></i> S Employee
                                </a>
                            </li>
                            <li class="nav-item px-3 ">
                                <a class="nav-link text-info" data-label="work-note" href="#">
                                    <i class="icon-pin"></i> Trainer
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="col-12 col-lg-9 col-xl-10 mb-4 mt-3 pl-lg-0">
                    <div class="card border  h-100 notes-list-section">
                        <a href="#" class="d-inline-block d-lg-none flip-menu-toggle border-0"><i class="icon-menu"></i></a>
                        <div class="row notes">
                            <div class="col-12  col-md-6 col-lg-4 my-3 note business-note all starred" data-type="business-note">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-4">
                                            <h6 class="mb-3 font-w-600">Fuel bowser late</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="note-date">June 14th, 2020</span></p>
                                            <div class="note-content mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <div class="d-flex notes-tool">
                                                <span class="icon-star"></span>
                                                <span class="icon-exclamation mx-2"></span>
                                                <span class="dot"></span>
                                                <div class="ml-auto">
                                                    <a class="text-success edit-note" href="#" data-toggle="modal" data-target="#editnote"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-note" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 my-3 note personal-note all important" data-type="personal-note">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-4">
                                            <h6 class="mb-3 font-w-600">Credit card machine not Wokring</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="note-date">June 4th, 2020</span></p>
                                            <div class="note-content mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <div class="d-flex notes-tool">
                                                <span class="icon-star"></span>
                                                <span class="icon-exclamation mx-2"></span>
                                                <span class="dot"></span>
                                                <div class="ml-auto">
                                                    <a class="text-success edit-note" href="#" data-toggle="modal" data-target="#editnote"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-note" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 my-3 note work-note all starred important" data-type="work-note">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-4">
                                            <h6 class="mb-3 font-w-600">Customer complaint</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="note-date">May 21st, 2020</span></p>
                                            <div class="note-content mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <div class="d-flex notes-tool">
                                                <span class="icon-star"></span>
                                                <span class="icon-exclamation mx-2"></span>
                                                <span class="dot"></span>
                                                <div class="ml-auto">
                                                    <a class="text-success edit-note" href="#" data-toggle="modal" data-target="#editnote"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-note" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 my-3 note social-note all" data-type="social-note">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-4">
                                            <h6 class="mb-3 font-w-600">Fuel pump No-01 Performance Issues</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="note-date">May 14th, 2020</span></p>
                                            <div class="note-content mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <div class="d-flex notes-tool">
                                                <span class="icon-star"></span>
                                                <span class="icon-exclamation mx-2"></span>
                                                <span class="dot"></span>
                                                <div class="ml-auto">
                                                    <a class="text-success edit-note" href="#" data-toggle="modal" data-target="#editnote"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-note" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 my-3 note private-note all" data-type="private-note">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-4">
                                            <h6 class="mb-3 font-w-600">Fuel tanks Low</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="note-date">Feb 4th, 2020</span></p>
                                            <div class="note-content mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <div class="d-flex notes-tool">
                                                <span class="icon-star"></span>
                                                <span class="icon-exclamation mx-2"></span>
                                                <span class="dot"></span>
                                                <div class="ml-auto">
                                                    <a class="text-success edit-note" href="#" data-toggle="modal" data-target="#editnote"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-note" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12  col-md-6 col-lg-4 my-3 note business-note all" data-type="business-note">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body p-4">
                                            <h6 class="mb-3 font-w-600">Fuel pumps is not Wokring</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="note-date">April 20th, 2020</span></p>
                                            <div class="note-content mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <div class="d-flex notes-tool">
                                                <span class="icon-star"></span>
                                                <span class="icon-exclamation mx-2"></span>
                                                <span class="dot"></span>
                                                <div class="ml-auto">
                                                    <a class="text-success edit-note" href="#" data-toggle="modal" data-target="#editnote"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-note" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
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
    <script src="{{URL::asset('dist/vendors/quill/quill.min.js')}}"></script>
    <script src="{{URL::asset('dist/js/notes.script.js')}}"></script>
    <!-- END: APP JS-->

    <!-- START: APP JS-->
    <script src="{{URL::asset('dist/js/app.js')}}"></script>
    <!-- END: APP JS-->
</body>
<!-- END: Body-->

</html>
