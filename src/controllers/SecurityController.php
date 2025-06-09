<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{
    private UserRepository $userRepository;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
    }

    public function register()
    {
        $name = $_POST['name'] ?? '';
        $surname = $_POST['surname'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $passwordRep = $_POST['password-rep'] ?? '';

        if (empty($name) || empty($surname) || empty($email) || empty($password)) {
            return $this->render('login', ['messages' => ['Wszystkie pola są wymagane.']]);
        }

        if ($password !== $passwordRep) {
            return $this->render('login', ['messages' => ['Hasła nie są takie same.']]);
        }

        try {
            $userId = $this->userRepository->createUser($name, $surname, $email, $password);

            $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
            $url = $protocol . "://$_SERVER[HTTP_HOST]";
            $this->render('login', ['messages' => ['User added']]);
            exit();
        } catch (Exception $e) {
            return $this->render('login', ['messages' => [$e->getMessage()]]);
        }
    }

    public function login()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = $this->userRepository->getUser($email);

        if (!$user || !password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ['Invalid email or password']]);
        }

        $_SESSION['user_id'] = $user->getId();
        $_SESSION['email'] = $user->getEmail();
        setcookie("testcookie", "works", time() + 3600);

        header('Location: /homePage');
        exit();
    }


    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');
        header('Location: /login');
        exit();
    }

}