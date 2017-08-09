<?php 

include "../Functions/links.php";
?>

<body id="body" style="width:95%; margin-left: auto; margin-right:auto;"> 


<div class=" container-fluid panel panel-inverse col-lg-4 col-lg-offset-0 col-md-2 col-sm-2" style="margin-top: 1%; background: transparent;">

		<form method="post" action="../Functions/upload.php" enctype="multipart/form-data">

				<h3 style="color:white;"> Profile Setup </h3>
                                
				<input class=" form-group form-control" placeholder="Job Title " name="Job_Title" required />
				<input class=" form-group form-control" placeholder="Company Name" name="Company_N"  required />
				<input class=" form-group form-control" placeholder="Company Email" name="Company_E"  required />

				<label class="btn btn-default" style="width:100%;">

				    Select Profile Picture <input type="file" name="Profile_Pic" id="Profile_Pic" placeholder="Profile Picture" hidden>
 
				</label>	

</div>



<div class=" container-fluid panel panel-inverse col-lg-3 col-md-3 col-sm-3" style="margin-top: 1%; height:300px; background: transparent;"> 

<img src="../Style/IMG/Logo/dreamstime_l_28065567.jpg" class="img-rounded" alt="Cinque Terre" width="300" height="300">

</div>

<div class="col-lg-5 col-md-7 col-sm-7" style="margin-top: 1%; background: transparent;">
        
    <h3 style="color:white;"> Profile Description </h3>
	<textarea style="height:245px; text-align: left;" class="form-control" name="Profile_Descrip">
		Type Here....
	</textarea>

</div>

<!--<div class="" style="margin-top: 5%; margin-left: 0%;  background-color:orange; width:500px; height:300px;"> 

<form method="post" action="../Functions/upload.php" enctype="multipart/form-data"> 

				<input class=" form-group form-control" type="file" placeholder="Profile Picture" name="file" id="file" required/>
				<img src="../Functions/<?php echo $_SESSION['ProfilePic'] ?>" class="img-rounded" alt="Cinque Terre" width="100%" height="236">
				<button class="form-control btn btn-primary" name="submit">upload</button>

</form>



</div>-->

	<div class="col-lg-12"> </div>

	<div class="row">
			<div class=" col-lg-4 col-md-3 col-lg-sm col-xs-3" style=" height:300px; background: transparent;"> 

				
                            <label class="btn btn-default" style="width:100%;">

				 Upload Bio Video <input type="file" name="Refrenece_Vid" id="Refrenece_Vid" placeholder="Video1" hidden>
 
                            </label>
                                                
                            <video style="height:300px; width:100%;" controls>
				<source src="../Media/Default/JaneDoe.mp4" type="video/mp4">
                            </video>


			</div>
            
                        

			<div class=" col-lg-4 col-md-3 col-sm-3" style=" background: transparent; height:300px;"> 

							<label class="btn btn-default" style="width:100%;">

				    			Upload Refrence Video <input type="file" name="Bio_Vid" id="Bio_Vid" hidden>
 
							</label>
                            <video style="height:300px; width:100%;" controls>
				<source src="../Media/Default/JaneDoeRef.mp4" type="video/mp4">
                            </video>
                                
			</div>

			<div class=" col-lg-4 col-md-3 col-sm-3" style=" background: transparent; height:300px;">

				<img style="height: 250px; margin-bottom: 12%;" src="../Style/IMG/Logo/iamlogo2.png">
				<button class="form-control btn btn-primary" style="background-color:#d01d3a; border-color:#d01d3a; margin-top: 16px;" >Create My Profile</button>
				</form>
			</div>
	</div>



</body>