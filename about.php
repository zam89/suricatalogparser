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
<title>Suricata Log Analyzer - About</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img src="suricata-logo.png" alt="Suricata" style="width:150px;height:150px;">
	<h1>Suricata Log Analyzer</h1><hr><br>
	<table width="900" border="0" align="center" cellpadding="4" cellspacing="4" bgcolor="#FFFFFF"><tr><td>
	<h1>About</h1>
	<p>This system basically interpret Suricata IDS log files (JSON format) into more human-friendly and beautiful format.</p>
	<p>This is just a layman's coding style. Create this just for fun and for learning purpose.</p>
	<p><h1>Main Function</h1></p>
	<li>This analyzer will convert the Suricata JSON file that submitted and display the result in the next page.</li><br>
	The result will contains:
	<ul>
		<li>Source IP</li>
		<li>Source Port</li>
		<li>Destination IP</li>
		<li>Destination Port</li>
		<li>IDS Signature</li>
		<li>Hostname</li>
		<li>URL</li>
        </ul>
	<li>Any feedback are welcomed. Contact me at <b>m[d0t]khairulazam@gmail[d0t]com</b>.</li>
	<p>Credit : <a href="https://suricata-ids.org">Suricata</a> for the logo :)</p>
	</td></tr></table>
</body>
</html>
<br>
<?php include("footer.php"); ?>

