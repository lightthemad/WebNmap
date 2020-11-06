<?php

session_start();

/**
 * write down your own custom functions here
 */
function home(){
    include_once root. "/view/templates/home.php";
}

function results(){
    include_once root. "/view/templates/scans/". $_SESSION['seq']. ".html";
}

