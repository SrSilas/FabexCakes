i<!DOCTYPE html>
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
<!-- ======= Cardapio Section ======= -->
    <section id="portfolio" class="section-bg">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title">Cardapio</h3>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100"">
      <div class=" col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">Tudo</li>
            <li data-filter=".filter-app">Bolos</li>
            <li data-filter=".filter-card">Doces</li>
            <li data-filter=".filter-web">Salgados</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/1.jpg" height="240px" width="418px"class="fotosCardapio">
              <a href="assets/img/cardapio/1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Se você ama brigadeiro, esse é o bolo certo para você"><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="1">
                <input type="hidden" name="product_name" value="Bolo de Brigadeiro">
                <input type="hidden" name="product_price" value="45.00">
                <Label for="addprod1" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod1" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Bolo de Brigadeiro</a></h4>
              <p>Bolos</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/5.jpg" height="240px">
              <a href="assets/img/cardapio/5.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Os melhores salgados tradicionais"><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="2">
                <input type="hidden" name="product_name" value="Salgados Tradicionais">
                <input type="hidden" name="product_price" value="100.00 o Cento">
                <Label for="addprod2" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod2" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Salgados Tradicionais</a></h4>
              <p>Salgados</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/15.jpg" height="240px" width="418px"class="fotosCardapio">
              <a href="assets/img/cardapio/15.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Para os amantes de churros"><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="3">
                <input type="hidden" name="product_name" value="Bolo de Churros">
                <input type="hidden" name="product_price" value="45.00">
                <Label for="addprod3" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod3" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Bolo de Churros</a></h4>
              <p>Bolos</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/3.jpg" height="240px" width="418px"class="fotosCardapio">
              <a href="assets/img/cardapio/3.jpg"" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Para acrescentar qualidade, sofisticação e doçura a sua festa. "><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="4">
                <input type="hidden" name="product_name" value="Doces Finos">
                <input type="hidden" name="product_price" value="170.00 o Cento">
                <Label for="addprod4" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod4" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Doces Finos</a></h4>
              <p>Doces</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/12.jpg" height="240px">
              <a href="assets/img/cardapio/12.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Os melhores assados, só aqui na Fabex."><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="5">
                <input type="hidden" name="product_name" value="Salgados Assados">
                <input type="hidden" name="product_price" value="120.00 o Cento">
                <Label for="addprod5" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod5" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Salgados Assados</a></h4>
              <p>Salgados</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/2.jpg" height="240px">
              <a href="assets/img/cardapio/2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Uma ocasião especial, requer sempre um bolo especial!"><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="6">
                <input type="hidden" name="product_name" value="Bolo de decorado">
                <input type="hidden" name="product_price" value="50.00">
                <Label for="addprod6" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod6" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Bolo decorado</a></h4>
              <p>Bolos</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/19.jpg" height="240px">
              <a href="assets/img/cardapio/19.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Para você que ama o tradicional e não abre mão da qualidade."><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="7">
                <input type="hidden" name="product_name" value="Doces Tradicionais">
                <input type="hidden" name="product_price" value="100.00 o Cento">
                <Label for="addprod7" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod7" class="btncar">
              </form> 
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Doces Tradicionais</a></h4>
              <p>Doces</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/6.jpg" height="240px" width="418px"class="fotosCardapio">
              <a href="assets/img/cardapio/6.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Por que a vida com pudim é sempre mais doce!"><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="8">
                <input type="hidden" name="product_name" value="Pudim de Leite">
                <input type="hidden" name="product_price" value="30.00">
                <Label for="addprod8" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod8" class="btncar">
              </form>  
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Pudim de leite</a></h4>
              <p>Doces</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <figure>
              <img src="assets/img/cardapio/27.jpg" height="240px" width="418px"class="fotosCardapio">
              <a href="assets/img/cardapio/27.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Para ocasiões mais que especiais, temos os salgados perfeitos."><i class="bi bi-plus"></i></a>
              <form method="POST" action="carrinho.php">
                <input type="hidden" name="product_id" value="9">
                <input type="hidden" name="product_name" value="Salgados especiais">
                <input type="hidden" name="product_price" value="100.00 o Cento">
                <Label for="addprod9" class="link-details bi bi-cart" title="More Details"></Label>
                <input type="submit"class="link-details" title="More Details" style="display: none;" id="addprod9" class="btncar">
              </form>  
            </figure>

            <div class="portfolio-info">
              <h4><a href="portfolio-details.html">Salgados Especiais</a></h4>
              <p>Salgados</p>
            </div>
          </div>
        </div>

      </div>

      </div>
    </section><!-- End Portfolio Section -->

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