<?php
// Include the database connection configuration
require_once 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validate data
    if (empty($email) || empty($password)) {
        // Return an error message as JSON
        $response = [
            "status" => "error",
            "message" => "Please fill in all fields."
        ];
    } else {
        try {
            // Retrieve hashed password from the database
            $stmt = $pdo->prepare("SELECT password FROM users WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $hashedPasswordFromDB = $row["password"];

                // Verify the entered password
                if (password_verify($password, $hashedPasswordFromDB)) {
                    // Return success status as JSON
                    $response = [
                        "status" => "success",
                        "message" => "User login successful!"
                    ];
                } else {
                    // Return an error message as JSON
                    $response = [
                        "status" => "error",
                        "message" => "Invalid password."
                    ];
                }
            } else {
                // Return an error message as JSON
                $response = [
                    "status" => "error",
                    "message" => "User not found."
                ];
            }
        } catch (PDOException $e) {
            // Return an error message as JSON
            $response = [
                "status" => "error",
                "message" => "Error: " . $e->getMessage()
            ];
        }
    }

    // Set the appropriate headers for JSON response

    // Echo the JSON-encoded response
    echo json_encode($response);
}
?>
