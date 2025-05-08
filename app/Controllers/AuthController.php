<?php
    namespace App\Controllers;
    use Core\Controller;
    use Core\Database;
    class AuthController extends Controller {
        public function login() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'] ?? '';
                $senha = $_POST['senha'] ?? '';
                $db = Database::connect();
                $stmt = $db->prepare("SELECT * FROM users WHERE email = ? AND ativo = 1 LIMIT 1");
                $stmt->execute([$email]);
                $user = $stmt->fetch();
                if ($user && password_verify($senha, $user['senha'])) {
                    $_SESSION['user'] = [
                        'id' => $user['id'],
                        'nome' => $user['nome'],
                        'email' => $user['email'],
                        'tipo' => $user['tipo']
                    ];
                    header('Location: /dashboard');
                    exit;
                } else {
                    $this->view('auth/login', ['erro' => 'Credenciais inválidas.']);
                    return;
                }
            }
            $this->view('auth/login');
        }
    }