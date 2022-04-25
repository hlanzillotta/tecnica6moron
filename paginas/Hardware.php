<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
  	<meta http-equiv="X-UA-compatible" content="IE-edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1 user-scalable=no, minimal-ui">
  	<title>Informática profesional y personal</title>
    <link rel="stylesheet" href="../css/3.3.7/bootstrap.min.css"></link>
  	<link rel="stylesheet" href="../css/3.3.7/bootstrap-theme.min.css"></link>
  	<link rel="stylesheet" href="css/style2.css"></link>
  	<script src="../js/3.3.1/jquery.min.js"></script>
    <script src="../js/3.3.7/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/all.min.css"></link>
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
            '<a href="https://www.youtube.com/watch?v=ZAMKi3sGLcA&feature=youtu.be&ab_channel=OmarFontana"   target="_blank"  class="blink" style="font-size:15px;color:red;">'+
				    'Ver vídeo de la especialidad haciendo clic sobre este enlace </a><br><br>'
		  });
    </script>	
	
	
    <!----Carousel---->
    
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
          <img src="./Slider_Informatica/01p.jpg" alt="1" >
          <div class="carousel-caption">
              <h1>Informática Profesional y Personal</h1>
          </div>      
        </div>

        <?php ColocarImagenes('Slider_Informatica');?>
        
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
      <!--Perfil de Informatica profesional y personal-->
    <center>
      <div class="jumbotron jumbotron-fluid" style="background-color:#333; color: white;">
        <div class="container txt">
          <h1 class="display-4">INFORMÁTICA PROFESIONAL</h1>
          <br>
          <hr/>
          <br>
          <h2><ins>Perfil profesional del técnico en Informática profesional y personal</ins></h2><br>
          <p class="lead" align="left">El técnico en informática profesional y personal está capacitado para asistir al usuario de productos y servicios informáticos brindándole servicios de instalación, capacitación, sistematización, mantenimiento primario, resolución de problemas derivados de la operatoria, y apoyo a la contratación de productos o servicios informáticos, desarrollando las actividades descritas en su perfil profesional y pudiendo actuar de nexo entre el especialista o experto en el tema, producto, o servicio y el usuario final.</p>
          <br>
          <hr/>
          <br>
          <p class="lead" align="left">Esta es la currícula de todas las materias que se ven en la especialidad "Informática Profesional y personal" con la cantidad de horas totales.</p>
        </div>
      </div>
    </center>
    
      <!--curricula hard-->
    
    <?php require_once('grillas/grillahard.php');?>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS --
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    
    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-arrow-up"></i></span>
  
    </body>
</html>