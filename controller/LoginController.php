<?php

require_once __DIR__ . '/../classes/Database.php';
require_once __DIR__ . '/../classes/Session.php';

class LoginController extends Database {
    public function autenticarLogin($email, $senha) {
        $pdo = $this->getConnection();
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            Session::start();
            Session::login($usuario);
            return true;
        }


    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';

    if ($email && $senha) {
        $login = new LoginController();
        if ($login->autenticarLogin($email, $senha)) {
            echo json_encode(['status' => '200']);
        } else {
            echo json_encode(['status' => '403']);
        }
    } else {
        echo json_encode(['status' => '402']);
    }
}