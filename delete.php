<?php

if (!empty($_GET['Cod_Agenda'])) 

    {

    include_once('config.php');

    $Cod_Agenda = $_GET['Cod_Agenda'];

    $sqlSelect = "SELECT * FROM Agenda_Usuario WHERE Cod_Agenda=$Cod_Agenda";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM Agenda_Usuario WHERE Cod_Agenda=$Cod_Agenda";
        $resultDelete = $conexao->query($sqlDelete);
    }
    }

    header('Location: conta.php');

?>


