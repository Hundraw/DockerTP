<?php
require_once('Model.php');

class Article extends _Model {
  public function __construct(object $db){
    parent::__construct($db, 'article');
  }
}
?>