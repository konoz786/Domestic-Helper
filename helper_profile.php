
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

    <link rel="stylesheet" href="helper-nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="employer-profile.css?v=<?php echo time(); ?>">
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
                      <li class="li1"><a href="helper_profile.php" target="_self" class="active"><i class="fa-solid fa-user"></i>Profile</a></li>
                      <li class="notification li1"><a href="#about-me" target="_self"><i class="fa-sharp fa-solid fa-bell"></i>Notification</a>
                      <ul class="ul2">
                        <li><a href="helper_notification.php" target="_self">Requests</a></li>
                        <li><a href="helper_order.php" target="_self">Orders</a></li>
                      </ul>
                      </li>
                      <li class="li1"><a href="helper_history.php" target="_self" class="active"><i class="fa-solid fa-clock-rotate-left"></i>History</a></li>
                      <li class="li1"><a href="login.php" target="_self" class="active"><i class="fa-sharp fa-solid fa-right-from-bracket"></i>Logout</a></li>
                   </ul>
                  
    </nav>


    <script>

    <?php

    session_start();

    $email=$_SESSION['email'];
    $password=$_SESSION['password'];

    $sql="SELECT *
    FROM domestic_helper
    WHERE email='$email'
    AND password='$password'";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);

    $name=$row['name'];
    $age=$row['age'];
    $details=$row['details'];
    $fee=$row['fee_per_work'];
    $image_name=$row['image_name'];

    ?>

  $(document).ready(function(){

    var name="Name - "+<?php echo json_encode($name);?>;
    var email="Email - "+<?php echo json_encode($email);?>;
    var password="Password - "+<?php echo json_encode($password);?>;
    var age="Age - "+<?php echo json_encode($age);?>;
    var details="Details - "+<?php echo json_encode($details);?>;
    var fee="Fee Per Work - "+<?php echo json_encode($fee);?>+" "+"Taka";

    $('.name').attr('placeholder',name);
    $('.email').attr('placeholder',email);
    $('.password').attr('placeholder',password);
    $('.age').attr('placeholder',age);
    $('.details').attr('placeholder',details);
    $('.fee').attr('placeholder',fee);

  }); 

  </script>
  

   <div id="form-container">

   <form action="update_helper_profile_config.php" method="post">
     <div class="contact-form">
      <?php echo '<div class="image-container"><img src="photos/'.$image_name.'"></div>'; ?>
        <p class="form-title">Profile</p>
        <input type="text" name="name" class="name" placeholder="Name">
        <input type="text" name="age" class="age" placeholder="Age">
        <textarea class="details" name="details" id="" cols="30" rows="10" placeholder="Details"></textarea>
        <input type="text" name="fee" class="fee" placeholder="Fee Per Service">
        <input type="text" name="email" class="email" placeholder="Email">
        <input type="password" name="password" class="password" placeholder="Password">
        <input type="submit" name="submit" value="Confirm" class="submitButton">
     </div>
   </form> 

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