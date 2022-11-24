<html>
<?php
include('1conexao.php');

$codigo = $_GET['Cod_Cliente'];

if (isset($_POST['btnSalvar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];

    $sql = "UPDATE Cliente SET 
                nome='$nome', 
                email='$email', 
                fone='$fone',
                genero='$genero',
                nascimento='$nascimento'
            WHERE Cod_Cliente='$codigo'";


mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
        header("Location: 1listausu.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM Cliente WHERE Cod_Cliente=$codigo";
$rs = mysqli_query($conn, $sql);
$linha = mysqli_fetch_array($rs);
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
    margin-top: 33px;
 }

 .p-3 {
    padding: 1rem!important;
}

.h3, h3 {
    font-size: 1.75rem;
    margin-left: 48px;
}

</style>

<h3 class='p-3'>Edite seu cadastro</h3>
    <form method="post">
        <div class="form-group">
            Nome: <input class='form-control' type="text" placeholder="Nome" name="nome" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['nome'] ?>  /> 
        </div>
    
        <div class="form-group">
            E-mail: <input class='form-control' type="text" placeholder="email" name="email" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['email']?> />
        </div>
        <div class="form-group">
            Telefone: <input class='form-control' type="text" placeholder="Telefone" name="fone" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['fone']?> />
        </div>
        <div class="form-group">
            Gênero: <input class='form-control' type="text" placeholder="Gênero" name="genero" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff"  value = <?php echo $linha['genero']?> />
        </div>
        <div class="form-group">
            Nascimento: <input class='form-control' type="text" placeholder="Nascimento" name="nascimento" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['nascimento']?> />
        </div>
        <div class="form-group">
            <input class='button-submit btn btn-success text-white' type="submit" value="Salvar" name="btnSalvar" style="background-color: #dd9079; border: none; margin-bottom: 5px; margin-left: 60px; padding: 6px 30px; border-radius: 7px"; />
            <input class='btn btn-info' type="reset" value="Limpar" style="background-color: #dd9079; border: none; border-radius: 7px; text-align: center; margin-bottom: 5px; margin-left: 5px; padding: 6px 30px; color: white"; />
        </div>
    </form>
</div>

    
 
 
</body>
</body>
 
</html>




















