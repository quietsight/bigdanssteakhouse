<?php
	include('lib/QSFramework.php');
	include('bin/__init__.php');
	
	bdPrintHead();
?>
</head>

<body>
	<div class="container_12">
		<?php menuBar() ?>
		<div class="grid_12">
			<div class="bd-open7days"></div>
		</div>
		<div class="grid_12">
			<div class="contact_view">
				<!-- Contact Info -->
				<div class="contact_wrap">
					<p class="head">Big Dan's Steakhouse</p>
					<p class="address">
						3113 Williams Avenue<br>
						Highway 270 South<br>
						Woodward, OK 73801
					</p>
					<p class="phonenum">(580) 256-2084</p>
					<p class="email">
						<a class="email_link" href="mailto:info@bigdanssteakhouse.com">
							info@bigdanssteakhouse.com
						</a>
					</p>
					<p class="tagline">We can't wait to serve you!</p>
				</div>
			</div>
		</div>
		
		<div class="grid_12">
			<div class="map_view">
				<!-- Map -->
				<div class="map_frame">
					<div class="map_wrap">
						<iframe width="406" height="335" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=3113+Williams+Avenue,+Woodward,+OK+73801&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=3113+Williams+Ave,+Woodward,+Oklahoma+73801&amp;vpsrc=6&amp;ll=36.425357,-99.38447&amp;spn=0.024172,0.036478&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=3113+Williams+Avenue,+Woodward,+OK+73801&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=3113+Williams+Ave,+Woodward,+Oklahoma+73801&amp;vpsrc=6&amp;ll=36.425357,-99.38447&amp;spn=0.024172,0.036478&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
					</div>
				</div>
			</div>
			<div class="find_us">
				<div class="arrows_and_words"></div>
					<span class="twitter_link"><a href="http://twitter.com/Big_Dans" class="sociallink"><img src="res/img/twitter_bluerounded.png"></a></span>
					<span class="facebook_link"><a href="https://www.facebook.com/pages/Big-Dans-Steakhouse/184382701572701" class="sociallink"><img src="res/img/facebook_bluerounded.png"></a></span>
			</div>
			<div class="clear"></div>
		</div>
		
	</div>
	<div class="clear"></div>
	<?php print_footer(); ?>
	<script type="text/javascript">
  var _gauges = _gauges || [];
  (function() {
    var t   = document.createElement('script');
    t.type  = 'text/javascript';
    t.async = true;
    t.id    = 'gauges-tracker';
    t.setAttribute('data-site-id', '4fd42ee5f5a1f55411000009');
    t.src = '//secure.gaug.es/track.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(t, s);
  })();
</script>
</body>
</html>