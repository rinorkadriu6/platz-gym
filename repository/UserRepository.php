<?php

include_once __DIR__ . '/../database/DatabaseConnection.php';
class UserRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($user)
    {
        $conn = $this->connection;

        $id = $user->getId();
        $fullname = $user->getFullname();
        $date = $user->getDate();
        $gender = $user->getGender();
        $phone = $user->getPhone();
        $address = $user->getAddress();
        $role = $user->getRole();
        $email = $user->getEmail();
        $password = $user->getPassword();

        $sql = "INSERT INTO Gym_User (id, fullname, date, gender, phone, address, role, email, password) VALUES (?,?,?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $fullname, $date, $gender, $phone, $address, $role, $email, $password]);

        echo "<script> alert('User has been inserted successfully!'); </script>";
    }

    function getAllUsers()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM Gym_User";

        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM Gym_User WHERE id='$id'";

        $statement = $conn->query($sql);
        $user = $statement->fetch();

        return $user;
    }

    function updateUser($id, $fullname, $date, $gender, $phone, $address, $role, $email, $password)
    {
        $conn = $this->connection;

        $sql = "UPDATE Gym_User SET fullname=?, date=?, gender=?, phone=?, address=?, role=?, email=?, password=? WHERE id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$fullname, $date, $gender, $phone, $address, $role, $email, $password, $id]);

        echo "<script>alert('Update was successful');</script>";
    }

    function deleteUser($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM Gym_User WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }
}
