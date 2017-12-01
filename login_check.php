<?php

include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

if (antenticar($login, $senha) == TRUE) {
    session_start();
    $_SESSION["usuario"] = $_POST['login'];
    $_SESSION[" "] = $_POST['senha'];
    header('Location: index.php');
} else {

    echo "<script>" .
    "alert('Usuário / Senha inválido !');" .
    "window.location = 'login.html'" .
    "</script>";
}