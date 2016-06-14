# Suricata Log Parser
A simple log parser for Suricata log file (JSON)

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

![alt tag](https://raw.githubusercontent.com/zam89/suricatalogparser/master/list.png)

<h1>How to use</h1>
<ol>
  <li>Clone this suricatalogparser to your computers/servers</li>
  <li>Put the folder on your html root folder. E.g. /var/www/html/</li>
  <li>Visit http://127.0.0.1/suricatalogparser via web browser</li>
  <li>Upload you JSON file that you got from Suricata IDS. Mostly the filename is "eve.json".</li>
  <li>Profit! :)</li>
</ol>


<li>Any feedback are welcomed. You can contact me via email at <b>m[d0t]khairulazam@gmail[d0t]com</b>.</li>

<p>Credit : <a href="https://suricata-ids.org">Suricata</a> for the logo :)</p>
