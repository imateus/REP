<?php

include_once './dao/_conexao.php';
include_once './dao/usuario.php';

// $_REQUEST recebe dados vindos tango de GET quanto de POST:

$acao = $_REQUEST['acao'];
$status = $_REQUEST['status'];
$id = $_REQUEST['id'];
$login = isset($_REQUEST['login']) ? $_REQUEST['login'] : "";
$senha = $_REQUEST['senha'];
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cpf = $_REQUEST['cpf'];
$departamento = $_REQUEST['departamento'];
$cargo = $_REQUEST['cargo'];
$res = "";

switch ($acao) {
    case "Incluir":
        $res = incluir($login, $senha, $nome, $email, $cpf, $status, $departamento, $cargo);
        break;
    case "Alterar":
        $res = alterar($id, $senha, $nome, $email, $cpf, $status, $departamento, $cargo);
        break;
    case "Inativar":
        $res = inativar($id);
        break;
}

header('Location: index.php');
