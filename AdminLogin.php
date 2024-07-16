<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailOrContact = $_POST['emailOrContact'];
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = hash('sha256', $password);

    // Check if the administrator exists
    $sql = "SELECT * FROM Administrators WHERE (Email_of_Administrator = ? OR Contacts_of_Administrator = ?) AND PasswordHash = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    $stmt->bind_param("sss", $emailOrContact, $emailOrContact, $hashedPassword);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Administrator exists, set session variables
        $_SESSION['admin'] = $result->fetch_assoc();
        header("Location: adminDashboard.php");
    } else {
        echo "<script> alert('Invalid email/contact number or password.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>