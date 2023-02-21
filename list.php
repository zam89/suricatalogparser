<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Suricata Log Parser - Analyzed Log</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Analysed Log Result</h1>
		<hr>
		<br>
		<?php
		$logsDir = "tmp/";
		$files = glob($logsDir . "*", GLOB_ONLYDIR);
		
		usort($files, function ($a, $b) {
			return filemtime($a) < filemtime($b);
		});
		
		$count = count($files);
		echo "<b>$count logs analyzed.</b>";
		?>
		<table width='900' valign='top' align='center'>
			<tr align='center'>
				<td><b>Name</b></td>
				<td><b>Analysis Date</b></td>
			</tr>
			<?php foreach ($files as $value) {
				echo "<tr><td><a href='$value'>" . basename($value) . "</a></td><td>" . date("l, F d Y g:iA", filemtime($value)) . "</td></tr>";
			}
			?>
		</table>
		<?php include "footer.php"; ?>
	</body>
</html>
