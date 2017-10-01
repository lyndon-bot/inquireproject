<?php
session_start();
include "links.php";

?>

	</head>

	<body id="body">
			
		<nav class="navbar navbar-inverse" id="navbar" >

			<div class="container-fluid"> 
				<div class="navbar-header"> 

					<a href='/Pages/home.php'><img class="navimg" src="../Style/IMG/Button/i_ambutton2.png" width="60px" />
					<a class="navbar-brand" href="../Pages/home.php">
						 <p><span class="istamp">i</span>nquire<span class="istamp">a</span>bout<span class="istamp">m</span>e</p>
					</a></a>
					

				</div>

				<ul class="nav navbar-nav"> 
				

				</ul>

				<ul class="nav navbar-nav navbar-right"> 
				<li> <a> Welcome, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?> </a> </li>
				<li> <a href="../Pages/profile.php"> Profile </a> </li>
				<li> <a href="../Functions/logout.php"> Logout </a> </li>

				</ul>

			</div>

				

		 </nav> 	




