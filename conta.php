<?php

session_start();
include_once('config.php');
//print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
{
    unset($_SESSION['email']); 
    unset($_SESSION['senha']); 
    header('Location: index.php');
}

$logado = $_SESSION['email'];

$sql = "SELECT * FROM Agenda_Usuario";

$result = $conexao->query($sql);

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="conta.css">
    <title>Tela de Login</title>
    
</head>

<body>
    
    <header>

    <div id="logo">
    <a href="nsei.php">
    <img src='acucena.png'></a>
    </div>
   
    
    <div class="d-flex">
        <a href="sair.php" class="btn">Sair</a>
    </div>



   <div>
   <a class='alterar' href='alterar.php?Cod_Cliente=<?php echo $dados['Cod_Cliente'] ?>'>Alterar</a>
    </div> 

    </header>

<style>

.alterar{
    position: fixed;
    top: 3%;
    left: 84%;
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    color: white;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}

.btn {
    position: fixed;
    top: 3%;
    right: 6%;
    color: white;
}

.alterar:hover{
    color: #dd9079;
}

.btn:hover{
    color: #dd9079;
}

.m-5 {
    margin: 5rem!important;
}

.table-bg{
    background: #f8f9fa;
    border-radius: 10px 10px 10px 10px;
}

.table>:not(caption)>*>* {
    padding: 15px 15px;
    background-color: var(--bs-table-bg);
    border-bottom-width: 2px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}

a.btn1{
    padding: 5px;
}


a{
    color: black;
    padding: 5px;
}

.td{
    background-color: #AEAEAE;
}

.btn1:hover{
    color: white;
}

.h4, h4 {
  margin-top: 75px;
  margin-bottom: -500px;
  font-size: 20px;
  text-align: center;
}

.table>:not(caption)>*>* {
    text-align: center;
    padding: 15px 15px;
    background-color: var(--bs-table-bg);
    border-bottom-width: 2px;
    box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
}



</style>

<div class="b">
<h4>MEUS AGENDAMENTOS<h4>
</div>


<div class="m-5"></div>
 
    <div>
        <table class="table table-hover table-bg">
        <thead>
            <tr>
            
                
                <th scope="col">Data</th>
                <th scope="col">Horário</th>
                <th scope="col">Observação</th>
                <th scope="col">...</th>
            </tr>
        </thead>

        <tbody>

            <?php
                while($user_data = mysqli_fetch_assoc($result))

                    {
                        echo "<tr>";
                      
                        echo "<td>".$user_data['data_1']."</td>";
                        echo "<td>".$user_data['horario']."</td>";
                        echo "<td>".$user_data['obs']."</td>";
                        echo "<td>
                      <a class='btn1' href='edit_servico.php?Cod_Agenda=$user_data[Cod_Agenda]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                            </svg>
                        </a>
                        
                        <a class='btn2' href='delete.php?Cod_Agenda=$user_data[Cod_Agenda]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                        <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                      </svg>
                        </a>

                        </td>";
                        echo "</tr>";
                    }
            ?>

        </tbody>
        </table>
  </div>
    


</body>
</html>


