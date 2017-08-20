<?php 



session_start();
$pic = $_SESSION['Profile_Pic'];
echo "<img src='../Functions/".$pic."' class='img-rectangle' alt='Cinque Terre' width='100%' height='300'>";
