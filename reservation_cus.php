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
<title>Reservation Confirmation</title>
</head>


<body id="reservation_cus">


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
    if(isset($_SESSION['loggedEmail'])){
      echo "<b class=\"pr-4\">Hello ".$_SESSION['loggedUName']."</b>";
      echo" <input type=\"button\" value=\"LogOut\" class=\"btn  my-sm-0 btn-light animated fadeIn delay-1s\" onclick=\"location.href='logOut.php';\">";
    }
     ?>
    </span>
    </nav>


<!--PHP Codes-->
<?php

$Night_Party = 0;
$Mornign_Party = 0;
$Afternoon_Party = 0;
$Evening_Party = 0;
$liquor = 'false';
$DJ_Music = 'false';
$Decorations = 'false';
$Pro_Services = 'false';
$Photography = 'false';

$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['dateOfReseravation'];
$hall=$_POST['hall'];

if (isset($_POST['Night_Party'])) {
    $Night_Party=$_POST['Night_Party'];
}
if (isset($_POST['Mornign_Party'])) {
    $Mornign_Party = $_POST['Mornign_Party'];
}
if (isset($_POST['Afternoon_Party'])) {
  $Afternoon_Party = $_POST['Afternoon_Party'];
}
if (isset($_POST['Evening_Party'])) {
  $Evening_Party = $_POST['Evening_Party'];
}



$howMany=$_POST['howMany'];
$event=$_POST['event'];

if (isset($_POST['liquor'])) {
  $liquor = $_POST['liquor'];
}
if (isset($_POST['DJ_Music'])) {
  $DJ_Music = $_POST['DJ_Music'];
}
if (isset($_POST['Decorations'])) {
  $Decorations =$_POST['Decorations'];
}
if (isset($_POST['Pro_Services'])) {
  $Pro_Services = $_POST['Pro_Services'];
}
if (isset($_POST['Photography'])) {
  $Photography = $_POST['Photography'];
}

if (isset($_POST['comment'])) {
  $comment=$_POST['comment'];
}


$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "lux";


