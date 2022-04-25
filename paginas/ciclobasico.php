<!DOCTYPE html>
<html lang="es">
  <head>     
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1 user-scalable=no, minimal-ui">
    <title>Ciclo básico</title>
    <link rel="stylesheet" href="../css/3.3.7/bootstrap.min.css"></link>
    <link rel="stylesheet" href="../css/3.3.7/bootstrap-theme.min.css"></link>
    <link rel="stylesheet" href="css/style2.css">
    <script src="../js/3.3.1/jquery.min.js"></script>
    <script src="../js/3.3.7/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/all.min.css">
    <script src="../js/all.min.js"></script>
    <script src="../js/jquery-latest.js"></script>
    <script src="../js/arriba.js"></script>
  
    <!--jQuery mobile-->
    <!--<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>-->
  </head>
  <body id="Inicio" data-spy="scroll" data-target=".navbar" data-offset="50">
  
    <?php 
	      require_once('../inc/Funciones.php');
	      escribirmenuEspecialidades();
    ?>
      <!------------------------------------------------>
    
      <!-----------carrousel------------------------->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!--
	<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
	-->
      <div class="carousel-inner" role="listbox" style="background-color:azure">
        <div class="item active">
          <img src="Slider_ciclo_basico/07.jpg" alt="1" width="50vh">
          <div class="carousel-caption">
              <h1>Ciclo Básico</h1>
          </div>      
        </div>
             
        <div class="item sld">
          <img src="Slider_ciclo_basico/01.jpg">
        </div>
        <div class="item sld">
          <img src="Slider_ciclo_basico/02.jpg">
        </div>
        <div class="item sld">
          <img src="Slider_ciclo_basico/03.jpeg">
        </div>
        <div class="item sld">
          <img src="Slider_ciclo_basico/04.jpeg">
        </div>
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
    <center>
    <div class="jumbotron jumbotron-fluid" style="background-color:#333; color: white;">
      <div class="container txt">
        <h1 class="display-4">Ciclo Básico</h1><hr>
        <p style="font-size: 18px;" align="left">Los alumnos finalizarán el ciclo lectivo básico teniendo la capacidad de manipular herramientas de carpintería y hojalatería; desenvolverse en electricidad y soldadura; y valerse en tornería.</p>
    		<hr>
    		<p class="lead" align="left" style="font-size: 19.5px;">Aquí encontrará la currícula de los talleres que cursan los alumnos de primer, segundo y tercer año, con la cantidad de horas totales.</p>
          
      </div>
    </div>
    <?php require_once('grillas/grilla.php');?>
    </center>
    <div id="demo" class="collapse">
     <center> <h3>Imágenes de los talleres</h3> </center>
     <div class="row">
        <div class="col-xs-12">
          <?php require_once('talleres.php');?>
        </div>
      </div>  
    </div>
    

    <script>
      function mostrar(demo,botonOn)
      {
        if(document.getElementById(demo).style.display=='block')
        {
          document.getElementById(demo).style.display='none';
          document.getElementById(botonOn).innerHTML='Mostrar imágenes de los talleres';
        }else
          {
            document.getElementById(demo).style.display='block';
            document.getElementById(botonOn).innerHTML='Ocultar imágenes de los talleres';
          }
      }
    </script>

    <br/><center><a type="button" id="botonOn" onclick="mostrar('demo','botonOn')">Mostrar imágenes de los talleres</a></center><br/>
         
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    	
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    	
    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-arrow-up"></i></span>
	
  </body>
</html>