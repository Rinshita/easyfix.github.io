<?php
    session_start();
    if(isset($_SESSION['is_adminlogin']))
    {
        $aEmail = $_SESSION['aEmail'];
    }
    else
    {
    echo "<script>location.href='adminLogin.php'</script>";
    }

    define('TITLE', 'Assign Request');
    define('PAGE', 'assignrequest');
    include('includes/admin_header.php');
    include('../dbConnection.php');  
?>

<!-- Statrt 2 column -->
<div class="col-sm-4 mb-5">
    <?php
        $sql = "SELECT requester_id, requester_info, requester_desc, requester_date
        FROM submit_request";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                echo '<div class="card mt-5 mx-5">';

                    echo '<div class="card-header">';
                        echo 'Request ID: '. $row['requester_id'];
                    echo '</div>';

                    echo '<div class="card-body">';
                        echo '<h5 class="card-title">
                        Request Info: '.$row['requester_info'];
                        echo '</h5>';

                        echo '<p class="card-text">'.$row['requester_desc'];
                        echo '</p>';

                        echo '<p class="card-text">Request Date: '.$row['requester_date'];
                        echo '</p>';

                        echo '<div class="float-right">';
                        echo '<form action="" method="POST">';
                        echo '<input type="hidden" name="id" value='.$row["requester_id"].'>';
                        
                        echo '<input type="submit" value="View" name="view" class="btn btn-info mr-3">';
                        echo '<input type="submit" value="Close" name="close" class="btn btn-secondary">';
                        echo '</form>';

                        echo '</div>';
                    echo '</div>';
                
                echo '</div>';
            }
        }
    ?>
</div>
<!-- End 2 column -->


<?php
        include('assignWorkForm.php');
        include('includes/admin_footer.php');
?>