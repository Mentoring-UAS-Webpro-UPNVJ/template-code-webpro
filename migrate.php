<?php
require_once __DIR__ . '/database/Migration.php';

if (php_sapi_name() !== 'cli') {
    die('This script can only be run from the command line.');
}

$command = $argv[1] ?? 'migrate';
$migration = new Migration();

switch ($command) {
    case 'migrate':
        echo "Running migrations...\n";
        $migration->migrate();
        break;
        
    case 'rollback':
        echo "Rolling back migrations...\n";
        $migration->rollback();
        break;
        
    default:
        echo "Unknown command. Use 'migrate' or 'rollback'\n";
}