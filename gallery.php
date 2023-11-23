<?php
// Ensure that the form is submitted correctly
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servername = "localhost";
    $username = "gallery";
    $password = "Demystifying";
    $dbname = "gallery"; //nombre de Schema

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Sanitizing the Data Entered
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $notes = htmlspecialchars($_POST['notes']);

    $sql = "INSERT INTO contact (name, phone, email, notes) VALUES ('$name',  '$phone',  '$email', '$notes')";

    if ($conn->query($sql) === true) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();

    // Returns to Original Site
    header("Location: ../FinalProject");
}
// Prevents Users from getting stuck if they acessed this form illegitimately
else{
    header("Location: ../FinalProject");
}