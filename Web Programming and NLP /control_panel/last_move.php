<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_movements";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the latest command from the database
$sql = "SELECT direction FROM movements ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $last_move = $row["direction"];
} else {
    $last_move = "No command recorded yet";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latest Command</title>
    <style>
        body {
            font-family:'Times New Roman', serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('robot.png') no-repeat center center fixed;
            background-size: cover;
        }
        .container {
            text-align: center;
            padding: 50px;
            border: 2px solid #03e9f4;
            border-radius: 18px;
            background-color: #000000;
            letter-spacing: 2px;
            overflow: hidden;
            transition: 0.5s;
        }

        .container:hover{
            box-shadow: 0 0 5px #03e9f4,
                        0 0 25px #03e9f4,
                        0 0 50px #03e9f4,
                        0 0 200px #03e9f4;
        }
        h1 {
            margin-bottom: 30px;
            color: #ffffff;
            font-size: 30px;
        }
        .command {
            font-size: 26px;
            margin-top: 10px;
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1> the last move was </h1>
        <div class="command"><?php echo $last_move; ?></div>
    </div>
</body>
</html>