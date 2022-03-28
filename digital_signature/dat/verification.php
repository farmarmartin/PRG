<?php
include 'signature.php';
#verify--------------------
$extract = explode(' ', $file_content);
$extId = $extract[1]; # ID extrahované ze souboru
$extEnkey = $extract[2]; # zašifrovaný klíč extrahový ze souboru
$stream = fopen('data.txt', 'r');

#potřebuju nahrát id a key do DB hned po vygenerování




?>