<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1 user-scalable=no, minimal-ui">
        <title>E.E.S.T Nº6 - Chacabuco -</title>
        <!--
		<link rel="stylesheet" href="css/imagehover.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
		
        <link rel="stylesheet" href="css/Styles2.css">
        <link rel="stylesheet" href="css/all.min.css">
        <script src="js/all.min.js"></script>
        <script src="https://code.jquery.com/jquery-latest.js"></script>
        <script src="./js/arriba.js"></script>
        <link rel="stylesheet" href="https://fonts.gstatic.com/s/productsans/v5/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2">
		-->
		
		<link rel="stylesheet" href="./css/imagehover.min.css">
        <link rel="stylesheet" href="./css/3.3.7/bootstrap.min.css">
        <link rel="stylesheet" href="./css/3.3.7/bootstrap-theme.min.css">
        <link rel="stylesheet" href="./css/Styles2.css">
        <link rel="stylesheet" href="./css/all.min.css">
        <script src="./js/all.min.js"></script>
        <script src="./js/jquery-latest.js"></script>
        <script src="./js/arriba.js"></script>
        <link rel="stylesheet" href="./css/fonts/HYvgU2fE2nRJvZ5JFAumwegdm0LZdjqr5-oayXSOefg.woff2">
        <script src="./js/3.3.7/bootstrap.min.js"></script>
        <script src="./js/bootstrap.min.js"></script>
    </head>
    
