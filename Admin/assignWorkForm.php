<?php

if(session_id() == '')
{
session_start();
}
if(isset($_SESSION['is_adminlogin']))
{
    $aEmail = $_SESSION['aEmail'];
}
else
{
echo "<script>location.href='adminLogin.php'</script>";
}

    if(isset($_REQUEST['view']))
    {
        $sql = "SELECT * FROM submit_request WHERE requester_id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    }

    if(isset($_REQUEST['close']))
    {
    $sql = "DELETE FROM submit_request WHERE requester_id = {$_REQUEST['id']}";
    if($conn->query($sql) == TRUE)
    {
        echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    }
    else
    {
        echo "Unable to Delete";
    }
    }

    if(isset($_REQUEST['assign']))
    {
        if(($_REQUEST['requesterid'] == "") || ($_REQUEST['requesterinfo'] == "") ||
        ($_REQUEST['requesterdesc'] == "") || ($_REQUEST['requestername'] == "") || 
        ($_REQUEST['address1'] == "") || ($_REQUEST['requestercity'] == "") || 
        ($_REQUEST['requesterstate'] == "") || ($_REQUEST['requesterzip'] == "") || 
        ($_REQUEST['requesteremail'] == "") || ($_REQUEST['requestermobile'] == "") || 
        ($_REQUEST['assigntech'] == "") || ($_REQUEST['inputdate'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 mt-2">Fill All Fields</div>';
        }

        else
        {
            $rid = $_REQUEST['requesterid'];
            $rinfo = $_REQUEST['requesterinfo'];
            $rdesc = $_REQUEST['requesterdesc'];
            $rname = $_REQUEST['requestername'];
            $radd1 = $_REQUEST['address1'];
            $radd2 = $_REQUEST['address2'];
            $rcity = $_REQUEST['requestercity'];
            $rstate = $_REQUEST['requesterstate'];
            $rzip = $_REQUEST['requesterzip'];
            $remail = $_REQUEST['requesteremail'];
            $rmobile = $_REQUEST['requestermobile'];
            $rassigntech = $_REQUEST['assigntech'];
            $rdate = $_REQUEST['inputdate'];

            $sql = "INSERT INTO assign_work (requester_id, requester_info, requester_desc,
            requester_name, requester_add1, requester_add2, requester_city, requester_state, 
            requester_zip, requester_email, requester_mobile, assign_tech, assign_date)
            VALUES('$rid','$rinfo', '$rdesc', '$rname', '$radd1', '$radd2', 
            '$rcity', '$rstate', '$rzip', '$remail', '$rmobile', '$rassigntech', '$rdate')";

            if($conn->query($sql) == TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6">
                Work Assigned Successfully!!</div>';
            }
            else
            {
                $msg = '<div class="alert alert-danger col-sm-6">
                Unable to Assign Work</div>';
            }

        }
        
    }

?>


<!-- Start 3 column Assign Request -->

<div class="col-sm-5 mt-5 jumbotron">

<?php
    if(isset($msg))
    {
        echo $msg;
    }
?>

<form action="" method="POST">
<h5 class="text-center">Assign Work Order Request</h5>
<div class="form-group">
<label for="requesterid">Request ID</label>
<input type="text" class="form-control" id="requesterid" name="requesterid" 

value = "<?php 
if(isset($row['requester_id'])) 
echo $row['requester_id']; 
?>" 
readonly>

</div>
<div class="form-group">
<label for="requesterinfo">Requester Info</label>
<input type="text" class="form-control" id="requesterinfo" name="requesterinfo"
value = "<?php 
if(isset($row['requester_info'])) 
echo $row['requester_info']; 
?>">
</div>
<div class="form-group">
<label for="requesterdesc">Description</label>
<input type="text" class="form-control" id="requesterdesc" name="requesterdesc"
value = "<?php 
if(isset($row['requester_desc'])) 
echo $row['requester_desc']; 
?>">
</div>
<div class="form-group">
<label for="requestername">Name</label>
<input type="text" class="form-control" id="requestername" name="requestername"
value = "<?php 
if(isset($row['requester_name'])) 
echo $row['requester_name']; 
?>">
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="address1">Address</label>
<input type="text" class="form-control" id="address1" name="address1"
value = "<?php 
if(isset($row['requester_add1'])) 
echo $row['requester_add1']; 
?>">
</div>
<div class="form-group col-md-6">
<label for="address2">Location (optional)</label>
<input type="text" class="form-control" id="address2" name="address2"
value = "<?php 
if(isset($row['requester_add2'])) 
echo $row['requester_add2']; 
?>">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-4">
<label for="requestercity">City</label>
<input type="text" class="form-control" id="requestercity" 
name="requestercity" value = "<?php 
if(isset($row['requester_city'])) 
echo $row['requester_city']; 
?>">
</div>
<div class="form-group col-md-4">
<label for="requesterstate">State</label>
<input type="text" class="form-control" id="requesterstate" 
name="requesterstate" value = "<?php 
if(isset($row['requester_state'])) 
echo $row['requester_state']; 
?>">
</div>
<div class="form-group col-md-4">
<label for="requesterzip">Zip</label>
<input type="text" class="form-control" id="requesterstate" name="requesterzip" 
value = "<?php 
if(isset($row['requester_zip'])) 
echo $row['requester_zip']; 
?>" 

onkeypress="isInputNumber(event)">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-8">
<label for="requesteremail">Email</label>
<input type="email" class="form-control" id="requesteremail" 
name="requesteremail" value = "<?php 
if(isset($row['requester_email'])) 
echo $row['requester_email']; 
?>">
</div>
<div class="form-group col-md-4">
<label for="inputMobile">Mobile</label>
<input type="text" class="form-control" id="inputMobile"
name="requestermobile" 
value = "<?php 
if(isset($row['requester_mobile'])) 
echo $row['requester_mobile']; 
?>"
onkeypress="isInputNumber(event)">
</div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
<label for="assigntech">Assign to Technician</label>
<input type="text" class="form-control" id=assigntech
 name="assigntech">
</div>
<div class="form-group col-md-6">
<label for="inputdate">Service Date</label>
<input type="date" class="form-control" id="inputdate"
 name="inputdate">
</div>
</div>
<div class="float-right mt-4">
<button type="submit" class="btn btn-success" name="assign">Assign</button>
<button type="reset" class="btn btn-secondary">Reset</button>
</div>
</form>
</div>  <!-- End 3 column  Assign Request-->

<script>
    function isInputNumber(evt)
    {
        var ch = String.formCharCode(evt.which);
        if(!(/[0-9]/.test(ch)))
        {
        evt.preventDefault();
        }
    }
</script>