<?php

function requestconnect() {

include "query.php";

session_start();
$newConnect = $_POST['btn'];
$user = $_SESSION['U_id'];
query("insert into u_network_index (U_id,NU_id,Status) values ('$user','$newConnect','Pending')");

    
}

function acceptconnect() {
 
include "query.php";

session_start();
$AcceptConnect = $_POST['Cuser'];
$user = $_SESSION['U_id'];
query("update u_network_index set Status = 'Connection' where U_id = $user and NU_id = $AcceptConnect");
    
    
}

if(isset($_POST['btn'])){
    
    requestconnect();
}

if(isset($_POST['accept'])){
    
    acceptconnect();
}

