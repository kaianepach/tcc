<html>
<?php
include('1conexao.php');

$Cod_Agenda = $_GET['Cod_Agenda'];

if (isset($_POST['btnSalvar'])) {
    $cod_Cliente = $_POST['cod_Cliente'];
    $data_1 = $_POST['data_1'];
    $horario = $_POST['horario'];
    $obs = $_POST['obs'];

    $sql = "UPDATE AgendaUsu SET 
                cod_Cliente='$cod_Cliente', 
                data_1='$data_1', 
                horario='$horario',
                obs='$obs'
            WHERE Cod_Agenda='$Cod_Agenda'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: 1lista_agenda.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM AgendaUsu WHERE Cod_Agenda=$Cod_Agenda";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
?>
<html>
<?php include('1menu.php'); ?>
<div class="container">
<style>
.container {
    width: 28%;
    
    border-radius: 20px;
    
 }


</style>


    <h3 class='p-3'>Edite seu agendamento</h3>
    <form method="post">
        <div class="form-group">
            Nome Completo: <input class='form-control' type="text" placeholder="Nome Completo" name="cod_Cliente" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['cod_Cliente'] ?>  /> 
        </div>
    
        <div class="form-group">
            Data: <input class='form-control' type="text" placeholder="Data" name="data_1" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['data_1']?> />
        </div>
        <div class="form-group">
            Horário: <input class='form-control' type="text" placeholder="Horário" name="horario" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['horario']?> />
        </div>
        <div class="form-group">
            Observação: <input class='form-control' type="text" placeholder="Observação" name="obs" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff"  value = <?php echo $linha['obs']?> />
        </div>
        
        <div class="form-group">
            <input class='button-submit btn btn-success text-white' type="submit" value="Salvar" name="btnSalvar" style="background-color: #dd9079; border: none; margin-bottom: 5px; margin-left: 60px; padding: 6px 20px; border-radius: 7px"; />
            <input class='btn btn-info' type="reset" value="Limpar campos" style="background-color: #dd9079; border: none; border-radius: 7px; text-align: center; margin-bottom: 5px; margin-left: 5px; padding: 6px 20px; color: white"; />
        </div>
    </form>
</div>
 
</body>
 
</html>