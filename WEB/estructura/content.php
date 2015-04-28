<?php
switch ($seccion) {
		case 'actividades':
			include './seccion/actividades.php';
			break;
			
		case 'contacto':
			include './components/contacto.php';
			break;
				
		case 'horarios':
			echo "
				<div class='mainContent'>
		        	<h2 id='tituloContent'>Horarios del Congreso</h2>
		            <p>
						<ul id='dia1'>D&iacute;a 1
							<li>
								<table class='tableSesion'>
									<tr><th>9:00 - 11:00</th></tr>
									<tr>
										<th rowspan='3'>Ing. Software</th>
										<td><a href='sesion.php?sec=$seccion&pon=magiles'>Metodologias agiles, M. Noguera</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=ifml'>IFML, M. Cabrera</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=prince2'>Prince2, M.J. Rodriguez</a></td></tr>
								</table>
							</li>
							<li><table class='tableSesion'><tr><th>11:00 - 11:30</th><td>Pausa-cafe</td></tr></table></li>
							<li>
								<table class='tableSesion'>
									<tr><th>11:30 - 13:30</th></tr>
									<tr>
										<th rowspan='3'>Inf. Gr&aacute;fica</th>
										<td><a href='sesion.php?sec=$seccion&pon=visrea'>Visualizacion y Realismo, C. Ure&ntilde;a</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=digi3d'>Digitalizacion 3D, F.J. Merelo</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=reaume'>Realidad Aumentada, J. Revelles</a></td></tr>
								</table>
							</li>
							<li><table class='tableSesion'><tr><th>13:30 - 15:00</th><td>Comida</td></tr></table></li>
							<li>
								<table class='tableSesion'>
									<tr><th>11:30 - 13:30</th></tr>
									<tr>
										<th rowspan='3'>Bases de Datos</th>
										<td><a href='sesion.php?sec=$seccion&pon=bdmdim'>B.D. Multidimensionales, E. Garvi</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=bdoo'>B.D. orientadas a objetos, J. Samos</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=bddis'>B.D. distribuidas, C. Delgado</a></td></tr>
								</table>
							</li>
							<li><table class='tableSesion'><tr><th>17:00 - 17:30</th><td>Pausa-Cafe</td></tr></table></li>
							<li>
								<table class='tableSesion'>
									<tr><th>17:30 - 19:30</th></tr>
									<tr>
										<th rowspan='3'>Compiladores</th>
										<td><a href='sesion.php?sec=$seccion&pon=prolen'>Procesadores de lenguajes, J. Revelles</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=traduc'>Traductores, R. Lopez-Cozar</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=prohab'>Procesamiento del habla, Z. Callejas</a></td></tr>
								</table>
							</li>
						</ul>
						<br/>
						<ul id='dia2'>D&iacute;a 2
							<li>
								<table class='tableSesion'>
									<tr><th>9:00 - 11:00</th></tr>
									<tr>
										<th rowspan='3'>Sistemas Operativos</th>
										<td><a href='sesion.php?sec=$seccion&pon=swind'>Sistemas Windows, A. Leon</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=slinx'>Sistemas Unix/Linux, P. Paderewski</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=siosmac'>Sistemas iOS/Mac, R. Montes</a></td></tr>
								</table>
							</li>
							<li><table class='tableSesion'><tr><th>11:00 - 11:30</th><td>Pausa-cafe</td></tr></table></li>
							<li>
								<table class='tableSesion'>
									<tr><th>11:30 - 13:30</th></tr>
									<tr>
										<th rowspan='3'>Sistemas Complejos</th>
										<td><a href='sesion.php?sec=$seccion&pon=propar'>Programacion paralela, J.M. Mantas</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=sisdis'>Sistemas distribuidos, J.L. Garrido</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=sistr'>Sistemas en tiempo real, J.A. Holgado</a></td></tr>
								</table>
							</li>
							<li><table class='tableSesion'><tr><th>13:30 - 15:00</th><td>Comida</td></tr></table></li>
							<li>
								<table class='tableSesion'>
									<tr><th>11:30 - 13:30</th></tr>
									<tr>
										<th rowspan='3'>Interfaces de usuario</th>
										<td><a href='sesion.php?sec=$seccion&pon=inthap'>Interaccion Haptica, F. Soler</a></td>
									</tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=wereab'>Wereables, M. Cabrera</a></td></tr>
									<tr><td><a href='sesion.php?sec=$seccion&pon=reavir'>Realidad virtual, J. Flores</a></td></tr>
								</table>
							</li>
							<li><table class='tableSesion'><tr><th>17:00 - 17:30</th><td>Pausa-Cafe</td></tr></table></li>
							<li>
								<table class='tableSesion'>
									<tr><th>17:30 - 19:30</th></tr>
									<tr>
										<th rowspan='3'>Trabajos fin de grado</th>
										<td>Mesa redonda y sesion de posters</td>
									</tr>
								</table>
							</li>
						</ul>
					</p>
		        </div>
		        <!-- para las cajas con enlaces -->";
		        include 'estructura/boxes.php';
		        echo "<br class='clearfloat' />";
			break;	
		case 'inscripcion':
			echo "
				<div class='mainContent'>
		        	<h2>Inscribete con tan solo unos datos...</h2>
		        	<ul>Cuotas de isncripci&oacute;n:
		        		<li>Alumno 5&euro;</li>
		        		<li>Profesor 6&euro;</li>
		        		<li>Otro 8&euro;</li>        		
		        	</ul>
					<form method='post' action='' enctype='x-www-form-urlencoded'>				
						<table>
							<tr><td colspan='2'><img class='shadow' src='images/inscripcion/JoinToday.png' /></td></tr>
							<tr>
								<th>Tu nombre: </th>
								<td><input autofocus type='text' value='' placeholder='Pedro Perez Perez' name='name'></td>
							</tr>
							<tr>
								<th>Email de contacto: </th>
								<td><input type='email' value='' placeholder='direccion@correo.es' name='email'/></td>
							</tr>	
							<tr>
								<th>Telefono de contacto: </th>
								<td><input type='number' value='' placeholder='619 555 111' name='phone'/></td>
							</tr>	
							<tr>
								<th>Modalidad de inscripción: </th>
								<td><select name='opcion''>
										<option value='1'>1 Día</option>
										<option value='2' selected>2 Dias</option>
									</select>
								</td>
							</tr>	
							<tr>
								<th>Recibir noticas del evento en tu email de contacto</th>
								<td><input type='checkbox' checked /></td>	
							</tr>	
							<tr><td colspan='2'><input id='botonForm' type='submit' value='Inscribir' /></td></tr>
						</table>
					</form>
		        </div>
		        <!-- para las cajas con enlaces -->";
		        include 'estructura/boxes.php';
		        echo "<br class='clearfloat' />";
			break;		
		case 'patrocinanos':
			echo "
				<div class='mainContent'>
		        	<h2>Conviertete en Partnert del CEIIE</h2>
					<p>CEIIE es la mejor oportunidad de darse a conocer dentro del mundo de la tecnología. Aprovechar primera linea 
						junto a especialistas y usuarios abre las puertas de tu marca y date a conocer al mundo entero.<br><br>
						
						Para convertirse en uno de nuestros patrocinadores vaya a la secci&oacute;n <a href='index.php?sec=contacto'>Contacto</a>
						donde se encuentra la informaci&oacute;n de contacto para patrocinadores. <br><br>				
						
						<ul>Hay dos tipos de patrocinador:
							<li>Gold (50&euro;)</li>
							<li>Standard (15&euro;)</li>
						</ul><br><br>
						
						El patrocinador <strong>Gold</strong> incluye:<br>
						Patrocinador de la Cena de gala de clausura del congreso, patrocinador del cóctel de bienvenida, patrocinador 
						comidas, patrocinador  de las Memorias del congreso, patrocinador Coffe break, patrocinador de pluma del 
						congreso, patrocinador del block de notas de congreso, patrocinador  del programa de presentaciones, 
						patrocinador de la página web, patrocinador de la sesión de posters. <br><br>
						
						El patrocinador <strong>Standard</strong> incluye:<br>
						Patrocinador de las Memorias del congreso, patrocinador	comidas, patrocinador Coffe break, patrocinador 
						de la página web.<br><br>		
										
					</p>
		        </div>
		        
		        
		        <!-- begin .boxes -->
		        <br class='clearfloat' />
		        <div>
		        	<h3> Algunos de nuestros patrocinadores mas importantes</h3>
		        	<br>
		        	<div class='box'>
		            	<div><a href='http://www.granada.org/'><img src='images/patrocinador/granada.jpg' alt=''></a></div>
		                <a href='http://www.granada.org/'><h2>Granada</h2></a>
		            </div>
		            <div class='box'>
		            	<div><a href='http://etsiit.ugr.es/'><img src='images/patrocinador/etsiit.jpg' alt=''></a></div>
		                <a href='http://etsiit.ugr.es/'><h2>ETSIIT</h2></a>
		            </div>
		            <div class='box'>
		            	<div><a href='http://www.dell.es/'><img  src='images/patrocinador/Dell-Logo.jpg' alt=''></a></div>
		                <a href='http://www.dell.es/'><h2>Dell</h2></a>
		            </div>
		            <div class='box'>
		            	<div><a href='http://www.whatsapp.com/'><img src='images/patrocinador/logo-wasap.png' alt=''></a></div>
		                <a href='http://www.whatsapp.com/'><h2>Whatsapp</h2></a>
		            </div>
		            <div class='box'>
		            	<div><a href='http://www.tid.es/'><img src='images/patrocinador/logo-tid.jpeg' alt=''></a></div>
		                <a href='http://www.tid.es/'><h2>Telefónica I+D</h2></a>
		            </div>
		            <div class='box'>
		            	<div><a href='index.php?sec=contacto'><img src='images/patrocinador/logo-tu.jpg' alt=''></a></div>
		                <a href='index.php?sec=contacto'><h2>Tu espacio te espera</h2></a>
		            </div>
		            <br class='clearfloat' />
		        </div> ";
			break;
		default:	
			echo "
				<div class='mainContent'>
        	<h2 id='Presentacion'>Bienvenidos al CEIIE</h2>
        	<p>
				Est&aacute;s en la p&aacute;gina principal del congreso de estudiantes de ingenier&iacute;a inform&aacute;tica en 
				España. El congreso se celebrar&aacute; en la ciudad de <strong>Granada</strong> en la facultad de inform&aacute;tica 
				o <strong>ETSIIT</strong> durante los d&iacute;as <strong>1, 2 y 3 de junio</strong>.<br><br>
				Durante el congreso podr&aacute;s disfrutar de las interesantes <strong>ponencias</strong> de nuestros invitados, 
				de <strong>talleres</strong> y <strong>actividades</strong> (algunas se realizar&aacute;n fuera del recinto del 
				congreso).<br><br>
				Tambi&eacute;n podr&aacute;s disfrutar de la ciudad de Granada durante tu estancia en el Congreso, cuya fecha coincide 
				con la festividad del <strong>Corpus</strong>!!!<br><br>
				Al congreso te puedes inscribir gratuitamente, pero si quieres asistir tendr&aacute;s que abonar el precio de la entrada 
				correspondiente . Hay descuento para la compra anticipada (mas informaci&oacute;n en la secci&oacute;n <strong>
				Inscr&iacute;bete</strong>).
			</p>

			<h2 id='ETSIIT'>ETSIIT <img src='images/principal/etssit.jpeg' alt=''></h2>
			<p>
				La Escuela Técnica Superior de Ingenierías Informática y de Telecomunicación (ETSIIT) es un centro docente 
				universitario perteneciente a la Universidad de Granada, dedicado a la enseñanza, la investigación y el 
				estudio de las materias relacionadas con la informática, las ciencias de la computación y las 
				telecomunicaciones. Se sitúa entre las cincuenta mejores escuelas de ingeniería informática del mundo y 
				es la sexta a nivel europeo.<br><br>
				Se encuentra en el Campus Universitario de Aynadamar, junto a la Facultad de Bellas Artes y al Centro de 
				Investigación en Tecnologías de la Información y la comunicación de la UGR (CITIC-UGR).<br><br>
				En ella se imparten las siguientes titulaciones:<br>
				Grado en Ingeniería Informática<br>
    			Grado en Ingeniería de Tecnologías de Telecomunicación<br>
    			Doble Grado en Ingeniería Informática y Matemáticas<br><br>
    			
    			<strong>Como llegar:</strong><br>			
			</p>
			
			<h2 id='Granada'>Granada <img src='images/principal/granada_index.jpg' alt=''></h2>
			<p>
				Granada es una ciudad y municipio español, capital de la provincia homónima, en la comunidad autónoma de 
				Andalucía. Está situada en el centro de la comarca Vega de Granada, a una altitud de 680 msnm, en una 
				amplia depresión intrabética formada por el río Genil y por el piedemonte del macizo más alto de la 
				península ibérica, Sierra Nevada, que condiciona su clima.<br><br>
				Granada constituye un núcleo receptor de turismo, debido a sus monumentos y a la cercanía de su estación 
				de esquí profesional, así como a la zona histórica conocida como La Alpujarra y también a la parte de la 
				costa granadina conocida como Costa Tropical. De entre sus construcciones históricas, la Alhambra es una 
				de las más importantes del país, declarada Patrimonio de la Humanidad por la Unesco en 1984, junto con 
				el jardín del Generalife y el Albaicín. Su catedral está considerada como la primera iglesia renacentista 
				de España.<br><br>
				La Universidad de Granada es la cuarta a nivel nacional por número de alumnos y es uno de los destinos más 
				populares por los universitarios europeos del programa Erasmus.<br><br>
				
				<strong>Como llegar:</strong><br><br>
				<strong>Vuelos nacionales directos a Granada</strong><br><br>
				Hay vuelos directos entre Granada y Barcelona (VUELING, IBERIA), Palma de Mallorca (IBERIA, AIR EUROPA), 
				Melilla (IBERIA) y Madrid (IBERIA).<br><br>
				El aeropuerto de Granada está a 12km del centro de la ciudad. Al llegar, es mejor tomar un taxi desde el 
				aeropuerto hasta tu alojamiento sin tener que andar con las maletas. El taxi costará unos 28 euros.<br><br>
				También hay un autobús de aeropuerto que va al centro de Granada. El horario de los autobuses coincide con 
				todos los vuelos.<br><br>
				
				<strong>Llegar a Granada en tren</strong><br><br>				
				La estación de trenes está en una zona bastante céntrica y está en Avenida de Andaluces que sale de 
				Avenida de la Constitución. El número de teléfono es 958 27 12 72. Granada no tiene una línea de alta 
				velocidad todavía.<br><br>
				El Talgo tarda unas 5 horas y media desde Madrid. Sevilla está a unas 4 horas en tren. La mayoría de 
				las personas prefieren viajar en autobús en vez de tren cuando vienen desde Málaga o Almería.<br><br>	
				
				<strong>Llegar a Granada en Autobús</strong><br><br>
				Hay muchos autobuses diarios entre Granada y otras grandes ciudades españolas. La compañía de autobuses 
				más importante es ALSA y se puede comprar billetes online desde la página ALSA. La estación de autobuses 
				está en las afueras de Granada así que tendrás que tomar un taxi para llegar al centro. 
				También se puede coger un autobús (Nº 3 ó 33) para llegar al centro.<br><br>
				
				Ejemplo llegar desde Madrid<br>
				Si vienes desde Madrid, tendrás que ir a la &quot;Estación del Sur&quot;.
				El metro más cerca de la &quot;Estación del sur&quot; es Méndez Álvaro. Los autobuses salen cada hora y si hay muchos 
				viajeros habrá más autobuses en función de la demanda. Lo más fácil es ir a la estación y tomar el próximo 
				autobús. Si tienes suerte, no tendrás que esperar más de 2 horas para un autobús. Compra tu billete en la 
				ventanilla o las maquinas de ALSA.					
			</p>
	        </div>
	        <!-- para las cajas con enlaces -->";
		        include 'estructura/boxes.php';
		        echo "<br class='clearfloat' />";
 			break;		
 			}
?>