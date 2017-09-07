<?php
include_once("query.php");
session_start();

$U_id = $_SESSION['U_id'];
/*
$allowedExts = array("jpg", "jpeg", "gif", "png", "mp3", "mp4", "wma");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "audio/mp3")
|| ($_FILES["file"]["type"] == "audio/wma")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg"))

&& ($_FILES["file"]["size"] < 20000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/s" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>
*/


function upload($upload_f){

    $Email = $_SESSION['email'];
    $U_id = $_SESSION['U_id'];
    
	if(isset($_FILES["$upload_f"])){
		//echo "hello";
		$file = $_FILES["$upload_f"];
		//print_r($file);  

		// File Properties

		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		$file_size = $file['size'];
		$file_error = $file['error'];

		/// work out the file extension 

		$file_ext = explode('.', $file_name);
		$file_ext = strtolower(end($file_ext));

		$allowed = array('txt','jpg','mp4','png');

		if(in_array($file_ext, $allowed)){
			if($file_error === 0) {

					$file_name_new = $U_id .'_' . $upload_f. '.' . $file_ext;
					$file_destination = 'uploads/' . $file_name_new;

					if(move_uploaded_file($file_tmp, $file_destination)){

						echo $file_destination;
						$_SESSION["$upload_f"] = $file_destination;
                                                query("update users set $upload_f  = '$file_destination' where Email = '$Email'");
                                                echo "successful";

					}				

			}
		}

	}

}

$Job_Title = $_POST['Job_Title'];
$Company_N = $_POST['Company_N'];
$Company_E = $_POST['Company_E'];
//$Profile_Pic = $_POST['Profile_Pic'];
$Profile_Descrip = $_POST['Profile_Descrip'];

$_SESSION['Job_Title'] = $Job_Title;
$_SESSION['Company_N'] = $Company_N;
$_SESSION['Company_E'] = $Company_E;
$_SESSION['Profile_Descrip'] = $Profile_Descrip;
//$Refrenece_Vid = $_POST['Refrenece_Vid'];
//$Bio_Vid = $_POST['Bio_Vid'];

$Email = $_SESSION['email'];

query("update users set Job_Title = '$Job_Title' ,Company_N = '$Company_N' ,Company_E = '$Company_E' ,Profile_Descrip = '$Profile_Descrip' where Email = '$Email'");

upload('Profile_Pic');
upload('Refrenece_Vid');
upload('Bio_Vid');
 

header('location:../Pages/home.php');
?>

