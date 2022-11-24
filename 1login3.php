<?php

require_once('conn.php');

$emai_func = filter_var($_POST['emai_func']);
$senha_func = md5($_POST['senha_func']);

$sql = 'SELECT * FROM Funcionario1 WHERE emai_func=:emai_func AND senha_func=:senha_func';
$result = $conn->prepare($sql);
$result->execute(['emai_func => $emai_func, senha_func => $senha_func']);
$user = $result->fetch();

var_dump($user);

?>