<?php

/*
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
*/

session_start();
if (isset($_SESSION['dest']) && !empty($_SESSION['dest'])) {
	ob_start();
	//$data = fopen("tmp/{$_SESSION['dest']}/eve.json", "r");
	$data = fopen("tmp/{$_SESSION['dest']}/{$_SESSION['file']}", "r");
	unset($data[count($data)-1]);//Exclude last JSON data
	echo "<html>
		<head>
		<title>Suricata Log Analyzer - Result</title>
		<style type='text/css'>
		html {
		text-align: center;
		}
		body{
			font-family:Lucida Console, Monotype, Tahoma, Verdana;
			font-size:12px;
			margin:40px;padding:0;
		}
		body,td,th {
			font-family: Verdana, Arial, Helvetica, sans-serif;
			font-size: 12px;
		}
		a:link {
			text-decoration: none;
			color: #0000FF;
		}
		a:visited {
			text-decoration: none;
			color: #0000FF;
		}
		a:hover {
			text-decoration: underline;
			color: #0000FF;
		}
		a:active {
			text-decoration: none;
			color: #0000FF;
		}
		table {
		table-layout: fixed;
		}

		th {
		font-family: Arial, Helvetica, sans-serif;
		font-size: .8em;
		}

		td {
		font-family: Arial, Helvetica, sans-serif;
		font-size: .8em;
		border: 1px solid #DDD;
		word-wrap: break-word;
		}
		</style>
		</head>
		<body>
		<h1 align='center'>Log Analysis Result - {$_SESSION['file']}</h1><hr><br>
		<table width='90%' valign='top' align='center'>
		<tr>
			<th width='220px'>Timestamp</th>
			<th width='150px'>Src IP</th>
			<th width='60px'>Src Port</th>
			<th width='150px'>Dest IP</th>
			<th width='60px'>Dest Port</th>
			<th width='360px'>Event Name</th>
			<th width='260px'>Hostname</th>
			<th width='360px'>URL</th>
		</tr>
		</body>
		</html>";
	while ($line = fgets($data)) {
		$array = json_decode($line, true);
		$time = $array['timestamp'];
		$date = strtotime($time);
		$fixed = date('l, F d Y g:iA', $date);
		if (isset($array['alert']['signature']) && !empty($array['alert']['signature'])) {
			echo "<table width='90%' valign='top' align='center'>
				<tr bgcolor = '#A9D0F5'>
				<td width='220px'>" . $fixed . "</td>
				<td width='150px'>" . $array['src_ip'] . "</td>
				<td width='50px'>" . $array['src_port'] . "</td>
				<td width='150px'>" . $array['dest_ip'] . "</td>
				<td width='50px'>" . $array['dest_port'] . "</td>
				<td width='360px'>" . $array['alert']['signature'] . "</td>
				<td width='260px' align='center'> - </td>
				<td width='360px' align='center'> - </td>
				</tr></table>";
		}
		if (isset($array['http']['hostname']) && !empty($array['http']['hostname'])) {
			echo "<table width='90%' valign='top' align='center'>
				<tr bgcolor = '#A9D0F5'>
				<td width='220px'>" . $fixed . "</td>
				<td width='150px'>" . $array['src_ip'] . "</td>
				<td width='50px'>" . $array['src_port'] . "</td>
				<td width='150px'>" . $array['dest_ip'] . "</td>
				<td width='50px'>" . $array['dest_port'] . "</td>
				<td width='360px' align='center'> - </td>
				<td width='260px'>" . $array['http']['hostname'] . "</td>
				<td width='360px'>" . $array['http']['url'] . "</td>
				</tr></table>";
		}
	}
	echo "<br><br>";
	include("footer.php");
	fclose($data);
	file_put_contents("tmp/{$_SESSION['dest']}/index.html", ob_get_contents());
	ob_end_flush();
}
else {
	echo "<html>
			<head><title>007</title></head>
			<body bgcolor='white'>
			<center><h1>007 - Spectre</h1></center>
			<hr><center>bond/0.0.7</center>
			<center style='color:white;'><h1>u mad bro? ;D</h1></center>
			</body>
		</html>";
}
session_destroy();
?>
