<?php
    include('1menu.php');
    include('1conexao.php');
    if (isset($_POST['btnEnviar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];

    
 
    $sql = "INSERT INTO Cliente (nome, email, fone, genero, nascimento) 
    VALUES ('$nome', '$email', '$fone', '$genero', '$nascimento')";





mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn) > 0) {
        echo "<script> alert('Usuário cadastrado com sucesso.') </script>";
        header("Location: 1listausu.php");
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
 
 
    <link rel
 
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


.btn-success {
    background-color: #dd9079;
    border: none;
    border-radius: 7px;
    text-align: center;
    margin-bottom: 5px;
    margin-left: 5px;
    padding: 3px 30px;
    color: white;
    font-size: 18px;
}

.input.button-submit.btn.btn-success.text-white{
    font-size: 25px;
}

</style> 
 
 
<body style="background-color:#F8F8FF">
    <div class="container">
    <h3 class='p-3'>Cadastrar cliente</h3>
    

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group font-weight-bold">
             <input class='form-control' type="text" placeholder="Nome completo" name="nome" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff; margin-top: 5px" require>
        </div>
        <div class="form-group font-weight-bold">
             <input class='form-control' type="email" placeholder="E-mail" name="email" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        </div>
             <div class="form-group font-weight-bold">
            <input class='form-control' type="text" placeholder="Telefone" name="fone" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        <div class="form-group font-weight-bold">
            </br> <select class='form-select'  name="genero" style="border: solid 2px #232426; width: 350px; border-radius: 10px; width: 100%; background-color: #ffffff; padding:6px" require>
                <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="outro">Outro</option>
            </select>

        </div>
        <div class="form-group font-weight-bold">
         <input class='form-control' type="date" name="nascimento" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        </div>


        <div class="form-group font-weight-bold">
             <input class='form-control' type="password" placeholder="Senha" name="senha" style="border: solid 2px #232426; border-radius: 10px; background-color: #ffffff" require>
        </div>


            <div class="form-group font-weight-bold">
            <input class='button-submit btn btn-success text-white' type="submit" name="btnEnviar" style="background-color: #dd9079; border: none; margin-bottom: 5px; margin-left: 90px; padding: 6px 20px; border-radius: 7px"; />
                <input class='btn-success'  type="reset" value="Limpar" style="background-color: #dd9079; border: none; border-radius: 7px; text-align: center; margin-bottom: 5px; margin-left: 5px; padding: 6px 20px; color: white"; />
            </div>
    </form>
</div>
 
    
 
 
</body>
</body>
</html>