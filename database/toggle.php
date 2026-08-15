<?php

include 'db.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

  
    $sql = "SELECT Status FROM stu WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $current_status = $row['Status'];

       
        $new_status = ($current_status == 0) ? 1 : 0;

        
        $update_sql = "UPDATE stu SET Status = $new_status WHERE ID = $id";
        $conn->query($update_sql);
    }
}


$conn->close();
header("Location: index.php");
exit();
?>