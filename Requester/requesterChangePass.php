<?php 
define('TITLE', 'Change Password');
define('PAGE', 'requesterChangePass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login'])
{
    $rEmail = $_SESSION['rEmail'];
}
else
{
    echo "<script> location.href ='RequesterLogin.php' </script>";
}

$rEmail = $_SESSION['rEmail'];
if(isset($_REQUEST['passupdate']))
{
    if($_REQUEST['rPassword'] == "")
    {
        $passmsg = "<div class='alert alert-warning col-sm-6 mt-3'>
        Password cannot be Empty</div>";
    }


else
{
    $rPass = $_REQUEST['rPassword'];
    $sql = "UPDATE requesterlogin_db SET r_password = '$rPass'
    WHERE r_email = '$rEmail'";
    if($conn->query($sql) == TRUE)
    {
        $passmsg = "<div class='alert alert-success col-sm-6 mt-3'>
        Updated Successfully</div>"; 
    }

    else
    {
        $passmsg = "<div class='alert alert-danger col-sm-6 mt-3'>
        Unable To Update</div>";
    }

    }
}


?>

<!-- Start user change password form 2 column-->
<div class="col-sm-8 col-md-6">
<form class="mt-5 mx-5" action="" method="post">
    <div class="form-group">
    <i class="fas fa-user"></i><label for="inputEmail" class="font-weight-bold pl-2">
    Email</label>
    <input type="email" class="form-control" id="inputEmail"
    value = "<?php echo $rEmail; ?>" readonly>
    </div>
    <div class="form-group">
    <i class="fas fa-key"></i><label for="inputnewpassword" class="font-weight-bold pl-2">
    New Password</label>
    <input type="password" class="form-control" id="inputnewpassword" 
    placeholder="New Password" name="rPassword">
    </div>
    <button type="submit" class="btn btn-success mr-4 mt-4" name="passupdate">
    Update</button>
    <button type="reset" class="btn btn-secondary mr-4 mt-4">
    Reset</button>

    <?php
    if(isset($passmsg))
    {
        echo $passmsg;
    }
    ?>
</form>
</div>
<!-- Start user change password form 2 column-->






<?php 
include('includes/footer.php');
?>
