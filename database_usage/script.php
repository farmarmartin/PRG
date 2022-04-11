<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "flights";

$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT code, from_dttm, from_airport_code, to_dttm, to_airport_code, gate_code FROM flight";
$result = mysqli_query($connect, $sql);

echo '<table>';
echo '<th><h3>let</h3></th>';
echo '<th><h3>čas odletu</h3></th>';
echo '<th><h3>z letiště</h3></th>';
echo '<th><h3>čas příletu</h3></th>';
echo '<th><h3>na letiště</h3></th>';
echo '<th><h3>brána</h3></th>';

    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<th>'.$row['code'].'</th>';
        echo '<th>'.$row['from_dttm'].'</th>';
        echo '<th>'.$row['from_airport_code'].'</th>';
        echo '<th>'.$row['to_dttm'].'</th>';
        echo '<th>'.$row['to_airport_code'].'</th>';
        echo '<th>'.$row['gate_code'].'</th>';
        echo '</tr>';
    };