<?php
    include '../Functions/conn.php';
    include "../Functions/innerheader.php";
    include '../Functions/query.php';
    session_start();
    $UID = $_SESSION['U_id']
?>
<form method="post">
    <table style="margin-right: auto; margin-left: auto;"><tr><td><input name='search' class='form-control' type="text" ></td><td><button name='btn' class='btn btn'>Search</button></td></tr></table>
</form>
<br><br>
<?php
    if(isset($_POST['btn'])){
        $search = $_POST['search'];
        $users = fetch_all("SELECT * FROM users WHERE F_name LIKE '%".$search."%' AND U_id <> '$UID'");
        echo "<table style='text-align: center; margin-left: auto; margin-right: auto;'>";
        echo "<tr><th align='center'>First Name</th><th style='text-align:center'>Email</th></tr>";
        foreach($users as $user) {
            echo "<form method='post' action='inboxform.php'><tr style='padding-bottom: 5px'><td style='color:#ecf0f1'>".$user['F_name']."</td><td style='color:#ecf0f1'>".$user['Email']."</td> <td style='padding-left: 5px; padding-right: 5px; margin-bottom: 5px;'><button name='btn' class='btn btn-primary' value='".$user['U_id']."'>Message User</button> </td></form><form method='post' action='../Functions/connectrequest.php'><td><button name='btn' class='btn btn-info' value='".$user['U_id']."'>Connect</button></td></form><td><form action='../Pages/Public_Profile.php' method='get'> <button class='btn btn-default' value='".$user['URL']. "' name='user'> View Profile </button> </form></td></tr>";
        } 
        echo "</table>";   
    }
?>
