<!DOCTYPE html>
<html lang="es"><head>
  <meta charset="utf-8">
  <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1 user-scalable=no, minimal-ui">
  <title>Electromec&aacute;nica</title>
  <link rel="stylesheet" href="../css/3.3.7/bootstrap.min.css"></link>
  <link rel="stylesheet" href="../css/3.3.7/bootstrap-theme.min.css"></link>
  <link rel="stylesheet" href="css/style2.css"></link>
  <script src="../js/3.3.1/jquery.min.js"></script>
  <script src="../js/3.3.7/bootstrap.min.js"></script>
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
        '<a href=""   target="_blank"  class="blink" style="font-size:15px;color:red;">'+
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
        <li style="float:right" class="active"><a href="Electromecanica.php">ELECTROMEC&Aacute;NICA</a></li>
        <li style="float:right"><a href="Automotores.php">AUTOMOTORES</a></li>
      </ul>
  </div>
</nav-->
    <!---->
    
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
          <img src="./Slider_Electromecanica/03p.jpg" alt="1">
          <div class="carousel-caption">
              <h1>Electromec&aacute;nica</h1>
          </div>      
        </div>

        <?php ColocarImagenes('Slider_Electromecanica');?>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

      <!-----Perfil de electromecanico----->

    <center>
      <div class="jumbotron jumbotron-fluid" style="background-color:#333; color: white;">
        <div class="container txt">
          <h1 class="display-4">Electromec&aacute;nica</h1>
          <br>
          <hr/>
          <br>
          <h2><ins>Perfil profesional del técnico Electromecánico</ins></h2><br>
          <p class="lead" align="left">
          El Técnico del sector Electromecánico está capacitado para manifestar conocimientos, habilidades,
          destrezas, valores y actitudes en situaciones reales de trabajo, conforme a criterios de
          profesionalidad propios de su área y de responsabilidad social al:
          </p>
          <br>
          <ul align="left">
            <li>
              "Proyectar equipos e instalaciones mecánicas, electromecánicas, de sistemas neumáticos,
              oleohidraúlicos; circuitos eléctricos y de control de automatismos; herramientas y
              dispositivos”.
            </li>
            <li>
              “Realizar ensayos de materiales y ensayos eléctricos, mecánicos, y electromecánicos”.
            </li>
            <li>  
              “Operar equipos e instalaciones y dispositivos de accionamiento y control de la
              producción y máquinas herramientas”.
            </li>
            <li>
              “Realizar los mantenimientos, predictivo, preventivo, funcional operativo, y correctivo de
              componentes, equipos e instalaciones electromecánicas”.
            </li>
            <li>
              “Montar dispositivos y componentes de equipos e instalaciones mecánicas eléctricas, de
              sistemas neumáticos, oleohidraúlicos y electromecánicas”
            </li>
            <li>
              “Instalar líneas de consumo y distribución de energía eléctrica de baja y media tensión”.
            </li>
            <li>
              “Realizar la selección, asesoramiento y comercialización de equipamiento e instalaciones
              electromecánicas”.
            </li>
            <li>
              “Generar emprendimientos”.
            </li>
          </ul>
          <br>
          <p class="lead" align="left">
          Cada uno de estos puntos en los ámbitos de producción, laboratorios, mantenimiento, desarrollo,
          gestión y comercialización, actuando en relación de dependencia o en forma independiente. Será
          capaz de interpretar las definiciones estratégicas surgidas de los estamentos técnicos y jerárquicos
          pertinentes, gestionar sus actividades específicas, realizar y controlar la totalidad de las
          actividades requeridas hasta su efectiva concreción, teniendo en cuenta los criterios de seguridad,
          impacto ambiental, relaciones humanas, calidad y productividad.
          </p>
          <br>
          <hr/>
          <br>
          <p class="lead" align="left">Esta es la curr&iacute;cula de todas las materias que se ven en la especialidad "Electromec&aacute;nica" con la cantidad de horas totales.</p>
        </div>
      </div>
    </center>
    
    <?php require_once('grillas/grillaelectro.php');?>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    
    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-arrow-up"></i></span>
  
  </body>
</html>