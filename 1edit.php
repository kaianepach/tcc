
<html>
<?php
include('1conexao.php');

$codigo = $_GET['codigo'];

if (isset($_POST['btnSalvar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];


    $sql = "UPDATE Cliente SET 
                nome='$nome', 
                email='$email', 
                fone='$fone',
                genero='$genero' ,
                nascimento='$nascimento,
                senha='$senha,
            WHERE codigo='$codigo'";

    mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário alterado com sucesso.') </script>";
        header("Location: 1listausu.php");
    } else {
        echo "<script> alert('Ocorreu algum erro.') </script>";
    }
}
$sql = "SELECT * FROM Cliente WHERE codigo=$codigo";
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
    <h3 class='p-3'>Edite seu cadastro</h3>
             <div class="form-group">
            Nome: <input class='form-control' type="text" placeholder="Nome Completo" name="nome" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['nome'] ?>  /> 
        </div>
    
        <div class="form-group">
            E-mail: <input class='form-control' type="text" placeholder="E-mail" name="email" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['email']?> />
        </div>
        <div class="form-group">
            Fone: <input class='form-control' type="text" placeholder="Fone" name="fone" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" value = <?php echo $linha['fone']?> />
        </div>
        <div class="form-group">
            Gênero: <input class='form-control' type="text" placeholder="Gênero" name="genero" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff"  value = <?php echo $linha['genero']?> />
        </div>
        <div class="form-group">
            Nascimento: <input class='form-control' type="text" placeholder="Nascimento" name="nascimento" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff"  value = <?php echo $linha['nascimento']?> />
        </div>

        <div class="input-group">
                <input type="password" placeholder="Senha" name="senha" value = <?php echo $linha['senha']?> />
            </div>

        <div class="form-group">
            <input class='button-submit btn btn-success text-white' type="submit" value="Salvar" name="btnSalvar" style="background-color: #dd9079; border: solid 1px black"; />
            <input class='btn btn-info' type="reset" value="Limpar campos" style="background-color: #dd9079; border: solid 1px black; color: white"; />
        </div>
    </form>
</div>
 
    
 
 
</body>
</body>
 
</html>