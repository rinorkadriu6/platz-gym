<?php
include_once '../../repository/UserRepository.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $userRepository = new UserRepository();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $role = $_POST['role'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userRepository->updateUser($id, $fullname, $date, $gender, $phone, $address, $role, $email, $password);

        header('Location: users_table.php');
        exit();
    }

    $user = $userRepository->getUserById($id);

    if (!$user) {
        header("Location: users_table.php");
        exit();
    }
} else {
    header("Location: users_table.php");
    exit();
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit User</title>
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
    <<form action="" method="post">>
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>" />

        <label for="fullname">Fullname:</label>
        <input type="text" id="fullname" name="fullname" value="<?php echo $user['fullname']; ?>" required />

        <label for="date">Date:</label>
        <input type="text" id="date" name="date" value="<?php echo $user['date']; ?>" required />

        <label for="gender">Gender:</label>
        <input type="text" id="gender" name="gender" value="<?php echo $user['gender']; ?>" required />

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="<?php echo $user['phone']; ?>" required />

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="<?php echo $user['address']; ?>" required />

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" value="<?php echo $user['role']; ?>" required />

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $user['email']; ?>" required />

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $user['password']; ?>" required />

        <div class="buttons">
            <button type="submit" name="save">Save</button>
            <a href="users_table.php"><button type="button">Cancel</button></a>
        </div>
    </form>
</div>

</body>

</html>
