<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailOrContact = $_POST['emailOrContact'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = hash('sha256', $password);

    // Check if the user exists
    $sql = "SELECT * FROM Users WHERE (Email_of_Guardian = ? OR Contacts_of_Guardian = ?) AND PasswordHash = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $emailOrContact, $emailOrContact, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, set session variables
        $_SESSION['user'] = $result->fetch_assoc();
        header("Location: dashboard.php");
    } else {
        echo "Invalid email/contact number or password.";
    }

    $stmt->close();
    $conn->close();
}
?>