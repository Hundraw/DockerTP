<?php
require_once('Model.php');

class Comment extends _Model {
  public function __construct(object $db){
    parent::__construct($db, 'comment');
  }
}
?>