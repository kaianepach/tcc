<?php

include_once('config.php');

if(isset($_POST['update']))
{
    $Cod_Agenda = $_POST['Cod_Agenda'];
    $data_1 = $_POST['data_1'];
    $horario = $_POST['horario'];
    $obs = $_POST['obs'];

    $sqlUpdate = "UPDATE Agenda_Usuario SET data_1='$data_1',horario='$horario',obs='$obs' WHERE Cod_Agenda='$Cod_Agenda'";

    $result = $conexao->query($sqlUpdate);
}

header('Location:conta.php'); 

?>

