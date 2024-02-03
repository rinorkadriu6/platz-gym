<?php
include_once '../repository/ProductRepository.php';
$productRepository = new ProductRepository();

$products = $productRepository->getAllProducts();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="product.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="memberships.html">Memberships</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About us</a></li>
            </ul>
            <a href="index.html"><img src="assets/logo-transparent.png" alt="logo" /></a>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="login.html">Log in</a></li>
            </ul>
        </nav>
    </header>
    <div class="hero-section">
        <a href="login.html">
            <div class="slider">
            </div>
        </a>
        <button class="slider-btn prev-btn" onclick="prevSlide()">&#10094;</button>
        <button class="slider-btn next-btn" onclick="nextSlide()">&#10095;</button>
    </div>

    <h2 id="sector-title" style="font-size: 46px; font-family: Krona One;">ALL-TIME BEST SELLERS</h2>
    <div class="product-sector">
        <div class="products">
            <?php foreach ($products as $product) : ?>
                <div class="product-card">
                    <a href="">
                        <!-- Use the product information dynamically -->
                        <img src="assets/<?php echo $product['imagePath']; ?>" alt="<?php echo $product['name']; ?>">
                        <p class="product-name"><?php echo $product['name']; ?></p>
                        <p class="rating">⭐⭐⭐⭐⭐</p>
                        <p class="price">$<?php echo $product['price']; ?></p>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <h2 id="sector-title" style="font-size: 46px; font-family: Krona One;">SHOP POPULAR BRAND WEAR</h2>
    <div class="product-sector">
        <div class="products">
            <div class="product-card">
                <a href="">
                    <img src="assets/gym-shark-blackshirt.webp" alt="Product 1">
                    <p class="product-name">GYM SHARK T-SHIRT</p>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="price">$19.99</p>
                </a>
            </div>

            <div class="product-card">
                <a href="">
                    <img src="assets/oversized-gymshark.webp" alt="Product 2">
                    <p class="product-name">GYM SHARK OVERSIZED</p>
                    <p class="rating">⭐⭐⭐⭐⭐</p>
                    <p class="price">$19.99</p>
                </a>
            </div>

            <div class="product-card">
                <a href="">
                    <img style="height: 300px;" src="assets/gold's gym.jpg" alt="Product 3">
                    <p class="product-name">GOLD'S GYM T-SHIRT</p>
                    <p class="rating">⭐⭐⭐⭐</p>
                    <p class="price">$24.99</p>
                </a>
            </div>

            <div class="product-card">
                <a href="">
                    <img src="assets/golds-gym-black-shirt.jpg" alt="Product 4">
                    <p class="product-name">GOLD'S GYM T-SHIRT</p>
                    <p class="rating">⭐⭐⭐⭐</p>
                    <p class="price">$24.99</p>
                </a>
            </div>
        </div>
    </div>
    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-section">
                <div class="social-icons">
                    <a href="#" target="_blank"><img src="assets/fb-logo.png" alt="Facebook"></a>
                    <a href="#" target="_blank"><img src="assets/twt-logo.png" alt="Twitter"></a>
                    <a href="#" target="_blank"><img src="assets/ig-logo.png" alt="Instagram"></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>Email: info@tomplatzgym.com</p>
                <p>Phone: +1 (123) 456-7890</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a style="color: #000;" href="#">Home</a></li>
                    <li><a style="color: #000;" href="#">Memberships</a></li>
                    <li><a style="color: #000;" href="#">Products</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>About Tom Platz Gym</h3>
                <p>Welcome to Tom Platz Gym, your fitness destination for a healthier lifestyle. We provide
                    state-of-the-art facilities and personalized fitness programs to help you achieve your fitness
                    goals.</p>
            </div>
        </div>
        <p class="copyright">&copy; 2023 Tom Platz Gym. All rights reserved.</p>
    </footer>


    <script src="slider.js"></script>
</body>

</html>