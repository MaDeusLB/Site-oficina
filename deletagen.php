<?php
session_start();
include("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {
	$up = "UPDATE revisao SET status = 'Feito' where id = {$_GET['id']}";
	$exe = mysqli_query($mysqli, $up);
	if (mysqli_affected_rows($mysqli)) {
		$sucesso = "Registrado!";
		echo "<script type='text/javascript'>alert('$sucesso'); window.location='visualiza.php'</script>";
	} else {
		$erro = "Algo deu errado!";
		echo "<script type='text/javascript'>alert('$erro'); window.location='visualiza.php'</script>";
	}
}
?>