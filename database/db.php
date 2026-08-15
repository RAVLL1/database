<?php
$servername = "sql300.infinityfree.com"; 
$username   = "if0_42664231";             
$password   = "4HQoZRtvlOcZPX";  
$dbname     = "if0_42664231_jafardata";   


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>