<body id="Inicio"  data-spy="scroll" data-target=".navbar" data-offset="50">
    
    <?php
         require_once('inc/Funciones.php');
         escribirmenuIndex();
    ?>
      
	 <script src="./js/sweetalert29.js"></script> 
     <script>
		Swal.fire({
				  title: '<u>Comunicado oficial para las familias</u>', 
				  text: 'Comunicado para las familias !!! COVID-19.',
				  width: 600,
				  
				  
				  
				  /*imageUrl: './img/Comunicado.jpg',
				  imageWidth: 400,
				  imageHeight: 200,
				  imageAlt: 'Custom image',*/
				  				               
				  html:
				      
					  '<a href="https://docs.google.com/spreadsheets/d/1aHs7V2TVtHZFka_4JGJXHD6en3Gb8OmRL3Ji4Y2aFOc/edit?usp=sharing" class=""   target="_blank"   style="font-size:15px;color:red;"> 15/02/2022 - Período de Comisiones evaluadoras para exámenes previos y completa nivel. </a><br><br>'
					  +
					  '<a href="https://docs.google.com/forms/d/e/1FAIpQLSc03zAEOqv3NWv0N6GEsyq5aXvVfXRXVq534WV7UhfjxxMhwA/viewform" class=""   target="_blank"   style="font-size:15px;color:red;"> 15/02/2022 - Período de inscripción a exámenes previos y completa nivel. </a><br><br>'
					  
					  +
					  '<a href="#" class=""        style="font-size:15px;color:red;"> 14/02/2022 - El próximo Miércoles 16 de Febrero 2022 se realizará la entrega de los módulos de alimentos para las familias. </a><br><br>'
					  +
					  
					  '<a href="https://www.facebook.com/EEST-N6-Chacabuco-Mor%C3%B3n-107168948276011" class=""   target="_blank"   style="font-size:15px;color:blue;"> 13/02/2021 - Seguinos en Facebook !!! </a><br><br>'
					  +
					   '<a href="https://instagram.com/tecnica6moron_oficial?igshid=3jrj9gmhasmv" class=""   target="_blank"   style="font-size:15px;color:blue;"> 13/02/2021 - Seguinos en  Instagram !!! </a><br><br>'
					  +
					  '<a href="./Comunicados/EquipoDirectivo2022.pdf" class=""   target="_blank"   style="font-size:15px;color:blue;"> 13/02/2022 - Nuevo equipo directivo.</a><br><br>'
					  
					  
				      
					  /*+
					  '<br><a href="./img/Inscripcion2022/Inscripcion2022.jpg" class="" onclick="Swal.close();"  target="_blank"      style="font-size:15px;color:green;"> 01/09/2021 - Pre inscripción para el año 2022 - </a><br><br>'*/
					  
					  
					  
					  /*
					  '<a href="./Comunicados/MesaVirtualMayo2021Egresados.pdf" class=""   target="_blank"   style="font-size:15px;color:green;"> 08/04/2021 - Mesa de exámenes de Mayo para Egresados -</a><br><br>'*/
					  
					  
					  +
					  '<a href="#" class="" style="font-size:15px;color:green;"> 11/02/2022 - La Fotocopiadora permanecerá abierta de lunes a viernes en el horario de 10:00 a 12:00hs y de 14:00 a 16:00hs. Ante cualquier consulta, o para enviarnos o encargar material, pueden comunicarse a nuestro mail <a href="mailto:fotocopiaschacabuco@gmail.com">fotocopiaschacabuco@gmail.com</a> - </a><br><br>'
					  +
					  
				  
				  
				      /*
					  '<br><a href="./videos/RepublicaDeCromañon.mp4" class="" onclick="Swal.close();"  target="_blank"      style="font-size:15px;color:black;"> 29/03/2021 - Jornada de la memoria "República de Cromañón" - </a><br><br>'
					  
					  
					  '<a href="#CursosPrimerAño" class="" onclick="Swal.close();"       style="font-size:15px;color:green;"> 03/03/2021 - Listado de Cursos para 1er año - </a><br><br>'
					  +
					  '<a href="./Ingresantes/Cartapadresinicio2021.pdf" class=""   target="_blank"   style="font-size:15px;color:green;"> 03/03/2021 - Carta para los padres de los alumnos del 1er año -</a><br><br>'
					  +
					  '<a href="#" class=""       style="font-size:15px;color:green;"> 02/03/2021 - La escuela permanecerá abierta en la semana del 08/03/2021 todos los días hábiles. La fotocopiadora estará abierta de Lunes a Viernes desde las 10:00 a las 14:00 hs. - </a><br><br>'
					  
					  +
					  */
					  
					  
					  
					  
					  
					  /*
					  '<a href="./Comunicados/SaludoFinal2020.pdf" class=""   target="_blank"   style="font-size:15px;color:green;"> 23/12/2020 - Saludos Finales 2020 : Felicidades para todos !!! </a><br><br>'
					  
					  
					  +
					  '<a href="./Ingresantes/Nivelacion4toMatematica2021.pdf" class=""   target="_blank"   style="font-size:15px;color:red;"> 23/12/2020 - Nivelación para 4to año Matemática año 2021 -</a><br><br>'+
					  /*
					  '<a href="./Ingresantes/CierreIngreso2021.pdf" class=""   target="_blank"   style="font-size:15px;color:green;">'+
				     '10/12/2020 - Cierre del ingreso a primer año 2021 - </a><br><br>'+
					 
					 
					 '<a href="#Ingresantes" class=""       	      style="font-size:15px;color:red;" onclick="Swal.close();">10/12/2020 -Cuadernillos para ingresantes- 2021</a><br><br>'
					 
					
					  
					  '<a href="./Ingresantes/PasajeUnidades_ProfBruno.pdf" class=""   target="_blank"   style="font-size:15px;color:blue;">03/12/2020 - Curso nivelador para ingresantes a 1er año.pdf </a><br><br>'
					  
					  
					  '<a href="./Ingresantes/CitacionInscripcion1eraño2021.pdf" class="blink"   target="_blank"   style="font-size:15px;color:green;">'+
				     '01/12/2020 - Citación para la inscripción a 1er año 2021.pdf </a><br><br>'
					 
					  
					  '<!--<a href="./ContinuidadPedagogica/CierreAño2020.pdf" class=""   target="_blank"   style="font-size:15px;color:blue;">'+
				     '11/11/2020 - Cierre del año 2020 </a><br><br>'+ 
				     
					 '<a href="https://www.youtube.com/watch?v=alC90Uwd5Tk&feature=youtu.be" class=""   target="_blank"   style="font-size:15px;color:blue;">'+
				      '30/10/2020 - ¿Cómo se evaluará en el año 2020? !!! </a><br><br>'
					 
					  <a href="#Especialidades" class ="" style="font-size:15px;color:blue;" onclick="Swal.close();"> ' +
				     '<!21/10/2020 - Alumnos de 3er año acceder las especialidades para visualizar vídeos </a><br><br>'
					 
					 '
				     */						 
					 
					 
					 
                      '<a href="https://padlet.com/indartmariaalicia/fe4ytaltd3wpuiue""   target="_blank"   style="font-size:15px;color:green;">'+
				     '11/02/2022 - Biblioteca Digital de la escuela </a><br><br>'
					 +
					 
				      '<br><a href="./FanPage/index.htm" class="" onclick="Swal.close();"  target="_blank"      style="font-size:15px;color:green;"> 17/11/2021 - Visitá nuestra Fanpage - </a><br><br>'
					  +
					 '<a href="#ComunicadosAnteriores"        	      style="font-size:15px;color:green;" onclick="Swal.close();">Ver comunicados anteriores</a>' 					
					 					 					
					
		         });
				 
		/*Swal.fire({	
 		          title: 'Biblioteca de la escuela', 
				  text: 'Biblioteca de la escuela',
				 
				  html:
				     '<a href="https://padlet.com/indartmariaalicia/fe4ytaltd3wpuiue" target="_blank" style="font-size:15px;color:red">' +
				        'Hacer clic aquí para ver el comunicado</a>', 
		         });*/
	 </script>
    

