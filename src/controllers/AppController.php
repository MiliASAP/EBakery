<?php
class AppController
{
    private $request;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_METHOD'];

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    protected function render(string $template = null, array $variables = [])
    {
        $templatePath = 'public/views/' . $template . '.php';
        $output = 'File not found';

        if (file_exists($templatePath)) {
            extract($variables);

            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }

        print $output;
    }

    protected function checkAuth(): void
    {
        session_start();
        if (!isset($_SESSION['user_id']) || !isset($_SESSION['email'])) {
            header('Location: /login');
            exit();
        }
    }
}