<?php
    include 'connect.php';
?>

<?php

if(isset($_GET['customer_id']) && isset($_GET['btn']) ){

  session_start();

  $helper_id=$_SESSION['helper_id'];
  
  $customer_id=$_GET['customer_id'];
  
  if($_GET['btn']=="accept"){

    $sql="SELECT *
    FROM pending_requests_t AS pr 
    WHERE pr.customer_id='$customer_id' AND helper_id='$helper_id'";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    $work_type=$row['work_type'];
    $starting_date=$row['starting_date'];
    $starting_time=$row['starting_time'];
    $services=$row['services'];
    $total_fees=$row['total_fees'];
    $request_id=$row['request_id'];

    $sql="INSERT INTO `order_t` (`order_id`, `customer_id`, 
    `helper_id`, `work_type`, `starting_date`, `starting_time`, 
    `services`, `total_fees`) VALUES (NULL, '$customer_id', '$helper_id', 
    '$work_type', '$starting_date', '$starting_time', '$services', '$total_fees')";

    $result=mysqli_query($con,$sql);

    $sql="DELETE FROM pending_requests_t
    WHERE customer_id='$customer_id' AND helper_id='$helper_id'";

    $result=mysqli_query($con,$sql);

    header('location:helper_notification.php');

  }

  else{
    $sql="SELECT *
    FROM pending_requests_t
    WHERE customer_id='$customer_id' AND helper_id='$helper_id'";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    $work_type=$row['work_type'];
    $starting_date=$row['starting_date'];
    $starting_time=$row['starting_time'];
    $services=$row['services'];
    $total_fees=$row['total_fees'];
    $request_id=$row['request_id'];

    $sql="INSERT INTO `cancelled_requests_t` 
    (`request_id`, `customer_id`, `helper_id`, 
    `work_type`, `starting_date`, `starting_time`, 
    `services`, `total_fees`) VALUES (NULL, '$customer_id', '$helper_id', 
    '$work_type', '$starting_date', '$starting_time', '$services', '$total_fees')";

    $result=mysqli_query($con,$sql);

    $sql="DELETE FROM pending_requests_t
    WHERE customer_id='$customer_id' AND helper_id='$helper_id'";

    $result=mysqli_query($con,$sql);

    header('location:helper_notification.php');
  }

}

?>
