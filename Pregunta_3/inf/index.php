<?php
  include("sesion.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FACULTAD DE CIENCIAS PURAS Y NATURALES</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>


<header class="header">
    <a href="../index.php" class="header_logo">
      <img src="../img/logoFCPN.png" alt="Logo de la fcpn" class="header_logo_imagen">
      <p class="header_logo_texto">Facultad de Ciencias Puras y Naturales</p>
    </a>      
    
    <nav class="nav">
      <ul>
        <li><a href="#home">INICIO</a></li>
        <li><a href="#courses">CARRERAS</a></li>
        <li><a href="#footer">CONTACTO</a></li>
         <li><a href="cerrar_sesion.php"><button type="button" class="btn btn-danger">Cerrar Sesion</button></a></li>
      </ul>
    </nav>
</header>

<section class="home-section" id="home">
  <div class="container">
    <div class="row h-100 align-items-center align-content-center">
      <div class="home-text">
        <h1>Informatica   <span>FCPN</span><br> HISTORIA</h1>
        <h2>
        La Carrera de Informática fue creada en 1973, como una mención 
        del Departamento de Matemáticas; el 15 de octubre de 1984 se independiza
         administrativamente de éste, convirtiéndose posteriormente en Carrera de 
         Informática,con aproximadamente 300 alumnos. El primer coordinador de 
         Informática fue el Ing. Roberto Carranza, quien tuvo que hacer frente 
         a los típicos problemas de un nuevo programa, tales como: el primer pensum, 
         la primera organización curricular, la infraestructura para cubrir las 
         necesidades del programa, entre otros.


        </h2>
        <a href="#" class="btn btn-1">Conoce Mas Sobre  la Carrera de Fisica</a>
      </div>
      <div class="home-img">
        <div class="home-img-inner">
          
          <img src="../img/inf.png" alt="home-img">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="courses-section sec-padding" id="courses">
  <div class="container">
    <div class="row">
      <div class="section-title">
        <h2><span>CARRERAS</span></h2>
      </div>
    </div>
    <div class="cursos_imagenes">
      <div class="course-item">
        <a href="index.php">
          <div class="course-img">
             <img src="../img/inf.png" alt="course-img">
             <div class="course-price">
               INFORMATICA
             </div>
          </div>
          
        </a>
      </div>
      <div class="course-item">
        <a href="../fis/index.php">
          <div class="course-img">
             <img src="../img/fisica.jpg" alt="course-img">
             <div class="course-price">
              FISICA
            </div>
          </div>
          
        </a>
      </div>
      <div class="course-item">
        <a href="../qmc/index.php">
          <div class="course-img">
             <img src="../img/qmc.png" alt="course-img">
             <div class="course-price">
              QUIMICA
            </div>
          </div>
          
        </a>
      </div>
      
    </div>
  </div>
</section>

<footer class="footer" id="footer">
  <div class="container_footer">
    
      <img src="../img/logoumsablanconegro.png" alt="">  
      <img src="../img/logofcpn_blanconegro.png" alt="">

      <div class="footer-item footer-about">
        <h2>Sobre Nosotros</h2>
        <p>La plataforma presente es perteneciente a la UMSA la cual esta hecha para una mejor comunicacion entre docentes y estudiantes asi para lograr ver sus calificaciones y conocer acerca de nuestra Facultad.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      
      <div class="footer-item footer-contact">
        <h2>Contactenos</h2>
        <p><i class="fas fa-map-marker-alt"></i> Monoblock Central (Edificio Antiguo) </p>
        <p><i class="fas fa-phone"></i> 123 - 456 -789</p>
        <p><i class="fas fa-envelope"></i> yyyyyyyy@fcpn.edu.com</p>
        
      </div>
      
    
  </div>
</footer>
</body>
</html>