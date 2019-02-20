<?php

require_once ('../config/connect.php');

if (isset($_POST['knev']) && isset($_POST['vnev'])) {
    $knev = $_POST['knev'];
    $vnev = $_POST['vnev'];
    
    $sql = "INSERT INTO person(id, veznev, kernev) "
            . "VALUES (NULL,'$vnev','$knev');";
    $res = $conn -> query($sql);
}

$conn -> close();
