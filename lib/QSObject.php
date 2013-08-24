<?php
class QSObject {
	/**
	*
	*
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	public $QSProduction;
	public $QSDirectory_depth;
	
	public function live(){
		if(self::isProduction()=='local'){
			return false;
		} else if(self::isProduction()=='production'){
			return true;
		}
	}
	
	public function db_item($value){
		global $database_settings;
		if(self::live()){
			$key = 'production_' . $value;
			return $database_settings[$key];
		} else {
			$key = 'local_' . $value;
			return $database_settings[$key];
		}
	}
	
	/**
	*
	*	Getters and Setters
	*/
	public function directory_depth($set='none'){
		if($set!='none'){
			$this->QSDirectory_depth;
		}
		return $this->QSDirectory_depth;
	}
	
	public function isProduction($set='none'){
		if($set!='none'){
			$this->QSProduction = $set;
		}
		return $this->QSProduction;
	}
	function __construct(){
		global $location;
		$this->QSProduction = $location;
	}
	function __destruct(){
	}
}
?>