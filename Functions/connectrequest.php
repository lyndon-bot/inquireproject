<?php

function requestconnect() {

include "query.php";

session_start();
$newConnect = $_POST['btn'];
$user = $_SESSION['U_id'];
query("insert into u_network_index (U_id,NU_id,Status) values ('$user','$newConnect','Pending')");
header("Location: ../Pages/home.php");  
    
}

function acceptconnect() {
 
include "query.php";

session_start();
$AcceptConnect = $_POST['accept'];
$user = $_SESSION['U_id'];
query("update u_network_index set Status = 'Connection' where U_id = $AcceptConnect and NU_id = $user");
header("Location: ../Pages/home.php");     
}

if(isset($_POST['btn'])){
    
    requestconnect();
}

if(isset($_POST['accept'])){
    
    acceptconnect();
}

