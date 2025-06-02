<?php

require_once "Repository.php";

class CartRepository extends Repository
{
    public function addProductToCart(int $userId, int $productId): bool
    {
        try {
            $conn = $this->database->connect();

            $stmt = $conn->prepare('SELECT quantity FROM cart_items WHERE user_id = :user_id AND product_id = :product_id');
            $stmt->execute([
                'user_id' => $userId,
                'product_id' => $productId
            ]);

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                $newQuantity = $row['quantity'] + 1;
                $update = $conn->prepare('UPDATE cart_items SET quantity = :quantity WHERE user_id = :user_id AND product_id = :product_id');
                $update->execute([
                    'quantity' => $newQuantity,
                    'user_id' => $userId,
                    'product_id' => $productId
                ]);
            } else {
                $insert = $conn->prepare('INSERT INTO cart_items (user_id, product_id, quantity) VALUES (:user_id, :product_id, 1)');
                $insert->execute([
                    'user_id' => $userId,
                    'product_id' => $productId
                ]);
            }
            return true;
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }

    public function getCartItemsByUserId(int $userId): array
    {
        $conn = $this->database->connect();

        $stmt = $conn->prepare('
        SELECT ci.quantity, p.*
        FROM cart_items ci
        JOIN products p ON ci.product_id = p.id
        WHERE ci.user_id = :user_id
    ');
        $stmt->execute(['user_id' => $userId]);

        $cartItems = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $product = new Products(
                $row['id'],
                $row['name'],
                $row['image'],
                (float) $row['price'],
                $row['description'],
                $row['ingredients'],
                (int) $row['cals'],
                (int) $row['protein'],
                (int) $row['carbs'],
                (int) $row['fats'],
                (int) $row['fiber'],
                (int) $row['salt'],
                $row['category']
            );

            $cartItems[] = [
                'product' => $product,
                'quantity' => (int) $row['quantity']
            ];
        }

        return $cartItems;
    }

}
