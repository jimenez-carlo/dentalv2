<?php include('../includes/functions.php') ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description" content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>PDCMS</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../images/logo.jpg" />

  <!-- Custom CSS -->
  <link href="../assets/libs/flot/css/float-chart.css" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="../dist/css/style.min.css" rel="stylesheet" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js'></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events: [
          <?php
          $list = get_list("select * from tbl_appointment a inner join tbl_appointment_items i on i.appointment_id = a.id inner join tbl_clinic c on c.clinic_id = a.clinic_id inner join tbl_service s on s.id = i.service_id where a.patient_id = " . $_SESSION['user']->id);
          $ctr = 0;
          ?>

          <?php foreach ($list as $res) { ?> {
              <?php $ctr++; ?>
              title: '<?= $res['name'] . " " . $res['srvc_name'] ?>',
                start: '<?= $res['appointment_date'] ?>',
                end: '<?= $res['appointment_date'] ?>'
            }
            <?= $ctr > count($list) ? '' : ','; ?>
          <?php          } ?>

        ]
      });
      calendar.render();
    });
  </script>
</head>
<style>
  #navbarSupportedContent {
    background: #2255b1 !important;
  }

  nav.navbar-dark,
  header.topbar,
  a.navbar-brand,
  aside.left-sidebar,
  #sidebarnav,
  a.sidebar-link {
    background: #2255b9 !important;
  }

  .logo {
    height: 40px;
  }
</style>

<body>
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="index.php">
            <!-- Logo icon -->
            <img src="../images/logo.jpg" alt="" class="logo">

            <h2 class="ms-4">PDCMS</h2>
          </a>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Toggle which is visible on mobile only -->
          <!-- ============================================================== -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
          </ul>
          <ul class="navbar-nav float-end">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-dark sidebar-link " href="../logout.php" aria-expanded="false"><i class="mdi mdi-power"></i><span class="hide-menu">Log Out</span></a>
            </li>
          </ul>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link bg-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link bg-dark" href="clinics.php" aria-expanded="false"><i class="mdi mdi-tooth"></i><span class="hide-menu">Clinics</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link bg-dark" href="appointments.php" aria-expanded="false"><i class="mdi mdi-calendar-multiple-check"></i><span class="hide-menu">Appointments</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link bg-dark" href="edit.php" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Edit Account Details</span></a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>