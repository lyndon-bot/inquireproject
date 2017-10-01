<?php
include "../Functions/innerheader.php";
include "../Functions/query.php";
session_start();
$UID =$_SESSION['U_id'];


$user = fetch("SELECT * FROM users WHERE U_id = '$UID'");
$img_path = $user['Profile_Pic'];
?>
<h1>User info</h1>
<h4><?php echo "Name: ".$_SESSION['fname']. " " . $_SESSION['lname']  ;?></h4>
<h4><?php echo "Email: ".$_SESSION['email'];?></h4>
<!--<img src="<?php echo "../Functions/".$img_path;?>">-->
<hr>
<label>Pending Request</label><br>
<?php 

if(mysqli_num_rows(query("SELECT * FROM u_network_index where NU_id = '$UID' AND Status = 'Pending' ")) > 0){
    $result = fetch_all("SELECT * FROM u_network_index INNER JOIN users ON u_network_index.U_id = users.U_id AND NU_id = '$UID' ");
    foreach($result as $request){
        echo $request['F_name']. " " . $request['L_name']. " <form method='post' action='../Functions/connectrequest.php'><button class='btn btn-success' value='".$request['U_id']."' name='accept'>Accept</button></form>";
    }
}
?>
<hr>
<table style="margin-left: auto; margin-right: auto; text-align: center; padding: 0 1% 0 1%;">
    <h3>Connection</h3>
    <tr><td> First Name </td><td> Last Name </td><td> Connection Status </td></tr>
    <?php if(mysqli_num_rows(query("SELECT * FROM u_network_index WHERE U_id='$UID' OR NU_id='$UID'")) > 0){
        $connections = fetch_all("SELECT * FROM u_network_index inner join users on u_network_index.NU_id = users.U_id AND u_network_index.U_id = $UID");
        foreach($connections as $connection){
            echo "<tr><td >".$connection['F_name']."</td><td>".$connection['L_name']."</td><td>".$connection['Status']."</td></tr>";
        }
    } else { 
        echo "<tr>You have no Connection</tr>";
    }
    
    ?>
</table>