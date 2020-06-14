<?php
include('../dbConnection.php');
session_start();
if(!isset($_SESSION['is_adminlogin']))
{
    if(isset($_REQUEST['aEmail']))
    {
        $aEmail = mysqli_real_escape_string($conn, trim($_REQUEST['aEmail']));
        $aPassword = mysqli_real_escape_string($conn, trim($_REQUEST['aPassword']));
        $sql = "SELECT a_email, a_password FROM admin_login
                WHERE a_email = '".$aEmail."' AND a_password = '".$aPassword."' limit 1";
        $result = $conn->query($sql);
        if($result->num_rows == 1)
        {
            $_SESSION['is_adminlogin'] = true;
            $_SESSION['aEmail'] = $aEmail;
            echo "<script> location.href='dashboard.php';</script>";
            exit;
        }
        else
        {
            $msg = '<div class="alert alert-warning mt-2">Enter Valid Email and Password</div>';
        }
    }
}
else
{
    echo "<script> location.href='dashboard.php';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome css -->
    <link rel="stylesheet" href="../css/all.min.css">

    <style>
    .custom-margin
    {
        margin-top: 8vh;
    }
    </style>

    <title>Login Form</title>
</head>
<body>
    <div class="mt-5 mb-4 text-center text-info" style="font-size: 40px;">
    <i class="fas fa-wrench text-info"></i>
    <span>EasyFix</span>
    </div>

    <p class="text-center text-secondary" style="font-size:20px;">
    <i class="fas fa-user-cog text-secondary text-center"></i>
    <br>Admin Login
    </p>
    

    <div class="container-fluid">
    <div class="row justify-content-center custom-margin">
    <div class="col-sm-6 col-md-4">
    <form action="" method="post" class="shadow-lg p-4">
    <div class="form-group">
    <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label>
    <input type="email" class="form-control" placeholder="Email" name="aEmail">
    <small class="form-text">We'll never share your email with anyone else</small>
    </div>
    <div class="form-group">
    <i class="fas fa-key"></i><label for="pass" class="font-weight-bold pl-2">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="aPassword">
    </div>
    <button type="submit" class="btn btn-outline-danger mt-4 font-weight-bold 
    btn-block shadow-sm">Login</button>

    <?php
        if(isset($msg))
        {
            echo $msg;
        }
    ?>

    </form>
    <div class="text-center"><a href="../index.php" class=" btn btn-info mt-5
    font-weight-bold shadow-sm">Back To Home</a>
    </div>
    </div>
    </div>
    </div>

    <!-- Javascript files -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>