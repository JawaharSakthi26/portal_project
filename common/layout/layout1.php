<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portal Website</title>
    <link href="../../assets/css/style.min.css" rel="stylesheet">
    <link href="../../assets/plugins/dataTables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="../../assets/plugins/select2/select2.min.css" rel="stylesheet">
    <link href="../../assets/plugins/switch/switchery.min.css" rel="stylesheet">
    <link href="../../assets/css/custom.css" rel="stylesheet">
    <script src="../../assets/plugins/jquery/jquery.min.js"></script>
</head>
<body class="skin-megna fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Portal</p>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <b>
                            <img src="https://eliteadmin.themedesigner.in/demos/bt4/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <span>
                            <img src="https://eliteadmin.themedesigner.in/demos/bt4/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span> 
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://eliteadmin.themedesigner.in/demos/bt4/assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-end animated flipInY">
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a href="login.html" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="?page=user_list"><i class="icon-people"></i><span class="hide-menu">Users</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="ti-package"></i><span class="hide-menu">Projects</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="ti-server"></i><span class="hide-menu">Sonic Wall</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="icon-people"></i><span class="hide-menu">Project Members</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="icon-people"></i><span class="hide-menu">Teams</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="ti-notepad"></i><span class="hide-menu">Bart Sheet Access</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="javascript:void(0)"><i class="ti-write"></i><span class="hide-menu">Reports</span></a></li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Settings</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)">Roles</a></li>
                                <li><a href="javascript:void(0)">Technologies</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="container-fluid">
                <?php include($content) ?>
            </div>
        </div>
    </div>
    <footer class="footer">
        © 2023 Portal by sumanas.in
        <a href="#">Sumanas</a>
    </footer>
    <script src="../../assets/plugins/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/plugins/waves/waves.js"></script>
    <script src="../../assets/js/sidebarmenu.js"></script>
    <script src="../../assets/plugins/sticky/sticky-kit.min.js"></script>
    <script src="../../assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/custom.min.js"></script>
    <script src="../../assets/plugins/dataTables/jquery.dataTables.min.js"></script>
    <script src="../../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../../assets/plugins/switch/switchery.min.js"></script>
    <script src="../../assets/js/custom.js"></script>   
</body>
</html>