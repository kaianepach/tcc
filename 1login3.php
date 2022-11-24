<?php

session_start();


    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['emai_func']) && !empty($_POST['senha_func']))

    {
        //Acessa
        include_once('config.php');
        $email = $_POST['emai_func'];
        $senha = $_POST['senha_func'];

       //print_r('Email: ' . $email);
       // print_r('<br>');
       // print_r('Senha: ' . $senha);

       $sql = "SELECT * FROM Funcionario1 WHERE emai_func = '$emai_func' and senha_func = '$senha_func'";

       $result = $conexao->query($sql);

       //print_r($result);

       if(mysqli_num_rows($result) < 1)

        {  unset($_SESSION['emai_func']); 
           unset($_SESSION['senha_func']); 
           header('Location: 1login.php');
        }

        else
        {
           $_SESSION['emai_func'] = $emai_func;
           $_SESSION['senha_func'] = $senha_func;
           header('Location: 1lista_agenda.php');
        }

    }

    else
    {
        //Não acessa
        header('Location: 1login.php');
    }


?>