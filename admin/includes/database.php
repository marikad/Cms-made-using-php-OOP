<?php 

require_once("new_config.php");


class Database {

	 function __construct()
	{
		$this->open_db_connection();
	}

	public $connection;

	public function open_db_connection()
	{
		
		
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if ($this->connection->connect_errno) {
			dd("Database not working " . $this->connection->connect_errno);
		}
	}

	public function query($sql)
	{
		$result = $this->connection->query($sql);
		return $result;
	}

	private function confirm_query($result){
		if (!$result) {
			die("DB connection failed" . $this->connection->error);
		}
	}

	public function escape_string($string)
	{
		$escaped_string = $this->connection->real_escape_string($string);
		return $escaped_string;
	}

	public function insert_id()
	{
		return $this->connection->insert_id;
	}

}

$database = new Database();





?>