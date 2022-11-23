<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $Cod_Cliente = $_POST['Cod_Cliente'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];

    $sqlUpdate = "UPDATE Cliente SET nome='$nome',email='$email',fone='$fone',genero='$genero',nascimento='$nascimento',senha='$senha' WHERE Cod_Cliente='$Cod_Cliente'";

    $result = $conexao->query($sqlUpdate);
}

header('Location:conta.php'); 

?>
