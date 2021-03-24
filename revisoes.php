<?php
include("conexao.php");

if(isset($_POST['agendar'])){
    if(empty($_POST['nome']) || empty($_POST['telefone']) || empty($_POST['data']) || empty($_POST['hora']) ||
    empty($_POST['modelo']) || empty($_POST['localizacao']) || empty($_POST['obs'])){
        $aviso = "Preencha todos os campos";
        echo "<script type='text/javascript'>alert('$aviso');</script>";
    }else{
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $data = $_POST['data'];
        $hora = $_POST['hora'];
        $modelo = $_POST['modelo'];
        $localizacao = $_POST['localizacao'];
        $obs = $_POST['obs'];
        $datahora = $data." ".$hora;

        $sql_code = "INSERT INTO revisao (nome, telefone, datahora, veiculo, localizacao, observacao) 
        VALUES ('$nome', '$telefone', '$datahora', '$modelo', '$localizacao', '$obs')";
        
        $agendar =  $mysqli->query($sql_code) or die ($mysqli->error);

        $deu = "Agendamento feito!";
         echo "<script type='text/javascript'>alert('$deu'); window.location='index.html'</script>";

    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Site Oficina</title>
        <link rel="icon" type="image/x-icon" href="img/icon.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
</head>



<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Início</a></li>

                        
                    </ul>
                </div>
            </div>
        </nav>

        <section class="cada">
            <div class="container">
                <div class="text-center">
                    <h1 class="text-primary">Agende sua revisão</h1>
                </div>
                <div class="text-center">
                <form method="post" action="revisoes.php">
                 
                <div class="row">

                    <div class="col-lg-6">
                    <br>
                    <label class="text-primary" for="">Seu nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6">
                    <br>
                    <label class="text-primary" for="">Seu telefone</label>
                    <input type="text" name="telefone" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6">
                    <br>
                    <label class="text-primary" for="">Data</label>
                    <input type="date" name="data" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6">
                    <br>
                    <label class="text-primary" for="">Hora</label>
                    <input type="time" name="hora" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6">
                    <br>
                    <label class="text-primary" for="">Modelo da Moto</label>
                    <input type="text" name="modelo" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-6">
                    <br>
                    <label class="text-primary" for="">Localização</label>
                    <input type="text" name="localizacao" class="form-control" placeholder="">
                    </div>

                    <div class="col-lg-12">
                    <br>
                    <label class="text-primary" for="">Observação</label>
                    <input type="text" name="obs" class="form-control" placeholder="">
                    </div>

                </div> 
                <div>
                    <br>
                    <br>
                <input class="btn btn-primary" type="submit" name="agendar" value="Agendar">
                <br>
                </div>
                </form>
                </div>
            
            </div>
        
    </section>






 <!-- Bootstrap core JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>
</html>