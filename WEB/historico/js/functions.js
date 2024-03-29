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



/**
 * Array con las imagenes y urls que se iran mostrando en la web
*/

//indice de los arrays
var index=0;

var imagenes=new Array(
	'images/patro_1.jpg', 
  	'images/patro_2.png',
    'images/patro_3.png',
    'images/patro_4.png',
   	'images/patro_5.png'
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
