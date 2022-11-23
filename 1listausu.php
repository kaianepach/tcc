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
    border-radius: 20px;
    margin-bottom: 2rem;
    background-color: #F8F9FA;
}
.btn-dark {
    color: #fff;
    background-color: #DD9079;
    border-color: #DD9079;
}

</style>
    <h3 class='p-3'>Usuários cadastrados</h3>

    <a href="1register.php" class="btn btn-dark">Cadastrar novo </a>
   

    <table class='table table-hover'>
        <tr>
            <td>Nome</td>  
            <td>E-mail</td> 
            <td>Telefone</td>
            <td>Gênero</td>
            <td>Nascimento</td>
            <td>Senha</td> 
            <td class="text-center">Ação</td>
        </tr>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
            <tr>
                <td><?php echo $dados['nome'] ?></td>
                <td><?php echo $dados['email'] ?></td>
                <td><?php echo $dados['fone'] ?></td>
                <td><?php echo $dados['genero'] ?></td>
                <td><?php echo $dados['nascimento'] ?></td>
                <td><?php echo $dados['senha'] ?></td>

                <td colspan="2" class="text-center">
                    <a class='btn btn-info btn-sm' href='1edit.php?codigo=<?php echo $dados['codigo'] ?>'>Editar</a>
                    <a class='btn btn-red btn-sm' href='#' onclick='confirmar("<?php echo $dados['codigo'] ?>")'>Excluir</a></td>
            </tr>
        <?php } ?>
    </table>
</div>
<script>
    function confirmar(codigo) {
        if (confirm('Você realmente deseja excluir esta linha?'))
            location.href = '1delete.php?codigo=' + codigo;
    }
</script>

