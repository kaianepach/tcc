<?



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Administrador</title>
</head>
<body>


<style>

body{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(120deg, #DD9079, #88CDD1);
    height: 100vh;
    overflow: hidden;
}

.center{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background-color: white;
    border-radius: 15px;
}

.center h1{
    text-align: center;
    padding: 0 0 20px 0;
    border-bottom: 1px solid silver;
}

.center form{
    padding: 0 40px;
    box-sizing: border-box;
}

form .txt_field{
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}

.txt_field input{
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}

.txt_field label{
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}

.txt_field span::before{
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: #DD9079;
    transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
    top: -5px;
    color: #DD9079;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
    width: 100%;
}

.submit[type="submit"]{
    height: 40px;
    border: 1px solid;
    background: #DD9079;
    font-weight: 530;
    padding: 6px 60px;
    margin-top: 15px;
    margin-bottom: 25px;
    margin-left: 80px;
    text-align: center;
    border: none;
    outline: none;
    border-radius: 9px;
    font-size: 17px;
    color: #FFF;
    cursor: pointer;
}


.submit[type="submit"]:hover{
border-color: #DD9079;
transition: .5s;
}



</style>


    <div class="center">
        <h1>Login</h1>


        <form method="post">
            <div class="txt_field">
                <input type="email" name="emai_func" required>
                <span></span>
                <label>E-mail</label>
            </div>

            <div class="txt_field">
            <input type="password" name="senha_func" required>
                <span></span>
                <label>Senha</label>
            </div>
            <input class="submit" type="submit" name="submit"  value="Enviar">
        </form>
        
    </div>
   
</body>
</html>

