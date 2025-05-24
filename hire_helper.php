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

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="hire-form.css?v=<?php echo time(); ?>">
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

    <form action="hire_helper_config.php" method="POST">

    <div class="wrapper">

    <div id="hire-helper-form-container">

    <?php

        if(isset($_GET['helper_id'])){
           session_start();
           $_SESSION['helper_id']=$_GET['helper_id'];
        }

         $helper_id=$_SESSION['helper_id'];

         $sql="SELECT *
         FROM domestic_helper
         WHERE helper_id='$helper_id'";

         $result=mysqli_query($con,$sql);
         $row=mysqli_fetch_assoc($result);

         $sql2="SELECT service_name
         FROM helper_services_t, domestic_helper
         WHERE helper_services_t.helper_id=domestic_helper.helper_id 
         AND domestic_helper.helper_id='$helper_id'";

         $result2=mysqli_query($con,$sql2);

        

    echo '<div class="contact-form">
               <div class="image-container"><img class="form-image" src="photos/'.$row['image_name'].'"></div>
               <p class="form-title">Hi, I am '.$row['name'].'!</p>
        
                    <div class="wrapper-services">
                    <p class="services">Services - </p>

                    <div class="column-services">';

                    while($row_services=mysqli_fetch_assoc($result2)){
                          echo '<label class="service-label" for="'.$row_services['service_name'].'">'.$row_services['service_name'].'
                                <input class="checkbox" id="'.$row_services['service_name'].'" type="checkbox" name="services[]" value="'.$row_services['service_name'].'">
                                </label>';
                          }
                    echo '</div>
                          
                    </div>

                          <div class="wrapper-workType">
                          <p>Work Type - </p>
                          <select name="workType" id="workType">
                                  <option disabled selected>Work Type</option>
                                  <option value="one time">One Time</option>
                                  <option value="monthly">Monthly</option>
                          </select>
                          </div>

                          <div class="wrapper-date">
                          <p class="date">Starting Date - </p>
                          <input type="date" name="date" id="datePicker">
                          </div>

                          <div class="wrapper-time">
                          <p class="time">Starting Time - </p>
                          <input type="time" name="time" id="timePicker">
                          </div>

                          <input class="confirm-btn" name="submit" type="submit" value="Confirm">

        </div>';
    ?>    
    

    </div>

    </div>

    </form>

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
  

</body>
</html>