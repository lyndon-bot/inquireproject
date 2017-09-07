<?php
    include "../Functions/header.php";
    session_start();
?>
<div class=" container-fluid panel panel-inverse col-lg-4 col-md-4 col-sm-4" style="margin-top: 1%; height:300px; background: transparent;"> 
                    <?php	
                            $pic = $_SESSION['Profile_Pic'];
                              echo "<img src='../Functions/".$pic."' class='img-rectangle' alt='Cinque Terre' width='100%' height='300'>";
                           

                    ?> 
	   		</div>


<?php
    include "../Functions/footer.php";
?>