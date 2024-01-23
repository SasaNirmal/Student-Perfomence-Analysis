<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Student Perfomence Analysis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<section id="Home">
        <nav class="navbar">
            <!-- LOGO -->
            <div class="logo"><b><span style="font-family: sans-serif;color:yellow;font-size: 25px;">STUDENT</span>performance</b></div>
        
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
              <div class="list">
        
                <li><a href="">HOME</a></li>
                <li><a href="">ADMIN</a></li>
                <li><a href="">STUDENT</a></li>
                <li><a href="">LECTURE</a></li>
                <li><a href="login.php"><i class="fa fa-user"></i></a></li>
              
            </ul>
        </nav>
    </section>

</section>
<section id="home">
        <div class="home_">
            <h2>Unlock Your Potential,<br> <span>Elevate Your Performance</span> </h2><br>
            <p>"Welcome to student performance , where we believe in your journey of growth and success. Our platform is designed to empower you to reach new heights in your academic performance. By providing personalized insights, collaborative opportunities, and resources for skill development, we aim to support your unique path to excellence. Join us and unlock the doors to your potential. Together, let's elevate your performance and celebrate your achievements!" 
             </p><br>
             <a href="login.php"><button class="home_btn">LOGIN</button></a>
        </div>
        <div class="home_img">
            <img src="2.png" alt="Doctor" >
        </div>
</section>

<!--our Mission-->
<div class="Mission" id="Mission">
        <h1>OUR MISSION</h1>

        <div class="Mission_box">
            <div class="profile">
                <img src="3.jpg"width="100px"height="100px">

                <div class="info">
                    <h2 class="name">Personal Growth</h2>
                    <p class="data">"Encouraging personal growth, we help students discover their strengths and overcome challenges, fostering a continuous journey of self-improvement."</p>
                </div>

            </div>

            <div class="profile">
                <img src="7.jpg" width="100px"height="100px">

                <div class="info">
                    <h2 class="name">Motivation</h2>
                    <p class="data">"Igniting motivation, our platform inspires students to set and achieve goals, creating a positive and dynamic environment for academic and personal success."</p>
                </div>

            </div>

            <div class="profile">
                <img src="5.jpg"width="100px"height="100px">

                <div class="info">
                    <h2 class="name">Collaboration</h2>
                    <p class="data">"Promoting collaboration, we believe in the power of shared knowledge and teamwork, creating a community where students learn from each other and thrive together."</p>
                </div>

            </div>

            <div class="profile">
                <img src="6.jpg"width="100px"height="100px">

                <div class="info">
                    <h2 class="name">Skill Development</h2>
                    <p class="data">"Facilitating skill development, our platform offers tailored resources and experiences that equip students with the practical abilities needed for academic excellence and future endeavors."</p>
                </div>

            </div>

        </div>

</div>


<section id="admission">
	<div class="admisson_form">
	<br><h1>ADDMISSION FORM</h1>
		<center><form action="data_check.php" method="POST">
			
			<div class="adm_int">				
				<label class="label_text"></label>
				<input class="input_deg" type="text" name="name" placeholder="   Name">
			</div>

			<div class="adm_int">				
				<label class="label_text"></label>
				<input class="input_deg" type="text" name="email"placeholder="   Email">
			</div>			

			<div class="adm_int">				
				<label class="label_text"></label>
				<input class="input_deg" type="text" name="phone"placeholder="   Phone">
			</div>

			<div class="adm_int">				
				<label class="label_text"></label>
				<textarea class="input_txt" name="message"placeholder="   Message"></textarea>
			</div>

			<div class="adm_int">
				<input class="btn btn-primary" id="submit" type="submit" value="apply" name="apply">
			</div>
		</form></center>
	</div>
</section>
<br><br><br><br>


    <!--Footer-->

    <footer>
        <div class="footer_main">

            <div class="footer_tag">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""></a><i class="fa fa-youtube"></i></a>
                <a href=""></a><i class="fa fa-google"></i></a>
            </div>
        </div>

        <h4 class="end">Design by studentperformance visualizing group</h4>

    </footer>
    <script src="script.js"></script>
</body>
</html>

