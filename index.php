<!--
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->

<html>
<head>
<title>Suricata Log Analyzer - Home</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="suricata-logo.png" alt="Suricata" style="width:150px;height:150px;">
	<h1>Suricata Log Analyzer</h1><hr><br>
	<form method="POST" action="" enctype="multipart/form-data">
		<label for="file"> Choose JSON file to upload (Max size 10MB) : </label>
		<input type="file" name="file">
		<input type="submit" name="submit" value="Upload">
	</form>
</body>
</html>
<br>
<?php
if(isset($_POST['submit'])){
	//Check if the file is uploaded properly
	if ($_FILES['file']['error'] > 0) {
		echo "Error during upload. Try again.";
	}

	//Set up valid extensions
	$extsAllowed = array( 'json' );
	$extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;

	//Check if the uploaded file extension is allowed
	if (in_array($extUpload, $extsAllowed) ) { 
		//Upload the file on the server
		$filename = "{$_FILES['file']['name']}"; //1.json

		$dirname = uniqid(); //Create unique folder name
		mkdir("tmp/".$dirname, 0755, true); //575c464281216
		//Move file to respective folder
		$dest = "tmp/".$dirname."/".$filename; //tmp/575c464281216/1.json
		$result = move_uploaded_file($_FILES['file']['tmp_name'], $dest);

		if ($result) {
			echo "<b>Analysis successful. Redirecting...</b>";
			session_start();
			$_SESSION['dest'] = $dirname; //575c464281216
			$_SESSION['file'] = $filename; //1.json
			header("Location:view.php");
		}
	}
	else {
		echo "<h1>File is not valid. Please try again.</h1>";
	}
}
?>
<?php include("footer.php"); ?>

