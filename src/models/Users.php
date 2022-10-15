<?php
require_once('Model.php');

class Users extends _Model {
  public function __construct(object $db){
    parent::__construct($db, 'users');
  }
}
?>