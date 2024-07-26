<?php
	include('conexao.php');
	$botao = $_POST['botao'];
	$nome = $_POST['nome'];
	$nasc = $_POST['data'];
	$sexo = $_POST['sexo'];
	$cpf = $_POST['cpf'];
	$logra = $_POST['logra'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['estado'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$civil = $_POST['ECivil'];
	$fone = $_POST['telefone'];
	$complemento = $_POST['compl'];
	$dataBanco = date('Y/m/d', strtotime($nasc));
	if(isset($botao))
	{
		$valida = mysqli_query($conexao, "SELECT * FROM tb_entregador WHERE uk_email_entregador = '$email';") or die ("Falha ao selecionar");
		$perfil = $_FILES['foto'];
		$nome_foto = $perfil['name'];
		$foto_temporario = $perfil['tmp_name'];
		$diretorio = 'assets/imgEnt/';
		if(mysqli_num_rows($valida)<=0)
		{
			if(move_uploaded_file($foto_temporario,$diretorio . $nome_foto))
					{
						$caminho_foto = $diretorio.$nome_foto;
						$sql = "INSERT INTO tb_entregador (uk_nm_entregador, uk_cpf, dt_nascimento_entregador, estado_civil, cat_sexo_entregador, telefone1, uk_email_entregador, end_logradouro_entregador, end_complemento_entregador, end_bairro_entregador, end_cidade_entregador, uf_estado_entregador, nm_imgEntregador, senha) VALUES ('$nome','$cpf','$nasc','$civil','$sexo','$fone','$email','$logra','$complemento','$bairro','$cidade','$uf','$caminho_foto',md5('$senha'));";
						mysqli_query($conexao,$sql);
						echo"<script>alert('Cadastro realizado com sucesso');window.location.href='index.html';</script>";
					}
			else
			{
				echo"<script>alert('Email já utilizado em outra conta, tente com outro!');window.location.href='cadastroEntregador.html';</script>";
			}
		}
		else{}
	}		
?>		



