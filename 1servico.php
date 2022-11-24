<?php
 
    //   print_r('Nome: ' . $_POST['nome']);
    //   print_r('<br>');
    //   print_r('E-mail: ' . $_POST['email']);
    //   print_r('<br>');
    //   print_r('Telefone: ' . $_POST['fone']);
    //   print_r('<br>');
    //    print_r('Gênero: ' . $_POST['genero']);
    //   print_r('<br>');
    //   print_r('Data de nascimento: ' . $_POST['nascimento']);
    //   print_r('<br>');
    //   print_r('Senha: ' . $_POST['senha']);
    //   print_r('<br>');
    //   print_r('Confirmar senha: ' . $_POST['senha']);

    include('1menu.php');
    include('1conexao.php');
    if (isset($_POST['btnEnviar'])) {
    $descricao = $_POST['descrição'];
    $preco = $_POST['preco'];
    $imagem = $_POST['imagem'];
 
    $sql = "INSERT INTO servico (descricao, preco, imagem) 
    VALUES ('$descricao', '$preco', '$imagem')";

mysqli_query($conn, $sql);

if (mysqli_affected_rows($conn) > 0) {
echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
} else {
echo "<script> alert('Ocorreu algum erro.') </script>";

}
}
?>

<!DOCTYPE html>
<html>
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
 
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' charset='utf-8'></script>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
  

    <title>Tela de Login</title>
 
</head> 

<body>

 <header style="background-color:#F8F8FF">
    
</header>

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
 
 
<body style="background-color:#F8F8FF">
    <div class="container">
    <h3 class='p-3'>Cadastrar serviço</h3>
    

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group font-weight-bold">
             <input class='form-control' type="text" placeholder="Descrição" name="descricao" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff; margin-top: 5px" require>
        </div>
        <div class="form-group font-weight-bold">
             <input class='form-control' type="float" placeholder="Preço" name="preco" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        </div>
             
        <div class="form-group font-weight-bold">
             <input class='form-control' type="image" placeholder="Imagem" name="imagem" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        </div>


            <div class="form-group font-weight-bold">
            <input class='button-submit btn btn-success text-white' type="submit" name="btnEnviar" style="background-color: #dd9079; border: none; margin-bottom: 25px; margin-left: 78px; margin-top: 10px; padding: 6px 30px; border-radius: 7px"; />
                <input class='btn sucess' type="reset" value="Limpar" style="background-color: #dd9079; border: none; border-radius: 7px; text-align: center; margin-bottom: 25px; margin-top: 10px; margin-left: 5px; padding: 6px 30px; color: white"; />
            </div>
    </form>
</div>
 