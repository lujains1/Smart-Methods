<?php
error_reporting(E_ALL);
ini_set('display_errors', 1); 

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

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

// Get the JSON data from the POST request
$data = json_decode(file_get_contents('php://input'), true);

// Check if the direction key exists
if (isset($data['direction'])) {
    $direction = $data['direction'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO movements (direction) VALUES (?)");
    $stmt->bind_param("s", $direction);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No direction provided";
}

$conn->close();
?>
