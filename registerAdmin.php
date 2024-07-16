<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastName"];
    $email = $_POST["email"];
    $adminPassword = $_POST["adminPassword"];
    $cell = $_POST["cell"];
    $role = $_POST["role"];
   // $passwordRepeat = $_POST['passwordRepeat'];

    // Validate that passwords match
    //if ($password !== $passwordRepeat) {
      //  echo "Passwords do not match.";
     //   exit();
   // }

    // Hash the password
    $hashedPassword = hash('sha256', $adminPassword);

    // Prepare the SQL statement
    $sql = "INSERT INTO Administrators (First_Names, Surname, Email_of_Administrator, Contacts_of_Administrator, Role, PasswordHash) 
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("ssssss",  $firstname, $lastname, $email, $cell, $role, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful";
    } else {
        echo "The error is: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
