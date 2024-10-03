<?php

session_start();

	if(!isset($_SESSION['username'])){

		header("location:login.php");
	}

	elseif ($_SESSION['usertype']=='admin') {

        header("location:login.php");
        
    }


?>



<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Dashboard</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
    <header class="dashboard-header">
        <h2>Student Dashboard</h2>

        <div class="logout">

            <a href="login.php" class="btn btn-primary">Logout</a>

        </div>
    </header>
    <!-- Your other content goes here -->
</body>

    <div>
        
    </div>
    <header>
        <aside class="navigation">
            <ul >
                <li><a href="#">My Cour</a></li>
                <li><a href="#">View Students</a></li>        
                <li><a href="#">View Teachers</a></li>
                
                <li><a href="#">View Courses</a></li>
                <li><a href="Add_dashboard.php">Performance Dashboard</a>
                <li><a href="login.php">Logout</a>
                </li>
            </ul>
        </aside>
        
          
    </header>
</body>
</html>