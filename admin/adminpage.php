
<?php
// Include the database connection
include 'connection.php';

// Query to retrieve data from the database
// Assuming you have tables named 'students', 'courses', and 'attendance'
$sqlTotalStudents = "SELECT COUNT(*) AS total_students FROM students";
$sqlTotalCourses = "SELECT COUNT(*) AS total_courses FROM courses";
$sqlTotalAttendance = "SELECT COUNT(*) AS total_attendance FROM attendance";

$stmtTotalStudents = $conn->prepare($sqlTotalStudents);
$stmtTotalCourses = $conn->prepare($sqlTotalCourses);
$stmtTotalAttendance = $conn->prepare($sqlTotalAttendance);

$stmtTotalStudents->execute();
$stmtTotalCourses->execute();
$stmtTotalAttendance->execute();

$totalStudents = $stmtTotalStudents->fetch(PDO::FETCH_ASSOC)['total_students'];
$totalCourses = $stmtTotalCourses->fetch(PDO::FETCH_ASSOC)['total_courses'];
$totalAttendance = $stmtTotalAttendance->fetch(PDO::FETCH_ASSOC)['total_attendance'];

// Query to retrieve data for students, courses, and attendance sections
$sqlStudents = "SELECT * FROM students";
$sqlCourses = "SELECT * FROM courses";
$sqlAttendance = "SELECT * FROM attendance";

$stmtStudents = $conn->prepare($sqlStudents);
$stmtCourses = $conn->prepare($sqlCourses);
$stmtAttendance = $conn->prepare($sqlAttendance);

$stmtStudents->execute();
$stmtCourses->execute();
$stmtAttendance->execute();

$students = $stmtStudents->fetchAll(PDO::FETCH_ASSOC);
$courses = $stmtCourses->fetchAll(PDO::FETCH_ASSOC);
$attendance = $stmtAttendance->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Drop Down Sidebar Menu </title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="input1.css">
  
    <!-- Boxiocns CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

     <style>
        /* Add the CSS for the dashboard section here */
        .dashboard-heading {
            text-align: center;
            font-size: 32px;
            margin: 20px 0;
            color: #0082e6;
        }

        .dashboard-cards {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }

        .dashboard-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .dashboard-card h3 {
            color: #00000;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .dashboard-card p {
            font-size: 16px;
            color: #333;
            margin-bottom: 10px;
        }
    </style>
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
    <i class="fab fa-slack"></i>
      <span class="logo_name"> MIT</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" onclick="toggledashboardForm()">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">COURSES</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class='bx-book-add' ></i>
            <span class="link_name">COURSES</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">COURSES</a></li>
          <li><a href="#"onclick="toggleAddCourseForm()">Add Courses</a></li>
          <li><a href="#">Manage Courses</a></li>
        </ul>
        
      </li>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx-calendar-event' ></i>
            <span class="link_name">Attendance</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Attendance</a></li>
          <li> <a href="#" onclick="toggleAddAttendanceForm()">Add Attendance</a></li>
          <li><a href="#">Manage Attendance</a></li>
        </ul>
      </li>
      <li>
    <div class="iocn-link">
        <a href="#">
        <i class='bx bxs-user'></i>
            <span class="link_name">Students</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
    </div>
    <ul class="sub-menu">
        <li><a class="link_name" href="#">Students</a></li>
        <li><a href="#" onclick="toggleAddStudentForm()">Add Student</a></li>
        <li><a href="#">Manage Students</a></li>
    </ul>
</li>

      <li>
      
      </li>
      <li>
 
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text"></span>
    </div>
