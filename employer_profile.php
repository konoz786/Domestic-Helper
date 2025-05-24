
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

    <link rel="stylesheet" href="profile-nav.css?v=<?php echo time(); ?>">
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
  

   <div id="form-container">

   <?php

   session_start();

   $employer_id=$_SESSION['employer_id'];

   $sql="SELECT *
   FROM employer_t
   WHERE employer_id=$employer_id";

   $result=mysqli_query($con,$sql);
   $row=mysqli_fetch_assoc($result);
   
   ?>

   <form action="update_employer_profile_config.php" method="post">
     <div class="contact-form">
      <?php echo '<div class="image-container"><img src="photos/'.$row['image_name'].'"></div>'; ?>
        <p class="form-title">Profile</p>
        <input type="text" name="name" class="name" placeholder="Name">
        <input type="text" name="contact" class="contact" placeholder="Contact">
        <input type="text" name="address" class="address" placeholder="Address">
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

   <script>

    <?php

        $email=$_SESSION['email'];
        $password=$_SESSION['password'];

        $sql="SELECT *
        FROM employer_t
        WHERE email='$email'
        AND password='$password'";

        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);

        $name=$row['name'];
        $contact=$row['contact'];
        $address=$row['address'];
    
    ?>

      $(document).ready(function(){

        var name="Name - "+<?php echo json_encode($name);?>;
        var contact="Contact - "+<?php echo json_encode($contact);?>;
        var address="Address - "+<?php echo json_encode($address);?>;
        var email="Email - "+<?php echo json_encode($email);?>;
        var password="Password - "+<?php echo json_encode($password);?>;
    
        $('.name').attr('placeholder',name);
        $('.contact').attr('placeholder',contact);
        $('.address').attr('placeholder',address);
        $('.email').attr('placeholder',email);
        $('.password').attr('placeholder',password);

      }); 

   </script>

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