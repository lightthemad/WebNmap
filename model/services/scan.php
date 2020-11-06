<?php

$ip=$_SERVER['REMOTE_ADDR'];



session_start();



exec("rm -rf view/templates/scans/". $_SESSION["seq"] . ".html");



session_unset();

session_destroy();

session_start();

 

function r($length = 16) {

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $charactersLength = strlen($characters);

    $randomString = '';

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charactersLength - 1)];

    }

    return $randomString;

}



$rand=r();



$_SESSION["seq"]=$rand;



exec("nmap -T4 ".$ip." -oX model/uploads/" . $rand . ".xml");

exec("./model/services/nmapxml/nmapxml model/uploads/" .$rand.  ".xml " . "html > view/templates/scans/". $rand . ".html");

exec("rm model/uploads/*.xml");

