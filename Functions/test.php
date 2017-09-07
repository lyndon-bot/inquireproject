


//This is the code for  video uploading you will make a folder of videos and save your videos there and if you want to save your videos in database you just have to save its name like i have done 
<?php
if (isset($_REQUEST['upload']))
{
$name=$_FILES['uploadvideo']['name'];
echo $name;
$type=$_FILES['uploadvideo']['type'];
$size=$_FILES['uploadvideo']['size'];
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['uploadvideo']['tmp_name'];
$target_path="video/";
$target_path=$target_path.basename($cname);
if(move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path))
{
//echo $sql="INSERT INTO tbl_video(name,type) VALUE('".$cname."','".$type."')"; 
//$result=mysql_query($sql);
echo "Your video ".$cname." has been successfully uploaded";
}
}
?>
