<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    

    <?php

    include 'admin_css.php';

    ?>    

<body>
    <header class="dashboard-header">
        <h2>Admin Dashboard</h2>

        <div class="logout">

            <a href="login.php" class="btn btn-primary">Logout</a>

        </div>
    </header>
    <!-- Your other content goes here -->
</body>

    <?php

    include 'admin_sidebar.php';

    ?>

        <div class="content">
            
            <h1>Admisstion Dashbord</h1>
        </div>
        
          
    </header>
</body>
</html>

<?php

session_start();
    
    if(!isset($_SESSION['username'])){

        header("location:login.php");
    }

    elseif ($_SESSION['usertype']=='student') {

        header("location:login.php");
        
    }


?>

