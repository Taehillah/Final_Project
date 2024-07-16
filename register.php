<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $learnerName = $_POST['learnerName'];
    $guardianName = $_POST['guardianName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $role = $_POST['role'];
    $class = $_POST['class'];
    $status = $_POST['status'];
    $location = $_POST['location'];
    $password = $_POST['password'];
   // $passwordRepeat = $_POST['passwordRepeat'];

    // Validate that passwords match
    //if ($password !== $passwordRepeat) {
      //  echo "Passwords do not match.";
     //   exit();
   // }

    // Hash the password
    $hashedPassword = hash('sha256', $password);

    // Prepare the SQL statement
    $sql = "INSERT INTO Users (Names_of_Learner, Names_of_Guardian, Email_of_Guardian, Contacts_of_Guardian, Role, Class, Status, Location, PasswordHash) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing the statement: " . $conn->error);
    }

    // Bind the parameters
    $stmt->bind_param("sssssssss", $learnerName, $guardianName, $email, $contact, $role, $class, $status, $location, $hashedPassword);

    // Execute the statement
    if ($stmt->execute()) {
       // echo "Registration successful";
        echo '<script> window.location = href"Login.php";;
         </script>';

    } else {
        echo "The error is: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
