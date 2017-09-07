
<?php

include "../Functions/links.php";

?>

	<body style="background-image: url('../Style/IMG/Logo/dreamstime_l_29655057 - Copy.jpg'); background-repeat: none; background-opacity: 50%; background-color:rgba(0, 0, 0, 0.5);">

		<div class="container-fluid">

			
			<form class=" container-fluid jumbotron panel panel-inverse col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-lg-6 col-lg-offset-3" action="../Functions/logreg.php" method="post" name="form1" style="margin-top: 5%; background: transparent;"> 

			<img style="height: 200px;" src="../Style/IMG/Button/i_ambutton2.png">

			<h2 style=" margin-bottom: 10px; color:#8a8d8f;" class="jumbotron-header"> Signup </h2>

				
				<input style="width:260px" class=" form-group form-control pull-left" placeholder="First Name " name="F_name" required/>
				<input style="width:260px" class=" form-group form-control pull-right" placeholder="Last Name " name="L_name" required/>
				<input  class=" form-group form-control" type="email" placeholder=" Email " name="Email" required/>
				<input style="width:260px" oninput=" CheckPassSame()" id="Form1_Pass" class=" form-group form-control pull-left" type="password" placeholder="password" value="<?php //echo $password;?>" name="Password" required/>
				<input  style="width:260px" oninput=" CheckPassSame()" id="Form1_Pass2" class=" form-group form-control pull-right" type="password" placeholder="Confirm Password " name="CPassword" required/>
				<button  style=" background-color:#d01d3a; border-color:#d01d3a;" class="form-control from-group btn btn-success" name="submit" value="2"> Submit</button>
			</form>
			<?php if(isset($_SESSION['Errmsg'])){ echo "<script>alert('".$_SESSION['Errmsg']."')</script>";} 
include "../Functions/footer.php";
?>