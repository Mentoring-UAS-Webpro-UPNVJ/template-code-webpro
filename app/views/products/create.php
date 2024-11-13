<?php 
$title = 'Add New Product';
require_once 'app/views/layouts/header.php'; 
?>

<div class="container">
    <h1>Add New Product</h1>

    <form action="index.php?controller=product&action=store" method="POST" class="form">
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" id="price" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="4"></textarea>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn">Save Product</button>
            <a href="index.php?controller=product&action=index" class="btn btn-secondary">Cancel</a>
        </div>
    </form>
</div>

<?php require_once 'app/views/layouts/footer.php'; ?>