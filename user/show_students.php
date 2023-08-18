<?php
// Include the database connection
include 'connection.php';

// Query to retrieve all students from the database
$sql = "SELECT * FROM students";
$stmt = $conn->prepare($sql);
$stmt->execute();
$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students Information</title>
    <style>
        /* Additional CSS for the card design and responsive layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            height:fit-content;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #0082e6;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            width: 100%;
            height:fit-content;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
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
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
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

        /* Responsive layout */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Students Information</h1>
    <div class="container">
        <?php foreach ($students as $student) { ?>
            <div class="card">
                <h2><?php echo $student['name']; ?></h2>
                <p>Roll Number: <?php echo $student['roll_number']; ?></p>
            </div>
        <?php } ?>
    </div>
</body>
</html>
