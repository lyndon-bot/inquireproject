<form method="post">
    <input name='search' type="text" ><button name='btn'>Search</button>
</form>
<form method="post" action="inboxform.php">
<?php
    include '../Functions/conn.php';
    include '../Functions/query.php';
    if(isset($_POST['btn'])){
        $search = $_POST['search'];
        $users = fetch_all("SELECT * FROM users WHERE F_name LIKE '%".$search."%'");
        echo "<table>";
        foreach($users as $user) {
             echo "<form method='post' action='inboxform.php'><tr><td>".$user['F_name']."</td><td>".$user['Email']."</td><td><button name='btn' value='".$user['U_id']."'>Message User</button></td></form><form method='post' action='../Functions/connectrequest.php'><td><button name='btn' value='".$user['U_id']."'>Connect</button></td><form></tr>";
            } 
        echo "</table>";   
    }
?>
