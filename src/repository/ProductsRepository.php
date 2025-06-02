<?php

require_once "Repository.php";
require_once __DIR__ . '/../models/Products.php';

class ProductRepository extends Repository
{
    public function getAllProducts(): array
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM products'
        );
        $stmt->execute();

        $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Products(
                $row['id'],
                $row['name'],
                $row['image'],
                $row['price'],
                $row['description'],
                $row['ingredients'],
                $row['cals'],
                $row['protein'],
                $row['carbs'],
                $row['fats'],
                $row['fiber'],
                $row['salt'],
                $row['category']
            );
            $product->setId($row['id']);
            $products[] = $product;
        }

        return $products;
    }

    public function getProductById(int $id): ?Products
    {
        $stmt = $this->database->connect()->prepare(
            'SELECT * FROM products WHERE id = :id'
        );
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        $product = new Products(
            $row['id'],
            $row['name'],
            $row['image'],
            $row['price'],
            $row['description'],
            $row['ingredients'],
            $row['cals'],
            $row['protein'],
            $row['carbs'],
            $row['fats'],
            $row['fiber'],
            $row['salt'],
            $row['category']
        );
        $product->setId($row['id']);

        return $product;
    }
}
