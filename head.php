<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu billetera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="css/checkboxes.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animacion.css">
    <link rel="stylesheet" href="css/aos.css"> 
    <link rel="stylesheet" media="(min-width: 768px)" href="css/desktop.css" />    
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">

</head>
<body>
<div id="preloader">
  <div id="status"></div>
</div> 
<?php include 'sonar.php'; ?>

<!--- new header --->
<nav class="menu-head">

  <a class="navbar-brand-site" href="index.php">
    <img src="img/logo.svg" alt="">
  </a>

  <div class="wrapper-menu">
  <ul class="menu-list">
    <li><a href="index.php"><span class="icon-mobile-menu">
    <img src="img/img-m-home.svg" alt="">
    </span>Home</a></li>

    <li><a href="nosotros.php"><span class="icon-mobile-menu">
    <img src="img/img-m-nosotros.svg" alt="">
    </span>Nosotros</a></li>

    <li><a href="preguntas.php"><span class="icon-mobile-menu">
    <img src="img/img-m-preguntas.svg" alt="">
    </span>Preguntas</a></li>

    <li class="btn-desktop">
     <a class="btn-right" href="login.php">
      <img  class="tu-credito" src="img/btn-solicita-tu-credito-v.svg" alt="">
     </a>
    </li>

    <li>
       <a class="btn-right user-ds"  href="#">
       <img class="user-disable" src="img/usuarioinactivo.png" alt="">
      </a>
    <ul class="submenu">    
     <li><a href="login.php">Iniciar Sesión</a></li>
     <li><a href="registro.php">Registrarse</a></li>
   </ul>
     </li>
   
    </li>
  </ul>
  <div class="icon-menu">
    <span></span>
    <span></span>
    <span></span>
  </div>
  </div>
</nav>