<?php

include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$id = $_POST['id'];
$st = $_POST['status'];

alterarSituacao($id, $st);

header('Location: index.php');
