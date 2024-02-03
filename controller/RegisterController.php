<?php
include_once '../repository/UserRepository.php';
include_once '../models/User.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['fullname']) || empty($_POST['date']) || empty($_POST['gender']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $name = $_POST['fullname'];
        $date = $_POST['date'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $username.rand(100,999);

        $user  = new User($id,$fullname,$date,$gender,$phone,$address,$email,$password);
        $userRepository = new UserRepository();

        $userRepository->insertUser($user);
    }
}



?>