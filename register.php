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
<title>Register</title>
</head>


<body id="register">

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

     <span class="navbar-text  my-2 my-sm-0" style="font-family:arial; color:white;">
           <?php
           if(!isset($_SESSION['loggedEmail'])){
             echo "<button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"button\"  onclick=\"location.href='login.php';\">LOGIN</button>";
           }
            ?>
           </span>
  </nav>


  <div class="container">
    <form method="POST" name="form1" action="register_cus.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">* First Name</label>
      <input type="text" class="form-control" id="inputFName4" placeholder="First Name" name="fName" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">* Last Name</label>
      <input type="text" class="form-control" id="inputLName4" placeholder="Last Name" name="lName" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">* Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">* Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password" required>
    </div>
  </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputEmail4">* Birthday</label>
        <input type="date" class="form-control" id="inputbirthday4" name="birthDay" required>
      </div>
      <div class="form-group col-md-6">
        <label for="inputPassword4">* NIC No</label>
        <input type="text" class="form-control" id="inputnic4" name="nicNo" placeholder="NIC No" required>
      </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">* Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address1" placeholder="1234 Main St" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor (Optional)">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city" placeholder="(Optional)">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...(Optional)</option>
        <option>Western Province</option>
        <option>Central Province</option>
        <option>Southern Province</option>
        <option>Uva Province</option>
        <option>Sabaragamuwa Province</option>
        <option>North Western Province</option>
        <option>North Central Province</option>
        <option>Northern Province</option>
        <option>Eastern Province</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip" placeholder="(Optional)">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="agreeCheck" name="agree" value="Yes" required title="Please agreed to our teams and conditions">
      <label class="form-check-label" for="agreeCheck">
        Agreed to policy
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

  </div>

  <footer style="background:rgba(255, 255, 255, 0.6); margin-top:300px;">
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



<!-- PHP ------->


 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
