<?php 

include "Functions/conn.php";

?>

<!DOCTYPE html>
<html lang="en">

	<head> 

		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   		<meta name="viewport" content="width=device-width, initial-scale=1">
   
    	<meta name="description" content="">
   		<meta name="author" content="">

   		<title>inquireaboutme</title>
   		<link rel="icon" href="Style/IMG/Button/i_ambutton2.png">

   		<link href="Style/css/Iamtemplate.css" rel="stylesheet"/>
   		<link href="Style/css/cover1.css" rel="stylesheet">
		<link href="Style/css/bootstrap.css" rel="stylesheet">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link href="Style/css/bootstrap.min.css" rel="stylesheet">
		<script src="Style/js/bootstrap.min.js"></script>

		



	</head>

	<body id="body">
			
		<nav class="navbar navbar-inverse" id="navbar" >

			<div class="container"> 
				<div class="navbar-header"> 

					<img class="navimg" src="Style/IMG/Button/i_ambutton2.png" width="60px" />
					<a class="navbar-brand" href="#">
						 <p><span class="istamp">i</span>nquire<span class="istamp">a</span>bout<span class="istamp">m</span>e</p>
					</a>
					

				</div>

				<ul class="nav navbar-nav"> 
				

				</ul>

				<ul class="nav navbar-nav navbar-right"> 
				<li> <a> Login </a> </li>
				<li> <a> Signup </a> </li>

				</ul>

			</div>

				

		 </nav> 

		<div class="container-fluid" id="maincontainer"> 
		
				<div class=" col-sm-7  col-md-7 col-lg-7 " id="topdiv">
					
			          <div align="center" class="embed-responsive embed-responsive-16by9">
						    <video style="height:290px;" autoplay muted class="embed-responsive-item">
						        <source src="Media/Default/inquire.mp4" type="video/mp4">
						    </video>
						    <p> <span class="istamp">i</span>nquire<span class="istamp"">a</span>bout<span class="istamp">m</span>e.com, is a free way to show your professional and personal references, with videos. On <span class="istamp"">i</span>nquire<span class="istamp"">a</span>bout<span class="istamp"">m</span>e.com, you can save videos of references, and direct your audience to your (<span class="istamp">i.</span> am) page to view. You can also invite professional or personal colleagues to write an attribute about you on your page. No longer will there be a need for you to list or contact your references. At <span class="istamp">i</span>nquire<span class="istamp"">a</span>bout<span class="istamp"">m</span>e.com, you better your chances at meeting your goals. </p>
					 </div>

				 </div>



				 <div class=" maincontainer container-fluid col-sm-5  col-md-5 col-lg-5 "> 
				 <img style="height: 200px;" src="Style/IMG/Logo/iamlogo2.png">
				 	<form method="post" action="Functions/logreg.php" >
				 		<h2 style=" margin-bottom: 10px; color:#8a8d8f;" class="jumbotron-header"> Login </h2>
				 		<input style=" margin-bottom: 5px;" class="form-control" placeholder="Email" name="username" required />
						<input style=" margin-bottom: 5px;" class="form-control" placeholder="Password" name="password" required />
						<button style=" margin-bottom: 15px;background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="1">Login</button>
					</form>

				 	<form action="Pages/Ghome.php" > 
				 	<button style=" margin-bottom: 15px;" class="btn btn-link form-control" name="submit" value="1">Forgot Password?</button>
				 	</form>

				 </div>

			 <div class=" col-sm-12  col-md-12 col-lg-12 " id="bottomcontainer">

					 <h2> Signup, It's Free!  </h2>

					 <div class=" divcolbot col-sm-2  col-md-2 col-lg-2 " data-toggle="tooltip" title="Individual looking to post videos of references for employment, or to highlight career"> 
						 <form style="width: 200px;" action="Pages/Signup.php">

							 <button style="width: 180px; margin-right: 0px; background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="1">Employee Prospect</button>

						</form>
						
					</div>

					<div class=" divcolbot col-sm-2  col-md-2 col-lg-2 "  data-toggle="tooltip" title="Individual looking to post videos of references for college or to highlight scholastic achievements"> 
					<form style="width: 200px;" action="Pages/Ghome.php">	

						 <button style="width: 180px; background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="2">Student Prospect</button>

					</form>
					</div>

					<div class=" divcolbot col-sm-2  col-md-2 col-lg-2 " data-toggle="tooltip" title="Business looking to post videos from staff, highlight company achievements or to view videos of potential employees" > 
					<form style="width: 200px;" action="Pages/Ghome.php">

						 <button style="width: 180px; background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="3">Employer</button>

					</form>
					</div>

					<div class=" divcolbot col-sm-2  col-md-2 col-lg-2 " data-toggle="tooltip" title="College looking to post videos from staff, highlight university achievements or to view videos of potential employees or students" > 
					<form style="width: 200px;" action="Pages/Ghome.php">

						 <button style="width: 180px; background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="4">University</button>

					</form>
					</div>

					<div class=" divcolbot col-sm-2  col-md-2 col-lg-2 " data-toggle="tooltip" title="Non-Profit, volunteer group, Greek organization,etc. looking to post videos from staff, highlight organization achievements, or to view videos of potential employees, members, or sponsors" > 

					<form style="width: 200px;" action="Pages/Ghome.php">

						 <button style="width: 180px; background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="5">Organization</button>

					</form>
					</div>

					<div class=" divcolbot col-sm-2  col-md-2 col-lg-2 " data-toggle="tooltip" title="Individual looking to post videos of athletic references, highlight athletic or scholastic achievements" > 
					<form style="width: 200px;"action="Pages/Ghome.php">

						 <button style="width: 180px; background-color:#d01d3a; border-color:#d01d3a;" class="btn btn-primary form-control" name="submit" value="6">Sports</button>

					</form>
					</div>



			</div>
			
		</div>
	
	<div>
			
	<?php

	include "Functions/footer.php"; 
	?>
	
	</div>
	</body>

		