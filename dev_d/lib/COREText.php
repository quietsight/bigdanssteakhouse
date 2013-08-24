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
	public function ct_markdown_from_file($file){
		$f = file_get_contents($file);
		return(self::ct_markdown($f));
	}
	public function ct_markdown($text){
		return smartypants(markdown($text));
	}
	function __construct(){
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}


?>