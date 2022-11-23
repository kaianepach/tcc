
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js' charset='utf-8'></script>
    
    <title>HOME</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="canonical" href="https:/bootstrap/css/getbootstrap.com/docs/5.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body class="bg-light">
<script src="js/scripts.js"></script>


<style>

*{ 
    margin: 0;
    padding: 0;
    box-sizing: boder-box;
    font-family: "Poppins", sans-serif;
}

/*Tamanho do side-bar*/
.side-bar{
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(150px);
    width: 290px;
    height: 100vh;
    position: fixed;
    top: 0;
    left: -100%;
    overflow-y: auto;
    transition: 0.6s ease;
    transition-property: left;
    z-index: 2;
}

.side-bar.active{
    left: 0;
    
}

.side-bar .menu{
    width: 100%;
    margin-top: 80px;
    
}

.side-bar .menu .item{
    position: relative;
    cursor: pointer;
    
}

/*Formatação dos campos*/
.side-bar .menu .item a{
    color: #fff;
    font-size: 16px;
    text-decoration: none;
    display: block;
    padding: 5px 30px;
    line-height: 60px;
}

.side-bar .menu .item a:hover{
    background: #EBC1B8;
    transition: 0.3s ease;
    
}

/*Espaçamento entre a figura e o texto*/
.side-bar .menu .item i{
    margin-right: 15px;
    
}

.side-bar .menu .item a .dropdown{
    position: absolute;
    right: 0;
    margin: 20px;
    transition: 0.3 ease;
    
}

.side-bar .menu .item .sub-menu{
    background: rgba(255, 255, 255, 0.1);
    display: none;
    
}

.side-bar .menu .item .sub-menu a{
    padding-left: 80px;
}




.rotate{
    transform: rotate(90deg);
}

.close-btn{
    position: absolute;
    color: #fff;
    font-size: 20px;
    right: 0;
    margin: 25px;
    cursor: pointer;
}


.menu-btn{
    position: relative;
    color: #fff;
    font-size: 20px;
    margin: 23px;
    cursor: pointer;
    left:0; 
    
}


header{
  background-color: black;
    width: 100%;
    display: flex;
    height: 11vh;
    margin-top: 0;
    align-items: center;
    justify-content: flex-end;
    flex-direction: row-reverse;
}

div#logo img{
  max-width: 180px;
    margin: 5px;
    margin-left: 280%;
    margin-top: -2px;
}



.side-bar .menu .item1{
    position: relative;
    cursor: pointer;
    
}

/*Formatação dos campos*/
.side-bar .menu .item1 a{
    color: #fff;
    font-size: 16px;
    text-decoration: none;
    display: block;
    padding: 5px 30px;
    line-height: 60px;
}

.side-bar .menu .item1 a:hover{
    background: #EBC1B8;
    transition: 0.3s ease;
    
}

/*Espaçamento entre a figura e o texto*/
.side-bar .menu .item1 i{
    margin-right: 15px;
    
}

.side-bar .menu .item1 a .dropdown{
    position: absolute;
    right: 0;
    margin: 20px;
    transition: 0.3 ease;
    
}

.side-bar .menu .item1 .sub-menu{
    background: rgba(255, 255, 255, 0.1);
    display: none;
    
}

.side-bar .menu .item1 .sub-menu a{
    padding-left: 80px;
}


html{
  scroll-behavior: smooth;
}


</style>

<header>
<div id="logo">
        <img src='acucena.png'>
</div>

<!--MENU-->

<div class="menu-btn">
        <i class="fas fa-bars"></i>    
    </div>

    <div class="side-bar">
    <div class="close-btn"> 
        <i class="fas fa-times"></i>
    </div>    

        <div class="menu">
        
        <div class="item">
            <a class="sub-btn"><i class="fas fa-desktop"></i>Serviços<i class="fas fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
                <a href="cabelo.php" class="sub-item">Cabelo</a>
                <a href="#" class="sub-item">Cílios</a>
                <a href="#" class="sub-item">Depilação</a>
                <a href="#" class="sub-item">Maquiagem</a>
                <a href="#" class="sub-item">Massagem</a>
                <a href="#" class="sub-item">Pele</a>
                <a href="#" class="sub-item">Sobrancelha</a>
                <a href="#" class="sub-item">Unha</a>
            </div>
           </div>

        <div class="item">
            <a class="sub-btn" href="conta.php"><i class="fa fa-user"></i>Conta</a>
           </div>

        <div class="item1"><a href="#rodape1"><i class="fas fa-info-circle"></i>Sobre</a></div> 
        </div>
    </div>  
</div>



    <script type="text/javascript">
        $(document).ready(function(){
            //sub menus
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });

            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });

            $('.item1').click(function(){
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });
    </script>

</div>

</header>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imagem/azul.jpg" height="390" width="390" alt="First slide">
    </div>
   
    <div class="carousel-item">
      <img class="d-block w-100" src="imagem/roxo.jpg" height="390" width="390" alt="Third slide">
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<style>

.btn.btn-sm.btn-outline-secondary{
  font-size: 15px;
  margin-top: 0px;
  margin-bottom: 0px;
 
}

.btn-outline-secondary {
    color: rgb(27, 27, 27);
    border-color: black;
    
}

.btn-group-sm>.btn, .btn-sm {
  padding: 6px 20px;
  border-radius: 5px;
  
}

.btn-outline-secondary:hover {
    color: #fff;
    background-color: black;
    border-color: black;
}

