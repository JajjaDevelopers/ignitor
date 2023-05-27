<!DOCTYPE html>
<html lang="en">
<?php header('Access-Control-Allow-Origin: *'); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= esc($pageTitle)?></title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto"> -->
  <!-- vend CSS Files -->
  <link href="<?= base_url("assets/dashboard/vend/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" >
  <link href="<?= base_url("assets/dashboard/vend/bootstrap-icons/bootstrap-icons.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/dashboard/vend/boxicons/css/boxicons.min.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/dashboard/vend/quill/quill.snow.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/dashboard/vend/quill/quill.bubble.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/dashboard/vend/remixicon/remixicon.css") ?>" rel="stylesheet">
  <link href="<?= base_url("assets/dashboard/vend/simple-datatables/style.css") ?>" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url("assets/css/main.css") ?>">
  <link href="<?= base_url("assets/dashboard/css/style.css") ?>" rel="stylesheet">
  <!--plotly-->
  <script src="<?= base_url("assets/plotly/plotly-2.16.1.min.js") ?>"></script>

</head>
<style>
body {
        font-family: 'Roboto',sans-serif,serif;
        font-size: medium;
      }
 aside ul.sidebar-nav li.nav-item a.nav-link{
  background-color: rgb(0, 100, 255);
 }
 aside ul.sidebar-nav li.nav-item a.nav-link i{
  color:white;
  font-size:22px;
 }
 aside ul.sidebar-nav li.nav-item a.nav-link span{
  color:white;
 }
 aside ul.sidebar-nav li.nav-item a.nav-link span:hover{
  color:blue;
  font-weight:600;
  opacity:80%;
 }
 aside ul.sidebar-nav li.nav-item ul li a i{
  color:white;
  background-color: white;
 }
 aside ul.sidebar-nav li.nav-item ul li a span:hover{
  color:white;
 }

 /* nav ul li.nav-item.dropdown ul{
  background-color:green;
 }
 nav ul li.nav-item.dropdown ul li a span{
  color:white;
 }
 nav ul li.nav-item.dropdown ul li a span:hover{
  color:blue;
  font-weight:600;
  opacity:80%;
 }
 nav ul li.nav-item.dropdown ul li a i{
  color:white;
  font-size:22px;
 }
 nav ul li.nav-item.dropdown ul li:hover{
  background-color:green;
 } */

</style>

<body style="min-height:100vh; display:flex; flex-direction:column;">

  <!-- ======= Header ======= -->
  <div id="divheader">
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <i class="bi bi-list toggle-sidebar-btn"></i>
      <a href="<?= base_url("forms/index.php") ?>" class="logo d-flex align-items-center" style="width: fit-content;">
        
        <span class="d-none d-lg-block"><?=esc($schoolName)?></span>
      </a>
      
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-danger badge-number">10</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-item">
              <span class="text-danger">9</span>&nbsp;&nbsp;<span>Pending Verifications</span>
              <a href="../verification/pendingVerification"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-item">
              <span class="text-danger">8</span>&nbsp;&nbsp;<span>Pending Approvals</span>
              <a href="../approval/pendingApproval"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

       
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <!-- <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
            <i class="bi bi-person-circle" style="font-size:30px;"></i>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=esc($userName)?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=esc($fullName)?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../forms/settings">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../forms/logout.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
</div>

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="background-color:rgb(0, 100, 255);">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="../forms/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-house"></i><span>Students</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../processing/batchOrder">
              <i class="bi bi-circle"></i><span>Profile</span>
            </a>
          </li>
          <li>
            <a href="../processing/selectBatchOrder?act=Grading">
              <i class="bi bi-circle"></i><span>Performance</span>
            </a>
          </li>
          <li>
            <a href="../inventory/transfer">
              <i class="bi bi-circle"></i><span>Fees Ledger</span>
            </a>
          </li>
          <li>
            <a href="../inventory/transfer">
              <i class="bi bi-circle"></i><span>Pending Invoices</span>
            </a>
          </li>
          <li>
            <a href="../inventory/transfer">
              <i class="bi bi-circle"></i><span>Payments Made</span>
            </a>
          </li>
          <li>
            <a href="../processing/selectBatchOrder?act=Drying">
              <i class="bi bi-circle"></i><span>Admit</span>
            </a>
          </li>
        </ul>
      </li><!-- End Processing Nav  -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cash-coin"></i><span>Academics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../marketing/valuation">
              <i class="bi bi-circle"></i><span>Subjects</span>
            </a>
          </li>
          <li>
            <a href="../marketing/SalesReport">
              <i class="bi bi-circle"></i><span>School Calender</span>
            </a>
          </li>
          <li>
            <a href="../inventory/release">
              <i class="bi bi-circle"></i><span>Results</span>
            </a>
          </li>
        </ul>
      </li><!-- End Marketing Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-brightness-high-fill"></i><span>Finance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <!-- <a href="../roastery/grn"> -->
              <i class="bi bi-circle"></i><span>Receipt</span>
            </a>
          </li>
          <li>
            <!-- <a href="#"> -->
            <a href="../roastery/activtySheet">
              <i class="bi bi-circle"></i><span>Fees Structure</span>
            </a>
          </li>
          <li>
            <a href="#">
            <!-- <a href="../roastery/releaseRequest"> -->
              <i class="bi bi-circle"></i><span>Release Request</span>
            </a>
          </li>
        </ul>
      </li><!-- End Roast and Ground Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#quality-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-brightness-alt-high"></i><span>Communication</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="quality-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../quality/preoffloadingSample">
              <i class="bi bi-circle"></i><span>Announcements</span>
            </a>
          </li>
          <li>
            <a href="../quality/assessmentGrns">
              <i class="bi bi-circle"></i><span>Messages</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Quality Assessment</span>
            </a>
          </li>
        </ul>
      </li><!-- End Quality activity Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart-fill"></i><span>Staff</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../inventory/Goods_Received_Note">
              <i class="bi bi-circle"></i><span>Profile</span>
            </a>
          </li>
          <li>
            <a href="../inventory/bulking">
              <i class="bi bi-circle"></i><span>New Staff</span>
            </a>
          </li>
        </ul>
      </li><!-- End Inventory Nav -->
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">
            
