function tp4validar() {
	var nombre;
	var clave;
	var espaciosnombre;
	var contnombre;
	var espaciosclave;
	var contclave;
	nombre= document.getElementById("usuario");
	clave= document.getElementById("clave");

	if(nombre.value==="" || clave.value===""){
		alert("Los campos son obligatorios");
		return false;
	}
	if(nombre.value.length < 8 || clave.value.length < 8){
		alert("El usuario y la Contraseña deben tener 8 caracteres como minimo");
		return false;
	}
		else{
			alert("Inicio de sesion completado");
		  	window.location='intranet.html'; 
		}
	}

function valespnombre(ele) {
	if 	(/\s/.test(ele.value)){
		alert("No se permiten espacios en blanco en los campos");
		return false;
	}
}

function valesclave(ele) {
	if 	(/\s/.test(ele.value)){
		alert("No se permiten espacios en blanco en los campos");
		return false;
	}
}