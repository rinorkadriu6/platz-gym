<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../table.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="../../index.php">Home</a></li>
                <li><a href="../../memberships.html">Memberships</a></li>
                <li><a href="../../product.html">Products</a></li>
                <li><a href="../../product.html">Dashboard</a></li>
                <li><a href="../../about.html">About us</a></li>
            </ul>
            <a href="index.html"><img src="../../assets/logo-transparent.png" alt="logo" /></a>
            <ul>
                <li><a href="../../dashboard.php">Dashboard</a></li>
                <li><a href="../../register.html">Register</a></li>
                <li><a href="../../login.html">Log in</a></li>
            </ul>
        </nav>
    </header>

    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="../../dashboard.php">Home</a></li>
                <li><a href="../users/users_table.php">Users</a></li>
                <li><a href="">Memberships</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="">Blogs</a></li>
            </ul>
        </aside>

        <div class="main-content">
        <a href="create.php"><button>Add Product</button></a>
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DATE</th>
                    <th>PRICE</th>
                    <th>DESCRIPTION</th>
                    <th>RATING</th>
                    <th>INSTOCK</th>
                    <th>IMAGE</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php
                include_once '../../../repository/ProductRepository.php';

                $productRepository = new ProductRepository();

                $products = $productRepository->getAllProducts();

                foreach ($products as $product) {
                    echo "
        <tr>
            <td>" . (isset($product['id']) ? $product['id'] : '') . "</td>
            <td>" . (isset($product['name']) ? $product['name'] : '') . "</td>
            <td>" . (isset($product['date']) ? $product['date'] : '') . "</td>
            <td>" . (isset($product['price']) ? $product['price'] : '') . "</td>
            <td>" . (isset($product['description']) ? $product['description'] : '') . "</td>
            <td>" . (isset($product['rating']) ? $product['rating'] : '') . "</td>
            <td>" . (isset($product['inStock']) ? $product['inStock'] : '') . "</td>
            <td>" . (isset($product['imagePath']) ? $product['imagePath'] : '') . "</td>
            <td><a href='edit.php?id=" . (isset($product['id']) ? $product['id'] : '') . "'>Edit</a></td>
            <td><a href='delete.php?id=" . (isset($product['id']) ? $product['id'] : '') . "'>Delete</a></td>
        </tr>";
                }
                ?>
            </table>

        </div>
    </div>
</body>

</html>