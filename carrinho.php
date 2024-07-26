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
  ?>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fabex Cake's&reg</title>
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
                <li><a class="nav-link scrollto active" href="indexLogado.php">Cardapio</a></li>
                <li><a class="nav-link scrollto" href="carrinho.php">Carrinho</a></li>
                <li class="dropdown"><a href="#"><span>Eu</span><i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="PerfilUsu.php">Meus dados</a></li>
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
    <!--end Header-->
<!--carrinho-->    
<section id="carrinho">
      <div id="titleCarrinho">
            <h2 class="animate__animated animate__fadeInDown" id="titlecar">Carrinho</h2>
      </div>
      <div id="produtosCarrinho">
        <?php  
        $total = 0;
        if (isset($_POST['product_id'])) 
        {
          $product_id = $_POST['product_id'];
          $product_name = $_POST['product_name'];
          $product_price = $_POST['product_price'];

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            // Verifique se o produto já existe no carrinho e, se existir, atualize a quantidade
            $product_exists = false;
            foreach ($_SESSION['cart'] as &$item) {
                if ($item['id'] == $product_id)
                {
                    $item['quantity']++;
                    $product_exists = true;
                    break;
                }
            }

            if (!$product_exists) 
            {
              $_SESSION['cart'][] = array(
              'id' => $product_id,
              'name' => $product_name,
              'price' => $product_price,
              'quantity' => 1  // Inicializa a quantidade com 1
                    );
            }
        }
        if (isset($_GET['remove'])) 
        {
          $remove_id = $_GET['remove'];
          // Percorra o carrinho e remova o item com o ID correspondente
          foreach ($_SESSION['cart'] as $key => $item) {
              if ($item['id'] == $remove_id) 
              {
                unset($_SESSION['cart'][$key]);
                break;
              }
          }
        }
        // Atualize a quantidade
        if (isset($_POST['update_quantity'])) {
            $update_id = $_POST['update_id'];
            $new_quantity = $_POST['new_quantity'];

            foreach ($_SESSION['cart'] as &$item) {
                if ($item['id'] == $update_id) {
                    $item['quantity'] = $new_quantity;
                    break;
                }
            }
        }
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart']))
        {
              foreach ($_SESSION['cart'] as $item)  
              {
                echo"<div id='itemCarrinho'>";
                  echo '<h5>'.$item['name'].'</h5>';
                  echo '<h5> R$' . $item['price'] .' </h5>';
                  echo'<p> <form method="POST" action="carrinho.php">
                          <input type="hidden" name="update_id" value="' . $item['id'] . '">
                          Quantidade
                          <input type="number" name="new_quantity" value="' . $item['quantity'] . '">
                          <br><input type="submit" name="update_quantity" value="Atualizar" id="btncar" >
                      </form>
                      <a href="carrinho.php?remove=' . $item['id'] . '" id="btncar">Remover</a>
                  </p>';
                echo"</div>";  
                $price = floatval($item['price']);
                $quantity = floatval($item['quantity']);
               $total += $price * $quantity;
               $name = $item['name'];
               $listaItens = "";
               $listaItens .= " $quantity - $name -> R$ $price\n";
              }
        } 
        else 
        {
          echo '<script>alert("Carrinho vazio!");window.location.href="indexLogado.php";</script>'; 
        }
        ?>
    </div>
    <?php
          echo'<div id="div-total">';
          echo'<h5 id="vl-total">Total: R$'. number_format($total, 2) .'</h5>';
          echo'</div>';
    ?>  
    <?php
      $numero_whatsapp = "5513991759199"; 
      $mensagem_whatsapp = "$listaItens \n Total: R$$total" ;

      $link_whatsapp = "https://wa.me/$numero_whatsapp/?text=" . urlencode($mensagem_whatsapp);
    ?>
      <a href="indexLogado.php" class="btn btn-continua">Continuar comprando</a>
      <a href="<?php echo $link_whatsapp; ?>" target="_blank" class="btn btn-whats"> Finalizar pedido</a>
</section>   
<!--end carrinho-->
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

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!--carrinho js-->
  <script src="assets/js/carrinho.js"></script>
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