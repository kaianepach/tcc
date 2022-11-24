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




<div class='container'>
  <div class="jumbotron">

<style>
.jumbotron {
    margin-top: 45px;
    border-radius: 20px;
    margin-bottom: 2rem;
    background-color: #fefefe;
}


.btn-Primar{
    margin-left: 15px;
    color: #fff;
    margin-bottom: 20px;
    background-color: #DD9079;
    border-color: #DD9079;
}

.btn-inf{
    background-color: #ACA2B1;
    border-color: #ACA2B1;
    color: white;
   
}


.btn-secondar {
    color: #fff;
    background-color: #5FBDC1;
    border-color: #5FBDC1;
}


</style>

    <h3 class='p-3'>Agendamentos cadastrados</h3>

    <a href="1agenda.php" class="btn btn-primar">Novo horário</a>
   

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
                
                <td colspan="2" class="text-center">
                    <a class='btn btn-inf btn-sm' href='1edit_agenda.php?Cod_Agenda=<?php echo $dados['Cod_Agenda'] ?>'>Editar</a>
                    <a class='btn btn-secondar btn-sm' href='1delete_agenda.php?Cod_Agenda=<?php echo $dados['Cod_Agenda'] ?>'>Excluir</a>
            </tr>
            <?php } ?>
    </table>
</div>
<script>
    function confirmar(Cod_Agenda) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = '1delete_agenda.php?Cod_Agenda=' + Cod_Agenda;
    }
</script>
</body>
</html>



