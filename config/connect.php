<?php

$conn = new mysqli('localhost', 'root', '', 'esti_ajax');

if ($conn -> connect_errno){
    die("Hiba a csatlakozás során!".$conn -> connect_error);
}

$conn -> set_charset('utf8');
