<?php session_start() ?>


<?php
include('1conexao.php');
include('1menu.php');
$sql = "SELECT * FROM AgendaUsu";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=
    ">
    <title>Document</title>
</head>

<body>

<?php

if(!isset($_SESSION['login'])){
    if(isset($_POST['acao']) ){

    }

    include('1login.php');
}else{
    include('home.php');
}

?>


<div class='container'>
  <div class="jumbotron">

<style>
.jumbotron{
    border-radius: 20px;
    border-radius: 20px;
    margin-bottom: 2rem;
    background-color: #F8F9FA;
}




</style>

    <h3 class='p-3'>Serviços cadastrados</h3>

    <a href="1agenda.php" class="btn btn-dark">Cadastrar novo </a>
   

    <table class='table table-hover'>
        <tr>
            <td>Clientes</td>
            <td>Data</td>
            <td>Horário</td>
            <td>Observação</td>
            <td class="text-center">Ação</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['cod_Cliente'] ?></td>
                <td><?php echo $dados['data_1'] ?></td>
                <td><?php echo $dados['horario'] ?></td>
                <td><?php echo $dados['obs'] ?></td>
                
            
            </tr>
        <?php } ?>
    </table>
</div>


</body>
</html>