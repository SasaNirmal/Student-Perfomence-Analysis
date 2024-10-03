<?php
error_reporting(0);
session_start();
    
    if(!isset($_SESSION['username'])){

        header("location:login.php");
    }

    elseif ($_SESSION['usertype']=='student') {

        header("location:login.php");
        
    }

    $host="localhost";
    $user="root";
    $password="";
    $db="schoolproject";

    $data=mysqli_connect($host,$user,$password,$db);

    $sql="SELECT * FROM user";

    $result=mysqli_query($data,$sql);

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <title>Student Data</title>
    

    <?php

    include 'admin_css.php';

    ?>  

    <style type="text/css">
    	.table_th
    	{
    		padding: 20PX;
    		font-size: 20PX;
    	}

    	.table_td
    	{
    		padding: 20px;
    		background-color: skyblue;
    	}
    </style>  

<body>

   	<header class="dashboard-header">
        <h2>Student Data</h2>



        <div class="logout">

            <a href="login.php" class="btn btn-primary">Logout</a>

        </div>
    </header>
    <!-- Your other content goes here -->
</body>



        <div class="content">
            
            <h1>Student Data</h1>

            <?php

            	if($_SESSION['message'])
            	{
            		echo $_SESSION['message'];
            	}

            	unset($_SESSION['message']);

            ?>
            <center>
            <table border="5px">
            	<tr>
            		<th class="table_th">Username</th>
            		<th class="table_th">Email</th> 
            		<th class="table_th">Phone</th>
            		<th class="table_th">Password</th>
            		<th class="table_th">Delete</th>
            	</tr>

            	<?php

            	while ($info=$result->fetch_assoc())

            	{ 
            		
            	

            	?>

            	<tr>
            		<td class="table_td">
            			<?php echo "{$info['username']}"; ?>
            		</td>
            		<td class="table_td">
            			<?php echo "{$info['email']}"; ?>
            		</td>
            		<td class="table_td">
            			<?php echo "{$info['phone']}"; ?>
            		</td>
            		<td class="table_td">
            			<?php echo "{$info['password']}"; ?>
            		</td>
            		<td class="table_td">
            			<?php echo "<a onClick=\"javascript:return confirm('Are You Sure to Delete this');\" href='delete.php?student_id={$info['id']}'>Delete</a>"?>
            		</td>
            	</tr>
            	<?php

            	}

            	?>
            </table>
            </center>
        </div>
        
          
    </header>
</body>
</html>



