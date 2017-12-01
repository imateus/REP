<?php

function antenticar($login, $senha) {
    $sql = "select * from usuario "
            . "where login='" . $login . "'"
            . " and senha = '" . md5($senha) . "'";
    $conn = conectar();
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
    return mysqli_fetch_array($result);
}

function usuarios($usr) {
    if ($usr == "admin") {
        $sql = "select * from usuario ";
    } else {
        $sql = "select * from usuario where `status`='Ativo'";
    }
    $conn = conectar();
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
    return $result;
}

function alterarSituacao($id, $st) {
    $sql = "update usuario set `status`='" . $st . "' where id = " . $id;
    $conn = conectar();
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
    return $result;
}

function incluir($login, $senha, $nome, $email, $cep, $status, $celular, $fixo) {
    $sn = md5($senha);
    $sql = "insert into usuario (login, senha, nome, email, cep, status, celular, fixo )"
            . " values ('$login', '$sn', '$nome', '$email', '$cep', '$status', '$celular', '$fixo')";
    $conn = conectar();
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
    return $result;
}

function alterar($id, $senha, $nome, $email, $cep, $status, $celular, $fixo) {
    $sn = md5($senha);
    $sql = "update usuario set "
            . "senha='$sn', nome='$nome', email='$email', cep='$cep', status='$status' , celular='$celular', fixo='$fixo'"
            . " where id = $id";
    $conn = conectar();
    $result = mysqli_query($conn, $sql);
    desconectar($conn);
    return $result;
}