<div id="myCarousel" style="max-height:100vh;max-width:100wh;" class="carousel slide" data-ride="carousel" >


    <!-- Indicators 
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    -->

    <!--Slider-->
    <div class="carousel-inner" role="listbox" style="background-color:azure">
        <div class="item active">
            <img src="./img/imagenTodo.jpg" style="width:100%;height:100%;" class="img-responsive" alt="Escuela de Educación Secundaria Técnica Nº6 'Chacabuco'"  /> 
            <!--
			<div class="carousel-caption" >
                
				<img src="img/Logo chaca.png" style="width:70%;margin-top:70%" class="img-responsive" alt="1"  />
				<h1 align="top">Escuela de Educación Secundaria Técnica Nº6 "Chacabuco" </h1>
				
            </div>      
        -->
		</div>
	
        
        <!--
        <div class="item sld">
            <img src="Slider_index/99.png">
        </div>
        -->

    <!--Flechas
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Atr&aacute;s</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Siguiente</span>
    </a>
    -->
    </div>
</div>




<!-- Especialidades -->
<div id="Especialidades"  class="col-md-12 Esp" >
    <center>
  <div class="container" id="tabla">
    <h1 class="titulo">ESPECIALIDADES</h1>
      <?php
		  
		  EspecialidadNuevo("./paginas/Programacion.php", "./img/Especialidades/programacion.jpg", "Programaci&oacute;n");	  
		  
		  EspecialidadNuevo("./paginas/Hardware.php", "./img/Especialidades/informatica.jpg", "Inform&aacute;tica");	      
		  
		  EspecialidadNuevo("./paginas/Electromecanica.php", "./img/Especialidades/electromecanica.jpg", "Electro<br>mec&aacute;nica");
		  
		  EspecialidadNuevo("./paginas/Automotores.php", "./img/Especialidades/automotor.jpg", "Automotor");
	     
	  ?>
	  
    </div>
</center><br><br></div>
<!-- Especialidades -->

<!-- Novedades -->

