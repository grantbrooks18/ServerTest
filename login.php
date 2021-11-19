
<html>
<?php
// define variables and set to empty values
$username = "grant";
$password = "fergus1732";
$database = "Security";
$mysqli = new mysqli("10.0.0.132", $username, $password, $database);
$uname = $psw = "";

$uname = $_POST["uname"];
$psw =  $_POST["epsw"];

echo $uname;
echo $psw;
?>
<html>
