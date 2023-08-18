<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the form
    $courseName = $_POST['course_name'];
    $courseDuration = $_POST['course_duration'];

    // Database connection
    include 'connection.php'; // Include the file containing the database connection

    // SQL query to insert the data into the "courses" table
    $sql = "INSERT INTO courses (course_name, course_duration) VALUES (:courseName, :courseDuration)";

    try {
        // Prepare the SQL statement
        $stmt = $conn->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':courseName', $courseName);
        $stmt->bindParam(':courseDuration', $courseDuration);

        // Execute the statement
        $stmt->execute();

        // Close the database connection
        $conn = null;

        // Display a success message
        echo "Course added successfully!"; // You can customize this message as per your preference

    } catch (PDOException $e) {
        // Handle errors
        echo "Error: " . $e->getMessage();
    }
}
?>
