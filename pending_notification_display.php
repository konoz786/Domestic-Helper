
<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="notification.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="footer.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


</head>
<body>

  
   
<nav class="nav">
                   <div class="logo">
                   <span class="first-letter">D</span>omestic <span class="first-letter">H</span>elper
                   </div>
                   
                  <button id="menu" class="menu"><i id="hamburger-menu" class="fa-solid fa-bars"></i></button>

                   <ul class="ul1">
                      <li class="li1"><a href="index.php" target="_self" class="active"><i class="fa-solid fa-house"></i>Home</a></li>
                      <li class="li1"><a href="employer_profile.php" target="_self" class="active"><i class="fa-solid fa-user"></i>Profile</a></li>
                      <li class="notification li1"><a href="#about-me" target="_self"><i class="fa-sharp fa-solid fa-bell"></i>Notification</a>
                      <ul class="ul2">
                        <li><a href="pending_notification_display.php" target="_self">Requests</a></li>
                        <li><a href="employer_order.php" target="_self">Orders</a></li>
                      </ul>
                      </li>
                      <li class="li1"><a href="employer_history.php" target="_self" class="active"><i class="fa-solid fa-clock-rotate-left"></i>History</a></li>
                      <li class="li1"><a href="login.php" target="_self" class="active"><i class="fa-sharp fa-solid fa-right-from-bracket"></i>Logout</a></li>
                   </ul>
                  
    </nav>
  


   <div id="helpers-card-container">

   <?php

   session_start();

   $employer_id=$_SESSION['employer_id'];

   $sql="SELECT dh.helper_id, dh.name, dh.age, dh.image_name, p.total_fees, p.starting_date, p.services
   FROM domestic_helper AS dh, pending_requests_t AS p
   WHERE p.customer_id='$employer_id' AND dh.helper_id=p.helper_id";

   $result=mysqli_query($con,$sql);
    
    while($row=mysqli_fetch_assoc($result)){

      $helper_id=$row['helper_id'];

        echo '<div class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img class="card-image-container" src="photos/'.$row['image_name'].'">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">'.$row['name'].' - '.$row['age'].'</h5>
              <p class="card-text border-bottom">Domestic Helper</p>
              <p class="card-text">Services - '.$row['services'].'</p>
              <p class="card-text">Total Fee - '.$row['total_fees'].' Taka </p>
              <p class="card-text">Starting Date - '.$row['starting_date'].'</p>
              <p class="card-status">Status - Request Pending</p>
              <a href="delete_employer_notification_config.php?helper_id='.$helper_id.'"><button class="cancel-request-btn"><i class="fa-solid fa-xmark"></i> Cancel Request</button></a>
            </div>
          </div>
        </div>
      </div>';  

    }
  ?>

<?php

$employer_id=$_SESSION['employer_id'];

$sql="SELECT *
FROM domestic_helper AS dh, cancelled_requests_t AS p
WHERE p.customer_id='$employer_id' AND dh.helper_id=p.helper_id";

$result=mysqli_query($con,$sql);
 
 while($row=mysqli_fetch_assoc($result)){

  $helper_id=$row['helper_id'];

     echo '<div class="card">
     <div class="row g-0">
       <div class="col-md-4">
         <img class="card-image-container" src="photos/'.$row['image_name'].'">
       </div>
       <div class="col-md-8">
         <div class="card-body">
           <h5 class="card-title">'.$row['name'].' - '.$row['age'].'</h5>
           <p class="card-text border-bottom">Domestic Helper</p>
           <p class="card-text">Total Fee - '.$row['total_fees'].' Taka </p>
           <p class="card-text">Starting Date - '.$row['starting_date'].'</p>
           <p class="card-status">Status - <span>Request Declined!</span></p>
           <a href="delete_employer_notification2_config.php?helper_id='.$helper_id.'"><button class="remove-notification-btn"><i class="fa-solid fa-xmark"></i>Remove Notification</button></a>
         </div>
       </div>
     </div>
   </div>';  

 }
?>

  </div>

  <div class="footer">
      <div class="logo">
           <span class="first-letter">D</span>omestic <span class="first-letter">H</span>elper
      </div>
      <p class="footer-section"><i class="far fa-copyright"></i> 2023 | All rights reserved</p>
      <ul class="icons">
        <li><button class="btn"><i class="fa-brands fa-facebook"></i></button></li>
        <li><button class="btn"><i class="fa-brands fa-instagram"></i></button></li>
        <li><button class="btn"><i class="fa-brands fa-twitter"></i></button></li>
      </ul>
      </div>
    </div>

   
<script src="notification-dropdown.js"></script>
<script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"</script>

<script>
  $(document).ready(function(){
   
   var bool = false;
 
 $('.menu').click(function(){
    if(bool==false){
    $('.ul1').css('right','0');
    $('.fa-bars').css('color','#00a693');
    bool=true;
    }
 
    else{
       $('.ul1').css('right','-100%');
       $('.fa-bars').css('color','#004953');
       bool=false;
    }
  });
 
 });
</script>

</body>
</html>