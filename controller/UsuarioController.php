<?php
require_once __DIR__ . '/../classes/Usuario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $cpf_bruto = $_POST['cpf'] ?? '';
    $telefone_bruto = $_POST['telefone'] ?? '';
    $cpf = preg_replace('/\D/', '', $cpf_bruto);
    $telefone = preg_replace('/\D/', '', $telefone_bruto);


    if ($nome && $email && $senha) {
        $usuario = new Usuario();
        $cadastrado = $usuario->cadastrar($nome, $email, $senha, $cpf, $telefone);
        echo json_encode(['status' => $cadastrado ? '200' : '400']);
    } else {
        echo json_encode(['status' => '402']);
    }
}
