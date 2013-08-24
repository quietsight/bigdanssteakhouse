<?php
  include('lib/QSFramework.php');
  include('bin/__init__.php');
  include('bin/menu_controller.php');
  
  bdPrintHead();
?>
</head>

<body>
  <div class="container_12">
    <?php menuBar() ?>
    
    <div class="grid_12">
      <div class="floatingNav">
        <a class="menu_float_link" href="menu.php#appetite">
          <div class="menu_float_item float_app">Appetizers</div>
        </a>
        <a class="menu_float_link" href="menu.php#salad">
          <div class="menu_float_item float_salad">Salad Buffet</div>
        </a>
        <a class="menu_float_link" href="menu.php#burgers">
          <div class="menu_float_item float_burgers">Burgers</div>
        </a>
        <a class="menu_float_link" href="menu.php#steaks">
          <div class="menu_float_item float_steaks">Steaks</div>
        </a>
        <a class="menu_float_link" href="menu.php#entrees">
          <div class="menu_float_item float_favorites">Favorites</div>
        </a>
        <a class="menu_float_link" href="menu.php#kids">
          <div class="menu_float_item float_kids">Kids Menu</div>
        </a>
        <a class="menu_float_link" href="menu.php#desserts">
          <div class="menu_float_item float_dessert">Deserts</div>
        </a>
        <div class="clear"></div>
      </div>
    </div>
    
    
    <div class="grid_12 push_44">
      <div class="bd-open7days"></div>
    </div>
    
    <!--
    <div class="grid_12 push_44 hot-bar-wrap">
      <div class="hot-bar" id="item-1">Item 1</div>
      <div class="hot-bar hide" id="item-2">Item 2</div>
      <div class="hot-bar hide" id="item-3">Item 3</div>
      <div class="hot-bar hide" id="item-4">Item 4</div>
      <div class="hot-bar hide" id="item-5">Item 5</div>
    </div>
    -->
    
    <!-- Menu Catigories -->
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head hotbar" id="hotbar"></div>
        <div class="menuitem hotbar-item">
          <div class="menuitem_title">Sunday Lunch</div>
          <div class="menuitem_price">$11.49</div>
          <div class="menuitem_description">Fried Chicken, Chicken Fried Steak, Steak Fingers, Chopped Steak, Chicken Strips, Fried Chicken Livers, Fried Chicken Gizzards, Brisket Baked Ham, Sweet Potatoes, Mashed Potatoes, Gravy, Corn, Green Beans, Rolls, Texas Toast, Fresh Cobbler, and Salad Bar</div>
        </div>
          <div class="menuitem hotbar-item">
          <div class="menuitem_title">Monday Lunch</div>
          <div class="menuitem_price">$10.49</div>
          <div class="menuitem_description">Homemade Meatloaf, Seasoned Baked Chicken,  Seasoned Pork Loin, Mashed Potatoes, Peas, Corn, Potatoes Au-Gratin, Bread, and Fresh Cobbler</div>
        </div>
        <div class="menuitem hotbar-item">
          <div class="menuitem_title">Tuesday Lunch</div>
          <div class="menuitem_price">$11.99</div>
          <div class="menuitem_description">Grilled Steak, Pork Chops, Chopped Steaks, Sauteed Onions, Brown Gravy, Mashed Potatoes, Butter Beans, Bread, and Fresh Cobbler</div>
        </div>
        <div class="menuitem hotbar-item">
          <div class="menuitem_title">Wednesday Lunch</div>
          <div class="menuitem_price">$10.49</div>
          <div class="menuitem_description">Fried Chicken, Chicken Livers, Chicken Gizzards, Chicken Strips, Chicken Fried Steaks, Steak Fingers, Brisket,  Mashed Potatoes, Bread, and Fresh Cobbler</div>
        </div>
        <div class="menuitem hotbar-item">
          <div class="menuitem_title">Thursday  Lunch</div>
          <div class="menuitem_price">$10.49</div>
          <div class="menuitem_description">BBQ Sausage, Rib Tips, BBQ Pork Chops, Home Fries, Baked Beans, Corn On the Cob, Bread, and Fresh Cobbler</div>
        </div>
        <div class="menuitem hotbar-item">
          <div class="menuitem_title">Friday Lunch</div>
          <div class="menuitem_price">$11.49</div>
          <div class="menuitem_description">Baked Talapia, Fried Catfish, Popcorn Shrimp, Fried Polock, Corn On the Cob, Cottage Potato Fries, and Fresh Cobbler</div>
        </div>
        <div class="menuitem hotbar-item"> 
          <div class="menuitem_title">Friday Evening</div>
          <div class="menuitem_price">$22.99</div>
          <div class="menuitem_description">Baked Talapia, Fried Catfish, Popcorn Shrimp, Fried Clams, Veggies, Snow Crab Legs, Peel And Eat Shrimp, and Fresh Cobbler</div>
        </div>
        <div class="menuitem hotbar-item">
          <div class="menuitem_title">Saturday Evening</div>
          <div class="menuitem_price">$18.99</div>
          <div class="menuitem_description">Steak, Popcorn Shrimp, Broccoli And Cheese, Cauliflower And Cheese, Bread, Peel And Eat Shrimp, and Fresh Cobbler</div>
        </div>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head appetite" id="appetite"></div>
        <?php printMenuCatigorie('appetite') ?>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head salad" id="salad"></div>
        <?php printMenuCatigorie('salad') ?>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head burgers" id="burgers"></div>
        <?php printMenuCatigorie('burgers') ?>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head steaks" id="steaks"></div>
        <?php printMenuCatigorie('steaks') ?>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head entrees" id="entrees"></div>
        <?php printMenuCatigorie('entrees') ?>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head kids" id="kids"></div>
        <?php printMenuCatigorie('kids') ?>
      </div>
    </div>
    <div class="grid_12">
      <div class="menu_catigory">
        <div class="menu_cat_head desserts" id="desserts"></div>
        <?php printMenuCatigorie('desserts') ?>
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