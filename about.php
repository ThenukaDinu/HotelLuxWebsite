<?php
session_start();
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bootstrap.css">

<!--Font awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Animate CSS File-->
<link rel="stylesheet" href="animate.css">

<!--My custom css-->
<link rel="stylesheet" href="style.css">
<title>About Us</title>
</head>


<body id="about">

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
      <a class="nav-item nav-link active" href="about.php" >About Us</a>
    </div>
  </div>
  <span class="navbar-text  my-2 my-sm-0" style="font-family:arial; color:white;">
  <?php
  if(isset($_SESSION['loggedEmail'])){
    echo "<b class=\"pr-4\">Hello ".$_SESSION['loggedUName']."</b>";
    echo" <input type=\"button\" value=\"LogOut\" class=\"btn  my-sm-0 btn-light animated fadeIn delay-1s\" onclick=\"location.href='logOut.php';\">";
  }
   ?>
  </span>
  </nav>



<div class="aboutus">
  <h1 class=" animated bounceInLeft">
  ABOUT US
  <br>
  <img src="https://image.ibb.co/nk616F/Layer_1_copy_21.png" width="47" height="11" aling="center">
  </h1>
  <article class="article">
    <p>

      <span class="animated bounceInLeft delay-1s">Ayubowan! (May you live long)<br><br>
  Welcome to LUX, the largest family of luxury hotels Sri Lanka has to offer!
  On this resplendent isle, we wish all our guests a long life. And even though some have called it paradise, we call it home. A home filled with stories untold and wonders enchanted, which I invite you to step into and discover at each of our luxury hotels and villas under the banner of LUX Hotels, Sri Lanka.<br><br> </span>

  <span class="animated bounceInLeft delay-2s">For nearly half a century, we have been honoured to share the magic of our tropical land with the world. With humble beginnings on my family’s favourite seaside town of Negombo. In unison, these values contributed to a spirit so powerful, that it continues to inspire generations of Sri Lankan hospitality – the luxurious charm which sets us apart, and is wholeheartedly extended to you with warm smiles across every part of our island.<br><br></span>

  <span class="animated bounceInLeft delay-3s">Welcome to our family – we look forward to meeting you.<br><br>

  Shiromal Cooraybr. <br><br><br>


  Chairman, LUX Hotels, Sri Lanka
</span>

    </p>
  </article>
  <div class="social_icons">
    <a href="https://facebook.com" target="_blank"><div class="square">
      <div class="icons">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </div></a>
    </div>
    <a href="https://youtube.com" target="_blank"><div class="square">
      <div class="icons">
        <i class="fa fa-youtube" aria-hidden="true"></i>
      </div></a>
    </div>
    <a href="https://twitter.com" target="_blank"><div class="square">
      <div class="icons">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </div></a>
    </div>
    <a href="https://instagram.com" target="_blank"><div class="square">
      <div class="icons">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </div></a>
    </div>
  </div>

</div>



   <footer style="background:rgba(255, 255, 255, 0.6); margin-top:80px;">
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
