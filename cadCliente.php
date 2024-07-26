<?php
	include('conexao.php');
	$nome = $_POST['nome'];
	$cpf = $_POST['clienteCPF'];
	$data = $_POST['data'];
	$sexo = $_POST['sexo'];
	$logra = $_POST['logra'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$dataBanco = date('Y/m/d', strtotime($data));
	$chave = 'wVB2f_#w_^vtZGq';
	if(isset($_POST['botao']))
	{
		$valida = mysqli_query($conexao,"SELECT * FROM tb_cliente WHERE email_cliente = '$email';");
		$perfil = $_FILES['foto'];
		$nome_foto = $perfil['name'];
		$foto_temporario = $perfil['tmp_name'];
		$diretorio = 'assets/imgUsu/';

			if(mysqli_num_rows($valida)<=0)
			{
				if(move_uploaded_file($foto_temporario,$diretorio . $nome_foto))
					{
						$caminho_foto = $diretorio.$nome_foto;
						$sql = "INSERT INTO tb_cliente (uk_nm_cliente,uk_cpf_cliente,dt_nascimento_cliente,cat_sexo_cliente,end_longradouro_cliente,end_bairro_cliente,end_cidade_cliente,uf_estado_cliente,nu_telefone_cliente,email_cliente,senha_cliente,nm_foto) VALUES ('$nome','$cpf','$data',AES_ENCRYPT('$sexo','wVB2f_#w_^vtZGq'),'$logra','$bairro','$cidade','$estado','$telefone','$email',md5('$senha'),'$caminho_foto');";
						mysqli_query($conexao,$sql) or die("Erro" . mysqli_error($conexao));
						echo'<script>alert("Cadastro realizado com sucesso!");window.location.href="login.html"</script>';
					}
			}		
			else
			{
				echo "Email já utilizado em outra conta, tente com outro!";
				echo "(<br><br><a href='cadastroCliente.html'><button>Retornar</button></a>)";
			}	
	}	
	else{}	
?>		
