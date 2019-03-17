<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheffield SEO Agency</title>
    <link rel="stylesheet" href="css/foundation.min.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
  <div class="grid-container">
  <div class="grid-x top-bar">
 <div class="top-bar-left">
<ul class="menu">
 <li class="menu-text"><a href="index.html">Sheffield SEO Agency</a></li>
<li><a href="about-us.html">About Us</a></li>
		  <li><a href="seo-products-services.html">SEO Services</a></li>
          <li><a href="seo-portfolio.html">SEO Portfolio</a></li>
		  <li><a href="contact-us.html">Contact Us</a></li>
		 
		  <li><a href="logout.php">Logout</a></li>
</ul>
      </div>
    </div>
	<div class="large-12">
	<!--Add PHP code from here -->
	
	<?php 
session_start() ;
if ( !isset( $_SESSION[ 'user_id' ] ) ) { 
require ( 'login_tools.php' ) ; 
load() ; }
$page_title = 'Welcome to SHU SEO Agency' ;

echo "<h1 id='mainhead'>Your SHU SEO Agency Profile</h1>
<p>You are now logged in, {$_SESSION['first_name']} {$_SESSION['last_name']} </p>";

?>
	
	
	
	
	
	
	
	
	
	
	
	
	<!--To here -->
	
	</div>
	
	
	
	
	</div>


    <script src="js/jquery.js"></script>
    <script src="js/what-input.js"></script>
    <script src="js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
