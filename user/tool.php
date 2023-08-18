<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tools</title>
    <style>
        /* Additional CSS for the card design and responsive layout */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
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
            width: 100%;
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
<?php include 'navbar.php'; ?>
    <h1>Tools for College and Coding</h1>
    <div class="container">
        <!-- Dummy Tool Cards -->
        <div class="card">
            <h2>Online Compiler</h2>
            <p>A web-based compiler for testing and running code snippets in various programming languages.</p>
        </div>

        <div class="card">
            <h2>Code Editor</h2>
            <p>A versatile code editor with syntax highlighting and code completion for an enhanced coding experience.</p>
        </div>

        <div class="card">
            <h2>Student Planner</h2>
            <p>An organizer tool that helps students plan their schedules, assignments, and exams effectively.</p>
        </div>

        <div class="card">
            <h2>Interactive Learning Platform</h2>
            <p>An e-learning platform with interactive coding exercises and quizzes to enhance coding skills.</p>
        </div>

        <div class="card">
            <h2>Code Snippet Library</h2>
            <p>A repository of reusable code snippets and algorithms to simplify coding tasks.</p>
        </div>

        <div class="card">
            <h2>Group Project Collaboration</h2>
            <p>A tool for students to collaborate on group projects, share code, and track progress together.</p>
        </div>
        <!-- Add more dummy tool cards here -->

    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
