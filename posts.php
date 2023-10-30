<?php
session_start();
require_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MSH - My Sweet Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo2.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- CSS-->
  <link href="assets/css/style2.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <a href="index.html"><img width="" height="" src="assets/img/logosemfundo.png" alt=""></a>
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="index.php">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#sobre">Sobre</a></li>
          <li><a class="nav-link scrollto" href="index.php#time">Conheça Nosso Time</a></li>
          
          <li><a class="nav-link scrollto" href="contato.php">Contato</a></li>
          <li class="dropdown"><a href="#"><span>Menu</span> <i class="bi bi-chevron-down"></i></a>
            
            <ul>
                  <li><a href="#">Agenda</a></li>
                  <li><a href="#">Calculadora</a></li>
                  <li><a href="#">Favoritos</a></li>
                  
            </ul>
          </li>
          <li class="dropdown"><a href="#">Login<i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php
                
                  if(isset($_SESSION['login'])){
                    if($_SESSION['login'] == true){ 
                      echo "<li class='dropdown'><a href='privado/perfil.php'>Ver perfil</a></li>";
                      
                      echo "<li class='dropdown'><a href=''>Sair</a></li>";
                  
                    }
                   
                  }  else{
                    echo "<li class='dropdown'><a href='login.php'>Entrar</a></li>";
                    
                    echo "<li class='dropdown'><a href='cadastro.php'>Cadastrar</a></li>";
                    }
                  
              ?>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- final Header -->

  <!-- ======= Hero imagem do fundo ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Todas as nossas Postagens</h1>
      
    </div>
  </section><!-- Fim do Hero-->

  <main id="main">
   
    <!-- ======= Sobre======= -->
    


   
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h3 class="section-title">Vem nas dicas</h3>
          <p class="section-description"> </p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=cozinha" >COZINHA</a></button>
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=limpeza" >LIMPEZA</a></button>
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=hacks" >LIFE HACK</a></button>
              <button type="button" class="btn btn-primary"><a href="guias.php?cat=web" >WEB</a></button>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          
          <?php
                $sql = "SELECT * FROM guias";
                $result = recebe($mysqli_con,$sql);  
                if($result ){
                    while($dado = mysqli_fetch_array($result)){



                    
                       echo " <div class='col-lg-4 col-md-6 portfolio-item filter-app'>"."</br>";
                       echo " <img src='".$dado['imagem']."' class='img-fluid' alt='    '>"."</br>";
                       echo " <div class='portfolio-info'>"."</br>";
                       echo  " <h4>".$dado['titulo_guia']."</h4>"."</br>";
                       echo  "<p>".$dado['id_categoria']."</p>"."</br>";
                       echo  "<a href='' data-gallery='portfolioGallery' class='portfolio-lightbox preview-link' title='App 1'><i class='bx bx-plus'></i></a>"."</br>";
                       echo  "<a href='guias.php?id=".$dado['id_guia']."' class='details-link' title='More Details'><i class='bx bx-link'></i></a>"."</br>";
                       echo "</div></div>";
                      

                    }
                }
                ?>

        </div>

      </div>
   
      
    

    <!-- ======= Contato ======= -->
    

  </main>

  <!-- ======= Footer (rodapé)======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>My Sweet Home</strong>. Todos os Direitos Reservados
      </div>
      <div class="credits">
        
       </a>
      </div>
    </div>
  </footer><!-- fim do rodapé -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>