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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

     <!--Animate CSS File-->
     <link rel="stylesheet" href="animate.css">

    <!--My custom css-->
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <body id="index">
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
      <span class="navbar-text  my-2 my-sm-0" style="font-family:arial; color:white;">
      <?php
      if(isset($_SESSION['loggedEmail'])){
        echo "<b class=\"pr-4\">Hello ".$_SESSION['loggedUName']."</b>";
        echo" <input type=\"button\" value=\"LogOut\" class=\"btn  my-sm-0 btn-light animated fadeIn delay-1s\" onclick=\"location.href='logOut.php';\">";
      }
       ?>
      </span>
    </nav>


    <main>
       <div class="container-fluid p-0">
         <div class="site-content">
           <div class="d-flex justify-content-center">
             <div class="d-flex flex-column">
               <h1 class="site-title animated bounceInDown ">Sri Lankan Best Hotel Lux</h1>
               <p class="site-desc animated bounceInDown">Every Event you want to celebrate you can chose lux with luxery features </p>

               <div class="d-flex flex-row">

  <?php

  if(isset($_SESSION['loggedEmail'])){

                 echo" <input type=\"button\" value=\"LogOut\" class=\"btn site-btn1 px-4 py-3 mr-4 pl-5 pr-5 btn-dark animated fadeIn delay-1s\" onclick=\"location.href='logOut.php';\">";

  }
  else{

                echo" <input type=\"button\" value=\"LogIn\" class=\"btn site-btn1 px-4 py-3 mr-4 pl-5 pr-5 btn-dark animated fadeIn delay-1s\" onclick=\"location.href='login.php';\">";
                echo "<input type=\"button\" value=\"Register Site\" class=\"btn site-btn2 px-4 py-3 mr-4 btn-light animated fadeIn delay-1s\" onclick=\"location.href='register.php';\">";
  }
  ?>


               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="section-1">
         <div class="container text-center">
           <h1 class="heading-1">Fantastic Views</h1>
           <h1 class="heading-2">For Different Type of Events</h1>
           <p class="para-1">Take a look at our service while you planing your Party </p>

           <div class="row justify-content-center text-center">
             <div class="col-md-4">
               <div class="card">
                 <img src="images/luxBrand.jpeg" alt="Image" class="card-img-top">
                 <div class="card-body">
                   <h4 class="card-title">Award Winning</h4>
                   <p class="card-text">We have won awords since we started business, beacuse of our service people have choose us as thire best hotel. We will give you the best what you are paying for.
                   It is proude to let you know that we won the best hotel aword at 2017/2016</p>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="card">
                 <img src="images/luxBrand2.jpeg" alt="Image2" class="card-img-top">
                 <div class="card-body">
                   <h4 class="card-title">luxury</h4>
                   <p class="card-text">You want a unique, upscale hotel experience next time you Party.
                    While you Searching online, you will find the words “luxury,” along with Hotel LUX. We give you Fast, Friendly First Contact.With LUX You will get Expensive features for affordable price.</p>
                 </div>
               </div>
             </div>
             <div class="col-md-4">
               <div class="card">
                 <img src="images/luxBrand3.jpeg" alt="Image3" class="card-img-top">
                 <div class="card-body">
                   <h4 class="card-title">Best Crew</h4>
                   <p class="card-text">
