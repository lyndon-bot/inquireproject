<?php
include "query.php";
$msgId = $_POST['btn'];
query("DELETE FROM inbox WHERE I_id = '$msgId'");
header("Location: ../Pages/test.php");
?>