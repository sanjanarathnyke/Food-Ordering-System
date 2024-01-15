<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();

if(empty($_SESSION['user_id']))  
{
	header('location:login.php');
}
else
{
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>My Orders</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
<style type="text/css" rel="stylesheet">


/* styles.css */

body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}
section {
    margin: 20px;
}

#team-members ul {
    list-style-type: none;
    padding: 0;
}

#team-members li {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em;
    position: fixed;
    bottom: 0;
    width: 100%;
}








	</style>

	</head>

<body>
    
      
        <header id="header" class="header-scroll top-header headrom">
  
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" img src="images/New-Food-Runner-Logo-Red-680x181.png" width="150" height="40" alt=""/></a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                            
							<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{
									
									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
                    </div>
                </div>
            </nav>
  
        </header>
        <div class="page-wrapper">
       
           
    
            <div class="inner-page-hero bg-image" data-image-src="images/img/pimg.jpg">
                <div class="container"> </div>
        
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">
                       
    <section id="team-members">
        <h2>Our Team</h2>
        <ul>
            <li>
                <h3>Group Leader - R.M.S.T.Rathnayaka</h3>
                <p>Contact: 0774970885</p>
				<p>Index-No: KADSE222F-071</p>
                <p>Responsibilities:</p>
		<ul>
  <li>Team Cordination</li>
  <li>HTML,CSS</li>
  <li>PHP</li>
</ul>

            </li>
			      <li>
                <h3>Group Member - R.M.S.J.Rathnayaka</h3>
                <p>Index-No: KADSE222F-037</p>
                <p>Responsibilities:</p>
		<ul>
  <li>HTML,CSS,JScript</li>
  <li>Research</li>
</ul>

            </li>
            
        </ul>
		
		   <ul>
            <li>
                <h3>Group Member - Anjalika De Silva </h3>
				<p>Index-No: KADSE222F-046</p>
                <p>Responsibilities:</p>
		<ul>
  <li>Research</li>
  <li>Graphical Elements Design</li>
  <li>PHP</li>
</ul>
				
				   <ul>
            <li>
                <h3>Group Member - Udantha Vishwajith </h3>
				<p>Index-No: KADSE222F-049</p>
                <p>Responsibilities:</p>
		<ul>
  <li>Research</li>
  <li>Graphical Elements Design</li>
</ul>
    </section>
                       
                    </div>
                </div>
            </div>
    
            


            
        
        </div>
  
    
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>
<?php
}
?>