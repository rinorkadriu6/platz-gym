<?php
include_once '../../../repository/ProductRepository.php';
include_once '../../../models/Product.php';

$productRepository = new ProductRepository();

$product = new Product('', '', 0, '', 0, 0, '');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product->setId($_POST['id']);
    $product->setName($_POST['name']);
    $product->setPrice($_POST['price']);
    $product->setDescription($_POST['description']);
    $product->setRating($_POST['rating']);
    $product->setInStock($_POST['inStock']);
    $product->setImagePath($_POST['imagePath']);

    $productRepository->insertProduct($product);

    header('Location: products_table.php');
    exit();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product</title>
    <style>
        <style>body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .edit-form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
        }

        button {
            padding: 8px 16px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #4caf50;
            color: white;
        }

        button[type="button"] {
            background-color: #ccc;
        }
    </style>
    </style>
</head>

<body>
    <div class="add-product-form">
        <form action="create.php" method="post">
            <label for="id">Product ID:</label>
            <input type="text" id="id" name="id" required />

            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required />

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required />

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="rating">Rating:</label>
            <input type="text" id="rating" name="rating" required />

            <label for="inStock">In Stock:</label>
            <input type="text" id="inStock" name="inStock" required />

            <label for="imagePath">Image Path:</label>
            <input type="text" id="imagePath" name="imagePath" required />

            <button type="submit" name="add_product">Add Product</button>
        </form>
    </div>
</body>

</html>