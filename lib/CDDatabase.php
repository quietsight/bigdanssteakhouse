<?php
class CDDatabase extends COREDatabase {
	/**
	*
	* Main interface for COREDatabase.  Provides basic functionality for connecting to a database
	*
	*
	*
	* @author Skylar Schipper
	* @copyright 2011 Quietsight Inc
	*/
	public $CDServer;
	public $CDUsername;
	public $CDPassword;
	public $CDDatabase;
	
	public $db_con;
	public $has_con;
	
	// Find all in a specified table
	public function find_all($table, $where='false', $equals='none'){
		if(!$this->has_con){
			echo("No database connection please connect using <pre>db_connect()</pre>");
			return;
		}
		if($where=='false'){
			$query = "SELECT * FROM $table";
		} else {
			$query = "SELECT * FROM $table WHERE $where = '$equals'";
		}
		$q = parent::query($query);
		return $q;
	}
	// Connect to Database
	public function db_connect(){
		$this->db_con = @mysql_connect($this->CDServer, $this->CDUsername, $this->CDPassword) or die(parent::error());
		@mysql_select_db($this->CDDatabase, $this->db_con);
		$this->has_con = true;
	}
	/**
	*	Gitters and Setters.
	*
	*/
	public function db_server($set='none'){
		if($set!='none'){
			$this->CDServer = $set;
		}
		return $this->CDServer;
	}
	public function db_username($set='none'){
		if($set!='none'){
			$this->CDUsername = $set;
		}
		return $this->$CDUsername;
	}
	public function db_password($set='none'){
		if($set!='none'){
			$this->CDPassword = $set;
		}
		return $this->CDPassword;
	}
	public function db_database($set='none'){
		if($set!='none'){
			$this->CDDatabase = $set;
		}
		return $this->CDDatabase;
	}
	function __destruct(){
		if($this->has_con){
			mysql_close($this->db_con);
		}
		$this->has_con = false;
		parent::__destruct();
	}
	function __construct(){
		parent::__construct();
		$this->CDServer = parent::db_item('server');
		$this->CDUsername = parent::db_item('username');
		$this->CDPassword = parent::db_item('password');
		$this->CDDatabase = parent::db_item('database');
		$this->has_con = false;
	}
}
?>