<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "speechtotext"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

     // Sanitize and validate transcript data
     if (isset($_POST['transcript'])) {
        $transcript = $conn->real_escape_string($_POST['transcript']);

        // Insert transcript into database
        $sql = "INSERT INTO stt (text) VALUES ('$transcript')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "No transcript provided";
    }

    // Close database connection
    $conn->close();
} else {
    http_response_code(405);
    echo "Method Not Allowed. Received method: " . $_SERVER["REQUEST_METHOD"];
}
?>