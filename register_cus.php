<?php

$fName=$_POST['fName'];
$lName=$_POST['lName'];
$email=$_POST['email'];
$Upassword=$_POST['password'];
$birthDay=$_POST['birthDay'];
$nic=$_POST['nicNo'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$agree=$_POST['agree'];

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

$cus_no;
$getLastNo = "SELECT cus_no FROM customer ORDER BY cus_no DESC LIMIT 1";
$result = mysqli_query($con,$getLastNo);
while ($row = mysqli_fetch_array($result)) {
  $cus_no = $row[0];
}

$cus_no_numonly = preg_replace('/\D/', '', $cus_no);
$cus_no_numonly++;
$new_cus_no = "C$cus_no_numonly";

//Sql query
$sql = "INSERT INTO customer(cus_no,cus_fname,cus_lname,cus_email,cus_password,cus_bday,cus_nic,cus_address1,cus_address2,cus_city,cus_state,cus_zip)
VALUES ('$new_cus_no','$fName','$lName','$email','$Upassword','$birthDay','$nic','$address1','$address2','$city','$state','$zip')";

//Check sql query success
if (mysqli_query($con, $sql)) {
    echo "<script type=\"text/javascript\">
    alert(\"Register successful!\");
    window.location = 'index.php';
    </script>";
} else {
  echo "<script type=\"text/javascript\">
              alert(\"DataBase Error: </br>  $con->error\");
              </script>";
}

//Close connection
mysqli_close($con);

 ?>
