<html>
<?php
include('1conexao.php');
include('1menu.php');
$sql = "SELECT * FROM Cliente";
$query = mysqli_query($conn, $sql);

?>
<div class='container'>
  <div class="jumbotron">
  <style>
.jumbotron{
   
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
<h3 class='p-3'>Usuários cadastrados</h3>

<a href="1.php" class="btn btn-Primar">Novo cadastro</a>
   

    <table class='table table-hover'>
        <tr>
            <td>Nome</td>  
            <td>E-mail</td> 
            <td>Telefone</td>
            <td>Gênero</td>
            <td>Nascimento</td>
            <td class="text-center">Ação</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['nome'] ?></td>
                <td><?php echo $dados['email'] ?></td>
                <td><?php echo $dados['fone'] ?></td>
                <td><?php echo $dados['genero'] ?></td>
                <td><?php echo $dados['nascimento'] ?></td>

                <td colspan="2" class="text-center">
                    <a class='btn btn-inf btn-sm' href='1register.php?Cod_Cliente=<?php echo $dados['Cod_Cliente'] ?>'>Editar</a>
                    <a class='btn btn-secondar btn-sm' href='1delete.php?Cod_Cliente=<?php echo $dados['Cod_Cliente'] ?>'>Excluir</a>
            </tr>
            <?php } ?>
    </table>
</div>
<script>
    function confirmar(Cod_Cliente) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = '1delete.php?Cod_Cliente=' + Cod_Cliente;
    }
</script>
</body>
</html>














