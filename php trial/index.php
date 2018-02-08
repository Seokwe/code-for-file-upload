
<form action="index.php" method="POST" enctype="multipart/form-data">
	 <input type="file" name="file"><br><br>
	 <input type="submit" value="submit">
	</form>


<?php

$name = $_FILES['file']['name'];
$type = $_FILES['file']['type'];
$extension = strtolower(substr($name, strpos($name,'.')+1));


$tmp_name = $_FILES['file']['tmp_name'];

if (isset($name)) {
	if (!empty($name)) {
		if (($extension=='jpg'|| $extension=='jpeg') && $type=='image/jpeg') {
			
			$location = 'uploads';

			if (move_uploaded_file($tmp_name,$location.$name)) {
				echo "uploaded";
			}else {
				echo "error";
			}
		}else{
			echo "choose jpg or jpeg";
		}
		
	}else{
		echo "please choose file";
	}
}


?>
