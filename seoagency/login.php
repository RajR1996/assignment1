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
		  <li><a href="register.php">Register</a></li>
		  <li><a href="login.php">Login</a></li>
</ul>
      </div>
    </div>
	<div class="large-12">
	<!--Add PHP code from here -->
	
	<?php

if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>



<!-- Display body section. -->
<form action="login_action.php" method="post" class="form-signin" role="form">
<h2 class="form-signin-heading">Please login</h2>

<input type="text" name="email" placeholder="Email Address">
<input type="password" name="pass"  placeholder="Password">
<p><button class="btn btn-primary" name="submit" type="submit">Login</button></p>


</form>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<!--To here -->
	
	</div>
	
	
	
	
	</div>


    <script src="js/jquery.js"></script>
    <script src="js/what-input.js"></script>
    <script src="js/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
