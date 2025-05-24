<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tDocumen</title>
</head>
<body>

    <?php

    session_start();

    $employer_id=$_SESSION['employer_id'];

      if(isset($_POST['submit'])){
        $services=$_POST['services'];
        $workType=$_POST['workType'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $helper_id=$_SESSION['helper_id'];

        $service=join(", ",$services);

        $sql="SELECT * 
        FROM domestic_helper
        WHERE helper_id='$helper_id'";

        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        $total_fees=$row['fee_per_work']*sizeof($services);

        echo $total_fees;

        $sql="INSERT INTO `pending_requests_t` 
        (`request_id`, `customer_id`, `helper_id`, 
        `work_type`, `starting_date`, `starting_time`, `services`, `total_fees`)
         VALUES (NULL, '$employer_id', '$helper_id', '$workType', '$date', '$time', '$service', '$total_fees')";

         $result=mysqli_query($con,$sql);

         $sql="SELECT request_id
         FROM pending_requests_t
         WHERE customer_id='$employer_id' AND helper_id='$helper_id'";

         $result=mysqli_query($con,$sql);

         header('location:index.php');
       } 
      
       
    ?>
 
</body>
</html>