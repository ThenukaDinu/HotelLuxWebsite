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
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<link rel="stylesheet" href="bootstrap.css">

<!--Font awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!--Animate CSS File-->
<link rel="stylesheet" href="animate.css">

<!--My custom css-->
<link rel="stylesheet" href="style.css">
<title>Price</title>
</head>


<body id="prices">


    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark fixed-top">

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
        <a class="nav-item nav-link active" href="prices.php">Pricing</a>
        <a class="nav-item nav-link" href="index.php#services">Services</a>
        <a class="nav-item nav-link" href="about.php" >About Us</a>
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

<div class="background-wrap">

    <!-- The video -->
    <video autoplay muted loop id="video-bg-elem">
      <source src="Pexels Videos 1128104.mp4" type="video/mp4">
    </video>
  </div>


  <div class="container mt-5 mb-3">
    <div class="row">
      <div class="col-sm">
        <div class="card  animated flipInX" style="width: 20rem;">
        <img class="card-img-top" src="images/background20" alt="Card image cap">
        <div class="card-body">
          <h4>Hall 01</h4>
          <p class="card-text">Hall Price for 6 hours = Rs.10000 <br>Max Guest fit for hall = 2000<br><br>Food price one person <ul><li>Night = Rs.1000</li><li>Mornign = Rs.1500</li><li>Afternoon = Rs.2000</li><li>Evening = Rs.1800</li></ul></p>
        </div>
      </div>
      </div>
      <div class="col-sm">
        <div class="card  animated flipInX" style="width: 20rem;">
        <img class="card-img-top" src="images/gallery/gallery4.jpeg" alt="Card image cap">
        <div class="card-body">
          <h4>Hall 02</h4>
          <p class="card-text">Hall Price for 6 hours = Rs.14000 <br>Max Guest fit for hall = 800<br><br>Food price one person <ul><li>Night = Rs.1500</li><li>Mornign = Rs.2000</li><li>Afternoon = Rs.2500</li><li>Evening = Rs.2000</li></ul></p>
        </div>
      </div>
      </div>
      <div class="col-sm">
        <div class="card  animated flipInX" style="width: 20rem;">
        <img class="card-img-top" src="images/background14" alt="Card image cap">
        <div class="card-body">
          <h4>Hall 03</h4>
          <p class="card-text">Hall Price for 6 hours = Rs.18000 <br>Max Guest fit for hall = 1500<br><br>Food price one person <ul><li>Night = Rs.2000</li><li>Mornign = Rs.2500</li><li>Afternoon = Rs.2700</li><li>Evening = Rs.3000</li></ul></p>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <div class="card  animated flipInX" style="width: 20rem;">
        <img class="card-img-top" src="images/background5" alt="Card image cap">
        <div class="card-body">
          <h4>Hall 04</h4>
          <p class="card-text">Hall Price for 6 hours = Rs.20000 <br>Max Guest fit for hall = 2500<br><br>Food price one person <ul><li>Night = Rs.2300</li><li>Mornign = Rs.2600</li><li>Afternoon = Rs.3000</li><li>Evening = Rs.2800</li></ul></p>
        </div>
      </div>
      </div>
      <div class="col-sm">
        <div class="card  animated flipInX" style="width: 20rem;">
        <img class="card-img-top" src="images/background3" alt="Card image cap">
        <div class="card-body">
          <h4>Hall 05</h4>
          <p class="card-text">Hall Price for 6 hours = Rs.25000<br>Max Guest fit for hall = 4000<br><br>Food price one person <ul><li>Night = Rs.2500</li><li>Mornign = Rs.2800</li><li>Afternoon = Rs.3200</li><li>Evening = Rs.3000</li></ul></p>
        </div>
      </div>
      </div>
      <div class="col-sm">
        <div class="card  animated flipInX" style="width: 20rem;">
        <img class="card-img-top" src="images/background4" alt="Card image cap">
        <div class="card-body">
          <h4>Hall 06</h4>
          <p class="card-text">Hall Price for 6 hours = Rs.30000 <br>Max Guest fit for hall = 3000<br><br>Food price one person <ul><li>Night = Rs.2800</li><li>Mornign = Rs.3000</li><li>Afternoon = Rs.3500</li><li>Evening = Rs.3200</li></ul></p>
        </div>
      </div>
      </div>
    </div>
  </div>
  <br><br><br>

  <div class="card text-center" style="width:80%; margin:0 auto; margin-top:40px;">
    <div class="card-header">
      Additional Services
    </div>
    <div class="card-body">
      <h5 class="card-title">Liquor & Spirits</h5>
      <p class="card-text">Customer will get Rs.5000 worth liquor packge for starting, But this price can be changed acording how much worth liquor customer use in party. </p>
      <h5 class="card-title">DJ/Music</h5>
      <p class="card-text">For 6 hours DJ will cost Rs.6000, You will get best DJ and Best Music for your event.</p>
      <h5 class="card-title">Decorations</h5>
      <p class="card-text">birthDay Party = Rs.5000 <br> Private Party = Rs.4000 <br> business meeting = Rs.3000 <br> Wedding = Rs.8000 <br> Anniversary Celebration = Rs.6000 <br> Others = Rs.2000+(Depends)</p>
      <h5 class="card-title">Pro Services</h5>
      <p class="card-text">The Pro services will cost additional Rs.10000, You and guests will get VIP services.</p>
      <h5 class="card-title">Photography</h5>
      <p class="card-text">We have best Photograpers in sri lanka, This will cost Rs.8000 for 6hours</p>

    </div>
    <div class="card-footer text-muted">

    </div>
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
