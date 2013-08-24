<?php
include('3rdparty/markdown.php');
include('3rdparty/smartypants.php');

class COREText extends QSObject {
	/**
	*
	*
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	public function ct_markdown($text){
		return smartypants(markdown($text));
	}
	public function ct_markdown_file($file){
		return self::ct_markdown(file_get_contents($file));
	}
	public function ct_parse_file($file, $section=''){
		$cont = file_get_contents($file);
		
		$str = explode("[*****]", $cont);
		
		$arr = array();
		$ret = '<!-- BGGEN -->';
		
		if($section!=''){
			$ret = "### ERROR";
		}
		
		for($i = 0; $i<count($str); $i++){
			$holder = explode("[#######]", $str[$i]);
			$arr[$i]['title'] = $holder[0];
			$sec = trim($holder[0], "\n");
			$arr[$i]['body'] = $holder[1];
			
			if($section==$sec){
				$ret = "<!-- BGGEN -->{$holder[1]}";
			}
			if($section==''){
				$ret .= $holder[1] . " *** \n";
			}
		}
		return self::ct_markdown($ret);
	}
	public function ct_write_to_file($file, $section, $content){
		$old = file_get_contents($file);
		$f = fopen($file, "w");
		fwrite($f, "");
		fclose($f);
		
		$f = fopen($file, "w");
		
		$cont = explode("[*****]", $old);
		
		$arr = array();
		
		for($i = 0; $i<count($cont); $i++){
			$holder = explode("[#######]", $cont[$i]);
			$arr[$i]['title'] = $holder[0];
			$sec = trim($holder[0], "\n");
			$arr[$i]['body'] = $holder[1];
			if($section==$sec){
				$arr[$i]['body'] = $content;
			}
		}
		
		$str = "";
		
		for($i = 0; $i<count($arr); $i++){
			$del = "[*****]";
			if($i==0){
				$del = "";
			}
			$str .= $del . $arr[$i]['title'];
			$str .= "[#######]";
			$str .= $arr[$i]['body'] . "\n";
		}
		
		fwrite($f, $str);
		
		fclose($f);
	}
	public function ct_write_json_to_file($file, $json){
		$old = file_get_contents($file);
		$f = fopen($file, "w");
		fwrite($f, "");
		fclose($f);
		$f = fopen($file, "w");
		$str = json_encode($json);
		fwrite($f, $str);
		fclose($f);
	}
	public function ct_get_json_from_file($file){
		$str = file_get_contents($file);
		$json = json_decode($str);
		return($json);
	}
	function __construct(){
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}


?>