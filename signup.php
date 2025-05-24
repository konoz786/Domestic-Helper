
<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta name= "viewport" content="with=device-width, initial-scale=1.0"> 
  
  <link rel="stylesheet" href="signup.css?v=<?php echo time(); ?>">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>


  <title>Login page</title>
</head>
<body>

<div class="wrapper">

    <div class="image-container">
        <img src="photos/login-form.jpg" alt="">
    </div>

    <div class="login-form">

        

          <div class="logo">
               <span class="first-letter">D</span> <span>omestic</span> 
               <span class="first-letter">H</span> <span>elper</span> 
          </div>

         <div class="form-input-wrapper">

              <select name="userType" class="userType" id="userType">
                      <option disabled selected>Select User Type</option>
                      <option value="employer">Employer</option>
                      <option value="domestic helper">Domestic Helper</option>
              </select>

              <div class="employer-form">
              <form action="signup_config.php" method="post" enctype="multipart/form-data">

              <div class="row">
                   <input type="text" name="name" class="name" placeholder="Name">
                   <input type="text" name="age" class="age" placeholder="Age">
              </div>

              <div class="row">
                   <input type="text" name="contact" class="contact" placeholder="Contact">
                   <select name="gender" id="gender">
                      <option disabled selected>Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                   </select>
              </div>

              <div class="row">
                   <input type="text" name="address" class="address" placeholder="Address">
                   <label class="image-label" for="image"><i class="fa-solid fa-image"></i> Choose Image<input type="file" name="file" id="image"></label>
              </div>

              <div class="row">
              <input type="email" name="email" class="email" placeholder="Enter your Email ID">
              <input type="password" name="password" class="password" placeholder="Enter your Password">
              </div>

                <div class="wrapper-btn">
                         <input type="submit" name="submit-employer-form" class="btn" value="Sign Up"> <br>
                         <a href="login.php" target="_self">Already have an account? Click here to Login!</a>
                </div> 

                </form>

              </div>

              <div class="helper-form">
              <form action="signup_config.php" method="post" enctype="multipart/form-data">

                   <div class="row">
                        <input type="text" name="name" class="name" placeholder="Name">
                        <input type="text" name="age" class="age" placeholder="Age">
                        <input type="text" name="fee" class="fee" placeholder="Fee Per Service">
                   </div>

                   <div class="row">
                        <label class="image-label" for="helper_image"><i class="fa-solid fa-image"></i> Choose Image<input type="file" name="file" id="helper_image"></label>
                        <select name="gender" id="gender">
                                <option disabled selected>Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="row">
                         <input type="email" name="email" class="email" placeholder="Enter your Email ID">
                         <input type="password" name="password" class="password" placeholder="Enter your Password">
                    </div>

                    <div class="row">
                         <div class="wrapper-services">
                              <p class="services">Your Services - </p>

                              <div class="column-services">
                              <label class="service-label" for="cooking">Cooking<input class="checkbox" id="cooking" type="checkbox" name="services[]" value="cooking"></label>
                              <label class="service-label" for="cleaning">Cleaning<input class="checkbox" id="cleaning" type="checkbox" name="services[]" value="cleaning"></label>
                              <label class="service-label" for="baby sitting">Baby sitting<input class="checkbox" id="baby sitting" type="checkbox" name="services[]" value="baby sitting"></label>
                              <label class="service-label" for="house keeping">House Keeping<input class="checkbox" id="house keeping" type="checkbox" name="services[]" value="house keeping"></label>
                              <label class="service-label" for="running errands">Running Errands<input class="checkbox" id="running errands" type="checkbox" name="services[]" value="running errands"></label>
                              <label class="service-label" for="pet sitting">Pet Sitting<input class="checkbox" id="pet sitting" type="checkbox" name="services[]" value="pet sitting"></label>
                              </div>

                         </div>

                         <textarea name="details" class="details" cols="30" rows="7" placeholder="Write a few lines about yourself."></textarea>
                    </div>

                    <div class="wrapper-btn">
                         <input type="submit" name="submit-helper-form" class="btn" value="Sign Up"> <br>
                         <a href="login.php" target="_self">Already have an account? Click here to Login!</a>
                    </div> 

                    </form>

              </div>

         </div>

    </div>

</div>

    <script src="signup-form-display.js"></script>

</body>
