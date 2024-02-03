<?php
include_once '../../../repository/ProductRepository.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $productRepository = new ProductRepository();

    $productRepository->deleteProduct($id);

    header("Location: products_table.php");
    exit();
} else {
    header("Location: products_table.php");
    exit();
}
?>
