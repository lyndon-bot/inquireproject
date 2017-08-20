<?php

include "../Functions/links.php";
include "../Functions/query.php";
?>
	<!-- top two elements -->
	<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:350px; background-color:#d01d3a; padding-left: 0px; padding-right: 0px;">

		<div id="content1" class="container panel panel-inverse col-lg-4 col-lg-offset-0 col-md-2 col-sm-2" style="margin-top: 1%; background:black; height:325px; margin-top: 0px;"> 

			    <nav class="navbar navbar-inverse" style="background-color:transparent; border-color:transparent; display: flex; justify-content: center;">

			        <ul class="nav navbar-nav">
			            
			                <li><a class="navbar-brand"><span class="material-icons">home</a></li>
			                <li><a><span class="material-icons">mail</span></a></li>
			                <li><a><span class="material-icons">assignment_ind</span></a></li>
			                <li><a><span class="material-icons">person</span></a></li>
			                <li><a><span class="material-icons">person_add</span></a></li>
			       
			            
			        </ul>
			    </nav>
			    
			    <img style="height: 250px; margin-bottom: 12%;" src="../Style/IMG/Logo/iamlogo2.png">

		</div>

		<div class="container-fluid col-lg-8 col-lg-offset-0 col-md-8 col-sm-8" style="background-color: transparent; border-color:#d01d3a; height:325px; color: white;">

			<div class=" container-fluid panel panel-inverse col-lg-4 col-md-4 col-sm-4" style="margin-top: 1%; height:300px; background: transparent;"> 
                    <?php	
                             $pic = $_SESSION['Profile_Pic'];
                              echo "<img src='../Functions/".$pic."' class='img-rectangle' alt='Cinque Terre' width='100%' height='300'>";

                    ?>
	   		</div>

		   	<div class=" col-lg-8 col-md-8 col-sm-8" style="margin-top: 1%;text-align: left;">

			    <ul class="pull-right nav">
			        <li><button class=" btn btn-xs btn-primary" style="background-color:black; border-color: black; width: 150px; margin-bottom: 5px;">Send I.am card</button></li>
			        <li><button class=" btn btn-xs btn-primary" style="background-color:grey; border-color: grey; width: 150px;">My Resume Portfolio</button></li>
			    </ul>
		    
		    <div class="pull-left">
				<h1><?php echo $_SESSION['Job_Title']; ?></h1>
				<h4><?php echo $_SESSION['Company_N']; ?></h4>
				<h4><?php echo $_SESSION['Company_E']; ?></h4>

				<p><?php echo $_SESSION['Profile_Descrip']; ?></p>
			</div>

			</div>



		</div>

	</div>

	<!-- middle elements -->
	<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:160px; background-color: black;"> 

			<div class="card-group col-lg-6" style="display: flex;">
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>

			</div>

			<div class="card-group col-lg-6" style="display: flex; justify-content: center;">
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			</div>
	</div>

	<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:160px; background-color: black; margin-top: 5px;"> 

			<div class="card-group" style="display: flex; justify-content: center;">
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			</div>
	</div>

	<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:160px; background-color: black; margin-top: 5px;"> 

		<div class=" container col-lg-12" style="display: flex; height:160px; margin: 10px;">

		 	<div class=" col-lg-4 panel panel-inverse" style="margin-right: 10px;"> 

		 	</div>

		 	<div class=" col-lg-4 panel panel-inverse" style="margin-right: 10px;">

		 	</div>

		 	<div class=" col-lg-4 panel panel-inverse">

		 	</div>
		</div>

	</div>

<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:160px; background-color: black; margin-top: 5px;"> 

	<div class=" container col-lg-12" style="display: flex; height:160px; margin: 10px;">

		 	<div class=" col-lg-4 panel panel-inverse" style="margin-right: 10px;"> 

		 	</div>

		 	<div class=" col-lg-4 panel panel-inverse" style="margin-right: 10px;">

		 	</div>

		 	<div class=" col-lg-4 panel panel-inverse">

		 	</div>
		</div>
</div>

<div class=" container col-lg-12 col-md-12 col-sm-12" style="height:160px; background-color: black; margin-top: 5px;"> 

			<div class="col-lg-2">

			</div>

			<div class="card-group col-lg-10" style="display: flex; justify-content:center;">
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top" src="..." alt="Card image cap">
			    <div class="card-block">
			      <h4 class="card-title">Card title</h4>
			      <p class="card-text"></p>
			      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
			    </div>
			  </div>

</div>