<?php
session_name("cliente");
session_start();
include('conexao.php');
$botao = $_POST['botao'];
$login = $_POST['login'];
$senha = $_POST['senha'];

	if(isset($botao))
	{
		$sql = "SELECT * FROM tb_cliente WHERE email_cliente = '$login' AND senha_cliente = md5('$senha')";
		$verifica = mysqli_query($conexao,$sql)or die("Erro ao selecionar");

		if(mysqli_num_rows($verifica) > 0)
		{
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			header("location:indexLogado.php");

		}
		else
		{
			unset($_SESSION['login']);
			unset($_SESSION['senha']);
			echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
			window.location.href='login.html';</script>";
			die();
		}
	}

?>		
