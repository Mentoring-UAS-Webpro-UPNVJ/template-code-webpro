<?php
require_once __DIR__ . '/../../utils/Database.php';

class ProductModel {
    private $db;
    
    public function __construct() {
        $this->db = new Database();
    }
    
    public function getAllProducts() {
        $conn = $this->db->getConnection();
        $stmt = $conn->query("SELECT * FROM products ORDER BY created_at DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function createProduct($data) {
        $conn = $this->db->getConnection();
        $sql = "INSERT INTO products (name, price, description, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        return $stmt->execute([$data['name'], $data['price'], $data['description']]);
    }
}