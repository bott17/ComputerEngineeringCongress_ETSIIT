<div class="sidebar1">
	<h2>Enlaces de inter&eacute;s</h2>
    <ul>
	<?php
		switch ($seccion) {
			case 'actividades':
				echo "
	                <li><a href='index.php?sec=actividades#alhambra'>Visita a la Alhambra</a></li>
					<li><a href='index.php?sec=actividades#sierra_nevada'>Subida a Sierra Nevada</a></li>";	
				break;		
			case 'contacto':
				echo "
				<li><iframe width='425' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' 
            		src='https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=E.T.S.+de+Ingenier%C3%ADas+Inform%C3%A1tica+y+de+Telecomunicaci%C3%B3n,+Granada,+Espa%C3%B1a&amp;aq=0&amp;oq=etsiit+granad&amp;sll=39.605688,-3.691406&amp;sspn=23.846331,50.756836&amp;t=h&amp;ie=UTF8&amp;hq=ets+de+ingenier%C3%ADas+inform%C3%A1tica+y+de+telecomunicaci%C3%B3n&amp;hnear=Granada,+Andaluc%C3%ADa,+Espa%C3%B1a&amp;ll=37.197014,-3.624251&amp;spn=0.043291,0.056527&amp;output=embed'></iframe><br /><small><a href='https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=E.T.S.+de+Ingenier%C3%ADas+Inform%C3%A1tica+y+de+Telecomunicaci%C3%B3n,+Granada,+Espa%C3%B1a&amp;aq=0&amp;oq=etsiit+granad&amp;sll=39.605688,-3.691406&amp;sspn=23.846331,50.756836&amp;t=h&amp;ie=UTF8&amp;hq=ets+de+ingenier%C3%ADas+inform%C3%A1tica+y+de+telecomunicaci%C3%B3n&amp;hnear=Granada,+Andaluc%C3%ADa,+Espa%C3%B1a&amp;ll=37.197014,-3.624251&amp;spn=0.043291,0.056527' style='color:#0000FF;text-align:left'>
            	Expandir mapa</a></small></li>";
				break;	
			case 'horarios':
				echo "
	                <li><a href='index.php?sec=horarios#dia1'>Sesi&oacute;n d&iacute;a 1</a></li>
					<li><a href='index.php?sec=horarios#dia2'>Sesi&oacute;n d&iacute;a 2</a></li>";	
				break;	
			case 'inscripcion':
				echo "
	                <li><a href='#'>.......</a></li>
	                <li><a href='#'>.......</a></li>
	                <li><a href='#'>.......</a></li>
	                <li><a href='#'>.......</a></li>";
				break;		
			case 'patrocinanos':
				echo "<img src='seccion/imagenes/patrocinador/touch.jpg' alt=''>";
				break;
			default:
				echo "
	                <li><a href='index.php#Presentacion'>Presentaci&oacute;n del congreso</a></li>
					<li><a href='index.php#ETSIIT'>¿Qu&eacute es la ETSIIT?</a></li>
	                <li><a href='index.php#Granada'>Descubre la ciudad de Granada</a></li>";		
	 			break;		
 		}
?>            	
	</ul>
</div>