<?php
require_once __DIR__ . '/../utils/Env.php';

$env = new Env(__DIR__ . '/../.env');

define('DB_HOST', $env->get('DB_HOST'));
define('DB_USER', $env->get('DB_USER'));
define('DB_PASS', $env->get('DB_PASS'));
define('DB_NAME', $env->get('DB_NAME'));