</div>
    <div id="dashboard" class="dashboard-cards" style="display: flex;">
        <!-- Student Card -->
        <div class="dashboard-card">
          <h3>Students</h3>
          <p>Total Students: <?php echo $totalStudents; ?></p>
          <!-- Add other student-related information as needed -->
        </div>

        <!-- Attendance Card -->
        <div class="dashboard-card">
          <h3>Attendance</h3>
          <p>Total Attendance: <?php echo $totalAttendance; ?></p>
          <!-- Add other attendance-related information as needed -->
        </div>

        <!-- Courses Card -->
        <div class="dashboard-card">
          <h3>Courses</h3>
          <p>Total Courses: <?php echo $totalCourses; ?></p>
          <!-- Add other course-related information as needed -->
        </div>
      </div>
    <section id="addStudentsSection" style="display: none;">
    <div class="container">
      <h2>Add Student</h2>
      <form id="addStudentForm" method="post" action="add_student.php">
        <label for="student_name">Student Name:</label>
        <input type="text" name="student_name" id="student_name" required>
        <label for="student_roll">Roll Number:</label>
        <input type="text" name="student_roll" id="student_roll" required>
        <!-- Add other fields as needed -->
        <button type="submit">Add Student</button>
      </form>
      <div id="addStudentResult"></div>
    </div>
  </section>
  <section id="addCoursesSection" style="display: none;">
    <div class="container">
        <h2>Add Course</h2> metho
        <form id="addCourseForm"d="post" action="add_course.php">
            <label for="course_name">Course Name:</label>
            <input type="text" name="course_name" id="course_name" required>

            <label for="course_duration">Duration (in hours):</label>
            <input type="number" name="course_duration" id="course_duration" required>

            <!-- Add other fields as needed -->

            <button type="submit">Add Course</button>
        </form>
        <div id="addCourseResult"></div>
    </div>
</section>
<!-- Rest of your HTML code -->

<section id="addAttendanceSection" style="display: none;">
    <div class="container">
        <h2>Add Attendance</h2>
        <form id="addAttendanceForm" method="post" action="add_attendance.php">
            <label for="student_name">Student Name:</label>
            <input type="text" name="student_name" id="student_name" required>

            <label for="roll_number">Roll Number:</label>
            <input type="text" name="roll_number" id="roll_number" required>

            <label for="attendance_date">Attendance Date:</label>
            <input type="date" name="attendance_date" id="attendance_date" required>

            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="present">Present</option>
                <option value="absent">Absent</option>
            </select>

            <!-- Add other fields as needed -->

            <button type="submit">Add Attendance</button>
        </form>
        <div id="addAttendanceResult"></div>
    </div>
</section>


  </section>
  


<script>
  // JavaScript for toggling the sidebar and sub-menus
  const arrow = document.querySelectorAll('.arrow');
  for (let i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener('click', (e) => {
      const arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
      arrowParent.classList.toggle('showMenu');
    });
  }

  const sidebar = document.querySelector('.sidebar');
  const sidebarBtn = document.querySelector('.bx-menu');
  console.log(sidebarBtn);
  sidebarBtn.addEventListener('click', () => {
    sidebar.classList.toggle('close');
  });

  const addStudentsSection = document.getElementById('addStudentsSection');
    const addCoursesSection = document.getElementById('addCoursesSection');
    const addAttendanceSection = document.getElementById('addAttendanceSection');
    const dashboard = document.getElementById('dashboard');

    function toggleAddStudentForm() {
      addStudentsSection.style.display = 'block';
      addCoursesSection.style.display = 'none';
      addAttendanceSection.style.display = 'none';
      dashboard.style.display = 'none';
    }

    function toggleAddCourseForm() {
      addStudentsSection.style.display = 'none';
      addCoursesSection.style.display = 'block';
      addAttendanceSection.style.display = 'none';
      dashboard.style.display = 'none';
    }

    function toggleAddAttendanceForm() {
      addStudentsSection.style.display = 'none';
      addCoursesSection.style.display = 'none';
      addAttendanceSection.style.display = 'block';
      dashboard.style.display = 'none';
    }
    function toggledashboardForm() {
      addStudentsSection.style.display = 'none';
      addCoursesSection.style.display = 'none';
      dashboard.style.display = 'flex';
      addAttendanceSection.style.display = 'none';
    }
</script>
</body>
</html> 