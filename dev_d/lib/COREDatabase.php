<?php
class COREDatabase extends QSObject {
	/**
	*
	*
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	
	public function error(){
		return "Error connecting to MySQL in [ ". __class__ . " ] " . mysql_error();
	}
	public function query($s){
		if(!$this->has_con){
			echo("No database connection please connect using <pre>db_connect() in CDDatabase</pre>");
			return;
		}
		$q = @mysql_query($s)or die(mysql_error());
		return $q;
	}
	function __construct(){
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>