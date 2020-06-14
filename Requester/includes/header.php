<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo TITLE ?></title>

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
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="index.php">EasyFix</a>
    </nav>

   <!-- Start container -->
    <div class="container-fluid" style="margin-top:40px;">
    <!-- start row -->
    <div class="row">
     <!-- Side bar 1 column start-->
    <nav class="col-sm-2 sidebar py-5 mysidebar-color d-print-none">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'requesterProfile')
            {echo 'active bg-info';} ?>" 
            href="requesterProfile.php">
            <i class="fas fa-user mr-2"></i>Profile</a></li>

            <li class="nav-item"><a class="nav-link  <?php if(PAGE == 'submitRequest')
            {echo 'active';} ?>" 
            href="submitRequest.php">
            <i class="far fa-envelope-open mr-2"></i>Submit Request</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'serviceStatus')
            {echo 'active';} ?>" 
            href="serviceStatus.php">
            <i class="fas fa-align-center mr-2"></i>Service Status</a></li>

            <li class="nav-item"><a class="nav-link <?php if(PAGE == 'requesterChangePass')
            {echo 'active';} ?>"
            href="requesterChangePass.php">
            <i class="fas fa-key mr-2"></i>Change Password</a></li>

            <li class="nav-item"><a class="nav-link" href="../logout.php">
            <i class="fas fa-sign-out-alt mr-2"></i>Log Out</a></li>
        </ul>
    </div>
    </nav><!-- End side bar 1 column-->

    
 
    