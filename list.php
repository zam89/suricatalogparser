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
<title>Suricata Log Analyzer - Analysed Log</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Analysed Log Result</h1><hr><br>
<?php
	$files = glob("tmp/*", GLOB_ONLYDIR);
	usort($files, function($a, $b) {
		return filemtime($a) < filemtime($b);
	});
	$count = count($files);

	echo "<b>$count logs analyzed.</b>
		<table width='900' valign='top' align='center'>
		<tr align='center'>
			<td><b>Name</b></td>
			<td><b>Analysis Date</b></td>
		</tr>";
	foreach($files as $value) {
		echo "<table width='900' valign='top' align='center'>
			<tr>
				<td><a href='" . $value . "'>" . basename($value) . "</a></td>
				<td>" . date("l, F d Y g:iA", filemtime($path.$value)) . "
			</tr>
		      </table>";
	}
?>
</body>
</html>
<br>
<?php include("footer.php"); ?>

