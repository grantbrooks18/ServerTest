<?php
// define variables and set to empty values
$uname = $psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$uname = test_input($_POST["uname"]);
$psw = test_input($_POST["epsw"]);
}

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

echo $uname;
echo $psw;
?>
