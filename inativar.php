<?php

include_once './dao/_conexao.php';
include_once './dao/usuario.php';

$login = $_POST['login'];


delete($login);
header('Location: index.php');
 ?>
