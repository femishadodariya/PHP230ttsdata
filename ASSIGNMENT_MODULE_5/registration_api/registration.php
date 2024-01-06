<?php

// Set the response content type to JSON
header('Content-Type: application/json');

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assigement";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get JSON data from the request body
    $data = json_decode(file_get_contents('php://input'), true);

    // Check if required fields are present
    if (!isset($data['name']) || !isset($data['email']) || !isset($data['password'])) {
        http_response_code(400);
        echo json_encode(['error' => 'Missing required fields']);
        exit;
    }

    // Escape and sanitize input data
    $name = $conn->real_escape_string($data['name']);
    $email = $conn->real_escape_string($data['email']);
    $mobile = $conn->real_escape_string($data['mobile']);
    $password = $conn->real_escape_string($data['password']);

    
    // Check if the email is already registered
    $checkQuery = "SELECT * FROM tbl_users WHERE email = '$email'";
    $result = $conn->query($checkQuery);

    if ($result->num_rows > 0) {
        http_response_code(400);
        echo json_encode(['error' => 'Email already registered']);
        exit;
    }

    // Store the user in the database using an insert query
    $insertQuery = "INSERT INTO tbl_users (name, email,mobile, password) VALUES ('$name', '$email',$mobile, '$password')";

    if ($conn->query($insertQuery) === TRUE) {
        http_response_code(201);
        echo json_encode(['message' => 'Registration successful']);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Error storing user']);
    }

    // Close connection
    $conn->close();
} else {
    // Handle non-POST requests
    http_response_code(405);
    echo json_encode(['error' => 'Method Not Allowed']);
}
?>
