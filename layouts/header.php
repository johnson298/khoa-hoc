<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<!-- Favicon icon -->
<link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
<title>admin</title>
<!-- This page CSS -->
<!-- This page CSS -->
<link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">  
<!-- Custom CSS -->
<link href="dist/css/bt4/style.min.css" rel="stylesheet">
<!-- Dashboard 1 Page CSS -->
<link href="dist/css/pages/dashboard4.css" rel="stylesheet">
<link href="dist/css/custom.css" rel="stylesheet">
<link rel="stylesheet" href="assets/node_modules/dropify/dist/css/dropify.min.css">
<link rel="stylesheet" href="assets/node_modules/switchery/dist/switchery.min.css">
<link rel="stylesheet" href="assets/node_modules/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="assets/node_modules/toast-master/css/jquery.toast.css">
<link rel="stylesheet" href="assets/node_modules/bootstrap-select/bootstrap-select.min.css">
<link rel="stylesheet" href="assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
<link rel="stylesheet" href="assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
<link rel="stylesheet" href="dist/css/pages/tab-page.css">
<link rel="stylesheet" href="assets/node_modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="assets/node_modules/wizard/steps.css">
<link rel="stylesheet" href="assets/node_modules/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
<link rel="stylesheet" href="assets/node_modules/jquery-asColorPicker-master/dist/css/asColorPicker.css">
<link rel="stylesheet" href="assets/node_modules/bootstrap-datepicker/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="assets/node_modules/timepicker/bootstrap-timepicker.min.css">
<link rel="stylesheet" href="assets/node_modules/bootstrap-daterangepicker/daterangepicker.css">
<link rel="stylesheet" href="assets/node_modules/html5-editor/bootstrap-wysihtml5.css">
<link rel="stylesheet" href="assets/node_modules/multiselect/css/multi-select.css">
<link rel="stylesheet" href="assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

<link rel="stylesheet" href="assets/custom.css">
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img
                        src="'assets/images/logo-light-icon.png"
                        alt="homepage" class="dark-logo"/>
                    <!-- Light Logo icon -->
                    <img
                        src="assets/images/logo-light-icon.png"
                        alt="homepage" class="light-logo"/>
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img
                             src="assets/images/logo-text.png"
                             alt="homepage"
                             class="dark-logo"/>
                    <!-- Light Logo text -->
                         <img
                             src="assets/images/logo-text.png"
                             class="light-logo" alt="homepage"/></span>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                        href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                <li class="nav-item"><a
                        class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)"><i class="icon-menu"></i></a></li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"> <i class="ti-bell"></i>
                        <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                        <ul>
                            <li>
                                <div class="drop-title">Notifications</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Luanch Admin</h5> <span
                                                class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span>
                                            <span class="time">9:10 AM</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span>
                                            <span class="time">9:08 AM</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)">
                                        <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span></div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all
                                        notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                            src="{{ (!empty(Auth::user()->avatar)) ? asset('upload/user/'.Auth::user()->avatar) : asset('upload/default/1.jpg"
                            alt="user" class="user-avatar" style="width:40px;height:40px"> <span
                            class="hidden-md-down"> <i
                                class="fa fa-angle-down"></i></span> </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <a href="javascript:void(0);" id="clickLogout"> <i class="fa fa-power-off">
                            </i> Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>