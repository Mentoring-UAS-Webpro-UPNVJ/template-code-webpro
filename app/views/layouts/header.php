<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'PHP MVC Boilerplate' ?></title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <nav class="nav transparent">
        <div class="container nav-container">
            <a href="index.php" class="nav-brand">PHP MVC</a>
            <div class="nav-links">
                <a href="index.php" class="nav-link">Home</a>
                <a href="index.php?controller=product&action=index" class="nav-link">Products</a>
            </div>
        </div>
    </nav>