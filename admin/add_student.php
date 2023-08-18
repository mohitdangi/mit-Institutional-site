<?php
// Include the database connection file (connection.php)
require_once 'connection.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve student data from the form
    $name = $_POST['student_name'];
    $rollNumber = $_POST['student_roll'];

    // Prepare the SQL query to insert data into the database
    $query = "INSERT INTO students (name, roll_number) VALUES (:name, :rollNumber)";

    // Prepare and execute the query with the provided data
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':rollNumber', $rollNumber);

    if ($stmt->execute()) {
        // Data inserted successfully
        // You can perform any additional actions here if needed
        echo 'Student data added to the database successfully.';
    } else {
        // Error occurred while inserting data
        // Handle the error appropriately
        echo 'Error adding student data to the database.';
    }
}
?>
