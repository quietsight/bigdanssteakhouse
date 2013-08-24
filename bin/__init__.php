<?php
	$baseTitle = "Big Dan's Steakhouse";
	
	function init($back=''){
		include($back . '/lib/QSFramework.php');
	}
	
	function bdPrintHead($close='NO'){
		global $baseTitle;
		echo("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">");
		echo("<html><head>");
		echo("<!-- Google Fonts -->");
		echo("<link href='http://fonts.googleapis.com/css?family=Artifika' rel='stylesheet' type='text/css'>");
		echo("<title>$baseTitle</title>");
	
		echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"res/css.css\" />");
		echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"res/960.css\" />");
	
		echo("<script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>");
	
		echo("<script type=\"text/javascript\" src=\"res/js.js\"></script>");
		echo("<script type=\"text/javascript\" src=\"res/plugin/jquery.prettyPhoto.js\"></script>");
		echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"res/plugin/prettyPhoto.css\" />");
		echo("<script type=\"text/javascript\">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25981600-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>");
		
		if($close=='YES'){
			echo("</head>");
		}
	}
	function menuBar(){
		echo("<div class=\"bd-header grid_12\">");
				echo("<a href=\"index.php\"><div class=\"home_nav nav_item\"></div></a>");
				echo("<a href=\"menu.php\"><div class=\"menu_nav nav_item\"></div></a>");
				echo("<a href=\"findus.php\"><div class=\"find_nav nav_item\"></div></a>");
				echo("<a href=\"catering.php\"><div class=\"catering_nav nav_item\"></div></a>");
		echo("</div>\n");
	}
	
	function print_footer(){
		echo('<div class="foot">');
		echo('&copy; ' .date('Y') . 'Big Dan\'s Steak House | Site by <a class="footlink" href="http://quietsight.com" >Quiet Sight Productions</a>');
		echo('</div>');
	}
	
?>


  
    
  
