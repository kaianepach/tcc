<?php

if (!empty($_GET['Cod_Agenda'])) {

    include_once('config.php');

    $Cod_Agenda = $_GET['Cod_Agenda'];

    $sqlSelect = "SELECT * FROM Agenda_Usuario WHERE Cod_Agenda=$Cod_Agenda";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            
        $data_1 = $user_data['data_1'];
        $horario = $user_data['horario'];
        $obs = $user_data['obs'];
        }
    }
    else{
        header('Location: conta.php');
    }
}

else{
    header('Location: conta.php');
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
    background-image: linear-gradient(rgba(138, 135, 135, 0.5), rgb(241, 241, 241)), url(bg.jpg);
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

.form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-evenly;    
}

.container .login-text {
    color: rgb(27, 27, 27);
    font-weight: 400;
    font-size: 1.1rem;
    text-align: center;
    margin-bottom: 14px;
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

#update{
    padding: 6px 50px;
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
}

</style>



<div class="container">
    <form action="salvar.php" method="POST" class="login-email">
            
        <div class="form">

<img id="serv" src="imagem/penteado.jpg">
            <p class="login-text" style="font-size: 1rem; font-weight; 800;">Penteado para festa R$90,00</p>
            <p class="login-text" style="font-size: 14px; font-weight; 800;">Escolha a data e o horário de sua preferência:</p>
               
                <div class="input-group">
                <input type="date" name="data_1" placeholder="Data" value="<?php echo $data_1 ?>" required>
                </div>

                <div class="input-group">
                    <input type="time" name="horario" placeholder="Horário" value="<?php echo $horario ?>" required>
                </div>  

                <div class="input-group">
                    <input type="text" name="obs" id="obs" placeholder="Observação" value="<?php echo $obs ?>" required>
                </div>  
              
                <input type="hidden" name="Cod_Agenda" value="<?php echo $Cod_Agenda ?>">

                
               <input type="submit" name="update" id='update'>
                
           
        </div>
    </form>
</div>



</body>
</html>

