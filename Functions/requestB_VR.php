<?php

function blogRequest(){
    
include "query.php"; 
session_start();  

$NConnection = $_POST[''];
$user = $_SESSION['U_id'];

query("insert into blogrequest (NWID,Status,U_ID) values ('$NConnection','Pending','$user')");
 
}

function videoRequest(){
    
include "query.php";    
session_start();

$NConnection = $_POST[''];
$user = $_SESSION['U_id'];

query("insert into vidrefrequest (NWID,Status,U_ID) values ('$NConnection','Pending','$user')");
 
    
}


// links need to be provided to recipients 
function AcceptblogRequest(){
    
include "query.php"; 
session_start();  

$Connection = $_POST[''];
$user = $_SESSION['U_id'];
query("update blogrequest set Status = 'Uploaded' where U_id = $user and NU_id = $AcceptConnect");

query("");
    
}

function AcceptvideoRequest(){
    
include "query.php";    
session_start();

$Connection = $_POST[''];
$user = $_SESSION['U_id'];

query("");
    
    
    
}


