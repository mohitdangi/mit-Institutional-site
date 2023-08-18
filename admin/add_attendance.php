<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $studentName = $_POST['student_name'];
    $rollNumber = $_POST['roll_number'];
    $attendanceDate = $_POST['attendance_date'];
    $status = $_POST['status'];

    // Database connection
    include 'connection.php'; // Include the file containing the database connection

    // SQL query to insert the data into the "attendance" table
    $sql = "INSERT INTO attendance (student_name, roll_number, attendance_date, status) VALUES (:studentName, :rollNumber, :attendanceDate, :status)";

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':studentName', $studentName);
        $stmt->bindParam(':rollNumber', $rollNumber);
        $stmt->bindParam(':attendanceDate', $attendanceDate);
        $stmt->bindParam(':status', $status);

        // Execute the statement
        $stmt->execute();

        // Close the database connection
        $conn = null;

        // Display a success message
        echo "Attendance added successfully!"; // You can customize this message as per your preference

    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
}
?>
