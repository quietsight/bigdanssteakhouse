<?php
	function printMenuCatigorie($cat){
		/*
		appetite - base 100
		salad - base 200
		burgers - base 300
		steaks - base 400
		entrees - base 500
		kids - base 600
		desserts - base 700
		unknown - base 800
		*/
		
		$db = new CDDatabase;
		$db->db_connect();
		
		$md = new COREText;
		
		$catNum = 900;
		if($cat=='appetite'){
			$catNum = 100;
		}
		if($cat=='salad'){
			$catNum = 200;
		}
		if($cat=='burgers'){
			$catNum = 300;
		}
		if($cat=='steaks'){
			$catNum = 400;
		}
		if($cat=='entrees'){
			$catNum = 500;
		}
		if($cat=='kids'){
			$catNum = 600;
		}
		if($cat=='desserts'){
			$catNum = 700;
		}
//		echo("$cat [$catNum]");
		
		$q = $db->query("SELECT * FROM menu_items WHERE category = '$catNum'");
		
		$head_text = "";
		$head = $db->find_all('menu_cat_heads','cat_num',$catNum);
		if(mysql_num_rows($head)==1){
			$f_head = mysql_fetch_array($head);
			$head_text = $md->ct_markdown(html_entity_decode($f_head['cat_head']));
			echo("<div class=\"menu_cat_head_text\">\n$head_text\n</div>\n");
		}
			
		
		while($d=mysql_fetch_array($q)){
			$desc = $md->ct_markdown(html_entity_decode($d['description']));
			$extra = $md->ct_markdown(html_entity_decode($d['extra_info']));
			if($extra!=""){
				$new = "<div class=\"menuitem_extra\">$extra</div>";
			} else {
				$new = "<!-- No Extras -->";
			}
			
			$multi_price = array();
			
			$met = $db->find_all("menu_items_meta","item_meta_id",$d['meta_id']);
			if(mysql_num_rows($met)==1){
				$meta = mysql_fetch_array($met);
				if($meta['multi_prices']!=0){
					$price_json = json_decode($meta['price_json']);
					for($i=0; $i<count($price_json); $i++){
						$multi_price[$i]['label']= $price_json[$i]->label;
						$multi_price[$i]['price']= $price_json[$i]->price;
					}
				} else {
					unset($multi_price);
				}
			}
			$price = number_format($d['price'], 2, '.', ',');
			echo("<div class=\"menuitem\">");
				echo("<div class=\"menuitem_title\">" . html_entity_decode($d['title']) . "</div>");
				echo("<div class=\"menu_price_title_separator\"></div>");
				if($multi_price){
					echo("<div class=\"menuitem_price\">");
						for($i=0; $i<count($multi_price); $i++){
							$m_price = number_format($multi_price[$i]['price'], 2, '.', ',');
							echo("{$multi_price[$i]['label']}: \$$m_price<br>");
						}
					echo("</div>");
				} else {
					echo("<div class=\"menuitem_price\">\$$price</div>");
				}
				echo("<div class=\"menuitem_description\">$desc</div>");
				echo($new);
			echo("</div><div class=\"clear\"></div>");
		}
		echo("\n");
	}
?>

