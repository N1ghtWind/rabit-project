<?php
class User
{

    // Database connection
    private $db;
    public function __construct()
    {
        // Instantiate database connection
        $this->db = new Database;
    }

    public function getAllUser() {
        // select and return all users
        $this->db->query('SELECT * FROM users');
        $result = $this->db->resultSet();
        return $result;
    }

}
