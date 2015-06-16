function updatePrecio(){
	var precio = document.getElementById('importe').value;
	var precioCuota = document.getElementById('importeCuota').value;;
	var precioHotel = document.getElementById('precioHotel').value;
	var precioTotal = precio + precioHotel;
	var precioActividades = precio-precioCuota;
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("recuentoRegistro").innerHTML = xmlhttp.responseText;
            }
       };
       console.log(cuota);
        xmlhttp.open("GET", "seccion/sidebar/sidebarRegistro.php?cuota="+ precioCuota+"&actividades="+precioActividades+
        "&hotel="+precioHotel, true);
        xmlhttp.send();
	
}


function updateActividadesIncluidas(){
	var cuota = document.getElementById('cuota').value;
	
	if (cuota != "Escoje una"){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("loadActivity").innerHTML = xmlhttp.responseText;
            }
       };
       console.log(cuota);
        xmlhttp.open("GET", "componentes/preview.php?cuota="+ cuota, true);
        xmlhttp.send();
       }
        
        
        updatePrecio();
}



function contacto(){
	var email = document.getElementById('email').value;
	var nombre = document.getElementById('nombre').value;
	var texto = document.getElementById('texto').value;
	var mens = '';
	
	//expresion regular
	var Vema = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
	
		
	if (!(email.match(Vema)))
		mens += 'Email no valido \n';		
	
	if(mens!=''){
		alert(mens);
		return false;
	}
	if(nombre==''){
		alert('Falta su nombre.');
		return false;
	}

	if(texto==''){
		alert('No hay nada escrito.');
		return false;
	}

	alert('Gracias por ponerse en contacto.');
	return true;
}

function recoverCheck(){
	var email = document.getElementById('email').value;
	var mens = '';
	//expresion regular
	var Vema = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
	
		
	if (!(email.match(Vema)))
		mens += 'Email no valido \n';
	if(mens!=''){
		alert(mens);
		return false;
	}	
	return true;
}



/**
 * Array con las imagenes y urls que se iran mostrando en la web
*/

//indice de los arrays
var index=0;

var imagenes=new Array(
	'seccion/imagenes/patrocinador/patro_1.jpg', 
  	'seccion/imagenes/patrocinador/patro_2.png',
    'seccion/imagenes/patrocinador/patro_3.png',
    'seccion/imagenes/patrocinador/patro_4.png',
   	'seccion/imagenes/patrocinador/patro_5.png'
   	);
   	
var sources = new Array(
	'http://www.ugr.es/',
	'http://etsiit.ugr.es/',
	'http://www.mediamarkt.es/',
	'http://hp.com/es/es/home.html',
	'http://twitter.com/'
	);
   	
// Indicamos que cada 5 segundos cambie la imagen
setInterval(sliderPatrocinadores,5000);


function sliderPatrocinadores(){
        
	// cambiamos la imagen
	document.getElementById("patro1").src=imagenes[index%5];
	document.getElementById("aPatro1").href=sources[index%5];
	
	document.getElementById("patro2").src=imagenes[(index+1)%5];
	document.getElementById("aPatro2").href=sources[(index+1)%5];
	
	document.getElementById("patro3").src=imagenes[(index+2)%5];
	document.getElementById("aPatro3").href=sources[(index+2)%5];
	
	document.getElementById("patro4").src=imagenes[(index+3)%5];
	document.getElementById("aPatro4").href=sources[(index+3)%5];
	
	document.getElementById("patro5").src=imagenes[(index+4)%5];
	document.getElementById("aPatro5").href=sources[(index+4)%5];
	
	//aumentamos el indice
	index++;
	if(index>=10) index=0;
	
}

function validaRegistro(){
	
	var nombre = document.getElementById('nombre').value;
	var apellidos = document.getElementById('apellidos').value;
	var centro = document.getElementById('centro').value;
	var telefono = document.getElementById('telefono').value;
	var correo = document.getElementById('correo').value;
	var pass1 = document.getElementById('pass1').value;
	var pass2 = document.getElementById('pass2').value;
	var mensaje = '';
	
	//expresion regular
	var Vema = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;	
	
	if(nombre == '')
		mensaje += 'Nombre no valido\n';
		
	if(apellidos == '')
		mensaje += 'Apellidos no valido\n';
	
	if(centro == '')
		mensaje += 'Centro de trabajo no valido\n';
	
	if(telefono == '')
		mensaje += 'Telefono no valido\n';
		
	if (!(correo.match(Vema)) || correo == '')
		mensaje += 'Email no valido \n';	
		
	if(pass1 == '' || pass1 != pass2)
		mensaje += 'Las contraseñas no coinciden	\n';
	
	if(mensaje != ''){
		alert(mensaje);
		return false;
	}
	else{
		alert('Registro valido');
		return true;
	}
	
}

function updateImporteRegistroCuota(){
	var cuota = document.getElementById('cuota').value;
	var importe;
	
	switch(cuota){
		default:
		case 'Estudiante':
			document.getElementById('alhambra').checked = false;
			document.getElementById('alhambra').disabled = false;
			document.getElementById('sierra_nevada').checked = false;
			document.getElementById('sierra_nevada').disabled = false;
			document.getElementById('cena_gala').checked = false;
			document.getElementById('cena_gala').disabled = false;
			importe = 6;
			break;
		case 'Investigador':
			document.getElementById('alhambra').checked = false;
			document.getElementById('alhambra').disabled = false;
			document.getElementById('sierra_nevada').checked = false;
			document.getElementById('sierra_nevada').disabled = false;
			document.getElementById('cena_gala').checked = true;
			document.getElementById('cena_gala').disabled = true;
			importe = 10;
			break;
		case 'Premium':
			document.getElementById('alhambra').checked = true;
			document.getElementById('alhambra').disabled = true;
			document.getElementById('sierra_nevada').checked = true;
			document.getElementById('sierra_nevada').disabled = true;
			document.getElementById('cena_gala').checked = true;
			document.getElementById('cena_gala').disabled = true;
			importe = 20;
			break;
				
	}	
	document.getElementById('importe').value = importe;
	document.getElementById('importeCuota').value = importe;
	
}

function updateImporteRegistroActividad(cb){
	var importe = parseFloat(document.getElementById('importe').value);
	if(cb.checked){
		switch (cb.id){
			case 'alhambra':
				importe += 4.5;
				break;	
			case 'sierra_nevada':
				importe += 9;
				break;
			case 'cena_gala':
				importe += 7;
				break;					
		}
	}
	else{
		switch (cb.id){
			case 'alhambra':
				importe -= 4.5;
				break;	
			case 'sierra_nevada':
				importe -= 9;
				break;
			case 'cena_gala':
				importe -= 7;
				break;					
		}		
	}
	document.getElementById('importe').value = importe;
	
	updatePrecio();
}

function popitup(url) {
	newwindow=window.open(url,'name','height=400,width=400');
	if (window.focus) {newwindow.focus()}
	return false;
}

function addHotel(rb){
	var dev = "";
	var precio = "";
	if(rb.value != "no"){
		var valores = rb.value.split("|");
		dev = valores[0];
		precio = "25";
	}
	document.getElementById('hotel').value = dev;
	document.getElementById('precioHotel').value = precio;
}

function CloseMySelf() {
	var rb = document.getElementById('hotel');
    try {
        window.opener.addHotel(rb); 
        window.opener.updatePrecio();       
    }
    catch (err) {}
    window.close();
    return false;
}