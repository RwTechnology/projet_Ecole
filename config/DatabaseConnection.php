<?php
class DatabaseConnection
{
    private $connection = "";

    public function __construct()
    {
        try {
            $conn = new PDO(DNS, DB_USERNAME, DB_PASSWORD,OPTION);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $this->conn=$conn;
        } catch (PDOException $exp) {
            die("Error : " . $exp->getMessage());
        }
    }
}
