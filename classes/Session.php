<?php

class Session
{
    public static function start()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function login($usuario)
    {
        $_SESSION['usuario'] = [
            'id' => $usuario['id'],
            'nome' => $usuario['nome'],
            'email' => $usuario['email']
        ];
    }

    public static function logout()
    {
        session_destroy();
    }

    public static function usuarioLogado() {
        return $_SESSION['usuario'] ?? null; 
    }
}
