<?php

require_once '../config/connect.php';

$sql = "SELECT * FROM person";
$res = $conn->query($sql);

if (!$res) {
    die('Hiba a lekérdezés során!');
}

$html = "<table>"
        . "<tr>"
        . "<th>Ssz.</th>"
        . "<th>Vezetéknév</th>"
        . "<th>Keresztnév</th>"
        . "<th>Művelet</th>"
        . "</tr>";

while ($row = $res->fetch_assoc()) {
    $html .= "<tr>"
            . "<td>{$row['id']}</td>"
            . "<td>{$row['veznev']}</td>"
            . "<td>{$row['kernev']}</td>"
            . "<td><button class='torol' id='{$row['id']}'>&#128465;</button></td>"
            . "</tr>";
}


$html .= "<tr>"
        . "<td></td>"
        . "<td id='vnev' contenteditable></td>"
        . "<td id='knev' contenteditable></td>"
        . "<td><button class='ment'>+</button></td>"
        . "</tr>";

$html .= "</table>";
echo $html;

$conn->close();
