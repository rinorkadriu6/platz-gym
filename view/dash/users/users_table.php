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
                <li><a href="../../product.php">Products</a></li>
                <li><a href="../../blog.html">Blog</a></li>
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
                <li><a href="../dashboard.php">Home</a></li>
                <li><a href="#">Users</a></li>
                <li><a href="">Memberships</a></li>
                <li><a href="../products/products_table.php">Products</a></li>
                <li><a href="">Blogs</a></li>
            </ul>
        </aside>

        <div class="main-content">
            <table border="1">
                <tr>
                    <th>ID</th>
                    <th>FULLNAME</th>
                    <th>DATE</th>
                    <th>GENDER</th>
                    <th>PHONE</th>
                    <th>ADDRESS</th>
                    <th>ROLE</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php
                include_once '../../../repository/UserRepository.php';

                $userRepository = new UserRepository();

                $users = $userRepository->getAllUsers();

                foreach ($users as $user) {
                    echo "
        <tr>
            <td>" . (isset($user['id']) ? $user['id'] : '') . "</td>
            <td>" . (isset($user['fullname']) ? $user['fullname'] : '') . "</td>
            <td>" . (isset($user['date']) ? $user['date'] : '') . "</td>
            <td>" . (isset($user['gender']) ? $user['gender'] : '') . "</td>
            <td>" . (isset($user['phone']) ? $user['phone'] : '') . "</td>
            <td>" . (isset($user['address']) ? $user['address'] : '') . "</td>
            <td>" . (isset($user['role']) ? $user['role'] : '') . "</td>
            <td>" . (isset($user['email']) ? $user['email'] : '') . "</td>
            <td>" . (isset($user['password']) ? $user['password'] : '') . "</td>
            <td><a href='edit.php?id=" . (isset($user['id']) ? $user['id'] : '') . "'>Edit</a></td>
            <td><a href='delete.php?id=" . (isset($user['id']) ? $user['id'] : '') . "'>Delete</a></td>
        </tr>";
                }
                ?>
            </table>

        </div>
    </div>
</body>

</html>