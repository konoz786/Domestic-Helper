
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

    <link rel="stylesheet" href="helper-notification.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="employer-order-nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="footer.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


    <style>
      body{
        background:url("photos/order.jpg");
        background-position:center;
        background-repeat:no-repeat;
        background-size:cover;
        font-family: 'Poppins', sans-serif;
        backdrop-filter:blur(2px);
      }
    </style>

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

        $sql="SELECT * 
        FROM order_t AS o, domestic_helper AS dh
        WHERE o.helper_id=dh.helper_id AND o.customer_id=$employer_id";

        $result=mysqli_query($con,$sql);
 
        while($row=mysqli_fetch_assoc($result)){

  echo ' <div class="card">
     <div class="row g-0">
       <div class="col-md-4">
         <img class="card-image-container" src="photos/'.$row['image_name'].'">
       </div>
       <div class="col-md-8">
         <div class="card-body">
           <h5 class="card-title">'.$row['name'].'</h5>
           <p class="card-text">Domestic Helper</p>
           <p class="card-status">Work Type - '.$row['work_type'].'</p>
           <p class="card-status">Requested Services - '.$row['services'].' </p>
           <p class="card-status">Starting Date - '.$row['starting_date'].' </p>
           <p class="card-status">Starting Time - '.$row['starting_time'].'</p>
           <p class="card-status">Total Fees - '.$row['total_fees'] .' Taka</p>
           <p class="status">Status - <span>Hired!</span></p>

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

<script>src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"</script>
<script src="notification-dropdown.js"></script>

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