<div id="Novedades" class="col-md-12 Esp">
        
	<center>
			
			<div class="container" id="tabla">
			
				<h1 class="titulo">NOVEDADES</h1>  
				<?php
				  
			NovedadNuevo("https://docs.google.com/spreadsheets/d/1aHs7V2TVtHZFka_4JGJXHD6en3Gb8OmRL3Ji4Y2aFOc/edit?usp=sharing", "./img/MesaExaminadora/MesaExaminadora2022.jpg",
			"Comisiones evaluadoras - Turno Marzo 2022"
			 );
            NovedadNuevo("https://docs.google.com/forms/d/e/1FAIpQLSc03zAEOqv3NWv0N6GEsyq5aXvVfXRXVq534WV7UhfjxxMhwA/viewform", "./img/MesaExaminadora/PreviosCompletaNivel2022.jpg",
			"Fechas de inscripción a exámenes - Marzo 2022"
			 );   			 
			NovedadNuevo("https://www.facebook.com/EEST-N6-Chacabuco-Mor%C3%B3n-107168948276011","./img/Facebook/Facebook.jpg","Facebook
			institucional");
			NovedadNuevo("https://instagram.com/tecnica6moron_oficial?igshid=3jrj9gmhasmv","./img/Instagram/Instagram.JPG","Instagram institucional"); 
			    
			NovedadNuevo("./Comunicados/EquipoDirectivo2022.pdf", "./img/EquipoDirectivo/EquipoDirectivo2022.jpg", "Nuevo equipo directivo 2022");	/*NovedadNuevo("https://docs.google.com/forms/d/e/1FAIpQLSd8Lm80ab1MSIUA0CZgzULeUupM6LAksF6ZdUy_XG2KTjLtQA/viewform", "./img/desbloqueo.jpg", "Solicitud de desbloqueo de Netbook");*/
				NovedadNuevo("./biblioteca/links.pdf", "./img/links.jpg", "Bibliotecas digitales");
				
				?>
				
  </center>
  <br><br></div>
</div>

<!--fin novedades -->
<!--
<div id="Ingresantes" class="col-md-12 Esp">
        
	<center>
			
			<div class="container" id="tabla">
			
				<h1 class="titulo">INGRESANTES 2021	</h1> 
				
				<?php
					/*
					NovedadNuevo("./Ingresantes/CuadernilloPracticasLenguaje2021.pdf","./img/Ingresantes/cuadernillopracticaslenguaje.jpg","Cuadernillo Prácticas de Lenguaje");
					
					NovedadNuevo("./Ingresantes/CuadernilloMatematica2021.pdf", "./img/Ingresantes/cuadernillomatematica.jpg", "Cuadernillo de Matemática ");
					NovedadNuevo( "./Ingresantes/CuadernilloSociales2021.pdf", "./img/Ingresantes/cuadernillosociales.jpg", "Cuadernillo de Ciencias Sociales");

					NovedadNuevo("./Ingresantes/CuadernilloIngles2021.pdf","./img/Ingresantes/cuadernilloingles.jpg", "Cuadernillo de Inglés");
					
/*
  NovedadNuevo("./Ingresantes/CitacionInscripcion1eraño2021.pdf","./img/Ingresantes/citacion2021.jpg","Citación Ingresantes 2021");
					
 NovedadNuevo("https://forms.gle/Nz5AKFkzx6MTJxN66","./img/Ingresantes/formulario2021.jpg","Formulario de inscripción");
					
NovedadNuevo("https://drive.google.com/file/d/1BvGMzg9dV1cNzIOurYMJ1GBEP4oV69wW/view?usp=sharing","./img/Ingresantes/videoinstructivo.jpg","Vídeo instructivo Formulario"
);

NovedadNuevo("./Ingresantes/Inscripcion2021_1er Año.pdf","./img/Ingresantes/ingresantes2021ultimo.jpg","Ingresantes 2021 Final");
		            
NovedadNuevo("./Ingresantes/23092020_Ingresantes1ero2021.pdf","./img/Ingresantes/ingresantes2021.jpg","Ingresantes a primer 
año 2021 Final");

NovedadNuevo("./Ingresantes/Ingreso1eraño2021.pdf","./img/Ingresantes/ingresantes2021.jpg","Ingresantes 2021 Inicial");

NovedadNuevo("./Ingresantes/Inscripcion2021_1er Año.pdf", "./img/Ingresantes/ingresantes2021ultimo.jpg", "Ingresantes 2021 Final");

NovedadNuevo("./Ingresantes/23092020_Ingresantes1ero2021.pdf", "./img/Ingresantes/ingresantes2021.jpg", "Ingresantes a primer año 2021 Final");

NovedadNuevo("./Ingresantes/Ingreso1eraño2021.pdf", "./img/Ingresantes/ingresantes2021.jpg", "Ingresantes 2021 Inicial");
				     */	
					 /*NovedadNuevo("./Ingresantes/INET_Ingresantes.pdf", "./img/Ingresantes/inet_ingresantes.jpg", "INET_Ingresantes");
					NovedadNuevo("./Ingresantes/Ingreso2Do4ToFinal.pdf", "./img/Ingresantes/ingresantes2do4to.jpg", "Ingresantes de 2do a 4to año.");*/
				?>
			</div>
	</center>
</div>
<!--fin Ingresantes -->
<!--
<div id="CursosPrimerAño" class="col-md-12 Esp">
        
	<center>
			
			<div class="container" id="tabla">
			
				<h1 class="titulo">CURSOS PARA PRIMER AÑO 2021</h1>  
				<?php
				  
                 /*   
				  
				  $raiz = "./Ingresantes/CursosDel1erAnio/";  
			      $raizImg= "./img/Ingresantes/Cursos1erAnio/";
				  NovedadNuevo($raiz."1_1.pdf", 
				               $raizImg."1_1.jpg", 
							   "1º 1era");
				  NovedadNuevo($raiz."1_2.pdf", 
				               $raizImg."1_2.jpg", 
							   "1º 2da");
				  NovedadNuevo($raiz."1_3.pdf", 
				               $raizImg."1_3.jpg", 
							   "1º 3ra"); 		   
				  NovedadNuevo($raiz."1_4.pdf", 
				               $raizImg."1_4.jpg", 
							   "1º 4ta");
				  NovedadNuevo($raiz."1_5.pdf", 
				               $raizImg."1_5.jpg", 
							   "1º 5ta");
				  NovedadNuevo($raiz."1_6.pdf", 
				               $raizImg."1_6.jpg", 
							   "1º 6ta");
				  NovedadNuevo($raiz."1_7.pdf", 
				               $raizImg."1_7.jpg", 
							   "1º 7ma");
				  NovedadNuevo($raiz."1_8.pdf", 
				               $raizImg."1_8.jpg", 
							   "1º 8va");*/
				?>
				
  </center>
  <br><br></div>
</div>


<!-- FIN CUSOS PRIMER AÑO -->
<div id="ComunicadosAnteriores" class="col-md-12 Esp">
   <center>
	 <div class="container" id="tabla">
	     <h1 class="titulo">COMUNICADOS ANTERIORES</h1> 
		   
		    <?php
		 		NovedadNuevo("./ContinuidadPedagogica/MesaDeExamenEgresadosOctubre2020.pdf", "./img/17092020mesaOctubre2020.jpg", "17/09/2020 -Mesas de Exámenes de Octubre 2020-");
				NovedadNuevo("./ContinuidadPedagogica/MesaDeExamenVirtualFinal.pdf", "./img/17062020mesasexamenfinal.jpg", "17/06/2020 -Mesas de exámenes pendientes final-");
				NovedadNuevo("./ContinuidadPedagogica/MesasPendientes_Final.pdf", "./img/17062020mesasexamen.jpg", "17/06/2020 -Mesas de exámenes virtuales-");
				NovedadNuevo("./ContinuidadPedagogica/AmpliacionEvaluacion.pdf", "./img/17062020mesasexamen.jpg", "19/05/2020 -  Ampliación de la Evaluación");
				NovedadNuevo("./ContinuidadPedagogica/ComunicadoFamilias3raetaqpacuarentenaFINAL.pdf", "./img/18052020CuarentenaFinal.jpg", "18/05/2020 - Comunicado Cuarentena Final");	 
				NovedadNuevo("./ContinuidadPedagogica/ComunicadoFamiliasCovid19.pdf", "./img/02042020CuarentenaInicial.jpg", "02/04/2020 - Comunicado Cuarentena Inicial");	 
		 ?>				 
		  
		   		  
		  
		  
		  
     </div> <!--FIN tabla-->
</div> <!-- FIN SECCIÓN COMUNICADOS ANTERIORES -->

<!-- Contacto -->
<div id="contacto" class="col-md-12 ">
  <h1 class="titulo">CONTACTO</h1>
  <br>
 <section class="section pb-5">

<!--Grid column-->
    <!--Google map-->      
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.272174534065!2d-58.61068388610481!3d-34.64782868044807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc7647f712335%3A0x57ee593bc22af97b!2sE.+E.+S.+T.+N%C2%B0+6+%22Chacabuco%22+-+Mor%C3%B3n!5e0!3m2!1ses!2sar!4v1533501040672" width="100%" height="400" frameborder="1" style="border:0" allowfullscreen=""></iframe>
 </section>
    
</div>
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
	<div class="row">

	  <!-- Grid column -->
      <div class="col-md-4 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase"><u>Mas informaci&oacute;n</u></h5><br>
        <p>Dirección: Av. Rivadavia 17337</p>
        <p>Localidad: Morón</p>
        <p>Provincia:  Buenos Aires</p>
        <p>
          <a class="btn-fourth" href="tel:46297744">
            <span class="glyphicon glyphicon-phone"></span> 4629-7744</button>
          </a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase"><u>Aplicación móvil</u></h5><br>

        <ul class="list-unstyled">
          <li>
            En breve estará disponible en Play Store
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase"><u>Email</u></h5><br>

        <ul class="list-unstyled" > <!-- style="text-align:center;"-->
	
          
		  <li>
            <b>Para las familias de los estudiantes:</b><a href="mailto:chacabucot6@gmail.com" target="_blank"><br>chacabucot6@gmail.com</a>
          </li>
          <br>
          
            <!--<b>Secretaria:</b><a href="mailto:chacabucot6s@gmail.com" target="_blank">chacabucot6s@gmail.com</a>
			-->
			<li >
            <b>Mail OFICIAL para el plantel docente,equipo de auxiliares, organismos oficiales y oferentes: </b><a href="mailto:tecnica6moron@abc.gob.ar" target="_blank">
			tecnica6moron@abc.gob.ar
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Hecho por alumnos -->
  <!-- Hecho por alumnos -->

  <!-- SW Hecho por alumnos y Copyright -->
  <br>
  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="#"> E.E.S.T Nº6 Chacabuco</a>
    <p class="text-center" style="color: grey">Sitio Web construido por alumnos y profesores de la institución.</p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
<script>
var valor = true
function FbotonOn() {
  var uno = document.getElementById('botonOn');
  valor?uno.innerText = "Ocultar":uno.innerText = "Leer más";
  valor=!valor
}

</script>
<script>
//PARA MOBILE, AGREGADO PARA QUE COLAPSE EL MENÚ CUANDO SE HACE CLIC EN UNA OPCIÓN.
$(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') ) {
        $(this).collapse('hide');
    }
});

</script>
<span class="ir-arriba icon-arrow-up2"><i class="fas fa-arrow-up"></i></span>
</body></html>

