<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Responsive Navbar | Coding Lab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
     
      </label>
      <label class="logo"> <i class="fab fa-slack"></i>MIT </label>
      <ul>
        <li><a class="active" onclick="window.location.href='user.php';">Home</a></li>
        <li><a onclick="window.location.href='about.php';">About</a></li>
        <li><a  onclick="window.location.href='display_courses.php';">Courses</a></li>
        <li><a onclick="window.location.href='contact.php';">Contact</a></li>
        <li><a onclick="window.location.href='addmission.php';">Addmission</a></li>
        <li><a onclick="window.location.href='tool.php';">tools</a></li>
      </ul>
    </nav>
    <section></section>
  </body>
</html>
