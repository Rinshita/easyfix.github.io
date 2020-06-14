<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php
        echo TITLE
    ?>
    </title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="../css/custom.css">

    <style>
        .mysidebar-color
        {
            background-color: gainsboro;
        }
    </style>

</head>
<body>

<!-- top navbar -->
<nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">EasyFix</a>
</nav>

 <!-- Start container -->
 <div class="container-fluid" style="margin-top:40px;">
    <!-- start row -->
    <div class="row">
     <!-- Side bar 1 column start-->
    <nav class="col-sm-2 mysidebar-color sidebar py-5">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard')
            {echo 'active bg-info';} ?>" 
            href="dashboard.php">
            <i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a></li>

            <li class="nav-item"><a class="nav-link  <?php if(PAGE == 'workorder')
            {echo 'active';} ?>" 
            href="workorder.php">
            <i class="fas fa-align-center mr-2"></i>Work Order</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'assignrequest')
            {echo 'active';} ?>" 
            href="assignRequest.php">
            <i class="fas fa-tasks mr-2"></i>Assign Request</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'assets')
            {echo 'active';} ?>" 
            href="assets.php">
            <i class="far fa-envelope-open mr-2"></i>Assets</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'technician')
            {echo 'active';} ?>" 
            href="technician.php">
            <i class="fas fa-users mr-2"></i>Technician</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'requester')
            {echo 'active';} ?>" 
            href="requester.php">
            <i class="fas fa-user mr-2"></i>Requeser</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'sellreport')
            {echo 'active';} ?>" 
            href="sellReport.php">
            <i class="fas fa-table mr-2"></i>Sell Report</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'workreport')
            {echo 'active';} ?>" 
            href="workReport.php">
            <i class="fas fa-table mr-2"></i>Work Report</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'adminChangePass')
            {echo 'active';} ?>"
            href="adminChangePass.php">
            <i class="fas fa-key mr-2"></i>Change Password</a></li>

            <li class="nav-item"><a class="nav-link" href="../logout.php">
            <i class="fas fa-sign-out-alt mr-2"></i>Log Out</a></li>
        </ul>
    </div>
    </nav><!-- End side bar 1 column-->