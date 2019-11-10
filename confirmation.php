<?php
session_start();

$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

//Create connection
$serverName = "localhost";
$userName = "root";
$dbpassword = "";
$dbName = "lux";
$con = mysqli_connect($serverName,$userName,$dbpassword);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


//Select database
mysqli_select_db($con, $dbName);

$emailState = false;
$passwordState = false;

$findEmail = "SELECT * FROM customer";
$result1 = mysqli_query($con,$findEmail);
while($row = mysqli_fetch_assoc($result1))
{
    $cusEmail = $row['cus_email'];
    if(strcmp($cusEmail,$userEmail) == 0)
    {
        $emailState = true;
    }
}

if($emailState == false)
{
    echo "<script type=\"text/javascript\">
    alert(\"Wrong Email Address!\");
    window.location = 'login.php';
    </script>";
    //header("Location: login.php");
    //die();
}
else
{
    $findPassword = "SELECT * FROM customer WHERE cus_email = '$userEmail'";
    $result = mysqli_query($con,$findPassword);
    while($row1 = mysqli_fetch_assoc($result))
    {
        $cusPassword = $row1['cus_password'];
        if(strcmp($cusPassword,$userPassword) == 0)
        {
           $passwordState = true;
        }
    }
    if($passwordState == true)
    {
        $cusFname;
        $cusLname;
        $findUName = "SELECT cus_fname,cus_lname FROM customer WHERE cus_email = '$userEmail'";
        $result20 = mysqli_query($con,$findUName);
        while($row11 = mysqli_fetch_assoc($result20))
        {
            $cusFname = $row11['cus_fname'];
            $cusLname =$row11['cus_lname'];
        }
        $_SESSION['loggedEmail'] = $userEmail;
        $_SESSION['loggedUName'] = "$cusFname $cusLname";

       echo "<script type=\"text/javascript\">
       alert(\"Login successful!\");
       window.location = 'index.php';
       </script>";
    }
    else
    {
        echo "<script type=\"text/javascript\">
         alert(\"Wrong Password!\");
         window.location = 'login.php';
         </script>";
    }
}

//Close connection
mysqli_close($con);
?>
