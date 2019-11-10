<?php
session_start();

  if(isset($_SESSION['loggedEmail'])){
    header("Location: index.php");
    die();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<link rel="stylesheet" href="bootstrap.css">

<!--Font awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--My custom css-->
<link rel="stylesheet" href="style.css">
<title>LOG IN</title>
</head>


<body id="login">


    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark fixed-top  ">

    <a class="navbar-brand" href="index.php">
        <img src="images/Hotel_Lux_brand_logo.png" width="100" height="35" class="d-inline-block align-top" alt="">
      Hotel Lux
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="reservation.php">Reservation</a>
        <a class="nav-item nav-link" href="gallery.php">Gallery</a>
        <a class="nav-item nav-link" href="prices.php">Pricing</a>
        <a class="nav-item nav-link" href="index.php#services">Services</a>
        <a class="nav-item nav-link" href="about.php" >About Us</a>
      </div>
    </div>
    </nav>


    <div class="login-form">
      <form action="confirmation.php" method="POST">
          <h2 class="text-center">Log in</h2>
          <div class="form-group">
              <input type="email" class="form-control" placeholder="Email" required="required" name="email">
          </div>
          <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" required="required" name="password">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
          <div class="clearfix">
              <!-- <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label> -->
              <!-- <a href="#" class="pull-right">Forgot Password?</a> -->
          </div>
      </form>
      <p class="text-center"><a href="register.php" style="color:white;">Create an Account</a></p>
  </div>





      <footer style="background:rgba(255, 255, 255, 0.6); margin-top:220px;">
        <div class="section-5 text-center ">
          <h4 style="margin-top:10px; margin-bottom:20px">If you need any Help</h4>

          <div class="form-inline justify-content-center">
              <form action="contact_email.php" method="POST" name="contact-form">
                  <input type="email" name="con_email" id="email" placeholder="Email" size="40" class="form-control px-4 py-2" required>
                  <input type="submit" value="Contact Us" class="ml-3 btn btn-danger px-4 py-2"  >
              </form>
          </div>

          <div class="social" style="margin:1%";>
            <div class="d-flex flex-row justify-content-center">
              <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f m-2"></i></a>
              <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter m-2"></i></a>
              <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram m-2"></i></a>
              <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube m-2"></i></a>
            </div>
         </div>
            <hr>
          <h5 style="color:black">Hotel Lux &copy; 2019</h5>
        </div>
      </footer>




     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>
