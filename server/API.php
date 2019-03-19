<?php
class API
{
  private $connection;

  public function __construct() {
    $this->connection = $this->connect();
  }

  private function connect() {
    $config = require_once "config.php";
    $connection = mysqli_connect($config["host"], $config["username"], $config["password"], $config["db_name"], $config["port"]);
    $connection->select_db($config["db_name"]);
    $connection->set_charset($config["charset"]);
    return $connection;
  }

  public function execute($sql) {
    $this->connection->query($sql);
  }
}

$api = new API();