<?php

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

    $sql="SELECT * from admisstion";

    $result=mysqli_query($data,$sql);


?>


<!DOCTYPE html>
<html lang="en">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admition</title>
    

    <?php

    include 'admin_css.php';

    ?> 



<body>


    

        <div class="content">
            <center>
            <h1>Applied For Admisstion</h1>
            <br><br>
            <table border="5px" class="table"> 
                <tr>
                    <th style="padding: 20px; font-size: 15px;">Name</th>
                    <th style="padding: 20px; font-size: 15px;">Email</th>
                    <th style="padding: 20px; font-size: 15px;">Phone</th>
                    <th style="padding: 20px; font-size: 15px;">Message</th>
                </tr>

                <?php

                while($info=$result ->fetch_assoc())
                {

                ?>

                <tr>
                    <td style="padding: 20px;">
                        <?php echo "{$info['name']}"; ?>
                    </td>
                    <td style="padding: 20px;">
                        <?php echo "{$info['email']}"; ?>
                    </td>
                    <td style="padding: 20px;">
                        <?php echo "{$info['phone']}"; ?>
                    </td>
                    <td style="padding: 20px;">
                        <?php echo "{$info['message']}"; ?>
                    </td>

                </tr>

                <?php

                }

                ?>

            </table>
            </center>
            <button class="back_button" onclick="document.location='Adminhome.php'">Back</button>

        </div>
        
          
    </header>
</body>
</html>


