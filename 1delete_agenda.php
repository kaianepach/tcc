<?php

include('1conexao.php');

$Cod_Agenda = $_GET['Cod_Agenda'];

$sql = "DELETE FROM AgendaUsu WHERE Cod_Agenda=$Cod_Agenda";

mysqli_query($conn, $sql);
if (mysqli_affected_rows($conn) > 0) {
    echo "<script> alert('Usuário alterado com sucesso.') </script>";
    header("Location: 1lista_agenda.php");
} else {
    echo "<script>alert('Houve algum erro.');</script>";
    mysqli_error($conn);
    echo $conn->error;
}
?>
