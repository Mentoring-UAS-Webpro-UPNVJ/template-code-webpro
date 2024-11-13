<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../utils/Database.php';

class Migration {
    private $db;
    private $migrations = [];
    
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->loadMigrations();
    }
    
    private function loadMigrations() {
        $files = glob(__DIR__ . '/migrations/*.php');
        foreach ($files as $file) {
            // Get filename without extension
            $className = pathinfo($file, PATHINFO_FILENAME);
            
            // Convert filename to proper class name (snake_case to PascalCase)
            $className = str_replace(' ', '', ucwords(str_replace('_', ' ', $className)));
            
            require_once $file;
            
            if (class_exists($className)) {
                $this->migrations[] = $className;
            } else {
                echo "Warning: Class '$className' not found in file '$file'\n";
            }
        }
    }
    
    public function migrate() {
        if (empty($this->migrations)) {
            echo "No migrations found.\n";
            return;
        }

        foreach ($this->migrations as $migration) {
            $instance = new $migration($this->db);
            try {
                $instance->up();
                echo "Migrated: $migration\n";
            } catch (PDOException $e) {
                echo "Error in $migration: " . $e->getMessage() . "\n";
            }
        }
    }
    
    public function rollback() {
        if (empty($this->migrations)) {
            echo "No migrations found.\n";
            return;
        }

        $migrations = array_reverse($this->migrations);
        foreach ($migrations as $migration) {
            $instance = new $migration($this->db);
            try {
                $instance->down();
                echo "Rolled back: $migration\n";
            } catch (PDOException $e) {
                echo "Error in $migration: " . $e->getMessage() . "\n";
            }
        }
    }
}