<?php
session_start();
include "../Functions/links.php";
include "../Functions/query.php";
$UID = $_SESSION['U_id'];
$user = fetch("SELECT * FROM users WHERE U_id = '$UID'");
$img_path = $user['Profile_Pic'];
$_SESSION['Job_Title'] = $user['Job_Title'];
$_SESSION['Company_N'] = $user['Company_N'];
$_SESSION['Company_E'] = $user['Company_E'];
$_SESSION['Profile_Descrip'] = $user['Profile_Descrip'];
?>

	<link rel='stylesheet prefetch' href='../Style/css/home.css'>
	<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:350px; background-color:#d01d3a; padding-left: 0px; padding-right: 0px;">

		<div id="content1" class="container panel panel-inverse col-lg-4 col-lg-offset-0 col-md-2 col-sm-2" style="margin-top: 1%; background:black; height:325px; margin-top: 0px;"> 

			    <nav class="navbar navbar-inverse" style="background-color:transparent; border-color:transparent; display: flex; justify-content: center;">

			        <ul class="nav navbar-nav">
			            
			                <li><a class="navbar-brand"><span class="material-icons">home</a></li>
			                <li><a href="test.php"><span class="material-icons">mail</span></a></li>
			                <li><a><span class="material-icons">assignment_ind</span></a></li>
			                <li><a href="profile.php"><span class="material-icons">person</span></a></li>
			                <li><a href="search.php"><span class="material-icons">person_add</span></a></li>
			       
			            
			        </ul>
			    </nav>
			    
			    <img style="height: 250px; margin-bottom: 12%; padding-bottom: 25px;" src="../Style/IMG/Logo/iamlogo2.png">

		</div>

		<div class="container-fluid col-lg-8 col-lg-offset-0 col-md-8 col-sm-8" style="background-color: transparent; border-color:#d01d3a; height:325px; color: white;">
			
			<div class=" container-fluid panel panel-inverse col-lg-4 col-md-4 col-sm-4" style="margin-top: 1%; height:300px; background: transparent;"> 
                    <?php	
                             //$pic = $_SESSION['Profile_Pic'];
                             // echo "<img src='../Style/IMG/Button/i_ambutton2.png".$pic."' class='img-rectangle' alt='Cinque Terre' width='100%' height='300'>";

                    ?> 
                    <img src="/Functions/<?php echo $img_path;?>" style="height: 300px; padding-top: 10%;">
	   		</div>

		   	<div class=" col-lg-8 col-md-8 col-sm-8" style="margin-top: 1%;text-align: left;">
				
			    <ul class="pull-right nav">
			        <li><button class=" btn btn-xs btn-primary" style="background-color:black; border-color: black; width: 150px; margin-bottom: 5px;">Send I.am card</button></li>
			        <li><form method="post" action="../Pages/resume/resume.php"><button class=" btn btn-xs btn-primary" style="background-color:grey; border-color: grey; width: 150px;">My Resume Portfolio</button></form></li>
			    </ul>
		    
		    <div class="pull-left">
		    	<div class='row' style=" margin-top: 12%; padding-top: 25px;">
		    	<h1>Name: <?php echo $user['F_name'] . " " . $user['L_name'];?></h1>
				<h1>Job Title: <?php echo $_SESSION['Job_Title']; ?></h1>
				<h4>Company Name: <?php echo $_SESSION['Company_N']; ?></h4>
				<h4>Company Email: <?php echo $_SESSION['Company_E']; ?></h4>

				<p>Job Description: <?php echo $_SESSION['Profile_Descrip']; ?></p>
				</div>
			</div>

			</div>



		</div>

	</div>

	<!-- middle elements -->
	<div>
  
		<h1 style="text-decoration: underline; ">Users I am connected with</h1>
		<?php $connections = fetch_all("SELECT * FROM u_network_index inner join users on u_network_index.NU_id = users.U_id AND (u_network_index.U_id = $UID AND u_network_index.Status = 'Connection')");
			foreach($connections as $connection){
				echo"<div class='col-md-2'>
    				<div class='thumbnail' style='width:100%; height: 300px'>
        				<img src='/Functions/".$connection['Profile_Pic']."' alt='Fjords' style='height: 70%' >
        				<div class='caption'>
        					<p>".$connection['F_name']." ". $connection['L_name']."<form action='../Pages/Public_Profile.php'><button value='".$connection['URL'] ."' name='user' class='btn btn-success'>View Profile</button></form></p><br>
        					
        				</div>
    				</div>
				</div>";
			}
		?>
	</div>
</div>