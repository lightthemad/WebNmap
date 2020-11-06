<?php

if (isset($_POST['scan'])){

    include_once root. "/model/services/scan.php";

}

$css = "/view/style/style.css";

$body =

"<form Name='scan' Method='POST' Action='#'>\n<Input Type='submit' Name='scan' Value='Scan Me' class='btn'></form>\n<a href='/results'><button class='btn'>Check Results</button></a>";

$js = "/view/js/script.js";

include_once "basic_template.php";




