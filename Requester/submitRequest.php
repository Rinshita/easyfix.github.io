<?php 
define('TITLE', 'Submit Request');
define('PAGE', 'submitRequest');
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

if(isset($_REQUEST['submitrequest']))
{
    //Checking for empty fields
    if(($_REQUEST['requestinfo'] == "") || ($_REQUEST['requestdesc'] == "") ||
    ($_REQUEST['requestername'] == "") || ($_REQUEST['requesteradd1'] == "") || 
    ($_REQUEST['requestercity'] == "") || ($_REQUEST['requesterstate'] == "") || 
    ($_REQUEST['requesterzip'] == "") || ($_REQUEST['requesteremail'] == "") || 
    ($_REQUEST['requestermobile'] == "") || ($_REQUEST['requesterdate'] == ""))
    {
        $msg = "<div class='alert alert-warning col-sm-6 ml-5 mt-2'>
        All Fields Are Required!</div>";
    }

    else
    {
        $rinfo = $_REQUEST['requestinfo'];
        $rdesc = $_REQUEST['requestdesc'];
        $rname = $_REQUEST['requestername'];
        $radd1 = $_REQUEST['requesteradd1'];
        $radd2 = $_REQUEST['requesteradd2'];
        $rcity = $_REQUEST['requestercity'];
        $rstate = $_REQUEST['requesterstate'];
        $rzip = $_REQUEST['requesterzip'];
        $remail = $_REQUEST['requesteremail'];
        $rmobile = $_REQUEST['requestermobile'];
        $rdate = $_REQUEST['requesterdate'];

        $sql = "INSERT INTO submit_request(requester_info,requester_desc,
        requester_name,requester_add1,requester_add2,requester_city,
        requester_state,requester_zip,requester_email,requester_mobile,
        requester_date)
        VALUES('$rinfo','$rdesc','$rname','$radd1','$radd2',
        '$rcity','$rstate','$rzip','$remail','$rmobile','$rdate')";

        if($conn->query($sql) == TRUE)
        {
            $genid = mysqli_insert_id($conn);
            $msg = "<div class='alert alert-success col-sm-6 ml-5 mt-2'>
            Request Submitted Successfully!</div>";
            $_SESSION['myid'] = $genid;
            echo "<script> location.href ='submitRequestSuccess.php' </script>";
        }
        else
        {
            $msg = "<div class='alert alert-danger col-sm-6 ml-5 mt-2'>
            Unable to Submit your Request</div>"; 
        }
        ;
    }
}
?>

<!-- Start 2 column - service request form -->
<div class="col-sm-9 col-md-10 mt-5">
<form class="mx-5" action="" method="POST">
<div class="form-group">
<label for="inputRequestInfo">Request Info</label>
<input type="text" class="form-control" id="inputRequestInfo" 
placeholder="Request Info" name="requestinfo">
</div>
<div class="form-group">
<label for="inputRequestDescription">Request Description</label>
<input type="text" class="form-control" id="inputRequestDescription" 
placeholder="Write Description" name="requestdesc">
</div>
<div class="form-group">
<label for="inputName">Name</label>
<input type="text" class="form-control" id="inputName" 
placeholder="Your Name" name="requestername">
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputAddress">Address</label>
<input type="text" class="form-control" id="inputAddress" 
placeholder="Ex-House No. 123" name="requesteradd1">
</div>
<div class="form-group col-md-6">
<label for="inputAddress2">Location (optional)</label>
<input type="text" class="form-control" id="inputAddress2" 
placeholder="Ex-Railway Colony" name="requesteradd2">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputCity">City</label>
<input type="text" class="form-control" id="inputCity" 
placeholder="Ex-Indore" name="requestercity">
</div>
<div class="form-group col-md-4">
<label for="inputState">State</label>
<input type="text" class="form-control" id="inputState" 
placeholder="Ex-Uttar Pradesh" name="requesterstate">
</div>
<div class="form-group col-md-2">
<label for="inputZip">Zip</label>
<input type="text" class="form-control" id="inputZip" placeholder="Ex-380805"
name="requesterzip" onkeypress="isInputNumber(event)">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="inputEmail">Email</label>
<input type="email" class="form-control" id="inputEmail" 
placeholder="Your Email" name="requesteremail">
</div>
<div class="form-group col-md-2">
<label for="inputMobile">Mobile</label>
<input type="text" class="form-control" id="inputMobile" placeholder="+91 0000000000"
name="requestermobile" onkeypress="isInputNumber(event)">
</div><div class="form-group col-md-2">
<label for="inputDAte">Request Submission Date</label>
<input type="date" class="form-control" id="inputdate"
 name="requesterdate">
</div>
</div>
<button type="submit" class="btn btn-success" name="submitrequest">Submit</button>
<button type="reset" class="btn btn-secondary">Reset</button>
</form>

<?php
if(isset($msg))
{
    echo $msg;
}
?>

</div>
<!-- End 2 column - service request form -->

<!-- Only Number for input fields -->
<script>
    function isInputNumber(evt){
        var ch = String.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>

<?php 
include('includes/footer.php');
?>