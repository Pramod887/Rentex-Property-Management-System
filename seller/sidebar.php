<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik+Moonrocks&display=swap" rel="stylesheet">
<style>
    /* Topbar */
    .topbar {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 9999;
  background-color: #fff;
  height: 60px;
  width: 100%;
  padding: 10px;
}

.topbar .navbar-brand {
  display: flex;
  align-items: center;
  color: #000;
  font-size: 20px;
  font-weight: bold;
  text-decoration: none;
  margin-left: 10px;
}

.topbar .navbar-brand img {
  width: 40px;
  height: 40px;
  margin-right: 10px;
}
/* Left Sidebar */
.left-sidebar {
  width: 250px;
  background-color: #000;
  color: #fff;
}

.left-sidebar .scroll-sidebar {
  height: calc(100vh - 60px);
  overflow-y: auto;
}

.left-sidebar ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.left-sidebar li {
  padding: 10px;
}

.left-sidebar a {
  display: block;
  color: #fff;
  text-decoration: none;
}

.left-sidebar a:hover {
  background-color: #333;
}

.left-sidebar i {
  margin-right: 10px;
}
</style>
<header class="topbar" data-navbarbg="skin5">
    
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="images/mylogo.png" style="width:100%; height: 40px;" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text" style="color:black;font-family: 'Rubik Moonrocks', cursive;font-size:30px">
                            <!-- dark Logo text -->
                            RENTEX
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class=" in">
                          
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                        
                                
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>


<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="background-color: darkblue;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" style="background-color: darkblue;">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php"
                                aria-expanded="false" style="color: white">
                                <i class="far fa-star" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addhome.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Add Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addflat.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Add Flat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="addpg.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Add Pg</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewhome.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">View Home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewflat.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">View Flat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewpg.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">View Pg</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewfeedback.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">View Feedback</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewregistration.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Registered home</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewregistration1.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Registered PG</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="viewregistration2.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-home" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Registered flat</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="logout.php"
                                aria-expanded="false"  style="color: white">
                                <i class="fa fa-columns" aria-hidden="true"  style="color: white"></i>
                                <span class="hide-menu">Logout</span>
                            </a>
                        </li>
                        
                       
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>