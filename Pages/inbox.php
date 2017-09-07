<?php 
    session_start(); 
    include "../Functions/query.php";
?>
<h1>Sent Messages</h1>
<table>
    <tr><td>To</td><td>Subject</td><td>Message</td></tr>
<?php
    
    $User = $_SESSION['U_id'];
    if(mysqli_num_rows(query("SELECT * FROM inbox WHERE U_id1='$User'")) > 0){
        $messages = fetch_all("SELECT * FROM inbox INNER JOIN users ON inbox.U_id2 = users.U_id AND inbox.U_id1 = $User");
        foreach($messages as $message){
            echo "<tr><td>".$message['F_name'] ." ". $message['L_name']."</td><td>".$message['Subj']."</td><td>".$message['msg']."</td></tr>";
        } 
    }
?>
</table>


<?php
    if(mysqli_num_rows(query("SELECT * FROM inbox WHERE U_id2='$User'")) > 0){
        echo "<h1>Received Messages</h1><table><tr><td>From</td><td>Subject</td><td>Message</td></tr>";
        $messages = fetch_all("SELECT * FROM inbox INNER JOIN users ON inbox.U_id1 = users.U_id AND inbox.U_id2 = $User");
        foreach($messages as $message){
            echo "<tr><td>".$message['F_name'] ." ". $message['L_name']."</td><td>".$message['Subj']."</td><td>".$message['msg']."</td></tr>";
        } 
    }
?>
</table>