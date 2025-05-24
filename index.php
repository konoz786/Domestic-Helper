
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
   
   $limit=3;
   
   if(isset($_GET['page'])){
      $page=$_GET['page'];
   }

   else{
      $page=1;
   }

   $offset=($page-1)*$limit;

   $sql="SELECT * FROM `domestic_helper` ORDER BY helper_id DESC LIMIT {$offset},{$limit}";
   $result=mysqli_query($con,$sql);
    
    while($row=mysqli_fetch_assoc($result)){

      $helper_id=$row['helper_id'];

      $sql2="SELECT *
      FROM domestic_helper AS dh, helper_services_t AS hs
      WHERE dh.helper_id=hs.helper_id AND dh.helper_id='$helper_id'";

      $result2=mysqli_query($con,$sql2);
      $row2=mysqli_fetch_assoc($result2);

        echo '<div class="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img class="card-image-container" src="photos/'.$row['image_name'].'">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">'.$row['name'].' - '.$row['age'].' years old</h5>
              <p class="card-text">Domestic Helper</p>
              <p class="card-description">'.$row['details'].'</p>
              <p class="card-description">My Services - '.$row['services'].'</p>
              <p class="card-description">Fee Per Service - '.$row['fee_per_work'].' Taka</p>
              <a href="hire_helper.php?helper_id='.$helper_id.'"><button class="hire-me">Hire me</button></a>
            </div>
          </div>
        </div>
      </div>';  

  }
?>

  </div>

  <div class="pagination-bar">

  <?php
      
      $query="SELECT * FROM `domestic_helper`";
      $result2=mysqli_query($con,$query);

      if(mysqli_num_rows($result2)>0){
        $total_records = mysqli_num_rows($result2);
        $total_page=ceil($total_records/$limit);

        echo '<ul class="pagination">';

        for($i=1;$i<=$total_page;$i++){

            if($i==$page){
              $active="active pagination-btn";
            }  

            else{
                $active="";
            }
            echo '<li class="pagination-btn"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
        }
            echo '</ul>';
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