<?php
function redirect($url) {
    header("Location: $url");
    exit();
}

function view($viewName, $data = []) {
    extract($data);
    require_once "app/views/$viewName.php";
}