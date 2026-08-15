<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            color: #333;
        }
        .form-container {
            margin-bottom: 40px;
        }
        .form-container form {
            display: inline-block;
        }
        .form-container label {
            font-weight: bold;
            margin-left: 15px;
        }
        .form-container input[type="text"] {
            padding: 5px;
            margin-left: 5px;
            width: 150px;
        }
        .form-container input[type="submit"] {
            display: block;
            margin: 15px auto 0 auto;
            padding: 5px 15px;
            cursor: pointer;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 50%;
            min-width: 400px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f9f9f9;
        }
        button {
            padding: 5px 10px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 3px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <form action="in.php" method="GET">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="age">Age:</label>
            <input type="text" id="age" name="age" required>

            <input type="submit" value="Submit">
        </form>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            include 'db.php';

          
            $sql = "SELECT * FROM stu";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['ID'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Age'] . "</td>";
                    echo "<td>" . $row['Status'] . "</td>";
                
                    echo "<td><a href='toggle.php?id=" . $row['ID'] . "'><button type='button'>Toggle</button></a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>لا توجد بيانات حتى الآن</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>

</body>
</html>