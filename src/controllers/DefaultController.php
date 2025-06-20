<?php

require_once 'AppController.php';
require_once __DIR__ . '/../repository/ProductsRepository.php';
require_once __DIR__ . '/../models/Products.php';
require_once __DIR__ . '/../repository/CartRepository.php';

class DefaultController extends AppController
{
   public function login()
   {
      $this->render('Login');
   }

   public function homePage()
   {
      session_start();
      $this->checkAuth();

      $productRepository = new ProductRepository();
      $products = $productRepository->getAllProducts();

      $this->render('Home', ['products' => $products]);
   }

   public function cart()
   {
      $this->checkAuth();

      $userId = $_SESSION['user_id'];
      $cartRepository = new CartRepository();
      $cartItems = $cartRepository->getCartItemsByUserId($userId);

      $this->render('Cart', ['cartItems' => $cartItems]);
   }

   public function more(int $id)
   {
      $this->checkAuth();

      $productRepository = new ProductRepository();
      $product = $productRepository->getProductById($id);

      if (!$product) {
         http_response_code(404);
         $this->render('NotFound', ['message' => 'Produkt nie istnieje.']);
         return;
      }

      $this->render('More', ['product' => $product]);
   }

   public function account()
   {
      $this->checkAuth();
      $userId = $_SESSION['user_id'];
      $userRepository = new UserRepository();

      $user = $userRepository->getUserById($userId);

      $this->render('Account', ['user' => $user]);
   }
}
