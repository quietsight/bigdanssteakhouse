<?php
//session_start();
include('bin/php.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>Big Dan's Steakhouse</title>
	
	<link type="text/css" rel="stylesheet" href="res/main.css" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	
	<script type="text/javascript" src="res/main.js"></script>
	
</head>

<body>
	<div class="head">
		<div class="menubar">
			<div class="menu_item find_us"><a href="find_us.php">Find Us</a></div>
			<div class="menu_item catering"><a href="catering.php">Catering</a></div>
			<div class="menu_item menu"><a href="menu.php">Menu</a></div>
			<div class="menu_item home active"><a href="index.php">Home</a></div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="woodgrain"></div>
	
	<div class="main_body">
		<div class="gradient"></div>
		<div class="upper_content">
			
			<div class="video">
				<iframe width="450" height="286" src="http://www.youtube.com/embed/hw9XlIVk57c?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<h3>The Best Hand-Cut<br>Steaks Around!</h3>
			<p>Welcome to Big Dan's Steakhouse in Woodward, Oklahoma.  If you're looking for the best steaks around, you've come to the right place.  We serve choice, hand-cut steaks that are tenderized and grilled to perfection.  And don't forget about other favorites such as chicken teriyaki, chicken fried steak, delicious catfish and our incredible salad bar.</p>
			<p>The food is great and so is the service.  Whether you have a small group or large, we aim to please.  Open 7 days a week, stop by anytime or reserve a private banquet room for those special events.  We even cater wherever you are!  Whatever the occasion, we can't wait to serve you a great meal at a great price. Come see us soon and remember, "First time a guest, from then on a friend."</p>
			<div class="clear"></div>
		</div>
		
		<div class="lower_content">
			<div class="polaroids">
				<!-- Poloaroid Picture -->
			</div>
			<h3>Meet the Owners<br>Dan and Caryl Parsons</h3>
			<p>Dan Parsons is a local boy whose roots run deep.  He was born in the original Woodward Hospital to Dan "The Milk Man" and Merita Parsons back in 1963 and grew up learning that there is no replacement for hard work, integrity, and a friendly handshake.  He met his wife Caryl at the University of Oklahoma, then spent several years honing his skills in the kitchens of the "big city."</p>
			<p>In 2009, Dan, Caryl and their son Eric moved back home to Woodward where years of restaurant experience and a friendly smile helped build Big Dan's Steakhouse into one of the best restaurants serving northwestern Oklahoma.  Come on by and say "howdy" to Dan, Caryl and the crew.  You'll be glad you did.</p>
			<div class="clear"></div>
		</div>
		<div class="footer">
			&copy;<?php echo(date('Y')); ?> Big Dan's Steak House | Site by <a href="#">Quiet Sight Productions</a>
		</div>
		<div class="clear"></div>
	</div>
</body>
</html>