.card-text1{
  margin-top: -15px;
  font-size: 14px;
}

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
  padding-right: 35px;
  padding-left: 35px;
  margin-top: 0px;
 
}

.card-text{
  margin-top: -10px;
  font-size: 15px;
}

.sla{
  margin-top: 60px;
  margin-bottom: -5px;
  font-size: 20px;
  text-align: center;
 
}

.sla1{
  margin-top: 15px;
  font-size: 20px;
  text-align: center;
}

</style>


<main>

<h2 class="sla">MAIS POPULARES<h2>
  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
           <img style="width: 100%; height:225px;" src="imagem/penteado.jpg">
            <div class="card-body">
              <p class="card-text">Penteado de festa</p>
              <p class="card-text1">R$90,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="servico.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col">
          
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/unha.jpg">
            <div class="card-body">
            <p class="card-text">Esmaltação simples</p>
              <p class="card-text1">R$25,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="servico.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/sobrancelha.jpg">
            <div class="card-body">
            <p class="card-text">Design de sobrancelha</p>
              <p class="card-text1">R$35,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
</main>

<main>
<h2 class="sla1">NOVIDADES<h2>
  <div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
       
        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/pedra.jpg">
            <div class="card-body">
            <p class="card-text">Massagem com pedras quentes</p>
              <p class="card-text1">R$140,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/cilios.jpg">
            <div class="card-body">
            <p class="card-text">Extensão de cílios volume brasileiro</p>
              <p class="card-text1">R$120,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/costa.jpg">
            <div class="card-body">
            <p class="card-text">Massagem associada à ventosaterapia</p>
              <p class="card-text1">R$150,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>

</main>

        <main>
<h2 class="sla1">COMBOS DE SERVIÇOS<h2>
  <div class="album py-5 bg-light">
    <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3"> 


        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/pele.jpg">
            <div class="card-body">
            <p class="card-text">Limpeza de pele + peeling de diamante</p>
              <p class="card-text1">R$110,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>


       
        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/micro.jpg">
            <div class="card-body">
            <p class="card-text">Microblanding + design de sobrancelha</p>
              <p class="card-text1">R$400,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        
        <div class="col">
          <div class="card shadow-sm">
          <img style="width: 100%; height:225px;" src="imagem/henna.jpg">
            <div class="card-body">
            <p class="card-text">Design de sobrancelha + henna</p>
              <p class="card-text1">R$45,00</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href="register.php">
                <button type="button" class="btn btn-sm btn-outline-secondary">Agendar</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


<!--INÍCIO DO RODAPE NÃO MEXER .botao{
  
 padding: 6px 20px;
    margin-top: -5px;
    margin-bottom: 0px;
    text-align: center;
    border: none;
    background: black;
    outline: none;
    border-radius: 7px;
    font-size: 15px;
    color: #FFF;
    cursor: pointer;
}-->
<style> 

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .containerF{
        max-width: 1170px;
        margin:auto;
    }

    ul{
        list-style: none;
    }

    .row{
        display: flex;
        flex-wrap: wrap;
    }

    .footer {
        background-color: black;
        padding: 30px 0;
    }

    .footer-col{
        width: 25%;
        padding: 0 15px;
    }

    .footer-col h4{
        font-size: 17px;
        color: white;
        text-transform: capitalize;
        margin-bottom: 35px;
        font-weight: 500;
        position: relative;
    }

.footer-col h4::before{
    content: '';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #dd9079;
    height: 2px;
    box-sizing: border-box;
    width: 60px;
}

.footer-col ul li:not(:last-child){
    margin-bottom: 10px;
}

.footer-col ul li{
    font-size: 16;
    color: #ffffff;
    text-decoration: capitalize;
    font-weight: 300;
    color: #bbbbbb;
    display: block;

}

.footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgb(255, 255, 255,0.2);
    margin: 0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #ffffff;
    transition: all 0.5s ease;
}

.footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
}

img {
    width: 230px;
}

.copyright {
    padding: 13px 0;
    margin-top: 20px;
    font-size: 16;
    color: #bbbbbb;
    text-align: center;
    border-top: 2px solid #dd9079;
}

/*responsive*/
@media(max-width: 767px){
    .footer-col {
        width: 50%;
        margin-bottom: 30px;
    }
}

@media(max-width: 574px){
    .footer-col {
        width: 100%;
    }
}

</style>

<footer class="footer" id="rodape1">
    <div class="containerF">
        <div class="row">

        <div class="footer-col">
                <h4>CONTATO</h4>
                <ul>
                <li>(51) 9 9899-8137</li>
                <li>(51) 9 9991-6326</li> 
                </ul>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h4>ENDEREÇO</h4>
                <ul>
                <li>R. Holanda, nº78</li>
                <li>Morada das Palmeiras</li>
                <li>Torres - RS</li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>HORÁRIO DE FUNCIONAMENTO</h4>
                <ul>
                <li>Seg. à Sex - 8h às 20h</li>
                <li>Sábado - 9h às 18h</li>
                </ul>
            </div>
            <div class="footer-col"> 
            <img src="imagem/rodape.png"> 
            </div>
            </div>
            <section class="copyright">© 2022. Saúde e Beleza AçucenA | Todos os direitos reservados.</section>
        </div>
</footer>


<!--FINAL DO RODAPE NÃO MEXER


 padding: 6px 20px;
    margin-top: -5px;
    margin-bottom: 0px;
    text-align: center;
    border: none;
    background: black;
    outline: none;
    border-radius: 7px;
    font-size: 15px;
    color: #FFF;
    cursor: pointer;


-->

</body>
</html>