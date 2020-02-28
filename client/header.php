<?php 
if ((!$_SESSION['loggedin'] || !isset($_SESSION['username'])) || $_SESSION['role'] != "000") {
    $_SESSION['loggedin'] = false;
    ?>
    <script type="text/javascript">
        window.location.href = "../index.php";
    </script>
    <?php 
    exit();
}
$username = $_SESSION['username'];
$result = mysqli_query($conn,"SELECT `fname`,`lname` FROM `userinfo` WHERE `username` = '".$username."'");
if ($row=mysqli_fetch_array($result)) {
  $fname = $row[0];
  $lname = $row[1];
}
 ?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">e - Health card</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="personal-info.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Personal Info</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="time-line.php">
          <i class="fas fa-fw fa-file" ></i>
          <span>Time-Line</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="reports.php">
          <i class="fas fa-fw fa-sticky-note "></i>
          <span>Reports</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="insurance.php">
          <i class="fas fa-fw fa-medkit"></i>
          <span>Insurance</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo "$fname $lname"; ?></span>
                <img class="img-profile rounded-circle" src="../user_pp/<?php echo $username.'.jpg' ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="./" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
