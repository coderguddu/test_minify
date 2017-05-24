<?php
// DB.class.php

class DB {
	
	protected $servername = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbname = "db_test_minify"; 
	public $connection = null;
	// Open a connect to the database.
	// Make sure this is called on every page that needs to use the database.
	
	public function connect() {
	// Create connection
		$connection = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
		// Check connection
		if ($connection->connect_error) {
			die("Connection failed: " . $connection->connect_error);
		}  
		return $connection;
		
	}
}