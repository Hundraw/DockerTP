<?php

class Comment extends Model
{
    public function __construct(object $db)
    {
        parent::__construct($db, 'comment');
    }
}

?>