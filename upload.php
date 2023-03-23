
<?php
if (isset ($_FILES['fileToUpload'])){
	$filename = $_FILES['fileToUpload']['name'];
	$filetmp = $_FILES['fileToUpload']['tmp_name'];
	move_uploaded_file($filetmp,"images/".$filename);
	echo "image uploaded successfully";
	}
?>
