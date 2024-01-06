<?php
header('Content-Type: application/json'); // Set the content type to JSON

$response = array(); // Initialize an array for the response

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the form was submitted with a file
    if (isset($_FILES['image'])) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['image']['name']);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
            // Database connection parameters
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "assigement";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                $response['error'] = "Connection failed: " . $conn->connect_error;
            } else {
                // Prepare data for insertion
                $filePath = $uploadFile;

                // SQL insert query for inserting only the image file path
                $sql = "INSERT INTO image_upload (file_path) VALUES (?)";
                
                // Prepare and execute the statement
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $filePath);
                
                if ($stmt->execute()) {
                    $response['success'] = 'File uploaded successfully and database entry added.';
                } else {
                    $response['error'] = 'Error uploading file and adding database entry: ' . $stmt->error;
                }

                // Close the statements and connection
                $stmt->close();
                $conn->close();
            }
        } else {
            $response['error'] = 'Error uploading file.';
        }
    } else {
        $response['error'] = 'No file uploaded.';
    }
} else {
    $response['error'] = 'Invalid request method.';
}

// Convert the response array to JSON and echo it
echo json_encode($response);
?>
