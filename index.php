<?php
  include('lib/QSFramework.php');
  include('bin/__init__.php');
  
  bdPrintHead();
  
  $ct = new COREText;
  
  $json = array(
    'name' => 'site_text_for_bigdansteakhouse',
    'text_blocks' => array(
      'bigdan_welcome' => "Welcome to Big Dan's Steakhouse in Woodward, Oklahoma.  If you're looking for the best steaks around, you've come to the right place.  We serve choice, hand-cut steaks that are tenderized and grilled to perfection.  And don't forget about other favorites such as chicken teriyaki, chicken fried steak, delicious catfish and our incredible salad bar.\n\nThe food is great and so is the service.  Whether you have a small group or large, we aim to please.  Open 7 days a week, stop by anytime or reserve a private banquet room for those special events.  We even cater wherever you are!  Whatever the occasion, we can't wait to serve you a great meal at a great price. Come see us soon and remember, \"First time a guest, from then on a friend.\"",
      'bigdan_meet_the_owners' => "Dan Parsons is a local boy whose roots run deep. He was born in the original Woodward Hospital to Dan \"The Milk Man\" and Merita Parsons back in 1963 and grew up learning that there is no replacement for hard work, integrity, and a friendly handshake. He met his wife Caryl at the University of Oklahoma, then spent several years honing his skills in the kitchens of the \"big city.\"

In 2009, Dan, Caryl and their son Eric moved back home to Woodward where years of restaurant experience and a friendly smile helped build Big Dan's Steakhouse into one of the best restaurants serving northwestern Oklahoma. Come on by and say \"howdy\" to Dan, Caryl and the crew. You'll be glad you did.",
    ),
  );
  
  //$ct->ct_write_json_to_file("tstore.json", $json);
  
  $text = $ct->ct_get_json_from_file("tstore.json");
  
?>
</head>

<body>
  <div class="container_12">
    <?php menuBar() ?>
    <div class="grid_12">
      <div class="bd-open7days"></div>
    </div>
    
    <div class="sociallinks">
      <p>Follow us on <a href="http://twitter.com/Big_Dans" class="sociallink"><img src="res/img/twitter.png"> Twitter</a> and Like us on <a href="https://www.facebook.com/pages/Big-Dans-Steakhouse/184382701572701?fref=ts" class="sociallink"><img src="res/img/facebook.png"> Facebook</a><br>
      for news and special offers!
    </div>
    
    <!-- Start Top Content -->
    <div class="grid_12 top_content">
      <div class="clear"></div>
      <div class="top_content_head"></div>
      <div class="bd-video">
<iframe width="450" height="253" src="http://www.youtube.com/embed/EYHoO5cpLhY?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="upper-text">
        <?php echo($ct->ct_markdown($text->text_blocks->bigdan_welcome)); ?>
      </div>
      <div class="clear"></div>
    </div>
    <!-- Start Lower Content -->
    <div class="grid_12 lower_content">
      <div class="polaroids"><!-- Poloaroid Picture --></div>
      <div class="lower_content_head"></div>
      <?php echo($ct->ct_markdown($text->text_blocks->bigdan_meet_the_owners)); ?>
      <div class="clear"></div>
    </div>
    
    <div class="menustory">
          <h2 id="thereistrulynoplacelikehome">There truly is no place like home!</h2>
          
          <p class="story">Born right here at the "old" Woodward Hospital in 1963 to Dan "The Milk Man" and Merita Parsons, Dan grew up in a time that was much simpler, when folks stopped to say hello, and in a hometown where they knew you by your first name. Dan comes from a family where hard work and doing a great job because of principle are just a way of life. These skills really came in handy in the big city! From Harry Bears to El Chico, from The Black Eyed Pea to finally Chili's, where Dan hung his hat for 17 years, Dan learned something that would prove invaluable. Great Food, and Great Service, at a reasonable price is what folks want. That's our Goal here at BIG DAN'S! We know you have dining choices and we are honored you've chosen Dan's! ENJOY!</p>
    </div>
    
    <div class="grid_12 pad_15">
      <script type="text/javascript" >
        $(document).ready(function(){
          $("a[rel^='prettyPhoto']").prettyPhoto();
        });
      </script>
      <div class="discover_ok">
        <a href="http://discoveroklahomatv.com/episodes/segment.803">
          <h4>See us on Discover Oklahoma!</h4>
          <img width="180px" height="82px" src="res/img/discover_ok.png" />
        </a>
      </div>
      <div class="come_and_see"></div>
      <div class="pic_ribbon_wrap">
        <div class="pic_ribbon"></div>
        <div class="pic_ribbon_content">
          <div class="pic_ribbon_pic pic1" onclick="expand('01', '', 'Click anywhere to close')"></div>
          <div class="pic_ribbon_pic pic2" onclick="expand('02', '', 'Click anywhere to close')"></div>
          <div class="pic_ribbon_pic pic3" onclick="expand('03', '', 'Click anywhere to close')"></div>
          <div class="pic_ribbon_pic pic4" onclick="expand('04', '', 'Click anywhere to close')"></div>
          <div class="pic_ribbon_pic pic5" onclick="expand('05', '', 'Click anywhere to close')"></div>
          <div class="clear"></div>
        </div>
        <div class="pic_ribbon"></div>
        <div class="pic_enlarge_instruc">click photo to enlarge</div>
        <div class="pic_more_pics">
        	<p class="likey">Like us on</br>
        	<a href="https://www.facebook.com/media/albums/?id=184382701572701" target="_blank">
        	<img src="http://s3.amazonaws.com/quietsight/icons/facebook-150x60.png"></a></br>
        	for more pictures!</p>
        	</div>
      </div>
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