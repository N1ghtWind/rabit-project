<?php
class Advertisement
{
    // Database connection
    private $db;
    public function __construct()
    {
        // Instantiate database connection
        $this->db = new Database;
    }

    public function getAllAdvertisement()
    {
        // select and return all advertisements with users data
        $this->db->query(
            'SELECT 
            users.id AS user_id,
            advertisements.id AS ads_id,
            title,
            user_id, name FROM advertisements INNER JOIN users ON advertisements.user_id = users.id'
        );
        $result = $this->db->resultSet();
        return $result;
    }
}
