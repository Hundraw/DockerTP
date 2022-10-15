<?php
require_once('Model.php');

class Role extends _Model {
  public function __construct(object $db){
    parent::__construct($db, 'role');
  }
}
?>