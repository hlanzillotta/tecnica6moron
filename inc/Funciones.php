<?php 

  /*function EscribirNovedad ($rutaArchivo,$RutaImagen, $texto){
	  
	  echo '<div class="col-md-4">
					<a href="'.$rutaArchivo.'"  target="_blank" class="esp-btn">
						<figure class="imghvr-shutter-in-out-diag-2">
							<img src="'.$RutaImagen.'" width="400px" height="150px"/>
							<figcaption>
								<h3>'.$texto.'</h3>
							</figcaption>
						</figure>
					</a>      
				</div>';
	  
  }
  */
  
  function EspecialidadNuevo($destino, $imagen, $especialidadnombre){
  echo '<div class="col-md-3">
  <a href="'.$destino.'" class="esp-btn">
   <figure class="imghvr-shutter-in-out-diag-2">
       <img src="'.$imagen.'" width="400px" height="150px">
       <figcaption>
         <h3>'.$especialidadnombre.'</h3>
       </figcaption>
   </figure>
   </a>      
</div>';
}
/////////////////////////////////////////////////////////////
function NovedadNuevo($destino, $imagen, $novedadtext){
  echo '<div class="col-md-4">
  <a href="'.$destino.'" target="_blank" class="esp-btn">
   <figure class="imghvr-shutter-in-out-diag-2">
       <img src="'.$imagen.'" width="400px" height="150px">
       <figcaption>
         <h3>'.$novedadtext.'</h3>
       </figcaption>
   </figure>
   </a>      
</div>';
}
/////////////////////////////////////////////////////////////
  
  function EstiloParpadear(){
	  
	  echo '<style>
				.blink {
						  animation-duration: 800ms;    /*blinking speed decreases and increase */
						  animation-name: tgle;
						  animation-iteration-count: infinite;
						  
		              }

				@keyframes tgle {
				  0% {
					opacity: 0;
				  }

				  49.99% {
					opacity: 0;
				  }
				  50% {
					opacity: 1;
				  }

				  99.99% {
					opacity: 1;
				  }
				  100% {
					opacity: 0;
				  }
           </style>';
	  
	  
  }
  
  function escribirmenuIndex(){
    
	EstiloParpadear();
	
	echo '
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
		
		
        <!--navbar donde se encuentra la imagen y el logo del menu-->        
        <div class="navbar-header navbar-inverse">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><a href="#"></a></span>
                <span class="icon-bar"><a href="#"></a></span>
                <span class="icon-bar"><a href="#"></a></span>
                <span class="icon-bar"><a href="#"></a></span>
            </button>
            <img class="img-responsive" src="img/Logo%20chaca.png" width="68"> <!-- style="width: 5%;margin-top: 0px;padding: 0px;float: left;"-->
        </div>
          
        <!-- Segunda navbar, donde volcamos realmente cada ítem de menú y su correspondiente hipervínculo -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
             
            <ul class="nav navbar-nav  navbar-inverse navbar-right" style="padding-right: 15px;">
                <li><a href="#Inicio">Inicio</a></li>
                <li><a href="./paginas/ciclobasico.php">Ciclo básico</a></li>
                <li><a href="#Especialidades">Especialidades</a></li>
                <li><a class="blink" href="#Novedades">Novedades</a></li>
                <li><a href="./FanPage/index.htm" target="_blank">Fanpage</a></li>
				<!--<li><a  href="#Ingresantes">Ingreso 2021</a></li>-->
				<li><a href="./biblioteca/biblioteca.pdf" target="_blank">Biblioteca</a></li>
                
				<li><a href="./historia/historia.pdf" target="_blank">Historia</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </nav>
          ';
  }

           
  function escribirmenuEspecialidades(){
    echo '<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
        <!--navbar donde se encuentra la imagen y el logo del menu-->        
        <div class="navbar-header navbar-inverse">
            <div class="button navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><a href="#"></a></span>
                <span class="icon-bar"><a href="#"></a></span>
                <span class="icon-bar"><a href="#"></a></span>
                <span class="icon-bar"><a href="#"></a></span>
            </div>
            <img class="img-responsive" src="../img/Logo%20chaca.png" width="68"> <!-- style="width: 5%;margin-top: 0px;padding: 0px;float: left;"-->
        </div>
          
        <!-- Segunda navbar, donde volcamos realmente cada ítem de menú y su correspondiente hipervínculo -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
             
            <ul class="nav navbar-nav  navbar-inverse navbar-right" style="padding-right: 15px;">
                <li class=""><a href="../index.php">Volver</a></li>
                <li class=""><a href="./ciclobasico.php">Ciclo básico</a></li>
                <li class=""><a href="./Hardware.php">Inform&aacute;tica Profesional</a></li>
                <li class=""><a href="./Programacion.php">Programaci&oacute;n</a></li>
                <li class=""><a href="./Electromecanica.php">Electromec&aacute;nica</a></li>
                <li class=""><a href="./Automotores.php">Automotores</a></li>
            </ul>
            </div>
        </div>
    </nav>';
  }
  function ColocarImagenes ($Carpeta){             
			 //para leer el directorio 
                 $ruta = $Carpeta."/";  
                 $filehandle = opendir($ruta);  
                 $i=1;
				 while ($file = readdir($filehandle)) { 
                       if ($file != "." && $file != ".." ) { 
                           
						   $todo=$ruta.$file;
                          					   
						   if($i>1)
						    {echo' <div class="item sld">
                                      <img style="width:100%;heigh:120vh;" src='.$todo.'>
                                   </div>'; 
							}
						   $i++;
						  
                          } 
                    } 

                   closedir($filehandle);
       }
                ?>