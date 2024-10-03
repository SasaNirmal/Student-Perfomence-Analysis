<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location: login.php");
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if (isset($_POST['add_student'])) {
    $user_name = $_POST['name'];
    $user_email = $_POST['email'];
    $user_phone = $_POST['phone'];
    $user_password = $_POST['password'];
    $usertype = "student";

    $check = "SELECT * FROM user WHERE username='$user_name'";
    $check_user = mysqli_query($data, $check);
    $row_count = mysqli_num_rows($check_user);

    if ($row_count == 1) {
        echo "<script type='text/javascript'>alert('Username is already taken. Please choose another one.')</script>";
    } else {
        $sql = "INSERT INTO user(username,email,phone,usertype,password) VALUES ('$user_name','$user_email','$user_phone','$usertype','$user_password')";
        $result = mysqli_query($data, $sql);

        if ($result) {
            echo "<script type='text/javascript'>alert('Student added successfully.')</script>";
        } else {
            echo "Failed to add student.";
        }
    }
}

// Code for adding student marks
if (isset($_POST['add_marks'])) {
    $semester = $_POST['semester'];
    $student_id = $_POST['student_id'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $check_student = "SELECT * FROM user WHERE id='$student_id' AND usertype='student'";
    $check_student_result = mysqli_query($data, $check_student);
    $student_exists = mysqli_num_rows($check_student_result);

    if ($student_exists == 1) {
        $insert_marks = "INSERT INTO add_marks7(semester, student_id, subject, marks) VALUES ('$semester', '$student_id', '$subject', '$marks')";
        $result_marks = mysqli_query($data, $insert_marks);

        if ($result_marks) {
            echo "<script type='text/javascript'>alert('Marks added successfully.')</script>";
        } else {
            echo "Failed to add marks.";
        }
    } else {
        echo "<script type='text/javascript'>alert('Student not found.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lecturer Dashboard</title>

    <style type="text/css">
        label {
            display: inline-block;
            text-align: center;
            width: 100px;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .div_deg {
            background-color: skyblue;
            width: 400px;
            padding-top: 70px;
            padding-bottom: 70px;
        }
    </style>

    <?php include 'admin_css.php'; ?>
</head>

<body>
    <header class="dashboard-header">
        <h2>Lecturer Dashboard</h2>
        <div class="logout">
            <a href="login.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <?php include 'lecturer_sidebar.php'; ?>

    <div class="content">
        <center>
            <h1>Add Student</h1>
            <br><br>
            <div class="div_deg">
                <!-- Add Student Form -->
                <form action="add_student.php" method="POST">
                    <!-- Your existing form fields for adding students -->
                </form>

                <!-- Add Student Marks Form -->
                <form action="#" method="POST">
                    <div>
                        <label>Semester:</label>
                        <input type="number" name="semester">
                    </div>
                    <div>
                        <label>Student ID:</label>
                        <input type="text" name="student_id">
                    </div>

                    <div>
                        <label>Subject:</label>
                        <input type="text" name="subject">
                    </div>

                    <div>
                        <label>Marks:</label>
                        <input type="number" name="marks">
                    </div>

                    <div>
                        <input type="submit" class="btn btn-primary" name="add_marks" value="Add Marks">
                    </div>
                </form>
            </div>
        </center>
    </div>
</body>

</html>
