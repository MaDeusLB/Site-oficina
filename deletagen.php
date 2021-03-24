<?php 
	session_start();
	include("conexao.php"); 
	$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
	

	if(!empty($id)){
		$result_user = "DELETE FROM revisao WHERE id = '$id'";
		$resultado_user = mysqli_query($mysqli, $result_user);
		if(mysqli_affected_rows($mysqli)){
			$sucesso = "Agendamento deletada com sucesso!";
	   	    echo "<script type='text/javascript'>alert('$sucesso'); window.location='visualiza.php'</script>";
		}else{
			$erro = "Algo deu errado!";
	   	    echo "<script type='text/javascript'>alert('$erro'); window.location='visualiza.php'</script>";
		}

		}else{
		   $erro2 = "Necessário selecionar um agendamento!";
		   echo "<script type='text/javascript'>alert('$erro2'); window.location='visualiza.php'</script>";
		}
	


?>