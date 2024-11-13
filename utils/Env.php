<?php
class Env {
    protected $path;
    protected $variables = [];

    public function __construct($path) {
        $this->path = $path;
        $this->load();
    }

    protected function load() {
        if (!file_exists($this->path)) {
            throw new Exception('.env file not found');
        }

        $lines = file($this->path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos($line, '=') !== false) {
                list($name, $value) = explode('=', $line, 2);
                $name = trim($name);
                $value = trim($value);
                
                // Remove quotes if they exist
                $value = trim($value, '"\'');
                
                $this->variables[$name] = $value;
            }
        }
    }

    public function get($key, $default = null) {
        return isset($this->variables[$key]) ? $this->variables[$key] : $default;
    }
}