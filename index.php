<!DOCTYPE html>

<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Universidad Politécnica de Pachuca">
    <meta name="author" content="DTIC's">

    <title>Universidad Politécnica de Pachuca</title>

    <link rel="icon" href="./images/favicon.ico">

    <!-- Font Awesome -->
    <link href="./vendor/fortawesome/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Para centrar los iconos -->
    <link href="./coreFRONTx/iconos/iconos-centrados.css" rel="stylesheet">

    <!-- Eventos de difusion de comunicacion social -->
    <link href="./coreFRONTx/prensa/rmbc.css" rel="stylesheet">

    <!-- Alfredo OWN carrucel -->
    <!--owl carousel css-->
    <link rel="stylesheet" href="coreFRONTx/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="coreFRONTx/owl/owl.theme.default.min.css">

    <!-- Fondo para la página -->
    <!--
    <link href="./coreFRONTx/fondo/fondo.css" rel="stylesheet">
  -->

    <!-- Estilo SEP HIDALGO -->
    <link href="./seph/style.css" rel="stylesheet">

  </head>

  <body>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('./seph/hf/header.html'); ?>

    <!-- Menu principal superior -->
    <?php include ('./coreFRONTx/menu-superior/menu.html'); ?>

    <!-- Motor de busqueda de google -->
    <?php include ('./coreFRONTx/google/gsearch.html'); ?>

    <!-- Slider principal -->
    <?php include ('./coreFRONTx/slider-principal/caroucel.html'); ?>

    <br />

    <div class="container marketing">
      <!-- Iconos de las secciones -->
      <?php include ('./coreFRONTx/iconos/marketing.html'); ?>

      <!-- Prensa seccion de comunicacion social de eventos -->
      <?php include ('./coreFRONTx/prensa/rmbc.html'); ?>
        <hr class="featurette-divider">

      <!-- comunidad upp y egresados -->
      <?php include ('./coreFRONTx/comunidad/comunidadupp.html'); ?>
        <hr class="featurette-divider">
      <?php include ('./coreFRONTx/comunidad/egresados.html'); ?>
        <hr class="featurette-divider">

      <!-- Calendario de google -->
      <?php include ('./coreFRONTx/google/gcalendar.html'); ?>
        <hr class="featurette-divider">

      <?php include ('coreFRONTx/entradas/nuevo.html'); ?>

      <!-- Alfredo redes sociales y sitios de interes -->
      <?php include ('coreFRONTx/owl/tabs.html'); ?>
      <?php include ('coreFRONTx/owl/ligas.html'); ?>
        <hr class="featurette-divider">

      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('./coreFRONTx/menu-footer/menufooter.php'); ?>
        <hr class="featurette-divider">
    </div><!--end container -->

    <!-- footer de gobierno del estado -->
    <?php include ('./seph/hf/footer.html'); ?>
    <?php //include ('./coreFRONTx/hallowin-modulo.html'); ?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="./vendor/components/jquery/jquery.min.js"></script>
    <script src="./vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Para dar movimiento al slider de las noticias politicas -->
    <script src="./coreFRONTx/prensa/rmbc.js"></script>

    <!-- Alfredo OWN carrucel -->
    <script src="coreFRONTx/owl/owl.carousel.min.js"></script>
    <script src="coreFRONTx/owl/owl.js"></script>

    Ver 0.11

  </body>
</html>
