<?php

$css = "/view/style/style.css";

$body =

"<form Name='scan' Method='POST' Action='#'>\n<Input Type='submit' Name='scan' Value='Scan Me' class='btn'></form>\n<a href='/results'><button class='btn'>Check Results</button></a>";

$js = "/view/js/script.js";

include_once "basic_template.php";

if (isset($_POST['scan'])){
$ip=$_SERVER['REMOTE_ADDR'];
exec("nmap -T4 ".$ip." -oX model/uploads/test.xml");
exec("./model/services/nmapxml/nmapxml model/uploads/test.xml html > view/templates/scan.html");
}
