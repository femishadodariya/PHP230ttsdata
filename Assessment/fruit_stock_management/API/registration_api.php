<?php
// Database connection parameters
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "api";

// Establishing a connection to the database
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Setting the response header to JSON
header('Content-Type: application/json');

// Getting the JSON data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Checking if email and password are provided
if (isset($data['email']) && isset($data['password'])) {
    $email = $data['email'];
    $password = $data['password'];

    // Checking if the email already exists in the database
    $check_stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    // If the email already exists, return an error
    if ($check_result->num_rows > 0) {
        echo json_encode(['status' => 'error', 'message' => 'Email already exists']);
    } else {
        // Hashing the password before storing it in the database for security
        $hashed_password = $password;

        // Inserting the new user record into the database
        $insert_stmt = $conn->prepare("INSERT INTO tbl_users (email, password) VALUES (?, ?)");
        $insert_stmt->bind_param("ss", $email, $hashed_password);

        // Executing the insert statement
        if ($insert_stmt->execute()) {
            echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
        } else 
        {
            echo json_encode(['status' => 'error', 'message' => 'Registration failed']);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Email and password are required']);
}

// Closing the database connection
$conn->close();
?>
