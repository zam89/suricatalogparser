<!DOCTYPE html>
<html>
	<head>
		<title>Suricata Log Parser - Home</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<img src="suricata-logo.png" alt="Suricata" style="width:150px;height:150px;">
		<h1>Suricata Log Parser</h1>
		<hr>
		<br>
		<form method="POST" action="" enctype="multipart/form-data">
			<label for="file"> Choose JSON file to upload (Max size 10MB) : </label>
			<input type="file" name="file">
			<input type="submit" name="submit" value="Upload">
		</form>
	</body>
</html>
<br><br>
<?php if (isset($_POST["submit"])) {
    //Check if the file is uploaded properly
    if ($_FILES["file"]["error"] > 0) {
        echo "Error during upload. Try again.";
    }

    //Set up valid extensions
    $extsAllowed = ["json"];
    $extUpload = strtolower(pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION));

    //Check if the uploaded file extension is allowed
    if (in_array($extUpload, $extsAllowed)) {
        //Upload the file on the server
        $filename = "{$_FILES["file"]["name"]}"; //1.json
        $dirname = uniqid(); //Create unique folder name
        mkdir("tmp/" . $dirname, 0755, true); //575c464281216
		
        //Move file to respective folder
        $dest = "tmp/" . $dirname . "/" . $filename; //tmp/575c464281216/1.json
        $result = move_uploaded_file($_FILES["file"]["tmp_name"], $dest);
        if ($result) {
            echo "<b>Analysis successful. Redirecting...</b>";
            session_start();
            $_SESSION["dest"] = $dirname; //575c464281216
            $_SESSION["file"] = $filename; //1.json
            header("Location:view.php");
            exit();
        }
    } else {
        echo "<h1>File is not valid. Please try again.</h1>";
    }
} ?>
<?php include "footer.php"; ?>
