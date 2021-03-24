<?php
include("conexao.php");

if (isset($_POST['cadastrar'])) {
    $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);

    $sql_code = "SELECT * FROM adm WHERE usuario = '{$usuario}'";

    $result = mysqli_query($mysqli, $sql_code);

    $row = mysqli_num_rows($result);

    if (empty($_POST['nome']) || empty($_POST['senha'])) {
        $vazio = "Preencha os campos!";
        echo "<script type='text/javascript'>alert('$vazio'); window.location='cadastroadm.php'</script>";
    } elseif ($row > 0) {
        $message1 = "Usuario já existe no banco";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    } else {
        $nome = mysqli_real_escape_string($mysqli, $_POST['nome']);

        $senha = sha1($_POST['senha']);

        $query = "INSERT INTO adm (nome, usuario, senha) VALUES ('$nome', '$usuario', '$senha')";
        $cadastrar = $mysqli->query($query) or die($mysqli->error);

        $message2 = "Cadastro feito com sucesso!";
        echo "<script type='text/javascript'>alert('$message2'); window.location='visualiza.php'</script>";
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login ADM</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/login.css" rel="stylesheet">

</head>

<body id="cor">
    <div class="col-lg-12">
        <a class="btn btn-primary" href="visualiza.php" role="button">Página ADM</a>
    </div>

    <div class="container">
        <div class="text-center">
            <h1 class="text-primary">Cadastro</h1><br>

            <form class="text-center" action="cadastroadm.php" method="post">

                <label class="text-primary" for="">Nome</label><br>
                <input type="text" name="nome" size="30" placeholder="">
                <br>
                <br>
                <label class="text-primary" for="">Seu Usuario</label><br>
                <input type="text" name="usuario" size="30" placeholder=""><br><br>

                <label class="text-primary" for="">Senha</label><br>
                <input type="password" name="senha" size="30" placeholder="">
                <br>
                <br>
                <input class="btn btn-primary" type="submit" value="Cadastrar" name="cadastrar">
            </form>

        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

</body>

</html>