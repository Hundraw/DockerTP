<?php

/** Abstract Model class to be extended with other Model classes */
abstract class Model
{
    protected $db;
    protected $table;

    /**
     * Default constructor
     * @param object $db - Controller object that connect database.
     * @param string $table - Table name.
     */
    public function __construct(object $db, string $table)
    {
        $this->db = $db;
        $this->table = $table;
    }

    /**
     * Get all table row.
     */
    public function getAll()
    {
        return $this->db->query("SELECT * FROM {$this->table}");
    }

    /**
     * Get row data by id.
     * @param string $id - ID of row you want to get
     */
    public function getById(string $id)
    {
        return $this->db->query("SELECT * FROM {$this->table} WHERE id = '{$id}'");
    }
}

?>