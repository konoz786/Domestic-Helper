
<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name= "viewport" content="with=device-width, initial-scale=1.0"> 
  
  <link rel="stylesheet" href="login-form.css?v=<?php echo time(); ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <title>Login page</title>
</head>
<body>


<div class="wrapper">

    <div class="image-container">
        <img src="photos/login-form.jpg" alt="">
    </div>

    <div class="login-form">

         <form method="post">

          <div class="logo">
               <span class="first-letter">D</span> <span>omestic</span> 
               <span class="first-letter">H</span> <span>elper</span> 
          </div>

         <div class="form-input-wrapper">

              <input type="email" name="email" class="txtbox" placeholder="Enter your Email ID"><br/><br/>
              <input type="password" name="password" class="txtbox" placeholder="Enter your Password"><br/><br/>

              <select name="userType" id="userType">
                      <option disabled selected>Select User Type</option>
                      <option value="employer">Employer</option>
                      <option value="domestic helper">Domestic Helper</option>
              </select>

    </div>

    <div class="wrapper-btn">
         <input type="submit" name="submit" class="btn" value="Login"> <br>
         <a href="signup.php" target="_self">Don't have an account? Click here to Sign Up!</a>
    </div> 

         </form>
    </div>

</div>



    <?php

    if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $userType=$_POST['userType'];

    if($userType=="employer"){

       $sql="SELECT * 
       FROM employer_t 
       WHERE email='$email' AND password='$password'";

       $result=mysqli_query($con,$sql);
       $row=mysqli_fetch_assoc($result);

       if(mysqli_num_rows($result)>0){

          session_start();
          $_SESSION['email'] =$email;
          $_SESSION['password'] =$password;
          $_SESSION['employer_id'] =$row['employer_id'];

          header('location:index.php');
        }

        else{
            echo '<script>

            swal({
                title: "Error!",
                text: "Your email or password is incorrect! Please try again.",
                icon: "error",
                button: "Cancel",
                dangerMode: true,
              });

             </script>';
        }


    }

    else if($userType=="domestic helper"){

            $sql="SELECT * 
            FROM domestic_helper 
            WHERE email='$email' AND password='$password'";

            $result=mysqli_query($con,$sql);
            $row=mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result)>0){

               session_start();
               $_SESSION['email'] =$email;
               $_SESSION['password'] =$password;
               $_SESSION['helper_id'] =$row['helper_id'];

               header('location:helper_profile.php');
            }

            else{

                echo '<script>

                swal({
                    title: "Error!",
                    text: "Your email or password is incorrect! Please try again.",
                    icon: "error",
                    button: "Cancel",
                    dangerMode: true,
                  });
    
                 </script>';
            }


    }

 
    }

    ?>

</body>
