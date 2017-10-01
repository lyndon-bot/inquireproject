<?php
    include "../Functions/innerheader.php";

    if(!isset($_GET['user'])){
        echo "user does not exist";
    }
    
    $userurl = $_GET['user'];

    class user {
            
            public $user;
            public $fname;
            public $lname;
            public $email;
            public $jobT;
            public $companyE;
            public $companyN;
            public $profilePic;
            public $profileDescrip;
            public $refrenceVid;
            public $bioVid;
            
            public function getuser($userurl){
                
                include "../Functions/query.php";
                $getuser = fetch("select * from users where URL = '$userurl'");
                
                $this->user = $getuser['U_id'];
                $this->fname = $getuser['F_name'];
                $this->lname = $getuser['L_name'];
                $this->email = $getuser['Email'];
                $this->jobT = $getuser['Job_Title'];
                $this->companyE = $getuser['Company_E'];
                $this->companyN = $getuser['Company_N'];
                $this->profilePic = $getuser['Profile_Pic'];
                $this->profileDescrip = $getuser['Profile_Descrip'];
                $this->refrenceVid = $getuser['Refrence_Vid'];
                $this->bioVid = $getuser['Bio_Vid'];
                $this->URL = $getuser['URL'];
                
            }
    
        }
    
    $user = new user();
    
    $user->getuser($userurl);
    
    //echo $user->URL;

    
?>

<div class="panel panel-default" style="margin-left:auto; margin-right:auto; width:50%; height: 350px;">
        <div class="col-lg-4" style="height:300px; vertical-align: middle;"> 
            <img src="../Functions/<?php echo $user->profilePic; ?>" class="img-rounded" alt="Cinque Terre" width="300" height="300">
        
        
        </div>
        
        <div class="col-lg-6"> 
           <ul class="pull-right nav">
			       <!-- <li><button class=" btn btn-xs btn-primary" style="background-color:black; border-color: black; width: 150px; margin-bottom: 5px;">Send I.am card</button></li>
			        <li><button class=" btn btn-xs btn-primary" style="background-color:grey; border-color: grey; width: 150px;">My Resume Portfolio</button></li> -->
			    </ul>
		    
		    <div class="pull-left">
				<h1><?php echo $user->jobT; ?></h1>
				<h4><?php echo $user->companyE; ?></h4>
				<h4><?php echo $user->companyN; ?></h4>

				<p><?php echo $user->profileDescrip; ?></p>
			</div>
        
        </div>
    
</div>

<div class="row" style="margin-left:auto; margin-right:auto; width:50%; height:600px;"> 

<div class="col-lg-6 panel panel-default" style="height: 300px;">
  
     <video style="height:100%; width:100%;" controls>
		<source src="../Functions/<?php echo $user->bioVid; ?>" type="video/mp4">
     </video>
 
</div>

<!-- if user video does not exist no not display -->

<div class="col-lg-6 panel panel-default" style="height: 300px;">
    
    <!-- // if user video does exist -->
    <video style="height:100%; width:100%;" controls>
    		<source src="../Functions/<?php echo $user->refrenceVid; ?>" type="video/mp4">
     </video>
    
</div>


</div>

<?php
    include "../Functions/footer.php";
?>