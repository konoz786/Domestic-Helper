<?php
    include 'connect.php';
?>

<?php

if(isset($_GET['employer_id'])){


    session_start();
    $helper_id=$_SESSION['helper_id']; 
    $employer_id=$_GET['employer_id'];

    $sql="SELECT *
    FROM order_t 
    WHERE customer_id='$employer_id' AND helper_id='$helper_id'";

    $result=mysqli_query($con,$sql);

    $row=mysqli_fetch_assoc($result);

    $work_type=$row['work_type'];
    $starting_date=$row['starting_date'];
    $starting_time=$row['starting_time'];
    $services=$row['services'];
    $total_fees=$row['total_fees'];
    $order_id=$row['order_id'];

    $sql="INSERT INTO `complete_service_t` (`cs_id`, `customer_id`, 
    `helper_id`, `work_type`, `starting_date`, `starting_time`, 
    `services`, `total_fees`) VALUES (NULL, '$employer_id', '$helper_id', 
    '$work_type', '$starting_date', '$starting_time', '$services', '$total_fees')";

    $result=mysqli_query($con,$sql);

    $sql="DELETE FROM order_t
    WHERE customer_id='$employer_id' AND helper_id='$helper_id'";

    $result=mysqli_query($con,$sql);

    header('location:helper_order.php');

}

?>
