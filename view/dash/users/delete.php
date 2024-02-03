<?php
include_once '../../repository/UserRepository.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $userRepository = new UserRepository();

    $userRepository->deleteUser($id);

    header("Location: products_table.php");
    exit();
} else {
    header("Location: products_table.php");
    exit();
}
?>