//Create connection
$con = mysqli_connect($serverName,$userName,$password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


//Select database
mysqli_select_db($con, $dbName);

//Check avalibility
$availability = true;
$sql4 = "SELECT * FROM time_of_reservation WHERE res_date = '$date' AND res_hall = '$hall'";
$result4 = mysqli_query($con,$sql4);
echo "<div style=\"position:relative; top:200px; left:200px; padding-bottom:350px; \">";
while($row4 = mysqli_fetch_assoc($result4))
{
    $night = $row4['Night_Party'];
    $morning = $row4['Mornign_Party'];
    $afternoon = $row4['Afternoon_Party'];
    $evening = $row4['Evening_Party'];


    if($Night_Party==1 && $night == 1)
    {echo "<b>12AM - 6AM This time have been already reserved on $date </b><br/><br/>";
      $availability = false;
    }

    if($Mornign_Party == 1 && $morning == 1)
    {echo "<b>6AM - 12PM This time have been already reserved on $date </b><br/><br/>";
      $availability = false;
    }

    if($Afternoon_Party == 1 && $afternoon == 1)
    {echo "<b>12PM - 6PM This time have been already reserved on $date </b><br/><br/>";
      $availability = false;
    }

    if($Evening_Party == 1 && $evening == 1)
    {echo "<b>6PM - 12AM This time have been already reserved on $date </b><br/><br/>";
      $availability = false;
    }


}

//If $availability equals true data go to database
if($availability){

  //Calculation

    ///Hall price and food prices
  $totalBill = 0; $hallPrice = 0; $foodPrice = 0; $DecorationsPrice = 0; $liquorPrice = 0; $DJ_MusicPrice = 0; $Pro_ServicesPrice = 0; $PhotographyPrice = 0; $additionalServicesPrice = 0;
  if($hall == "Hall 01")
  {
      if($Night_Party == 1)
      {
        $foodPrice += $howMany * 1000;
      }
      if($Mornign_Party == 1)
      {
        $foodPrice += $howMany * 1500;
      }
      if($Afternoon_Party == 1)
      {
        $foodPrice += $howMany * 2000;
      }
      if($Evening_Party == 1)
      {
        $foodPrice += $howMany * 1800;
      }
      $hallPrice = 10000;
  }
  elseif ($hall == "Hall 02") {
    if($Night_Party == 1)
    {
      $foodPrice += $howMany * 1500;
    }
    if($Mornign_Party == 1)
    {
      $foodPrice += $howMany * 2000;
    }
    if($Afternoon_Party == 1)
    {
      $foodPrice += $howMany * 2500;
    }
    if($Evening_Party == 1)
    {
      $foodPrice += $howMany * 2000;
    }
    $hallPrice = 14000;
  }
  elseif ($hall == "Hall 03") {
    if($Night_Party == 1)
    {
      $foodPrice += $howMany * 2000;
    }
    if($Mornign_Party == 1)
    {
      $foodPrice += $howMany * 2500;
    }
    if($Afternoon_Party == 1)
    {
      $foodPrice += $howMany * 2700;
    }
    if($Evening_Party == 1)
    {
      $foodPrice += $howMany * 3000;
    }
    $hallPrice = 18000;
  }
  elseif ($hall == "Hall 04") {
    if($Night_Party == 1)
    {
      $foodPrice += $howMany * 2300;
    }
    if($Mornign_Party == 1)
    {
      $foodPrice += $howMany * 2600;
    }
    if($Afternoon_Party == 1)
    {
      $foodPrice += $howMany * 3000;
    }
    if($Evening_Party == 1)
    {
      $foodPrice += $howMany * 2800;
    }
    $hallPrice = 20000;
  }
  elseif ($hall == "Hall 05") {
    if($Night_Party == 1)
    {
      $foodPrice += $howMany * 2500;
    }
    if($Mornign_Party == 1)
    {
      $foodPrice += $howMany * 2800;
    }
    if($Afternoon_Party == 1)
    {
      $foodPrice += $howMany * 3200;
    }
    if($Evening_Party == 1)
    {
      $foodPrice += $howMany * 3000;
    }
    $hallPrice = 25000;
  }
  elseif ($hall == "Hall 06") {
    if($Night_Party == 1)
    {
      $foodPrice += $howMany * 2800;
    }
    if($Mornign_Party == 1)
    {
      $foodPrice += $howMany * 3000;
    }
    if($Afternoon_Party == 1)
    {
      $foodPrice += $howMany * 3500;
    }
    if($Evening_Party == 1)
    {
      $foodPrice += $howMany * 3200;
    }
    $hallPrice = 30000;
  }

  ////////////Additional Services////Decaration Prices
  if($Decorations == true)
  {
    if($event == "Birthday Party")
    {
      $DecorationsPrice = 5000;
    }
    else if($event == "Privte Party")
    {
      $DecorationsPrice = 4000;
    }
    else if($event == "Business Meeting")
    {
      $DecorationsPrice = 3000;
    }
    else if($event == "Wedding")
    {
      $DecorationsPrice = 8000;
    }
    else if($event == "Anniversary Celebration")
    {
      $DecorationsPrice = 6000;
    }
    else if($event == "Others")
    {
      $DecorationsPrice = 2000;
    }
  }

  ///////Additional Services///////////////
  if($liquor == true)
  {
    $liquorPrice = 5000;
  }
  if($DJ_Music == true)
  {
    $DJ_MusicPrice = 6000;
  }
  if($Pro_Services == true)
  {
    $Pro_ServicesPrice = 10000;
  }
  if($Photography == true)
  {
    $PhotographyPrice = 8000;
  }

  ///If user select multiple times
  $timeTot = $Night_Party + $Mornign_Party + $Afternoon_Party + $Evening_Party;
  if($timeTot == 2)
  {
    $hallPrice = $hallPrice * 2;
    $liquorPrice = $liquorPrice * 2;
    $DJ_MusicPrice = $DJ_MusicPrice * 2;
    $Pro_ServicesPrice = $Pro_ServicesPrice * 2;
    $PhotographyPrice = $PhotographyPrice * 2;
  }
  else if($timeTot == 3)
  {
    $hallPrice = $hallPrice * 3;
    $liquorPrice = $liquorPrice * 3;
    $DJ_MusicPrice = $DJ_MusicPrice * 3;
    $Pro_ServicesPrice = $Pro_ServicesPrice * 3;
    $PhotographyPrice = $PhotographyPrice * 3;
  }
  else if($timeTot == 4)
  {
    $hallPrice = $hallPrice * 4;
    $liquorPrice = $liquorPrice * 4;
    $DJ_MusicPrice = $DJ_MusicPrice * 4;
    $Pro_ServicesPrice = $Pro_ServicesPrice * 4;
    $PhotographyPrice = $PhotographyPrice * 4;
  }

  $totalBill = $hallPrice + $foodPrice + $DecorationsPrice + $liquorPrice + $DJ_MusicPrice + $Pro_ServicesPrice + $PhotographyPrice;
  $additionalServicesPrice = $DecorationsPrice + $liquorPrice + $DJ_MusicPrice + $Pro_ServicesPrice + $PhotographyPrice;



  //Get last reservation no
  $res_no;
  $getLastNo = "SELECT res_no FROM reservation ORDER BY res_no DESC LIMIT 1";
  $result = mysqli_query($con,$getLastNo);
  while ($row = mysqli_fetch_array($result)) {
    $res_no = $row[0];
  }
  // Increment last reservation no by one
  $res_no_numonly = preg_replace('/\D/', '', $res_no);
  $res_no_numonly++;
  $new_res_no = "R$res_no_numonly";

  //Sql query
  $sql = "INSERT INTO reservation(res_no, res_name, res_email, res_date, res_hall,
   res_how_many, res_type, res_tot, res_comments) VALUES
  ('$new_res_no', '$name', '$email', '$date', '$hall', '$howMany', '$event', '$totalBill', '$comment')";

  $sql2 = "INSERT INTO time_of_reservation
  (res_no, res_date, res_hall, Night_Party, Mornign_Party, Afternoon_Party, Evening_Party) VALUES
   ('$new_res_no', '$date', '$hall', $Night_Party, $Mornign_Party, $Afternoon_Party, $Evening_Party)";

  $sql3 = "INSERT INTO additional_services
  (res_no, res_date, liquor, DJ_Music, Decorations, Pro_Services, Photography, addi_tot) VALUES
   ('$new_res_no', '$date', $liquor, $DJ_Music, $Decorations, $Pro_Services, $Photography, '$additionalServicesPrice')";

    //Check sql query success
    if (/*mysqli_query($con, $sql) && mysqli_query($con, $sql2) && mysqli_query($con, $sql3)*/true)
    {
        echo "<h1>Congrats! Reservation successfull</h1>";
        echo "<br/>Total Price: Rs.$totalBill<br/>Hall price: Rs.$hallPrice <br/>Food Price: Rs.$foodPrice<br/>Additional Services Price: Rs.$additionalServicesPrice <br/>";
        echo "<br/><h4>Your Reservation Details will be sent Your Email, If you have Any question Feel Free to Contact Us</h4>";
        echo "<br/><br/><h5>Thanks For Using Our Service. <br/><br/> LUX Hotels, Sri Lanka</h5><br/><br/>";
        echo"<img src=\"images/lux.png\" alt=\"Lux Brand\" width=\"600\" height=\"400\">";

        //Sending Email
        $msg ="Name: $name \n
              Reservation Date: $date \n
              Reservation Hall: $hall \n
              Reservation Type: $event \n
              Additional Service Price: $additionalServicesPrice \n
              Total Bill: $totalBill";


              require 'phpmailer/src/Exception.php';
              require 'phpmailer/src/PHPMailer.php';
              require 'phpmailer/src/SMTP.php';

              $gmail = new PHPMailer(true);
              $gmail->isSMTP();
              $gmail->SMTPAuth = true;
              $gmail->SMTPSecure = 'ssl';
              $gmail->host = 'smtp.gmail.com';
              $gmail->port = '456';
              $gmail->isHTML();
              $gmail->GUsername = 'hotelluxbill@gmail.com';
              $gmail->GPassword = 'lux@12345';
              $gmail->SetFrom('hotelluxbill@gmail.com');
              $gmail->Subject = "Reservation Details";
              $gmail->Body = $msg;
              $gmail->addAddress($email);

              $gmail->Send();
    }
    else
    {
      echo "<script type=\"text/javascript\">
                  alert(\"DataBase Error: </br>  $con->error\");
                  </script>";
    }

}
else{ //Messege will be displaed try again
  echo "<br/><span class =\"animated fadeIn delay-1s\"><b><i>Please try another Time and Date!</i></b></span><br/><br/>";
  echo "<br/><input type=\"button\" value=\"Previous Page\" class=\"btn px-4 py-2 mr-4 btn-primary animated fadeIn delay-2s\"  onclick=\"location.href='reservation.php';\">";
  echo "<h1 style=\"padding-bottom:200px;\"></h1>";
}
  echo "</div>";
//Close connection
mysqli_close($con);


 ?>



   <footer style="background:rgba(255, 255, 255, 0.6); margin-top:50px;">
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
