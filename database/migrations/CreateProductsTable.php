<?php
class CreateProductsTable {
    private $db;
    
    public function __construct($db) {
        $this->db = $db;
    }
    
    public function up() {
        $sql = "CREATE TABLE IF NOT EXISTS products (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            price DECIMAL(10,2) NOT NULL,
            description TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        return $this->db->exec($sql);
    }
    
    public function down() {
        $sql = "DROP TABLE IF EXISTS products";
        return $this->db->exec($sql);
    }
}