<?php

if (isset($_POST['submit'])) {

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

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $genero = $_POST['genero'];
    $nascimento = $_POST['nascimento'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO Cliente(nome,email,fone,genero,nascimento,senha) VALUES('$nome','$email','$fone','$genero','$nascimento','$senha')");
    header('Location: index.php');
}




?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="register.css">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' charset='utf-8'></script>

    <title>Tela de Login</title>

</head>

<body>

    <header>

    <div id="logo">
    
    <a href="nsei.php">
    <img src='acucena.png'></a>

    </div>

    </header>

    <div class="container">
        <form method="post" class="login-email" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p class="vindo-text" style="font-size: 2rem; font-weight; 800;">Criar uma conta</p>

            <div class="input-group">
                <input type="text" placeholder="Nome completo" name="nome" required>
            </div>

            <div class="input-group">
                <input type="text" placeholder="E-mail" name="email" required>
            </div>

            <div class="input-group">
                <input type="text" placeholder="Telefone" name="fone" required>
            </div>

          

            <div class="input-group">
                <select class="input" name="genero" required>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>


            <div class="input-group">
                <input type="date" placeholder="Nascimento" name="nascimento" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Senha" name="senha" required>
            </div>

            <!--   <section>
                <button class="button-as-link" type="submit" name="submit" id='submit'>
                <a class="no-link" href="index.php">Cadastrar</a></button>
             -->
            <button type="submit" name="submit" id='submit'>Cadastrar</button>


            <button type='reset' class="btn" id="limpar">Limpar</button>
            </section>



            <p class="login-register-text">Você possui uma conta? <a href="index.php">Entrar</a></p>

    </div>
    </form>
    </div>




</body>

</html>