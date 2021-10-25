<?php

class ProductModel
{
    private $pdo;

    public function __construct()
    {
        $database = new DBConnect("root", "truong2003@VNT");
        $this->pdo = $database->connect();
    }
    public function getAllProduct()
    {
        try {
            $sql = "SELECT * FROM products";
            $stmt = $this->pdo->query($sql);
            $products = $stmt->fetchAll();
            return ($products);
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
    public function addProduct($product)
    {
        try {
            $sql = "INSERT INTO products (name,category,price,quantity,dateGenerate,description)VALUES (:name ,:category,:price,:quantity,:dateGenerate,:description)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":name", $product['name']);
            $stmt->bindParam(":category", $product['category']);
            $stmt->bindParam(":price", $product['price']);
            $stmt->bindParam(":quantity", $product['quantity']);
            $stmt->bindParam(":dateGenerate", $product['dateGenerate']);
            $stmt->bindParam(":description", $product['description']);
            $stmt->execute();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
    public function deleteProduct($id)
    {
        try {
            $sql = "DELETE FROM products WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }
    public function search($key)
    {
        try {
            $sql = "SELECT * FROM products WHERE name LIKE N'%$key%'";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }

    public function getProductById($id)
    {
        try {
            $sql = "SELECT * FROM products WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }

    public function edit($product)
    {
        try {
            $sql = "UPDATE products
SET  name = :name1, category=:category,price = :price,quantity = :quantity,dateGenerate = :dateGenerate, description = :description
WHERE id = :id";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(":id", $product['id']);
            $stmt->bindParam(":name1", $product['name']);
            $stmt->bindParam(":category", $product['category']);
            $stmt->bindParam(":price", $product['price']);
            $stmt->bindParam(":quantity", $product['quantity']);
            $stmt->bindParam(":dateGenerate", $product['dateGenerate']);
            $stmt->bindParam(":description", $product['description']);
            $stmt->execute();

        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            exit();
        }
    }


}