<?php

session_start();

echo "<pre>";
print_r($_SESSION);
echo "<pre>";

$_SESSION["naam"]= "Bobby";
$_SESSION["leeftijd"]= "22";
$_SESSION["isLoggedIn"]= "false";

echo "<pre>";
print_r($_SESSION);
echo "<pre>";