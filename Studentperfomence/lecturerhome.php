<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>lecturer Dashboard</title>

    <?php
    include 'admin_css.php';
    ?>
</head>

<body>
    <header class="dashboard-header">
        <h2>Lecturer Dashboard</h2>

        <div class="logout">
            <a href="login.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <?php
    include 'lecturer_sidebar.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        header("location:login.php");
    } elseif ($_SESSION['usertype'] == 'student') {
        header("location:login.php");
    }
    ?>

    <div class="content">
        <h1>Lecturer Dashboard</h1>
    </div>
</body>

</html>
