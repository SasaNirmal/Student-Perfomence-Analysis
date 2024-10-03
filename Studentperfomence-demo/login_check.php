<?php

error_reporting(0);
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";

$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = mysqli_real_escape_string($data, $_POST['username']); 
    $pass = mysqli_real_escape_string($data, $_POST['password']);

    $sql = "SELECT * FROM user WHERE username='" . $name . "' AND password='" . $pass . "'";
    $result = mysqli_query($data, $sql);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        if ($row["usertype"] == "student") {

            $_SESSION['username']=$name;

            $_SESSION['usertype']="student";

            header("location: studenthome.php");

        } elseif ($row["usertype"] == "admin") {
            
            $_SESSION['username']=$name;

            $_SESSION['usertype']="admin";

            header("location: Adminhome.php");
        } else {

                session_start();
            
                $message="Username or Password do not match";

                $_SESSION['loginMessage']=$message;

                header("location:login.php");

        }
    } else {
        echo "Query failed: " . mysqli_error($data);
    }
}

mysqli_close($data);
?>
