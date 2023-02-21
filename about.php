<!DOCTYPE html>
<html>
	<head>
		<title>Suricata Log Parser - About</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<img src="suricata-logo.png" alt="Suricata" style="width:150px;height:150px;">
		<h1>Suricata Log Parser</h1>
		<hr>
		<br>
		<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF">
			<tr>
				<td>
					<h1>About</h1>
					<p>This tool basically interpret Suricata IDS log files (JSON format) into more human-friendly and beautiful format.</p>
					<p>This is just a layman's coding style. Create this just for fun and for learning purpose.</p>
					<h1>Main Function</h1>
					<ul>
						<li>This analyzer will convert the Suricata JSON file that is submitted and display the result on the next page.</li>
						<li>The result will contain:</li>
						<ul>
							<li>Source IP</li>
							<li>Source Port</li>
							<li>Destination IP</li>
							<li>Destination Port</li>
							<li>IDS Signature</li>
							<li>Hostname</li>
							<li>URL</li>
						</ul>
						<li>Any feedback is welcome. Contact me at <b>m[d0t]khairulazam@gmail[d0t]com</b>.</li>
					</ul>
					<p>Credit: <a href="https://suricata-ids.org">Suricata</a> for the logo :)</p>
				</td>
			</tr>
		</table>
		<?php include "footer.php"; ?>
	</body>
</html>
