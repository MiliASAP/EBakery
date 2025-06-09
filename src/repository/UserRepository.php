<?php

require_once "Repository.php";
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{
    public function createUser(string $name, string $surname, string $email, string $password)
    {
        $name = trim($name);
        $surname = trim($surname);
        $email = trim($email);

        if (empty($name) || empty($surname)) {
            throw new InvalidArgumentException('Name and surname cannot be empty.');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid email format.');
        }

        if (strlen($password) < 8) {
            throw new InvalidArgumentException('Password must be at least 8 characters long.');
        }

        $conn = $this->database->connect();

        $checkStmt = $conn->prepare('SELECT COUNT(*) FROM users WHERE email = :email');
        $checkStmt->bindParam(':email', $email, PDO::PARAM_STR);
        $checkStmt->execute();

        if ($checkStmt->fetchColumn() > 0) {
            throw new Exception('User with this email already exists.');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            'INSERT INTO users(name, surname, email, password) VALUES (:name, :surname, :email, :password)'
        );
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':surname', $surname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

        try {
            $stmt->execute();
            return (int) $conn->lastInsertId();
        } catch (PDOException $e) {
            throw new Exception('Database error: ' . $e->getMessage());
        }
    }


    public function getUser(string $email): ?User
    {
        $stat = $this->database->connect()->prepare(
            'SELECT * FROM users WHERE email = :email'
        );
        $stat->bindParam(':email', $email, PDO::PARAM_STR);
        $stat->execute();

        $user = $stat->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            (int) $user['id'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
        );
    }

    public function getUserById(int $id)
    {
        $stat = $this->database->connect()->prepare(
            'SELECT * FROM users WHERE id = :id'
        );
        $stat->bindParam(':id', $id, PDO::PARAM_STR);
        $stat->execute();

        $user = $stat->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            (int) $user['id'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname'],
        );
    }
}