<?php
class Controler {
  private static $dbHost = 'db';
  private static $dbName = 'blog';
  private static $dbUser = 'root';
  private static $dbPassword = 'password';

  public $db;

  public function __construct() {
    $this->db = new PDO(
      'pgsql:host='.self::$dbHost.';dbname='.self::$dbName,
      self::$dbUser,
      self::$dbPassword);
  }
}
?>