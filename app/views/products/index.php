<?php 
$title = 'Products List';
require_once 'app/views/layouts/header.php'; 
?>

<div class="container">
    <div class="header-actions">
        <h1>Products List</h1>
        <a href="index.php?controller=product&action=create" class="btn">Add New Product</a>
    </div>

    <div class="products-grid">
        <?php if (empty($products)): ?>
        <p class="no-data">No products found.</p>
        <?php else: ?>
        <?php foreach($products as $product): ?>
        <div class="product-card">
            <h2><?= htmlspecialchars($product['name']) ?></h2>
            <p class="price">Rp <?= number_format($product['price'], 0, ',', '.') ?></p>
            <p class="description"><?= htmlspecialchars($product['description']) ?></p>
            <p class="date">Added: <?= date('d M Y', strtotime($product['created_at'])) ?></p>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<?php require_once 'app/views/layouts/footer.php'; ?>