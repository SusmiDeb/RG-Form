
<!DOCTYPE html>
<html>
<body>
<?php
if (isset ($_FILES['fileToUpload'])){
	$filename = $_FILES['fileToUpload']['name'];
	$filetmp = $_FILES['fileToUpload']['tmp_name'];
	move_uploaded_file($filetmp,"images/".$filename);
	echo "image uploaded successfully";
	}
?>


<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:XAMPP
  <input type="file" name="fileToUpload"/ id="fileToUpload">
  <input type="submit" value="Upload Image"/ name="submit">
</form>

</body>
</html>
