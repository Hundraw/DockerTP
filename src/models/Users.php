<?php
require_once('Model.php');

/** Users model */
class Users extends _Model {
  /**
   * Default constructor.
   * @param object $db - Controler database.
   */
  public function __construct(object $db){
    parent::__construct($db, 'users');
  }

  /**
   * Should add a new basic user to the database.
   * @param string $id - Email of the new user.
   * @param string $name - Name of the new user.
   * @param string $password - Password of the new user.
   */
  public function addUser(string $id, string $name, string $password) {
    $this->db->query(<<<EOT
      INSERT INTO {$this->table}(id, name, password, role_id) 
      VALUES ('{$id}', '{$name}', '{$password}', 2)
    EOT);
  }
}
?>