<?php
include 'dbh.php';
include 'signature.php';

$first = $_POST['firstname'];
$last = $_POST['surname'];
$date = $_POST['expire'];

$insert = "INSERT INTO subjekt (surname, firstname) VALUES ('$first', '$last');INSERT INTO certif (expires, idcertificate, md5_key) VALUES ('$date', '$id', '$key');";
mysqli_multi_query($connect, $insert);

header("Location: ../index.php");