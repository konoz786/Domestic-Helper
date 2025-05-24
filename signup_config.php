<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="alert.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>

<?php

 $a="login.php";

include 'connect.php';

if(isset($_POST['submit-employer-form'])){
   
      $name=$_POST['name'];
      $age=$_POST['age'];
      $contact=$_POST['contact'];
      $gender=$_POST['gender'];
      $address=$_POST['address'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $image_name=$_FILES['file']['name'];
      $file_tmp_Name=$_FILES['file']['tmp_name'];
      $file_destination='photos/'.$image_name;

      move_uploaded_file($file_tmp_Name,$file_destination);

      $sql="INSERT INTO `employer_t` (`employer_id`, `name`, 
      `age`, `gender`, `contact`, `address`, `email`, `password`, 
      `image_name`) VALUES (NULL, '$name', '$age', '$gender', 
      '$contact', '$address', '$email', '$password', '$image_name')";

      $result=mysqli_query($con,$sql);

      if($result){

       echo ' <div class="alert1">
                   <p class="icon"><i class="fa-regular fa-circle-check fa-beat-fade"></i></p>
                   <p class="title">Success!</p>
                   <p class="description">Your registration is successfull !</p>
                   <p class="description">You can proceed to login now.</p>
                   <a href="login.php" target="_self"><button class="btn">Login</button></a>
              </div>';
      }

      else{

       echo '<div class="alert2">
                  <p class="icon"><i class="fa-solid fa-triangle-exclamation fa-beat-fade"></i></p>
                  <p class="title">Error!</p>
                  <p class="description">Oops! An Error has occurred !</p>
                  <p class="description">Please try again.</p>
                  <a href="signup.php" target="_self"><button class="btn">Login</button></a>
            </div>';
        } 
      }    

   if(isset($_POST['submit-helper-form'])){
     
      $name=$_POST['name'];
      $age=$_POST['age'];
      $details=$_POST['details'];
      $gender=$_POST['gender'];
      $services=$_POST['services'];
      $fee=$_POST['fee'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $image_name=$_FILES['file']['name'];
      $file_tmp_Name=$_FILES['file']['tmp_name'];
      $file_destination='photos/'.$image_name;

      $services_requested=join(",",$services);

      move_uploaded_file($file_tmp_Name,$file_destination);

      $sql="INSERT INTO `domestic_helper` (`helper_id`, 
      `name`, `age`, `details`, `image_name`, `fee_per_work`, 
      `email`, `password`, `gender`, `services`) VALUES 
      (NULL, '$name', '$age', '$details', '$image_name', '$fee', '$email', '$password', '$gender', '$services_requested')";

      $result=mysqli_query($con,$sql);

      if($result){

            echo ' <div class="alert1">
                        <p class="icon"><i class="fa-regular fa-circle-check fa-beat-fade"></i></p>
                        <p class="title">Success!</p>
                        <p class="description">Your registration is successfull !</p>
                        <p class="description">You can proceed to login now.</p>
                        <a href="login.php" target="_self"><button class="btn">Login</button></a>
                   </div>';
           }
     
           else{
            
            echo '<div class="alert2">
                       <p class="icon"><i class="fa-solid fa-triangle-exclamation fa-beat-fade"></i></p>
                       <p class="title">Error!</p>
                       <p class="description">Oops! An Error has occurred !</p>
                       <p class="description">Please try again.</p>
                       <a href="signup.php" target="_self"><button class="btn">Login</button></a>
                 </div>';
           }

      $sql="SELECT *
      FROM domestic_helper
      WHERE email='$email' AND password='$password'";

      $result=mysqli_query($con,$sql);
      $row=mysqli_fetch_assoc($result);
      $helper_id=$row['helper_id'];

      for($i=0;$i<sizeof($services);$i++){
      $sql="INSERT INTO `helper_services_t` 
      (`helper_id`, `service_name`) VALUES ('$helper_id', '$services[$i]')";

      $result=mysqli_query($con,$sql);
      }
      
   }
 
?>

</body>
</html>