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
    <link rel="stylesheet" href="fontawesome.css">

    <!--Animate CSS File-->
    <link rel="stylesheet" href="animate.css">

    <!--My custom css-->
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <body id="contact_email">
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
          <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="reservation.php">Reservation</a>
          <a class="nav-item nav-link" href="gallery.php">Gallery</a>
          <a class="nav-item nav-link" href="prices.php">Pricing</a>
          <a class="nav-item nav-link act" href="#services">Services</a>
          <a class="nav-item nav-link" href="about.php">About Us</a>
        </div>
      </div>
    </nav>



    <div class="container border border-primary rounded shadow animated bounceInLeft">
        <h1>Hey User...........</h1> <br>
        <h4>Your email has been submited</h4> <br>
        <p>We will contact you soon.... <br> Thanks for using our service...</p> <br>
        <button type="button" class="btn btn-success pr-5 pl-5 mt-3 mb-3" onclick="location.href='index.php';">Ok</button>
        <button type="button" class="btn btn-info pr-5 pl-5 mt-3 mb-3 ml-4" onclick="location.href='about.php';">About Us</button>
    </div>


  <!--PHP-->
  <?php

  $serverName = "localhost";
  $userName = "root";
  $password = "";
  $dbName = "lux";

    $conEmail = $_POST['con_email'];
    $tDate = date("Y/m/d");

//Create connection
$con = mysqli_connect($serverName,$userName,$password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


//Select database
mysqli_select_db($con, $dbName);

//Sql query
$sql = "INSERT INTO contact_email(con_email,req_date) VALUES ('$conEmail','$tDate')";

//Check sql query success
if (mysqli_query($con, $sql)) {
  ////////////no action
} else {
  echo "<script type=\"text/javascript\">
              alert(\"DataBase Error: </br>  $con->error\");
              </script>";
}

//Close connection
mysqli_close($con);

//Send mail
//$msg = "Hello User Of Lux...\nPlease reply us your full name, contact number and your questions to us.";
//mail("$conEmail","Reply to Contact Request",$msg);

  ?>




    <footer style="background:rgba(255, 255, 255, 0.5); margin-top:400px;">
        <div class="section-5 text-center ">
          <h4 style="margin-top:10px; margin-bottom:20px">If you need any Help</h4>

          <div class="form-inline justify-content-center">
          <form action="contact_email.php" method="POST" name="contact-form">
           <input type="email" name="email" id="email" placeholder="Email" size="40" class="form-control px-4 py-2" required>
           <input type="submit" value="Contact Us" class="ml-3 btn btn-danger px-4 py-2"  >
           </form>
          </div>

          <div class="social" style="margin:1%; ">
            <div class="d-flex flex-row justify-content-center">
              <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f m-2"></i></a>
              <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter m-2"></i></a>
              <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram m-2"></i></a>
              <a href="https://youtube.com" target="_blank"><i class="fab fa-youtube m-2"></i><a/>
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
