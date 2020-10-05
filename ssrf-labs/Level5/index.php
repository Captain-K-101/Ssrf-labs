<?php

if(!isset($_POST['submit']) and !isset($_GET['include'])) {

?>

<form action="./index.php" method="post" enctype="multipart/form-data">
  Select file to upload:
  <input type="file" name="file" id="file">
  <input type="submit" value="submit" name="submit">
</form>

<?php
} else if(isset($_POST["submit"]) and !isset($_GET['include'])){
	$target_dir = "./upload/";
	$uploadOk = 1;

	$filename = md5($_FILES["file"]["name"]);
	$target_file = $target_dir . $filename;

	if (file_exists($target_file)) {
		$uploadOk = 0;
		die("Sorry, file already exists.");
	}

	if ($_FILES["file"]["size"] > 10240) {
		$uploadOk = 0;
		die("Sorry, your file is too large.");
	}


	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	} else {
		if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {
			echo "<br>The file has been uploaded to: /var/www/uploads/" . $filename;
			echo "<br>To include the file, use ?include=<url>";
		} else {
			echo "Sorry, there was an error uploading your file.";
		}
	}
} else if(isset($_GET['include'])) {
	$url=$_GET['include'];
	$parse=@parse_url($url);
	if ((empty($parse['scheme']))||!in_array($parse['scheme'], array('http', 'https'))){
    		die('sorry we only accept http or https none of this other nonsence');
	}
	include($_GET['include']);
}


?>
