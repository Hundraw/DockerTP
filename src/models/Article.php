<?php
require_once 'Model.php';

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

    /**
     * @param string $title
     * @param string $content
     * @param string $author
     * @return void
     */
    public function addArticle(string $title, string $content, string $author) {
        $this->db->query(<<<EOT
            INSERT INTO {$this->table}(title, content, author_id)
            VALUES ('{$title}', '{$content}', '{$author}')
        EOT);
    }
}

?>