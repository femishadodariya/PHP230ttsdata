<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "assigement";

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

header('Content-Type: application/json');


    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['email']) && isset($data['password'])) {
        $email = $data['email'];
        $password = $data['password'];

        $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            echo json_encode(['status' => 'success', 'message' => 'Login successful']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Email and password are required']);
    }


$conn->close();
?>
