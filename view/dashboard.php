<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="dashboard.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="memberships.html">Memberships</a></li>
                <li><a href="product.html">Products</a></li>
                <li><a href="product.html">Dashboard</a></li>
                <li><a href="about.html">About us</a></li>
            </ul>
            <a href="index.html"><img src="assets/logo-transparent.png" alt="logo" /></a>
            <ul>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="login.html">Log in</a></li>
            </ul>
        </nav>
    </header>

    <div class="dashboard-container">
        <aside class="sidebar">
            <h2>Dashboard</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="/platz-gym/view/dash/users_table.php">Users</a></li>
                <li><a href="#">Memberships</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Blogs</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <header>
                <h1>Welcome to the Dashboard</h1>
                <div class="graphs-container">

                    <canvas id="barChart"></canvas>

                    <canvas id="lineChart"></canvas>

                </div>
            </header>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="graphs.js"></script>

</html>