We’re a busy 5-star hotel here in Colombo and that means we also play host to many international flight crews that land on the island. Each and every guest’s needs are paramount to us here at the Grand and so we’ve set-up a private lounge for airline crews to rest, get online and sip hot beverages while they wait to depart.</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>

       <div class="section-2">
         <div class="container-fluid">
           <div class="d-flex justify-content-end">
             <div class="d-flex flex-column m-4">
               <h1 class="headline-1">We Have Best View Visit our Gallery</h1>
               <p class="para">We have every kind of views For patys, weddings, meetings, etc...</p>
               <input type="button" value="Gallery" class="btn btn-danger" id="services" onclick="location.href='gallery.php';">
             </div>
           </div>
         </div>
       </div>

      <div class="section-3" >
        <div class="container">


          <div class="row">
            <div class="col-md-4">
              <div class="d-flex flex-row">
                <i class="fas fa-concierge-bell fa-3x m-2"></i>
                <div class="d-flex flex-column">
                  <h3 class="m-2">24/7 Services</h3>
                  <p class="m-2"> <ul>
                    <li>Latest check-out by 12.00</li>
                      <li>Check-in possible after 15.00</li>
                        <li>Lunch from 11.00 to 15.00</li>
                         <li>Dinner from 17.30 to 22.30</li>
                         <li>Bar</li>
                         <li>Room service</li>
                         <li>Allergy friendly rooms</li>
                         <li>Rooms with connecting doors</li>
                         <li>Air conditioning in all roomsc</li>

                  </ul> </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex flex-row">
                <i class="fas fa-home fa-3x m-2"></i>
                <div class="d-flex flex-column">
                  <h3 class="m-2">Room facilities</h3>
                  <p class="m-2">
                      <ul>
            <li>Free Wi-Fi</li>
            <li>Aircondition</li>
                  <li>TV</li>
               <li>Blackout curtains</li>
                <li>Hairdryer</li>
                  <li>Coffee and tea facilities</li>
                    <li>Desk and chair</li>
                     <li>Safe box</li>
                   <li>Bathtub or shower</li>
                       <li>Telephone</ul></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex flex-row">
                <i class="fas fa-skiing-nordic fa-3x m-2"></i>
                <div class="d-flex flex-column">
                  <h3 class="m-2">Imperial Hotel – Fitness </h3>
                  <p class="m-2">
                    <ul><li>Treadmill</li>
                    <li>Rowing machine</li>
<li>Exercise bikes</li>
<li>Machines for your arm/back</li>
<li>Dumbbells</li>
<li>Flat-screen TV and music</li>
<li>Towels for your convenience</li>
<li>Water dispenser</li>
  </ul></p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-3 mb-3">
            <div class="col-md-4">
              <div class="d-flex flex-row">
                <i class="fas fa-heartbeat fa-3x m-2"></i>
                <div class="d-flex flex-column">
                  <h3 class="m-2">Living Area</h3>
                  <p class="m-2">The Ayurweda Villa 386 incorporates large living spaces reflecting the gracious style of colonial era.Also well designed Yoga and Meditation pavilion and siting and reading area in the lush, huge gardens within the 3.5acre area.  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex flex-row">
                <i class="fas fa-hamburger fa-3x m-2"></i>
                <div class="d-flex flex-column">
                  <h3 class="m-2">Delicious tastes</h3>
                  <p class="m-2">In the age old system of ayurvedic dining, food is a vital element that can affect an individual’s mental and physical state. Therefore all Ayurvedic meals here are hand-crafted for each individual based on the Doctor’s recommendations. Ayurvedic meals are known for being natural remedies for ailments as each meal is organically prepared with a blend of indigenous herbs and spices that not only heal but also offer great flavor.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="d-flex flex-row">
                <i class="fas fa-swimming-pool fa-3x m-2"></i>
                <div class="d-flex flex-column">
                  <h3 class="m-2">Swimming Pool & Garden</h3>
                  <p class="m-2">et on a lush 3.5 acre property overlooking the huge Garden, the peace and tranquillity is a Haven in the tropics. Under the deep blue of the endless skies, a Twenty five meters long pool and well-designed Yoga and meditation Pavilion invites you to lounge about peacefully and complete the picture.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section-4 bg-dark">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <img src="images/lux.png" alt="lux" width="590">
            </div>
            <div class="col-md-5">
              <h1 class="text-white">Searching For Job?</h1>
              <a href="about.php">Join Us</a>
              <p class="para-1">
                We will provide you decent work place with good salary. You will get
                best experience and best practice about how to working with professionals We have best accounting, IT, Networking, hotel chef,
                helpers, computer operators jobs and more......
              </p>
            </div>
          </div>
        </div>
      </div>
     </main>

     <footer style="background:rgba(255, 255, 255, 0.5); margin-top:30px;">
       <div class="section-5 text-center ">
         <h4 style="margin-top:10px; margin-bottom:20px">If you need any Help</h4>

         <div class="form-inline justify-content-center">
           <form action="contact_email.php" method="POST" name="contact-form">
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
