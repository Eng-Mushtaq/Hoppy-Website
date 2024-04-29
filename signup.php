<?php
include 'dbconnect.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"]; // New field for confirm password

    // Validate data
    if (empty($username) || empty($password) || empty($email)) {
        $response = [
            "status" => "error",
            "message" => "Please fill in all fields."
        ];
    } elseif ($password !== $confirm_password) {
        $response = [
            "status" => "error",
            "message" => "Passwords do not match. Please re-enter the same password."
        ];
    } else {
        // Check if the username is already registered
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $response = [
                "status" => "error",
                "message" => "This email already exists. Please choose a different email."
            ];
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data into 'users' table
            $insert_sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :hashed_password)";
            $stmt = $pdo->prepare($insert_sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':hashed_password', $hashed_password);
            if ($stmt->execute()) {
                $response = [
                    "status" => "success",
                    "message" => "User registered successfully!"
                ];
            } else {
                $response = [
                    "status" => "error",
                    "message" => "Error: Something went wrong. Please try again later."
                ];
            }
        }
    }

    // Set the appropriate headers for JSON response
    // header('Content-Type: application/json');

    // Echo the JSON-encoded response
    echo json_encode($response);
}
?>
