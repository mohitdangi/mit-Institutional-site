<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Courses</title>
    <!-- Add your CSS styles here -->
</head>
<body>
    <h1>Add Courses</h1>
    <form action="process_add_course.php" method="post">
        <label for="course_subject">Course Subject:</label>
        <input type="text" name="course_subject" id="course_subject" required>

        <label for="duration">Duration (in months):</label>
        <input type="number" name="duration" id="duration" required>

        <input type="submit" value="Add Course">
    </form>
</body>
</html>
