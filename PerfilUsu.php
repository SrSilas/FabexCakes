 <!DOCTYPE html>
<html lang="pt-br">
<head>
	 <?php
	 session_name("cliente");
    session_start();
    if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true))
    {
      header('location:login.html');
    }
    $email = $_SESSION['login'];
  ?>
	<meta charset="utf-8">
	<meta content="widthdevice-width, initial-scale=1.0" name="viewport">

	<title>Meus dados</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
	
	<!-- Favicons -->
  	<link href="assets/img/logo.jpeg" rel="icon">
  	<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  	<!-- Vendor CSS Files -->
  	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
  	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  	<link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <style>
  </style>	
</head>	
<body>
	<!--Header-->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
          <h1 class="logo"><a href="index.html">Fabex Cake's</a></h1>
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="indexLogado.php">Home</a></li>
              <li><a class="nav-link scrollto" href="carrinho.php">Carrinho</a></li>
              <li class="dropdown"><a href="#"><span>Eu</span><i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="PerfilUsu.html">Meus dados</a></li>
                  <li><a href="loginEntregador.html">Historico de Compras</a></li>
                  <li class="dropdown"><form class="formSair" method="POST" action=""><input type="submit" value="Sair" class="btnsair" name="sair"></form></li>
                </ul> 
              </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>  
          </nav>  
        </div>
      </div>    
    </div>
  </header> 
  <?php
      if(isset($_POST['sair']))
      {
        session_destroy();
        header('location:index.html');
      }
  ?>  
  <section id="forms">
  		<div id="cadastro-div">
            <h2 class="animate__animated animate__fadeInDown">Meus dados</h2>
      </div> 
      <div class="forms-cad">		               		              
    <!--Perfil-->
						<?php
						include('conexao.php');
						$result = mysqli_query($conexao,"SELECT * FROM tb_cliente WHERE email_cliente = '$email'");
						while($reg = mysqli_fetch_array($result))
						{
								echo"<center><form method='POST' class='upd-form' enctype=multipart/form-data>";
										echo"<label for='fotoPerf' id='lblFoto' style='background-image: url($reg[nm_foto])'></label><br><br>";
										echo"<input type='file' name='foto' id='fotoPerf'>";
											echo"<h6>Nome:</h6>"; 
											echo"<input type='text' name='nome' value='$reg[uk_nm_cliente]' required><br><br>";
											echo"<h6>Nome:</h6>"; 
											echo"<input type='text' name='cpf' value='$reg[uk_cpf_cliente]' required><br><br>";
											echo"<h6>Data de Nascimento:</h6>";
											echo"<input type='date' name='data' value='$reg[dt_nascimento_cliente]' required><br><br>";
											echo"<h6>Sexo:</h6>";
											echo"<select name='sexo' placeholder='$reg[cat_sexo_cliente]' required>";
												echo"<option value='M'>Masculino</option>";
												echo"<option value='F'>Feminino</option>";
												echo"<option value='O'>Prefiro não dizer</option>";
											echo"</select><br><br>";
											echo"<h6>Logradouro:</h6>";
												echo"<input type='text' name='logra' value='$reg[end_longradouro_cliente]' required><br><br>";
												echo"<h6>Bairro:</h6>";
												echo"<input type='text' name='bairro' value='$reg[end_bairro_cliente]' required><br><br>";
												echo"<h6>Cidade:</h6>";
												echo"<input type='text' name='cidade' value='$reg[end_cidade_cliente]' required><br><br>";	
												echo"<h6>UF:</h6>";
												echo"<input type='text' name='estado' value='$reg[uf_estado_cliente]' size='2' required><br><br>";
												echo"<h6>Telefone:</h6>";
												echo"<input type='tel' name='telefone' value='$reg[nu_telefone_cliente]' pattern='[0-9]{2}[0-9]{5}[0-9]{4}'><br><br>";
												echo"<h6>Email:</h6>";
												echo"<input type='email' name='email' value='$reg[email_cliente]' required><br><br>";
												echo"<input type='submit' value='Salvar' name='botao' class='btnForms'>";	
							echo"</form></center>";
						}	
					?>													

					<?php
						include("conexao.php");
						if(isset($_POST['botao']))
							{
								$nome = $_POST['nome'];
								$cpf = $_POST['cpf'];
								$data = $_POST['data'];
								$sexo = $_POST['sexo'];
								$logra = $_POST['logra'];
								$bairro = $_POST['bairro'];
								$cidade = $_POST['cidade'];
								$estado = $_POST['estado'];
								$telefone = $_POST['telefone'];
								$email = $_POST['email'];
								$dataBanco = date('Y/m/d', strtotime($data));
								$perfil = $_FILES['foto'];
								$nome_foto = $perfil['name'];
								$foto_temporario = $perfil['tmp_name'];
								$diretorio = 'assets/imgUsu/';

								if(move_uploaded_file($foto_temporario,$diretorio . $nome_foto))
								{
										$caminho_foto = $diretorio.$nome_foto;
										$sql = "UPDATE tb_cliente SET uk_nm_cliente='$nome',uk_cpf_cliente='$cpf',dt_nascimento_cliente='$data',cat_sexo_cliente=AES_ENCRYPT('$sexo','wVB2f_#w_^vtZGq'),end_longradouro_cliente='$logra',end_bairro_cliente='$bairro',end_cidade_cliente='$cidade',uf_estado_cliente='$estado',nu_telefone_cliente='$telefone',email_cliente='$email',nm_foto='$caminho_foto' WHERE email_cliente = '$email'";
										mysqli_query($conexao,$sql);
										echo"<script>alert('Alterações aplicadas com sucesso!'); window.location.href='PerfilUsu.php';</script>";
								}
								else
								{
										echo"<script>alert('Erro ao aplicar as alterações!'); window.location.href='PerfilUsu.php';</script>";
								}
							}	
					?>
			</div>	
	</section>					
	<!--end Perfil-->				
	<!--Footer-->	
	<footer id="footer">
	    <div class="container">
	      <div class="copyright">
	        &copy; Copyright <strong>Fabex Cake's</strong>. All Rights Reserved
	      </div>
	      <div class="credits">
	        Designed by <a href="https://bootstrapmade.com/">Fabex Company</a>
	      </div>
	    </div>
  	</footer><!-- End Footer -->	

	<!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

   
  <script src="assets/js/main.js"></script>
</body>
</html>		