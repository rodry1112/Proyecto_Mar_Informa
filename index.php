<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>MAR INFORMA</title>
  
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
  <link rel="stylesheet" href="layout/styles/images/botonn.css" type="text/css"/>
  <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
  <!-- Waterwheel Carousel -->
  <script type="text/javascript" src="layout/scripts/carousel/jquery.waterwheelCarousel.min.js"></script>
  <script type="text/javascript" src="layout/scripts/carousel/jquery.waterwheelCarousel.setup.js"></script>
  <!-- / Waterwheel Carousel -->
</head>

<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href="index.html">MAR INFORMA</a></h1>
    </div>
    <div class="fl_rightsup">
      <?php
        session_start();
        
        if(!empty($_SESSION["nombre"])){
          $nombre = $_SESSION["nombre"];

          echo "<button class='ripple'> $nombre </button>";

        }else{
          print "<button class='ripple'>Inicia Sesion</button>";
        }
      ?>
    <script src="./animaciones/botoninitindex.js"></script>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">INICIO</a></li>
        <li><a href="pages/noticia_catalogo.php?noticia=politica">POLITICA</a></li>
        <li><a href="pages/noticia_catalogo.php?noticia=deporte">DEPORTES</a></li>
        <li><a href="pages/noticia_catalogo.php?noticia=receta">RECETAS</a></li>
        <li class="last"><a href="pages/noticia_catalogo.php?noticia=tecnologia">TECNOLOGIA</a></li>
        <li><a href="pages/noticia_catalogo.php?noticia=cultura">CULTURA</a></li>
        <li><a href="pages/noticia_catalogo.php?noticia=farandula">FARANDULA</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="BUSCAR CONTENIDO &hellip;"  onfocus="this.value=(this.value=='BUSCAR CONTENIDO &hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Buscar" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="waterwheelCarousel">
    <img src="images/carousel/1 (1).jpg" alt=""  width="300" height="300"/>
    <img src="images/carousel/1 (2).jpg" alt="" width="300" height="300" />
    <img src="images/carousel/1 (3).jpg" alt="" width="300" height="300"/>
    <img src="images/carousel/1 (4).jpg" alt="" width="300" height="300"/>
    <img src="images/carousel/1 (5).jpg" alt="" width="300" height="300"/>
    <img src="images/carousel/1 (6).jpg" alt="" width="300" height="300"/>
    <img src="images/carousel/1 (7).jpg" alt="" width="300" height="300"/>
    <img src="images/carousel/1 (8).jpg" alt="" width="300" height="300"/>
    <img src="images/carousel/1 (9).jpg" alt="" width="300" height="300"/>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="featured_intro">
    <div class="fl_left">
       <div class="fl_right"><a href="#"><img src="images/demo/LOGOLETRAS.png" alt="" width="350" height="350" style="margin-top: -80px;"/></a></div>
    </div>
    <div class="fl_right">
      <h2>Bienvenidos a Mar Informa!</h2>
      <p> Tu fuente de noticias confiable y objetiva que te mantiene informado sobre los acontecimientos mas relevantes a nivel nacional e internacional. Somos un periodico digital independiente comprometido con la verdad y la imparcialidad. Nuestra mision es proporcionar a nuestros lectores noticias precisas, analisis perspicaces y opiniones equilibradas en una variedad de temas que impactan a la sociedad. Valoramos la integridad periodistica y la responsabilidad hacia nuestros lectores.
      <p class="readmore"><a href="#">SIGANOS &raquo;</a></p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div class="footbox twitter">
      <h2>PAGINAS PERSONALES</h2>
      <ul>
        <li><a href= "https://www.facebook.com/miguel.callelinares">>Facebook = MIGUEL ANGEL CALLE LINARES</a></li>
        <li><a href= "https://www.facebook.com/rodrigomario.barahonayali">>Facebook = RODRIGO MARIO BARAHONA YALI</li>
          <li><a href= "https://www.facebook.com/adrifu.adrifu">>Facebook = ALISSON ADRIANA FUNES LIMACHI</li>
      
      </ul>
    </div>
    <div class="footbox flickr">
      <h2>UN POCO SOBRE NOSOTROS</h2>
      <ul>
        <li><a href="#"><img src="images/demo/RODRI.jfif" alt="" width="80" height="80"/></a></li>
        <li><a href="#"><img src="images/demo/MIGUEL.jfif" alt="" width="80" height="80"/></a></li>
        <li><a href="#"><img src="images/demo/ADRIANA.jfif" alt="" width="80" height="80"/></a></li>
      </ul>
      <br class="clear" />
    </div>
    <div class="footbox posts">
      <h2>NOTICIAS INTERNACIONALES</h2>
      <ul>
        <li><a href="index.html">PERU</a></li> 
        <li><a href="index.html">CHILE</a></li>
        <li><a href="index.html">ARGENTINA</a></li>
        <li><a href="index.html">EL SALVADOR</a></li>
        <li><a href="index.html">MEXICO</a></li>
        <li><a href="index.html">ESTADOS UNIDOS</a></li>
        <li><a href="index.html">INDIA</a></li>
        <li><a href="index.html">ECUADOR</a></li>
        <li><a href="index.html">COLOMBIA</a></li>
      </ul>
    </div>
    <div class="footbox banners last">
      <h2>EL EQUIPO DE MAR INFORMA</h2>
      <ul>
        <li><a href="#"><img src="images/demo/23.jfif" alt="" width="200" height="150"/></a></li>
        <li><a href="#"><img src="images/demo/323.jfif" alt="" width="200" height="150" /></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="MAR INFORMA">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2023 - Derechos Reservados - <a href="#">MAR INFORMA</a></p>
    <p class="fl_right">SIGUENOS EN NUESTRAS REDES SOCIALES <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>