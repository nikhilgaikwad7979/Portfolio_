<?php include'conn.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Portfolio</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>

<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&display=swap" rel="stylesheet"> -->

</head>

<body>
  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>


  

  

  <nav class="main-menu d-flex navbar navbar-expand-lg p-2 py-3 p-lg-4 py-lg-4 border-top border-bottom border-success" style="height:65px;">
    <div class="container-fluid">
      <div class="main-logo d-lg-none">
        <a href="index.html">
         
        </a>
      </div>

      <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header mt-3">
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body justify-content-between">
          <div class="main-logo">
            <a href="index.html">
              <img src="images/fl.png" alt="logo" class="img-fluid" style="height:65px;">
            </a>
          </div>

          <ul class="navbar-nav menu-list list-unstyled align-items-lg-center d-flex gap-md-4 mb-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link mx-2 active">Home</a>
            </li>
            <li class="nav-item">
              <a href="#about" class="nav-link mx-2 ">About</a>
            </li>
            <li class="nav-item">
              <a href="#Skill" class="nav-link mx-2 ">Skill</a>
            </li>
            

            <li class="nav-item">
              <a href="#contact" class="nav-link mx-2">contact</a>
            </li>
           
          </ul>
                </div>
      </div>

    </div>
   
  </nav>

  <section id="hero" style="background-image:url(images/billboard-bg.png); background-repeat: no-repeat; ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 pe-5 mt-5 mt-md-0">
          <h2 class="display-1 text-uppercase">I'am Full Stack Developer</h2>
          <div>
           

          </div>
        </div>
        <div class="col-md-6 mt-8">
          <img src="images/me1.png" alt="img" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <section id="features mt-4">
    <div class="feature-box container  ">
      <div class="row ">
        <div class="col-md-3 col-sm-6 mb-3 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">10+</h2>
              <h6 class="feature-info text-uppercase">Skill</h6>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">15+</h2>
              <h6 class="feature-info text-uppercase">Projects</h6>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">10+</h2>
              <h6 class="feature-info text-uppercase">languages & certificate</h6>

            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-5 mb-md-0">
          <div class="feature-item py-5  rounded-4">
            <div class="feature-detail text-center">
              <h2 class="feature-title">3 Year</h2>
              <h6 class="feature-info text-uppercase">Experiance</h6>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5 bg-light ">
    <div class="container ">
      <div class="row align-items-center mt-xl-5">
        <div class="offset-md-1 col-md-5">
          <img src="images/me.jpg" alt="img" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-5 mt-5 mt-md-0">
          <div class="mb-3">
            <p class="text-secondary "></p>
            <h2 class="display-6 fw-semibold">About Us</h2>
          </div>
          <p>At Nikhil Gaikwad’s development hub, we specialize in crafting innovative web and mobile applications. With expertise in PHP, MySQL, and Java, we create dynamic solutions tailored to your needs. Our portfolio spans interactive games and user-friendly apps. We prioritize quality, performance, and seamless functionality. Let’s turn your ideas into reality with cutting-edge technology and creative design.

</p>
          <div class="d-flex">
           
            <p class="ps-4">Communication skill </p>
          </div>
          <div class="d-flex">
            
            <p class="ps-4">More than 10+ programing  Languages Knows</p>
          </div>
          <div class="d-flex">
            
            <p class="ps-4">20+ Project Completed</p>
          </div>
          <!-- <a href="about.html" class="btn btn-primary px-5 py-3 mt-4">Learn more</a> -->


        </div>
      </div>
    </div>
  </section>

  <section id="Skill"><br><br>
    <div class="container  ">
      <div class="d-md-flex justify-content-between align-items-center ">
        <div>
          <h2 class="display-6 fw-semibold">Skills</h2>
        </div>
        <div class="mt-6 mt-md-0">
          <a href="skil.l.php" class="btn btn-primary px-5 py-3">View all Skills</a>
        </div>
      </div>
      <div class="row g-md-3 mt-2 ">
        <div class="col-md-4 ">
          <div class="primary rounded-3 p-4 my-3 ">
            <div class="d-flex align-items-center">
               
          
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1 ">HTML</p>
               
              </div>
            </div>
          </div>
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
             
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">CSS</p>
               
              </div>
            </div>
          </div>
          <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Boostrap5</p>
                
              </div>
            </div>
          </div>
            <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">GitHub</p>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gray rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">C</p>
              </div>
            </div>
          </div>
          <div class="secondary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">C++</p>
              </div>
            </div>
          </div>
          <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">JavaScript</p>
              
              </div>
            </div>
          </div>
 <div class="tertiary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Git</p>
              
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tertiary rounded-4 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-3">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Java</p>
              </div>
            </div>
          </div>
          <div class="primary rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">Android</p>
              </div>
            </div>
          </div>
          <div class="gray rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
            
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">PHP</p>
              </div>
            </div>
          </div>
           <div class="gray rounded-3 p-4 my-3">
            <div class="d-flex align-items-center">
              
              <div class="ps-4">
                <p class="category-paragraph fw-bold text-uppercase mb-1">SQL</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </section>
  <section id="#contact bg-secondary">
<div class="container mt-3x" id="contact">
  <h2 class="text-center ">Contact Us</h2>
  <div class="card bg-light content-center">
    <div class="card-body mt-8">
  <form  method="POST" action="index.php">
    <div class="row">
      <div class="col">
      <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="Enter Name" name="namee">
      </div>
      <div class="col">
      <label for="pswd2">Email:</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email">
      </div>
    </div>
    <br>
    <div class="row mt-8">
      <div class="col">
     
        <label for="pswd1">Password:</label>
        <input type="password" class="form-control" placeholder="Enter password" name="pswd">
      </div>
      <div class="col">
      <label for="number1">Number:</label>
        <input type="number" class="form-control" placeholder="Enter number" name="number">
    </div>
    <br>
    <div class="row mt-8">
      <div class="col ">      
        <button type="submit" class="btn btn-primary mt-4" name="submit"> Submit</button>
      </div>
     
  </form>
  <?php
  if(isset($_POST['submit'])){
    $Name = $_POST['namee'];
    $email = $_POST['email'];
    $password = $_POST['pswd'];
    $number = $_POST['number'];

    $query="INSERT INTO users VALUES('','$Name','$email','$password','$number')";
    $data=mysqli_query($conn, $query);
   
}
?>
</div>
</div>
</div>
</div>
 


</section>


<div id="footer-bottom">                                              
    <hr class="text-black-50">                                              
    <div class="container">                                              
      <div class="row py-3">                                              
        <div class="col-md-12 copyright text-center">                                              
          <p>© 2024 by nick</p>                                              
        </div>                                              
        <div class="col-md-6 text-md-end">                                              
                                                       
        </div>                                              
      </div>                                              
    </div>                                              
  </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>

