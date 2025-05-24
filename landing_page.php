<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="landing-page-nav.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="landing-page.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="landing-page-footer.css?v=<?php echo time(); ?>">

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
                      <li class="li1"><a href="#home">Home</a></li>
                      <li class="li1"><a href="#about">About Us</a></li>
                      <li class="li1"><a href="#services">Our Services</a></li>
                      <li class="li1"><a href="signup.php" target="_self">Register</a></li>
                      <li class="li1"><a href="#contact">Contact Us</a></li>
                      
                   </ul>
    </nav>

    <div id="home" class="home">
          <div class="image-container">
               <img  class="image" src="photos/home.jpg" alt="">
          </div>
            <div class="logo">
                <span class="first-letter">D</span><span>omestic </span><span class="first-letter">H</span><span>elper</span>
                <p class="description1">Looking for the best Domestic Helpers?</p>
                <p class="description2">Easily connects helpers and employers</p>
                <p class="button-row"><a href="signup.php"><button class="first-btn">For Helpers</button></a><a href="signup.php"><button class="second-btn">For Employers</button></p></a>
            </div>
          </div>

    </div>

    <div id="about" class="about">
          <div class="image-container">
               <img  class="image" src="photos/about.jpg" alt="">
          </div>

            <div class="section">
                <p class="title">About Us</p>
                <p class="description1">
                 Domestic Helper is a platform dedicated to the betterment of the domestic workers and convinience of the employers. Founded in 2023, our online platform is designed to assist the employers as well as the helpers by enabling them to make informed decisions. 
                 Our working method is simple and straight; we connect helpers and employers seamlessly, providing both of them a fair recruitment experience.
                </p>
            </div>

    </div>

    <div class="about2">
          <div class="image-container">
               <img  class="image" src="photos/about2.jpg" alt="">
          </div>

            <div class="section">
                <p class="description1">
                Gone are the days when employers used to have a hard time finding a suitable
                household worker for their homes and families. 
                <p class="description2">
                <span><span class="first-letter">D</span>omestic</span>
                <span><span class="first-letter">H</span>elper</span>
                is committed to provide instant access to both the parties through well structured 
                profiles, screening and a streamlined hiring process.
                </p>
                </p>
            </div>

    </div>

    <div id="services" class="services">

    <div class="content">

        <div class="wrapper">
            <p class="title">Our Services</p>
        </div>
            <div class="section">

                <div class="card-container">
                    <div class="row">

                        <div class="card">
                               <img  class="image" src="photos/cooking.jpg" alt="">
                               <p class="card-description">Cooking</p>
                        </div>
                        
                        <div class="card">
                               <img  class="image" src="photos/cleaning.jpg" alt="">
                               <p class="card-description">Cleaning</p>
                        </div>

                        <div class="card">
                               <img  class="image" src="photos/baby.jpg" alt="">
                               <p class="card-description">Baby Sitting</p>
                        </div>

                    </div>

                    <div class="row">

                        <div class="card">
                               <img  class="image" src="photos/laundry.jpg" alt="">
                               <p class="card-description">Doing Laundry</p>
                        </div>
                        
                        <div class="card">
                               <img  class="image" src="photos/errands.jpg" alt="">
                               <p class="card-description">Running Errands</p>
                        </div>
                        
                        <div class="card">
                               <img  class="image" src="photos/pet.jpg" alt="">
                               <p class="card-description">Pet Sitting</p>
                        </div>

                    </div>
                    
                </div>

            </div>

    </div>        

    </div>

    <div id="contact" class="contact">
          <div class="image-container">
               <img  class="image" src="photos/contact.jpg" alt="">
          </div>

            <div class="section">
                <p class="title">Contact Us</p>
                <p class="description1">
               <span>Domestic Helper</span> is a platform compliant with the Code of Practice for Employment Policies. 
                We are building market solutions to freely connect
                domestic workers with more potential employers.
                </p>

                <p class="description2">
                   <i class="fa-solid fa-phone"></i>
                   818-920-6996
                </p>

                <p class="description2">
                   <i class="fa-solid fa-location-dot"></i>
                   875 North Michigan, Los Angeles California, USA
                </p>
            </div>

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

    
</body>
</html>