<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "flights";

$connect = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$sql = "SELECT code, from_dttm, from_airport_code, to_dttm, to_airport_code, gate_code FROM flight";
$result = mysqli_query($connect, $sql);

echo '<table>';
echo '<tr class="legend">';
echo '<td><h3>let</h3></td>';
echo '<td><h3>čas odletu</h3></td>';
echo '<td><h3>z letiště</h3></td>';
echo '<td><h3>čas příletu</h3></td>';
echo '<td><h3>na letiště</h3></td>';
echo '<td><h3>brána</h3></td>';
echo '</tr>';

    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['code'].'</td>';
        echo '<td>'.$row['from_dttm'].'</td>';
        echo '<td>'.$row['from_airport_code'].'</td>';
        echo '<td>'.$row['to_dttm'].'</td>';
        echo '<td>'.$row['to_airport_code'].'</td>';
        echo '<td>'.$row['gate_code'].'</td>';
        echo '</tr>';
    };
echo '</table>';