<?php

/** Article model */
class Article extends Model
{
    /**
     * Default constructor.
     * @param object $db - Controller database.
     */
    public function __construct(object $db)
    {
        parent::__construct($db, 'article');
    }
}

?>