<?php 

$submit = $_POST['submit'];

function login ($email,$password){

	include "query.php";

	if(mysqli_num_rows(query("select * from users where Email = '$email' && Password = '$password'")) == 0){
		
		header("location: ../index.php");


	} else {
	

		session_start();

		$get = fetch("select * from users where Email = '$email' && Password = '$password'");

		$_SESSION['fname'] = $get['F_name']; 
		$_SESSION['lname'] = $get['L_name']; 
		$_SESSION['email'] = $get['Email']; 
		$_SESSION['perm'] =  $get['Perm']; 
                $_SESSION['U_id'] = $get['U_id']; 
                header("location: ../Pages/search.php");


	}


}

function register ($fname,$lname,$email,$password){

	include "query.php";

	if(mysqli_num_rows(query("select * from users where Email = '$email'")) == 0){
		$register = query("insert into users (F_name,L_name,Email,Password,Perm) values ('$fname','$lname','$email','$password','EU')");

		session_start();

		$_SESSION['fname'] = "$fname"; 
		$_SESSION['lname'] = "$lname"; 
		$_SESSION['email'] = "$email"; 
		$_SESSION['perm'] = "EU"; 

		header("location:../Pages/profileset.php");
	} else {
		session_start();
		$_SESSION['Errmsg'] = "Email already used";
		header("Location: ../Pages/signup.php");
	}
}

switch($submit) {

	case 1:
		login($_POST['username'],$_POST['password']);
		break;

	case 2:
		register($_POST['F_name'],$_POST['L_name'],$_POST['Email'],$_POST['Password']);
		break;
}

?>
