<?php
require_once __DIR__ . '/../classes/Database.php';

class Usuario extends Database {
    public function cadastrar($nome, $email, $senha, $cpf, $telefone) {
        $pdo = $this->getConnection();
        $sql = "INSERT INTO usuarios (nome, email, senha, cpf, telefone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([$nome, $email, password_hash($senha, PASSWORD_DEFAULT), $cpf, $telefone]);
    }
}
