<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "flights";

$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT code, from_dttm, from_airport_code, to_dttm, to_airport_code, gate_code FROM flight";
$result = mysqli_query($connect, $sql);


while($row = mysqli_fetch_assoc($result)){
    echo $row['from_airport_code'];
};