<!DOCTYPE html>
<html lang="es"><head>
	<meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1 user-scalable=no, minimal-ui">
	<title>Automotores</title>
    <link rel="stylesheet" href="../css/3.3.7/bootstrap.min.css"></link>
	<link rel="stylesheet" href="../css/3.3.7/bootstrap-theme.min.css"></link>
    <link rel="stylesheet" href="css/style2.css"></link>
    <script src="../js/3.3.1/jquery.min.js"></script>
    <script src="../js/3.3.7/bootstrap.min.js"></script>
    <!--
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="../js/all.min.js"></script>
    <script src="../js/jquery-latest.js"></script>
    <script src="../js/arriba.js"></script>
	<script src="../js/sweetalert29.js"></script>
</head>

<body id="Inicio" data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color:#;">

 <?php
    require_once('../inc/Funciones.php');
    escribirmenuEspecialidades();
 ?>
 
 <script>
		Swal.fire({
				  title: 'Atención alumnos de 3er año!!!', 
				  
				  html:
                      '<a href="https://www.youtube.com/watch?v=AQ-7Jjl31l4&feature=youtu.be"   target="_blank"  class="blink" style="font-size:15px;color:red;">'+
				     'Ver vídeo de la especialidad haciendo clic sobre este enlace </a><br><br>'
		});
</script>
	
<!--nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
      <ul class="nav navbar-nav">
        <img class="logo" src="img/Logo%20chaca.png" style="width:10%;margin-top:0px;padding:0px;float:left;">
        <li style="float:right"><a href="index.php">VOLVER</a></li>
        <li style="float:right"><a href="Hardware.php">INFORM&Aacute;TICA PROFESIONAL</a></li>
        <li style="float:right"><a href="Programacion.php">PROGRAMACI&Oacute;N</a></li>
        <li style="float:right"><a href="Electromecanica.php">ELECTROMEC&Aacute;NICA</a></li>
        <li style="float:right" class="active"><a href="Automotores.php">AUTOMOTORES</a></li>
      </ul>
  </div>
</nav>-->
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!--
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
	-->
    <div class="carousel-inner" role="listbox" style="background-color:azure">
      <div class="item active">
        <img src="./Slider_Automotor/01pequeño.jpg" alt="1" width="50vh">
        <div class="carousel-caption">
            <h1>Automotores</h1>
        </div>      
      </div>

      <?php ColocarImagenes('Slider_Automotor');?>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atrás</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
      </a>
    </div>
  </div>


    <!-----------Perfil de automotor----------->
    
    <center>
       <div class="jumbotron jumbotron-fluid" style="background-color:#333; color: white;">
        <div class="container txt">
          <h1 class="display-4">Automotores</h1>
          <br>
          <hr/>
          <br>
          <h2><ins>Perfil profesional del técnico Automotor</ins></h2>
          <br>
          <p class="lead" align="left">El egresado ser&aacute; capaz de interpretar las definiciones estrat&eacute;gicas surgidas de los estamentos t&eacute;cnicos, teniendo en cuenta los criterios de seguridad, impacto ambiental, relaciones humanas, calidad y productividad.
          <br><br>
          <ins>Las funciones primordiales del t&eacute;cnico en automotores esta divida de la siguiente forma:</ins>
          <br><br>
          <ul align="left">
            <li>“Proyectar, diseñar y calcular componentes, sistemas e intalaciones del automotor”</li>
            <li>“Montar y desmontar componentes, sistemas e instalaciones del automotor”</li>
            <li>“Verificar y evaluar componentes, sistemas e instalaciones de automotores”</li>
            <li>“Operar y mantener componentes, sistemas e instalaciones del automotor”</li>
            <li>“Realizar e interpretar ensayos de motores, sistemas e instalaciones del automotor”</li>
            <li>“Comercializar, seleccionar y asesorar en servicios y productos del &aacute;rea automotriz”</li>
            <li>“Generar emprendimientos”</li>
          </ul>
          
          <p class="lead" align="left">Ser&aacute; determinante trabajar en los todos los sistemas mec&aacute;nicos, el&eacute;ctricos y electr&oacute;nicos de los autom&oacute;viles. Llevando las funciones antes mencionadas al plano m&aacute;s tangible. Obrando a favor de obtener la mayor cantidad de experiencias vividas. Pensando en la pronta y favorable inserci&oacute;n laboral que estas traer&iacute;an.
          <br><br>
          <ins>Algunos de los sistemas donde desarrollaran sus capacidades:</ins></p>
          <p></p>
          <ul align="left">
            <li>Sistemas mecánicos: sistemas de frenos, de refrigeraci&oacute;n, de direcci&oacute;n, de transmisi&oacute;n, de distribuci&oacute;n, etc.</li>
            <li>Sistemas eléctricos: circuitos de luces y accesorios del autom&oacute;vil, sistemas de carga y arranque, etc.</li>
            <li>Sistemas electr&oacute;nicos: sistemas de inyecci&oacute;n nafteros y gasoleros, etc.</li>
          </ul>
          </p>
          
          <br>
          <hr/>
          <br>

          <p class="lead" align="left">Esta es la currícula de todas las materias que se ven en la especialidad "Automotor" con la cantidad de horas totales.</p>
        </div>
      </div>
    </center>

      <!--curricula auto-->

    <?php require_once('grillas/grillaauto.php');?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    
    
    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-arrow-up"></i></span>
  </body>
</html>