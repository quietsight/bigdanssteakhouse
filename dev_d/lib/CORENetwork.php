<?php
class CORENetwork extends QSObject {
	/**
	*
	*
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	public function JSON($encode, $decode=false){
		if(!$decode){
			return json_encode($encode);
		}
		return json_decode($encode);
	}
	function __construct(){
		parent::__construct();
	}
	function __destruct(){
		parent::__destruct();
	}
}
?>