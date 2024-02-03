<?php

include_once __DIR__ . '/../database/DatabaseConnection.php';

class ProductRepository
{
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnection;
        $this->connection = $conn->startConnection();
    }

    public function insertProduct($product)
    {
        $conn = $this->connection;

        $id = $product->getId();
        $name = $product->getName();
        $price = $product->getPrice();
        $description = $product->getDescription();
        $rating = $product->getRating();
        $inStock = $product->getInStock();
        $imagePath = $product->getImagePath();

        $sql = "INSERT INTO Products (id, name, price, description, rating, inStock, imagePath) VALUES (?, ?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $name, $price, $description, $rating, $inStock, $imagePath]);

        echo "<script> alert('Product has been inserted successfully!'); </script>";
    }

    public function getAllProducts()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM Products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }


    public function getProductById($id)
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM Products WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        $product = $statement->fetch();

        return $product;
    }

    public function updateProduct($id, $name, $price, $description, $rating, $inStock, $imagePath)
    {
        $conn = $this->connection;

        $sql = "UPDATE Products SET name=?, price=?, description=?, rating=?, inStock=?, imagePath=? WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $price, $description, $rating, $inStock, $imagePath, $id]);

        echo "<script>alert('Update was successful');</script>";
    }

    public function deleteProduct($id)
    {
        $conn = $this->connection;

        $sql = "DELETE FROM Products WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);

        echo "<script>alert('Delete was successful');</script>";
    }
}
