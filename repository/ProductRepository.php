<?php

include_once "../database/DatabaseConnection.php";

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

        $name = $product->getName();
        $price = $product->getPrice();
        $description = $product->getDescription();
        $rating = $product->getRating();
        $inStock = $product->getInStock();
        $imagePath = $product->getImagePath();

        $sql = "INSERT INTO Products (name, price, description, rating, inStock, imagePath) VALUES (?, ?, ?, ?, ?, ?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$name, $price, $description, $rating, $inStock, $imagePath]);

        echo "<script> alert('Product has been inserted successfully!'); </script>";
    }

    public function getAllProducts()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM Products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll(PDO::FETCH_CLASS, 'Product');

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

    public function updateProduct($id, $name, $price)
    {
        $conn = $this->connection;

        $sql = "UPDATE Products SET name=?, price=? WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$name, $price, $id]);

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
