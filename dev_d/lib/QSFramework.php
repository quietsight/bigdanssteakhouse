<?php
/**
*
*
*
*
*
* @author Skylar Schipper
* @copyright 2011 Quietsight Inc
*/
include('QSSettings.php');
// Auto loads class files on 'new'
function __autoload($cn){
	include($cn . ".php");
}
?>