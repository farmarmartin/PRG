<?php
include 'signature.php';
include 'dbh.php';
#verify--------------------
$extract = explode(' ', $file_content);
$extId = $extract[1]; # ID extrahované ze souboru
$extEnkey = $extract[2]; # zašifrovaný klíč extrahový ze souboru
$stream = fopen('data.txt', 'r');

$id_from_dat = mysqli_query($connect,"SELECT idcertificate FROM certif;");
//$key_from_dat = mysqli_query($connect,"SELECT md5_key FROM certif;");

$inPutTest = $id_from_dat;
$stream = fopen('test_database.txt', 'w');
fwrite($stream, $inPutTest);
fclose($stream);


?>