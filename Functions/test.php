<?php

//session_start();

/*
echo $_SESSION['U_id'];
echo $_SESSION['email'];
echo $_SESSION['fname'];
echo $_SESSION['lname'];

echo $_SESSION['Profile_Descrip'];
echo $_SESSION['Profile_Pic'];*/
$to = "arivy";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers) or  die("did not send");
?>

