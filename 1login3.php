<?php

session_start();


    //print_r($_REQUEST);
    if(!empty($_POST['email_func']) && !empty($_POST['senha_func']))

    {
        //Acessa
        include_once('config.php');
        $email = $_POST['email_func'];
        $senha = $_POST['senha_func'];

       //print_r('Email: ' . $email);
       // print_r('<br>');
       // print_r('Senha: ' . $senha);

       $sql = "SELECT * FROM funcionario1 WHERE emai_func = '$email' and senha_func = '$senha'";

       $result = $conexao->query($sql);

       //print_r($result);

       if(mysqli_num_rows($result) < 1)

        {  unset($_SESSION['email_func']); 
           unset($_SESSION['senha_func']); 
           header('Location: index.php');
        }

        else
        {
           $_SESSION['email_func'] = $email;
           $_SESSION['senha_func'] = $senha;
           header('Location: 1agenda.php');
        }

    }

    else
    {
        //Não acessa
        header('Location: 1login.php');
    }


?>