<?php
include("conexao.php");

if (isset($_POST['entrar'])) {
    $senha = sha1($_POST['senha']);
    $usuario = mysqli_real_escape_string($mysqli, $_POST['usuario']);

    $query = "SELECT * FROM adm WHERE senha = '{$senha}' AND usuario = '{$usuario}'";

    $result = mysqli_query($mysqli, $query);

    $row = mysqli_num_rows($result);

    if (empty($_POST['senha']) || empty($_POST['usuario'])) {
        $vazio = "Não pode ser enviado vazio!";
        echo "<script type='text/javascript'>alert('$vazio'); window.location='index.html'</script>";

        exit();
    } elseif ($row > 0) {
        echo "<script type='text/javascript'>window.location='visualiza.php'</script>";
    } else {
        $cola = "Adm não encontrado!";
        echo "<script type='text/javascript'>alert('$cola'); window.location='index.html'</script>";
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


    <div class="container">
        <div class="text-center">
            <h1 class="text-primary">Login</h1><br>
            <form class="text-center" action="login.php" method="post">

                <label class="text-primary" for="">Seu nome</label><br>
                <input type="text" name="usuario" size="30" placeholder="">
                <br>
                <br>
                <label class="text-primary" for="">Seu telefone</label><br>
                <input type="password" name="senha" size="30" placeholder=""><br><br>
                <button type="submit" name="entrar" class="btn btn-primary">Entrar</button>
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