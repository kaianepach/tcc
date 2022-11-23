<?php

if (isset($_POST['submit1'])) {

    //print_r('Data: ' . $_POST['data_1']);
    //print_r('<br>');
    //print_r('Horário: ' . $_POST['horario']);
    //print_r('<br>');
    // print_r('Observação: ' . $_POST['obs']);


    include_once('config.php');

    $data_1 = $_POST['data_1'];
    $horario = $_POST['horario'];
    $obs = $_POST['obs'];

    $result = mysqli_query($conexao, "INSERT INTO Agenda_Usuario(data_1,horario,obs) VALUES('$data_1','$horario','$obs')");
    header('Location: servico.php');
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

    <title>Tela de Login</title>
    
</head>


<body>

<header>
    <div id="logo">
        <a href="nsei.php">
        <img src='acucena.png'></a>
    </div>
</header>

   

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    width: 100vw;
    min-height: 100vh;
    background-color: #DDDEE2;
    background-position: center;
    background-size: cover;
    align-items: center;
    display: flex;
    flex-direction: column;
}

.container {
    width: 400px;
    min-height: 100px;
    padding: 40px 30px;
}


.container {
    color: rgb(27, 27, 27);
    font-weight: 400;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 14px;
    margin-top: 35px;
    padding-left: 10px;

}

.input-group{
    display: flex;
    justify-content: center;
}

.container .login-email .input-group {
    width: 100%;
    height: 20px;
    margin-bottom: 26px;
}

.container .login-email .input-group input {
    width: 80%;
    height: 100%;
    margin: 0 auto;
    border: 2px solid rgb(27, 27, 27);
    padding: 17px 12px;
    font-size: 13px;
    border-radius: 7px;
    background: transparent;
    outline: none; 
}

header{
    background-color: black;
    width: 100%;
    display: flex;
    height: 11vh;  
    /* position: relative; */
    margin-top: 0;
    align-items: center;
    justify-content: center;
}

#submit1{
    padding: 6px 30px;
    margin-top: 25px;
    margin-bottom: 5px;
    text-align: center;
    border: none;
    background: #dd9079;
    outline: none;
    border-radius: 7px;
    font-size: 15px;
    color: #FFF;
    cursor: pointer;
}

#limpar{
    padding: 6px 37px;
    margin-top: 25px;
    margin-bottom: 5px;
    text-align: center;
    border: none;
    background: #dd9079;
    outline: none;
    border-radius: 7px;
    font-size: 15px;
    color: #FFF;
    cursor: pointer;
}

#logo{
    max-width: 100%;
    max-height: 120px;
}

div#logo img{
    max-width: 180px;
    margin: 5px;
    margin-left: -20px;
}


img#serv{
    box-shadow: 1px 1px 20px #a9a9a9;
    width: 330px;
    height: 330px;
    margin-left: 45px;
    margin-top: -78px;
    border-radius: 10px;
}

.tudo{
    display: flex;
    background-color:  rgba(248, 249, 250, 1);
    height: 380px;
    margin-top: 76px;
    border-radius: 15px;
}

.servico{
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 25px;
}

.left{
    padding: 13% 5px;
    margin-right: 25px;
}



.login-text{
    font-size: 14px;
    font-weight: 450;
    text-align: center;
    margin-bottom: 14px;
}

.botao{
    margin-left: 3px;
}

.form{
    margin-top: -30px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;
}


</style>

<div class="tudo"> 

<div class="left"><div class="foto"><img id="serv" src="imagem/sunha.jpg"></div></div>

<div class="container">
    <form method="POST" class="login-email">
            
        <div class="form">


        <p class="servico">Esmaltação Simples R$25,00</p>
            <p class="login-text">Escolha a data e o horário de sua preferência:</p>
               
                <div class="input-group">
                <input type="date" name="data_1" placeholder="Data" required>
                </div>

                <div class="input-group">
                    <input type="time" name="horario" placeholder="Horário" required>
                </div>  

                <div class="input-group">
                    <input type="text" name="obs" placeholder="Observação" required>
                </div>  
              
                <div class="botao">
                    <button type="submit" name="submit1" id='submit1'>Agendar</button>
                    <button type='reset' class="btn" id="limpar">Limpar</button>
                </div>
           
        </div>
    </form>
</div>

</div>

</body>
</html>

