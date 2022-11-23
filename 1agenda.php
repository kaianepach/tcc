<?php
  include('1conexao.php');
  if (isset($_POST['btnEnviar'])) {
  $cod_Cliente = $_POST['cod_Cliente'];
  $data_1 = $_POST['data_1'];
  $horario = $_POST['horario'];
  $obs = $_POST['obs'];

  

  $sql = "INSERT INTO AgendaUsu (cod_Cliente, data_1, horario, obs)
  VALUES ('$cod_Cliente','$data_1', '$horario', '$obs')";

mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
} else {
echo "<script> alert('Ocorreu algum erro.') </script>";

}
}
?>


<html>
<?php include('1menu.php'); ?>
<div class="container">
<style>


.container {
    background-color: #fefefe;
    width: 30vw;
    justify-content: center;
    align-items: center;
    border-radius: 20px;
    margin-top: 60px;
 }
 .container div {
    justify-content: center;
    align-items: center;
 }
.p-3 {
margin-top: 25px;
text-align: center;
}
  
.card {
    background-color: red;
    width: 40vw;
    justify-content: center;
    align-items: center;
}

</style>

<div class="">
    <h3 class='p-3'>Agendar serviço</h3>
    

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group font-weight-bold">
             <input class='form-control' type="text" placeholder="Nome Completo" name="cod_Cliente" style="border: solid 2px #232426; border-radius: 10px; padding: 7px; margin-top: 23px; background-color: #ffffff" require>
    
        <div class="form-group font-weight-bold">
             <input class='form-control' type="date" name="data_1" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        </div>

        <div class="form-group font-weight-bold">
             <input class='form-control' type="time" placeholder="Horário" name="horario" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff; margin-top: 5px" require>
        </div>
    
        <div class="form-group font-weight-bold">
             <input class='form-control' type="text" placeholder="Observação" name="obs" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff; margin-top: 5px" require>
        </div>
        </div>
            <div class="form-group font-weight-bold">
                <input class='button-submit btn btn-success text-white' type="submit" name="btnEnviar" style="background-color: #dd9079; border: none; margin-bottom: 5px; margin-left: 60px; padding: 6px 20px; border-radius: 7px"; />
                <input class='btn sucess' type="reset" value="Limpar campos" style="background-color: #dd9079; border: none; border-radius: 7px; text-align: center; margin-bottom: 5px; margin-left: 5px; padding: 6px 20px; color: white"; />
            </div>
    </form>
</div>
</div>

</html>