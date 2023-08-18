<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Offered</title>
    <link rel="stylesheet" href="home1.css">
    <style>
        /* Additional CSS for the card design */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center; /* Center the cards horizontally */
            margin: 50px auto;
            max-width: 1200px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            width: 300px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
            color: #0082e6;
        }

        .card h2 {
            color: #0082e6;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 16px;
            color: #333;
        }

        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <?php
    // Include the database connection
    include 'connection.php';

    // Query to retrieve courses from the database
    $sql = "SELECT * FROM courses";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <h2>Courses Offered</h2>
    <div class="container">
        <?php foreach ($courses as $course) { ?>
            <div class="card">
                <h2><?php echo $course['course_name']; ?></h2>
                <p>Course ID: <?php echo $course['id']; ?></p>
                <p>Duration (in hours): <?php echo $course['course_duration']; ?></p>
            </div>
        <?php } ?>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
