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
                <li><a class="nav-link scrollto active" href="indexLogado.php">Home</a></li>
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
              <img src="assets/img/cardapio/1.jpg" height="240px">
              <a href="assets/img/cardapio/1.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <a href="assets/img/cardapio/5.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <img src="assets/img/cardapio/10.jfif" height="240px">
              <a href="assets/img/cardapio/10.jfif" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <img src="assets/img/cardapio/3.jpg" height="240px">
              <a href="assets/img/cardapio/3.jpg"" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <a href="assets/img/cardapio/12.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <a href="assets/img/cardapio/2.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <img src="assets/img/cardapio/11.jfif" height="240px">
              <a href="assets/img/cardapio/11.jfif" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <img src="assets/img/cardapio/6.jpg" height="240px">
              <a href="assets/img/cardapio/6.jpg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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
              <img src="assets/img/cardapio/13.jfif" height="240px">
              <a href="assets/img/cardapio/13.jfif" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Web 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" class="link-details" title="More Details"><i class="bi bi-cart"></i></a>
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