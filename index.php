<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="style1.css">

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
        <form action="testelogin.php" method="POST" class="login-email">
            
            <div class="form">
                <img id="logo" src="folha-removebg-preview.png">
                <p class="vindo-text" style="font-size: 2rem; font-weight; 800;">Seja bem vindo(a)!</p>
                <p class="login-text" style="font-size: 14px; font-weight; 800;">Insira o seu endereço de E-mail e senha</p>
               
               
                <div class="input-group">
                    <input type="email" name="email" placeholder="E-mail" required>
                </div>

                <div class="input-group">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                <p class="esqueceu"><a href="register.php">Esqueceu sua senha?</a></p>
              
              
                <div class="">
                    <button type="submit" name="submit" id='submit'>Entrar</button>
                </div>

                <p class="login-register-text">Não possui uma conta? <a href="register.php">Cadastre-se</a></p>
           
           
            </div>
        </form>
    </div>

    <footer>
    
    
    
    </footer>
</body>

</html>

