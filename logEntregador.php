<?php
session_name("entregador");
session_start();
include('conexao.php');
$botao = $_POST['botao'];
$loginE = $_POST['loginEnt'];
$senhaE = $_POST['senhaEnt'];

	if(isset($botao))
	{
		$sql = "SELECT * FROM tb_entregador WHERE uk_email_entregador = '$loginE' AND senha = md5('$senhaE')";
		$verifica = mysqli_query($conexao,$sql)or die("Erro ao selecionar");

		if(mysqli_num_rows($verifica) > 0)
		{
			$_SESSION['loginE'] = $loginE;
			$_SESSION['senhaE'] = $senhaE;
			header("location:EntLogado.php");
		}
		else
		{
			
			unset ($_SESSION['loginE']);
			unset($_SESSION['senhaE']);
			echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
			window.location.href='loginEntregador.html';</script>";
			die();
		}
	}
	else{}
?>		
