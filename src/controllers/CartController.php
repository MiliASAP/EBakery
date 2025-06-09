<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/CartRepository.php';

class CartController extends AppController
{
    private CartRepository $cartRepository;

    public function __construct()
    {
        parent::__construct();
        $this->cartRepository = new CartRepository();
    }

    private function getUserIdFromSession(): ?int
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        return $_SESSION['user_id'] ?? null;
    }

    public function add()
    {
        $this->checkAuth();
        $userId = $_SESSION['user_id'];

        $input = json_decode(file_get_contents("php://input"), true);

        if (!isset($input['productId']) || !isset($input['quantity'])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Missing productId or quantity']);
            return;
        }

        $productId = (int) $input['productId'];
        $quantity = (int) $input['quantity'];

        if ($productId <= 0 || $quantity <= 0) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Invalid productId or quantity']);
            return;
        }

        $result = $this->cartRepository->addProductToCart($userId, $productId, $quantity);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Product added to cart']);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Failed to add product']);
        }
    }


    public function summary()
    {
        $this->checkAuth();
        $userId = $_SESSION['user_id'];

        $cartItems = $this->cartRepository->getCartItemsByUserId($userId);

        $subtotal = 0;
        $shipping = 10.00;
        $itemsCount = 0;
        foreach ($cartItems as $item) {
            $itemsCount += $item['quantity'];
        }

        if (!empty($cartItems)) {
            foreach ($cartItems as $item) {
                $product = $item['product'];
                $subtotal += $product->getPrice() * $item['quantity'];
            }
        } else {
            $shipping = 0;
        }

        $total = $subtotal + $shipping;

        header('Content-Type: application/json');
        echo json_encode([
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
            'itemsCount' => $itemsCount
        ]);
    }



    public function delete()
    {
        $this->checkAuth();
        $userId = $_SESSION['user_id'];

        $productId = $_GET['id'] ?? null;

        if ($productId === null) {
            http_response_code(400);
            echo json_encode(['error' => 'Missing product id']);
            return;
        }

        $success = $this->cartRepository->deleteCartItem($userId, (int) $productId);

        if ($success) {
            echo json_encode(['success' => true, 'message' => 'Product removed from cart']);
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Failed to remove product']);
        }
    }

}
