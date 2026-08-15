<?php

include 'db.php';


if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

  
   
    $sql = "INSERT INTO stu (name, age) VALUES ('$name', '$age')";

    if ($conn->query($sql) === TRUE) {
       
        header("Location: index.php");
        exit();
    } else {
        echo "حدث خطأ: " . $conn->error;
    }
}

$conn->close();
?>