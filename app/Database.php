<?php

class Database
{
	private $driver;
	private $host;
	private $database;
	private $charset;
	private $username;
	private $password;
	private $dataServerName;
	public $connect;

	public function __construct()
	{
		$this->driver	 = 'mysql';
		$this->host		 = 'localhost';
		$this->database = 'xpeedstudio';
		$this->charset	 = 'utf8mb4';
		$this->username = 'root';
		$this->password = '';

		$this->dataServerName = '' . $this->driver . ':host=' . $this->host . ';dbname=' . $this->database . ';charset=' . $this->charset . '';

		try {
			$this->connect = new PDO($this->dataServerName, $this->username, $this->password);
			$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			return $this->connect;
		} catch (\PDOException $e) {
			return 'Connection error: ' . $e->getMessage();
		}
	}
}
