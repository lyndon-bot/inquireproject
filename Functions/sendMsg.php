<?php
    include 'conn.php';
    include 'query.php';
    session_start();
    $subject = $_POST['subj'];
    $message = $_POST['msg'];
    $U_id2 = $_POST['btn'];
    $U_id1 = $_SESSION['U_id'];
    query("INSERT INTO inbox VALUES (NULL,'$U_id1','$U_id2', '$subject','$message')");
    header("Location: ../Pages/inbox.php");
?>