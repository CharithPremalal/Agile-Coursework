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
                        <li class="active"><a href="{{url('task-board')}}"><i class="icon-event"></i> Task Board</a></li>
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
                            <h4 class="mb-0">Task Board</h4>
                            <a href="#" class="btn btn-primary mt-2" data-toggle="modal" data-target="#addlist">Add List</a>
                        </div>

                        <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item">App</li>
                            <li class="breadcrumb-item active"><a href="#">Task Board</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- END: Breadcrumbs-->
            <!-- Add List -->
            <div class="modal fade" id="addlist">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="icon-pencil"></i> Add List
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                        </div>

                        <form class="add-list">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="list-name" class="col-form-label">List Name</label>
                                    <input type="text" class="form-control" id="list-name">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary send-email">Add List</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <!-- Add List -->
            <div class="modal fade" id="editlist">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="icon-pencil"></i> Edit List
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                        </div>

                        <form class="edit-list">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="edit-list-name" class="col-form-label">List Name</label>
                                    <input type="text" class="form-control" id="edit-list-name">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary send-email">Update List</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>


            <!-- Add Task -->
            <div class="modal fade" id="addtask">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="icon-pencil"></i> Add Task
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                        </div>

                        <form class="add-task">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="task-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="task-name">
                                </div>
                                <div class="form-group">
                                    <label for="task-description" class="col-form-label">Description</label>
                                    <textarea class="form-control" rows="10" id="task-description"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary send-email">Add Task</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <!-- Add Task -->
            <div class="modal fade" id="edittask">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="icon-pencil"></i> Edit Task
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <i class="icon-close"></i>
                                </button>
                        </div>

                        <form class="edit-task">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="edit-task-name" class="col-form-label">Name</label>
                                    <input type="text" class="form-control" id="edit-task-name">
                                </div>
                                <div class="form-group">
                                    <label for="edit-task-description" class="col-form-label">Description</label>
                                    <textarea class="form-control" rows="10" id="edit-task-description"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" id="task-date">
                                <button type="submit" class="btn btn-primary send-email">Edit Task</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>

            <!-- START: Card Data-->
            <div class="row row-eq-height task-list-row">
                <div class="col-12 col-md-6 col-lg mt-3 task-list-item">
                    <div class="card bg-primary-light">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title">Todo</h6>
                            <div class="dropdown">
                                <a href="#" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ml-2 icon-arrow-down"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right border py-0">
                                    <li><a class="dropdown-item edit" href="#"><i class="icon-pencil"></i> Rename</a></li>
                                    <li><a class="dropdown-item delete" href="#"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="task-list">
                                <div class="card my-2 task-card">
                                    <div class="card-content">
                                        <div class="card-body p-4 body-color">
                                            <h6 class="mb-3 font-w-600">Fuel bowser late</h6>
                                            <div class="task-content mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">June 15th, 2020</span></p>
                                            <div class="d-flex">
                                                <div class="my-auto line-h-1 h5">
                                                    <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2 task-card">
                                    <div class="card-content">
                                        <div class="card-body p-4 body-color">
                                            <h6 class="mb-3 font-w-600 h6">Credit card machine not Wokring</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">May 4th, 2020</span></p>
                                            <div class="d-flex">
                                                <div class="my-auto line-h-1 h5">
                                                    <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="bg-primary w-100 d-block text-center py-2 px-2 mt-3 rounded text-white add-task" data-toggle="modal" data-target="#addtask">
                                <i class="icon-plus align-middle text-white"></i> <span>Add Task</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg mt-3 task-list-item">
                    <div class="card bg-primary-light">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title">In progress</h6>
                            <div class="dropdown">
                                <a href="#" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ml-2 icon-arrow-down"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right border py-0">
                                    <li><a class="dropdown-item edit" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil" ></i> Rename</a></li>
                                    <li><a class="dropdown-item delete" href="#"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="task-list">
                                <div class="card my-2 task-card">
                                    <div class="card-content">
                                        <div class="card-body p-4 body-color">
                                            <h6 class="mb-3 font-w-600">Customer complaint</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">May 15th, 2020</span></p>
                                            <div class="d-flex">
                                                <div class="my-auto line-h-1 h5">
                                                    <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2 task-card">
                                    <div class="card-content">
                                        <div class="card-body p-4 body-color">
                                            <h6 class="mb-3 font-w-600 h6">Fuel pump No-01 Performance Issues</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">May 4th, 2020</span></p>
                                            <div class="d-flex">
                                                <div class="my-auto line-h-1 h5">
                                                    <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card my-2 task-card">
                                    <div class="card-content">
                                        <div class="card-body p-4 body-color">
                                            <h6 class="mb-3 font-w-600 h6">Fuel tanks Low</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">April 4th, 2020</span></p>
                                            <div class="d-flex">
                                                <div class="my-auto line-h-1 h5">
                                                    <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="bg-primary w-100 d-block text-center py-2 px-2 mt-3 rounded text-white add-task" data-toggle="modal" data-target="#addtask">
                                <i class="icon-plus align-middle text-white"></i> <span>Add Task</span>
                            </a>
                        </div>
                    </div>


                </div>
                <div class="col-12 col-md-6 col-lg mt-3 task-list-item">
                    <div class="card bg-primary-light">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h6 class="card-title">Completed</h6>
                            <div class="dropdown">
                                <a href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ml-2 icon-arrow-down"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right border py-0">
                                    <li><a class="dropdown-item edit" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i> Rename</a></li>
                                    <li><a class="dropdown-item delete" href="#"><i class="icon-trash"></i> Delete</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="task-list">
                                <div class="card my-2 task-card">
                                    <div class="card-content">
                                        <div class="card-body p-4 body-color">
                                            <h6 class="mb-3 font-w-600 h6">Fuel pumps is not Wokring</h6>
                                            <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> <span class="task-date">May 4th, 2020</span></p>
                                            <div class="d-flex">
                                                <div class="my-auto line-h-1 h5">
                                                    <a class="text-success edit-task" href="#" data-toggle="modal" data-target="#edittask"><i class="icon-pencil"></i></a>
                                                    <a class="text-danger delete-task" href="#"><i class="icon-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="bg-primary w-100 d-block text-center py-2 px-2 mt-3 rounded text-white add-task" data-toggle="modal" data-target="#addtask">
                                <i class="icon-plus align-middle text-white"></i> <span>Add Task</span>
                            </a>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END: Card DATA-->
        </div>
    </main>
    <!-- END: Content-->



    <!-- START: Footer-->

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
    <script src="{{URL::asset('dist/js/app-taskboard.js')}}"></script>
    <!-- END: APP JS-->

    <!-- START: APP JS-->
    <script src="{{URL::asset('dist/js/app.js')}}"></script>
    <!-- END: APP JS-->
</body>
<!-- END: Body-->


</html>
