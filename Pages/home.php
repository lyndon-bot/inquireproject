<?php session_start(); ?>
<link href="../Style/css/nav.css" rel="stylesheet"/>
<?php 

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
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<script>
    
        function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
    
</script>

<nav class="navbar navbar-inverse sidebar" id="navbar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#" style=" display:inline-block; vertical-align: middle; "> <span class="istamp">i</span>nquire<span class="istamp">a</span>bout<span class="istamp">m</span>e</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="profile.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li ><a href="test.php">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
					<ul class="dropdown-menu forAnimate" role="menu">
						<li><a href="search.php">Add a Connection </a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li><a href="#">Separated link</a></li>
						<li class="divider"></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
				<li ><a href="../Functions/logout.php">Logout<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-log-out"></span></a></li>
			</ul>
		</div>
	</div>
</nav>

<!-- background-color: #ecf0f1-->

    <div class="main" style="height:100%; background-color: black;">
        
        
        <div style="height:30%; background-color:#d01d3a;" class="row">  
        	
        	<div class="col-lg-3 col-md-5 col-sm-5 col-xs-6">
        		
        		<img src="/Functions/<?php echo $img_path;?>" class=" img-thumbnail img-rounded img-fluid" style="height:90%; margin-top:15px">
        		
        	</div>
        	
        	<div class="col-lg-7 col-md-6 col-sm-6 col-xs-5">
        		<div class='row' style="text-align:left; color:white;">
		    	<h2>Name: <?php echo $user['F_name'] . " " . $user['L_name'];?></h1>
				<h3>Job Title: <?php echo $_SESSION['Job_Title']; ?></h1>
				<h4>Company Name: <?php echo $_SESSION['Company_N']; ?></h4>
				<h4>Company Email: <?php echo $_SESSION['Company_E']; ?></h4>

				<p>Job Description: <?php echo $_SESSION['Profile_Descrip']; ?></p>
				</div>
        		
        	</div>
        	
        	<div class="col-lg-2 col-md-1 col-sm-1 col-xs-5">
        		
        		 <ul class="pull-right nav" style="margin-top:1%;">
			        <li><button class=" btn btn-xs btn-primary" style="background-color:black; border-color: black; width: 150px; margin-bottom: 5px;">Send I.am card</button></li>
			        <li><form method="post" action="../Pages/resume/resume.php"><button class=" btn btn-xs btn-primary" style="background-color:grey; border-color: grey; width: 150px;">My Resume Portfolio</button></form></li>
			    </ul>
			    
        	</div>
        	 
           
		</div>
	
	    	<div class="row" >
	            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 container" style="height:65%;background-color:;">
	                <div style="height:50%;background-color:;" class="row">
	                    
	                    	<h1 style="text-decoration: underline; ">Connections</h1>
							<?php $connections = fetch_all("SELECT * FROM u_network_index inner join users on u_network_index.NU_id = users.U_id AND (u_network_index.U_id = $UID AND u_network_index.Status = 'Connection')");
								foreach($connections as $connection){
									echo"<div class='col-md-2'>
					    				<div class='thumbnail' style='width:100%; height: 70%'>
					        				<img src='/Functions/".$connection['Profile_Pic']."' alt='Fjords' style='height: 70%' >
					        				<div class='caption'>
					        					<p>".$connection['F_name']." ". $connection['L_name']."<form action='../Pages/Public_Profile.php'><button value='".$connection['URL'] ."' name='user' class='btn btn-success'>View Profile</button></form></p><br>
					        					
					        				</div>
					    				</div>
									</div>";
								}
							?>
	                </div>
	                <div style="height:50%;" class="row">
	                    
	                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;background-color:;"></div>
	                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="height:100%;background-color:;"></div>
	                    
	                </div>
	            </div>
	            
	            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 container" style="height:65%;background-color:; color:white; overflow:hidden;">
	            	<div>
		                <h2>Activity Feed</h2>
		                    <div class="activity-feed">
		                      <div class="feed-item">
		                        <div class="date">Sep 25</div>
		                        <div class="text">Responded to need <a href="single-need.php">“Volunteer opportunity”</a></div>
		                      </div>
		                      <div class="feed-item">
		                        <div class="date">Sep 24</div>
		                        <div class="text">Added an interest “Volunteer Activities”</div>
		                      </div>
		                      <div class="feed-item">
		                        <div class="date">Sep 23</div>
		                        <div class="text">Joined the group <a href="single-group.php">“Boardsmanship Forum”</a></div>
		                      </div>
		                      <div class="feed-item">
		                        <div class="date">Sep 21</div>
		                        <div class="text">Responded to need <a href="single-need.php">“In-Kind Opportunity”</a></div>
		                      </div>
		                      <div class="feed-item">
		                        <div class="date">Sep 18</div>
		                        <div class="text">Created need <a href="single-need.php">“Volunteer Opportunity”</a></div>
		                      </div>
		                      <div class="feed-item">
		                        <div class="date">Sep 17</div>
		                        <div class="text">Attending the event <a href="single-event.php">“Some New Event”</a></div>
		                      </div>
		                    </div>
		              </div>
	                
            </div>
        </div>
        
        <div style=" height:5%; background-color:;" > 
        
        
        </div>
    </div>
	
	
    </div>
</div>