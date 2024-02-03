<?php
include_once '../../../repository/ProductRepository.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $productRepository = new ProductRepository();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $rating = $_POST['rating'];
        $inStock = $_POST['inStock'];
        $imagePath = $_POST['imagePath'];

        $productRepository->updateProduct($id, $name, $price, $description, $rating, $inStock, $imagePath);

        header('Location: products_table.php');
        exit();
    }

    $product = $productRepository->getProductById($id);

    if (!$product) {
        header("Location: products_table.php");
        exit();
    }
} else {
    header("Location: products_table.php");
    exit();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Product</title>
    <link rel="stylesheet" href="/platz-gym/view/dashboard.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
    <style>
        body {
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
</head>

<body>
    <div class="edit-form">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>" />

            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required />

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>" required />

            <label for="description">Description:</label>
            <textarea id="description" name="description" required><?php echo $product['description']; ?></textarea>

            <label for="rating">Rating:</label>
            <input type="text" id="rating" name="rating" value="<?php echo $product['rating']; ?>" required />

            <label for="inStock">In Stock:</label>
            <input type="text" id="inStock" name="inStock" value="<?php echo $product['inStock']; ?>" required />

            <label for="imagePath">Image Path:</label>
            <input type="text" id="imagePath" name="imagePath" value="<?php echo $product['imagePath']; ?>" required />

            <div class="buttons">
                <button type="submit" name="save">Save</button>
                <a href="products_table.php"><button type="button">Cancel</button></a>
            </div>
        </form>
    </div>
</body>

</html>
