<?php

include 'connect.php';

if(isset($_GET['helper_id'])){
  $helper_id=$_GET['helper_id'];

$sql="DELETE 
FROM pending_requests_t
WHERE helper_id='$helper_id'";

$result=mysqli_query($con,$sql);
header('location:pending_notification_display.php');
}

?>