<?php
require_once 'Database.php';

class Person {

    private $conn;
    private $table_name = "persons";

    public $id;
    public $name;
    public $email;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function getAll() {
        
        $query = 'SELECT * FROM persons';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function getById($id) {

        $query = 'SELECT * FROM " . $this->table_name . " WHERE id = :id';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public function create($name, $surname) {

        $query = 'INSERT INTO persons (name, surname) VALUES (:name, :surname)';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':surname', $surname);

        $stmt->execute();
    }

    public function update($id, $name, $surname) {

        $query = 'UPDATE persons SET name = :name, surname = :surname WHERE id = :id';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(';name', $name);
        $stmt->bindParam(':surname', $surname);
        
        $stmt->execute();
    }

    public function delete($id) {
        
        $query = 'DELETE FROM persons WHERE id = :id';
    
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
                
        $stmt->execute();
    }
}
?>
