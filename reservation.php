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

    <!--Animate CSS File-->
    <link rel="stylesheet" href="animate.css">

    <!--My custom css-->
    <link rel="stylesheet" href="style.css">
    <title>Reservation</title>

    <script type="text/javascript">
      function validate()
      {
        if(!document.form1.Night_Party.checked && !document.form1.Mornign_Party.checked && !document.form1.Afternoon_Party.checked && !document.form1.Evening_Party.checked)
        {
          alert("Plase Select Time Of Reservation!");
            return;
        }
        if(document.form1.hall.selectedIndex == 0 && document.form1.howMany.value > 2000)
        {
          alert("Hall 01 can fit 2000 guests only!");
            return;
        }
        if(document.form1.hall.selectedIndex == 1 && document.form1.howMany.value > 800)
        {
          alert("Hall 02 can fit 800 guests only!");
            return;
        }
        if(document.form1.hall.selectedIndex == 2 && document.form1.howMany.value > 1500)
        {
          alert("Hall 03 can fit 1500 guests only!");
            return;
        }
        if(document.form1.hall.selectedIndex == 3 && document.form1.howMany.value > 2500)
        {
          alert("Hall 04 can fit 2500 guests only!");
            return;
        }
        if(document.form1.hall.selectedIndex == 4 && document.form1.howMany.value > 4000)
        {
          alert("Hall 05 can fit 4000 guests only!");
            return;
        }
        if(document.form1.hall.selectedIndex == 5 && document.form1.howMany.value > 3000)
        {
          alert("Hall 06 can fit 3000 guests only!");
            return;
        }
      }
    </script>
  </head>


  <body id="reservation">

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
        <a class="nav-item nav-link active" href="reservation.php">Reservation</a>
        <a class="nav-item nav-link" href="gallery.php">Gallery</a>
        <a class="nav-item nav-link" href="prices.php">Pricing</a>
        <a class="nav-item nav-link" href="index.php#services">Services</a>
        <a class="nav-item nav-link" href="about.php">About Us</a>
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
        <source src="Fountain at Entrance.mp4" type="video/mp4">
      </video>
    </div>


    <div class="container animated zoomIn">
      <h1 id="title">RESERVATION Form</h1>
      <div id="form-outer">
        <p id="description">Make your <b>RESERVATION</b></p>
        <form id="survey-form" method="POST" action="reservation_cus.php" name="form1">

          <div class="rowTab">
            <div class="labels">
              <label id="name-label" for="name">* Name: </label>
            </div>
            <div class="rightTab">
              <?php
              if(isset($_SESSION['loggedEmail']))
              {
                $FullName = $_SESSION['loggedUName'];
                echo "<input autofocus type=\"text\" name=\"name\" id=\"name\" class=\"input-field\" placeholder=\"Enter your name\" required value=\"$FullName\">";
              }
              else {
                  echo "<input autofocus type=\"text\" name=\"name\" id=\"name\" class=\"input-field\" placeholder=\"Enter your name\" required>";
              }
               ?>

            </div>
          </div>

          <div class="rowTab">
            <div class="labels">
              <label id="email-label" for="email">* Email: </label>
            </div>
            <div class="rightTab">
              <?php
              if(isset($_SESSION['loggedEmail']))
              {
                $LogEmail = $_SESSION['loggedEmail'];
                echo "<input type=\"email\" name=\"email\" id=\"email\" class=\"input-field\" required placeholder=\"Enter your Email\" value=\"$LogEmail\">";
              }
              else {
                  echo "<input type=\"email\" name=\"email\" id=\"email\" class=\"input-field\" required placeholder=\"Enter your Email\">";
              }
               ?>

            </div>
          </div>

          <div class="rowTab">
            <div class="labels">
              <label id="date-label" for="dateOfReseravation">* Date-Of-Reservation: </label>
            </div>
            <div class="rightTab">
              <input type="date" name="dateOfReseravation" id="date" class="input-field" required>
            </div>
          </div>

          <div class="rowTab">
            <div class="labels">
              <label for="hall">* What hall do you need?</label>
            </div>
            <div class="rightTab">
              <select name="hall" id="dropdown" class="dropdown" required>
                <!-- <option disabled vlaue selected>Select an option</option> -->
                <option value="Hall 01">Hall 01</option>
                <option value="Hall 02">Hall 02</option>
                <option value="Hall 03">Hall 03</option>
                <option value="Hall 04">Hall 04</option>
                <option value="Hall 05">Hall 05</option>
                <option value="Hall 06">Hall 06</option>
              </select>
              <div class="rightTab dropdownlink">
                <p><a href="prices.php" target="_blank">Find out halls prices and more...</a></p>
              </div>
            </div>
          </div>

          <div class="rowTab">
            <div class="labels">
              <label id="time-label" for="timeOfReseravation">* Time-Of-Reservation: </label>
            </div>
            <div class="rightTab">
              <ul id="timeOfReseravation" style="list-style: none;">
                <li class="checkbox"><label><input name="Night_Party" value="1" type="checkbox" class="userChoices">12.00AM-6.00AM (Night Party)</label></li>
                <li class="checkbox"><label><input name="Mornign_Party" value="1" type="checkbox" class="userChoices">6.00AM-12.00PM (Mornign Party)</label></li>
                <li class="checkbox"><label><input name="Afternoon_Party" value="1" type="checkbox" class="userChoices">12.00PM-6.00PM (Afternoon Party)</label></li>
                <li class="checkbox"><label><input name="Evening_Party" value="1" type="checkbox" class="userChoices">6.00PM-12.00AM (Evening Party)</label></li>
              </ul>
            </div>
          </div>


          <div class="rowTab">
            <div class="labels">
              <label id="howMany-label" for="age">* How Many Visiters: </label>
            </div>
            <div class="rightTab">
              <input type="number"required name="howMany" id="howMany" min="1" class="input-field" placeholder="How Many Visiters">
            </div>
          </div>


          <!-- <div class="rowTab">
            <div class="labels">
              <label for="userRatings">* How likely is that you would recommend our course to a friend?</label>
            </div>
            <div class="rightTab">
              <ul style="list-style: none;">
                <li class="radio"><label>Definitely<input name="radio-buttons" value="1"  type="radio" class="userChoices" ></label></li>
                <li class="radio"><label>Maybe<input name="radio-buttons" value="2"  type="radio" class="userChoices" ></label></li>
                <li class="radio"><label>Not sure<input name="radio-buttons" value="3"  type="radio" class="userChoices" ></label></li>
                <li class="radio"><label>Never<input name="radio-buttons" value="4"  type="radio" class="userChoices" ></label></li>
              </ul>
            </div> -->

            <div class="rowTab">
              <div class="labels">
                <label for="event"> What kind a event are you planing? (optional)</label>
              </div>
              <div class="rightTab">
                <select name="event" id="dropdown" class="dropdown" style="position:relative; bottom:10px;">
                  <option value="Birthday Party">Birthday Party</option>
                  <option value="Privte Party">Privte Party</option>
                  <option value="Business Meeting">Business Meeting</option>
                  <option value="Wedding">Wedding</option>
                  <option value="Anniversary Celebration">Anniversary Celebration</option>
                  <option value="Others" selected>Others</option>
                </select>
              </div>
            </div>

            <div class="rowTab">
              <div class="labels">
                <label for="extraServices">Select all additional services that you need (optional)<label>
              </div>
              <div class="rightTab">
                <ul id="extraServices" style="list-style: none;">
                  <li class="checkbox"><label><input name="liquor" value="true" type="checkbox" class="userChoices">liquor</label></li>
                  <li class="checkbox"><label><input name="DJ_Music" value="true" type="checkbox" class="userChoices">DJ/Music</label></li>
                  <li class="checkbox"><label><input name="Decorations" value="true" type="checkbox" class="userChoices">Decorations</label></li>
                  <li class="checkbox"><label><input name="Pro_Services" value="true" type="checkbox" class="userChoices">Pro Services</label></li>
                  <li class="checkbox"><label><input name="Photography" value="true" type="checkbox" class="userChoices">Photography</label></li>
                </ul>
              </div>
            </div>

              <div class="rowTab">
            <div class="labels">
              <label for="comments">Anything which we need to know about your reservation? (optional)</label>
            </div>
            <div class="rightTab">
            <textarea id="comments" class="input-field" style="height:80px;resize:none;" name="comment" placeholder="Enter your comment here..."></textarea>
          </div>
        </div>

        <input id="submit" type="submit" value="CHECK" onclick="validate()">
      </form>
      </div>
     </div>

     <footer style="background:rgba(255, 255, 255, 0.5); margin-top:30px;">
       <div class="section-5 text-center ">
         <h4 style="margin-top:10px; margin-bottom:20px">If you need any Help</h4>

         <div class="form-inline justify-content-center">
            <form action="contact_email.php" method="POST" name="contact-form" name="form2">
                <input type="email" name="con_email" id="email" placeholder="Email" size="40" class="form-control px-4 py-2" required>
                <input type="submit" value="Contact Us" class="ml-3 btn btn-danger px-4 py-2"  >
            </form>
         </div>

         <div class="social" style="margin:1%; ">
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
