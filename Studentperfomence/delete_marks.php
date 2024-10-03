<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['student_id'])) {
    $user_id = mysqli_real_escape_string($data, $_GET['student_id']);

    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM user WHERE id = ?";
    
    $stmt = mysqli_prepare($data, $sql);

    if (!$stmt) {
        die("Error in preparing statement: " . mysqli_error($data));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "i", $user_id);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        $_SESSION['message'] = 'Delete student is successful';
        header("location:view_student_marks.php");
    } else {
        echo "Error: " . mysqli_error($data);
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($data);
?>
