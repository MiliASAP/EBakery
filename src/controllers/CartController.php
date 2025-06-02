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

    public function add()
    {
        if (!$this->isPost()) {
            http_response_code(405);
            echo json_encode(['success' => false, 'message' => 'Method not allowed']);
            return;
        }

        $input = json_decode(file_get_contents("php://input"), true);

        if (!isset($input['productId'])) {
            http_response_code(400);
            echo json_encode(['success' => false, 'message' => 'Missing productId']);
            return;
        }

        $productId = (int) $input['productId'];
        $userId = 1; // TODO: zastąp prawdziwym ID zalogowanego użytkownika

        $result = $this->cartRepository->addProductToCart($userId, $productId);

        if ($result) {
            echo json_encode(['success' => true, 'message' => 'Product added to cart']);
        } else {
            http_response_code(500);
            echo json_encode(['success' => false, 'message' => 'Failed to add product']);
        }
    }
}
