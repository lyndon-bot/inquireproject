<?php
    include "query.php";
    $IID = $_GET['I_id'];

   //Get the information you want, and turn it into an array called $data
    $data = fetch("SELECT * FROM inbox WHERE I_id = '$IID'");
   header('Content-Type: application/json');
   echo json_encode($data);

?>