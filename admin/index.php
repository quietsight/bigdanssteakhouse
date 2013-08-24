<?php
	include('../bin/__init__.php');
	init('../');
	$ct = new COREText;
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

	<title>Big Dan's Steakhouse - Admin</title>
	
	<link type="text/css" rel="stylesheet" href="res/css.css" />
	<link type="text/css" rel="stylesheet" href="res/site/bd_css.css"
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="res/spin.js"></script>
	<script type="text/javascript" src="res/js.js"></script>
	<script type="text/javascript" src="res/site/bd_be.js"></script>
	
	
</head>

<body onload="LoadPage('menu')">
	<div class="head">
		Big Dan's Steakhouse - Admin
	</div>

	<div class="menu_bar">
		<div class="menu_bar_wraper">
			<div class="menu_bar_item" onclick="LoadPage('content')">
				Content
			</div>
			<div class="menu_bar_item" onclick="LoadPage('menu')">
				Menu
			</div>
			<div class="menu_bar_item" onclick="LoadPage('specials')">
				Specials
			</div>
			<div class="menu_bar_item" onclick="Stats()">
				Stats
			</div>
			<div class="menu_bar_item" onclick="LoadPage('images')">
				Images
			</div>
			<div class="clear"></div>
		</div>
	</div>
	
	<div class="content">
		<div class="welcome_info">
		</div>
	</div>
	
</body>
</html>