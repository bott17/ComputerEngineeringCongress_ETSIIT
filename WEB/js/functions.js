function contacto(){
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
	alert('Gracias por ponerse en contacto.');
	return true;
}