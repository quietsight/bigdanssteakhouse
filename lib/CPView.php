<?php
class CPView extends COREPage {
	/**
	*
	*
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	public $CPTitle;
	public $CPBase_dir;
	private $CPHostedJquery;
	public $JQUERY_ON;
	
	public function open_view($css_pages='one', $js_pages='one', $onload='no'){
		global $css_folder;
		global $js_folder;
		global $css_default;
		global $js_default;
		
		echo("<html><head>\n");
		// Page Title
		echo("<title>{$this->CPTitle}</title>\n\n");
		// CSS
		if($css_pages!='one'){
			for($i = 0; $i < count($css_pages); $i++){
				echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"{$this->CPBase_dir}$css_folder{$css_pages[$i]}\" />\n");
			}
		} else {
			echo("<link type=\"text/css\" rel=\"stylesheet\" href=\"{$this->CPBase_dir}$css_folder$css_default\" />\n");
		}
		echo("\n\n");
		// JavaScript
		if($this->JQUERY_ON){
			echo("<script type=\"text/javascript\" src=\"{$this->CPHostedJquery}\"></script>\n");
		} else {
			echo("<!-- hosed jQuery off -->\n");
		}
		if($js_pages!='one'){
			for($i = 0; $i < count($js_pages); $i++){
				echo("<script type=\"text/javascript\" src=\"{$this->CPBase_dir}$js_folder{$js_pages[$i]}\"></script>\n");
			}
		} else {
			echo("<script type=\"text/javascript\" src=\"{$this->CPBase_dir}$js_folder$js_default\"></script>\n");
		}
		// Close Head
		if($onload!='no'){
			echo("\n</head>\n</body onload=\"$onload\">");
		} else {
			echo("\n</head>\n</body>\n\n");
		}
	}
	public function default_stack($page){
		self::open_view();
		self::body_content($page);
		self::close_view();
	}
	public function body_content($page){
		include($this->CPBase_dir . $page);
	}
	public function close_view(){
		echo("\n\n</body>\n</html>");
	}
	public function add_title($set){
		$title = $this->CPTitle . " " . $set;
		self::cp_title($title);
	}
	public function jquery_off(){
		$this->JQUERY_ON = false;
	}
	/**
		Getters and Setters
	*/
	public function cp_base_dir($set='none'){
		if($set!='none'){
			$this->CPBase_dir = $set;
		}
		return $this->CPBase_dir;
	}
	public function cp_title($set='none'){
		if($set!='none'){
			$this->CPTitle = $set;
		}
		return $this->CPTitle;
	}
	function __construct(){
		global $page_title_base;
		global $hosted_jquery;
		$this->JQUERY_ON = true;
		$this->CPHostedJquery = $hosted_jquery;
		$this->CPTitle = $page_title_base;
		$this->CPBase_dir = '';
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>