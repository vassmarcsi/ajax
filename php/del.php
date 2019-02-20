<?php

require_once ('../config/connect.php');

if (isset($_POST['del'])) {
    $id = $_POST['del'];
    
    $sql = "DELETE FROM person WHERE id = '$id';";
    $res = $conn -> query($sql);
}

$conn -> close();