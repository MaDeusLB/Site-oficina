<?php
include("conexao.php");
$sql_code = "SELECT * FROM revisao";
$sql_query = $mysqli->query($sql_code) or die($mysqli->error);
$linha = $sql_query->fetch_assoc();
?>
<?php
session_start();
include("conexao.php");
if (!empty($_POST['feito'])) {
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Visualizar Revisões</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />



    <script>
        function tornarVermelho() {

        }
    </script>

</head>

<body class="cada">
    <br>

    <div class="container">
        <br>
        <br>
        <h1 class="text-center text-primary">Agendamentos</h1>
        <div class="row">
            <div class="col-lg-6 text-center">
                <a class="btn btn-primary" href="index.html" role="button">Página inicial</a>
            </div>
            <div class="col-lg-6 text-center">
                <a class="btn btn-primary" href="cadastroadm.php" role="button">Cadastrar ADM</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Proprietario</th>
                            <th>Telefone</th>
                            <th>Data e Hora</th>
                            <th>Veiculo</th>
                            <th>Local</th>
                            <th>Observação</th>
                            <th>Feito</th>
                            <th>Verificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        do {
                        ?>
                            <tr class="text-center">
                                <td class="text-primary" scope="col"><?php echo $linha["nome"] ?></td>
                                <td class="text-primary" scope="col"><?php echo $linha["telefone"] ?></td>
                                <td class="text-primary" scope="col"><?php echo date("d/m/Y \à\s H:i:s", strtotime($linha["datahora"])) ?></td>
                                <td class="text-primary" scope="col"><?php echo $linha["veiculo"] ?></td>
                                <td class="text-primary" scope="col"><?php echo $linha["localizacao"] ?></td>
                                <td class="text-primary" scope="col"><?php echo $linha["observacao"] ?></td>
                                <td class="text-primary" scope="col"><?php echo $linha["status"] ?> </td>
                                
                                <td class="text-primary" scope="col"><?php echo "<a class='btn btn-primary' href='deletagen.php?id=" . $linha['id'] . "'> V</a>" ?></td>
                            </tr>
                    </tbody>
                <?php } while ($linha = $sql_query->fetch_assoc()); ?>
                </table>
            </div>
        </div>
    </div>

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