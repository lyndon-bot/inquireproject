<form method='post' action='../Functions/sendMsg.php'>
    <?php echo $_SESSION['U_id'];?>
    <label>Subject:</label><input name='subj' type='text'>
    <label>Message:</label><textarea name="msg"></textarea>
    <button name='btn' <?php echo "value='".$_POST['btn']."'" ?>>Send</button>
</form>