<?php
require_once __DIR__ . '/../models/ProductModel.php';

class ProductController {
    private $productModel;
    
    public function __construct() {
        $this->productModel = new ProductModel();
    }
    
    public function index() {
        $products = $this->productModel->getAllProducts();
        view('products/index', ['products' => $products]);
    }
    
    public function create() {
        view('products/create');
    }
    
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'description' => $_POST['description']
            ];
            
            $this->productModel->createProduct($data);
            redirect('index.php?controller=product&action=index');
        }
    }
}