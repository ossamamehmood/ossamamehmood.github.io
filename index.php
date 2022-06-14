<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<!-- Title  -->
    <title> Ossama Mehmood </title>
	
	<!-- favicon  -->
	<link rel="shortcut icon" type="image/jpg" href="images\favicon\icon128.png"/>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css/animate.css"> 
    <link rel="stylesheet" href="css/prettyPhoto.css"> 
    <link rel="stylesheet" href="css/style.css"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body data-spy="scroll" data-target=".main-nav">
    <section id="section-banner">
	<div class="pattern-overlay"></div>
    	<div class="container">
    		<div class="row">
    			<div class="banner-content wow fadeInRight">
    				<h2 class="title"> 
	    					<span>Greetings..!</span>
							
				<span>I'm Ossama Mehmood</span>
							DIGITAL CREATOR
    				</h2>

    				<a href="#" class="btn btn-default">Learn More</a>
    			</div>
    		</div>
    	</div>
    </section>

	<!-- Chatbot Start -->
		<?php
    include ('chatbot.php');
    ?>
    <!-- Chatbot End -->
	
    <!-- Menu Start -->
	<?php
    include ('menu.php');
    ?>
    <!-- Menu End -->
 
	<!-- About Start -->
	<?php
    include ('about.php');
    ?>
    <!-- About End -->

	<!-- About Profile Start -->
	<?php
    include ('aboutprofile.php');
    ?>
    <!-- About Profile End -->

	<!-- Skills Start -->
	<?php
    include ('skills.php');
    ?>
    <!-- Skills End -->

	<!-- Resume Start -->
	<?php
    include ('resume.php');
    ?>
    <!-- Resume End -->

	<!-- Testimonial Start -->
	<?php
    include ('testimonial.php');
    ?>
    <!-- Testimonial End -->

	<!-- Contact Start -->
	<?php
    include ('contact.php');
    ?>
    <!-- Contact End -->

	<!-- Footer Start -->
	<?php
    include ('footer.php');
    ?>
    <!-- Footer End -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Bootstrap jQuery -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- PrettyPhoto -->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- singlepagenav -->
    <script src="js/jquery.singlePageNav.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- Sticky Menu -->
    <script src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/custom.js"></script> 
	<script>
		 $(".main-nav").sticky();
	</script>

	<script> 
        new WOW().init();
    </script>
	
  </body>
</html>