<?php @session_start();?>
<!DOCTYPE HTML>
<!--
Design by Free Responsive Templates
http://www.free-responsive-templates.com
Released for free under a Creative Commons Attribution 3.0 Unported License (CC BY 3.0) 
-->
<html>
<?php include 'estructura/head.php';?>
<body>
<div class="container">
    <header>
    	<div id="navheader">
    		<div id="izq"><h2><a href="./index.html">Congreso de Estudiantes de Ingenier&iacute;a Inform&aacute;tica</a></h2></div>
    		<div id="der"><p>Zona de Usuario</br><a href="#">(Login)</a></p></div>    	
    	</div>
        <div id="navcontainer">
            <ul id="navlist" class="nav">
            	<li id="active"><a href="index.html">Presentaci&oacute;n</a></li>
            	<li> <ul id="subnavlist">
		                <li><a href="horarios.html">Horarios</a></li>
		                <li><a href="actividades.html">Actividades y Talleres</a></li>
		                <li><a href="incripcion.html">Inscr&iacute;bete</a></li>
		                <li><a href="patrocinanos.html">Patroc&iacute;nanos</a></li>
		                <li><a href="contacto.html">Contacto</a></li>
		        </ul></li>
            </ul>
        </div>
        <br class="clearfloat" />
    </header>
    <section>
    	<!-- begin .slider -->
		<div class="slider"> <!-- Aqui va menu desplazable (poner lider dentro de class -->
            <div class="flexslider"> <!-- aqui flexslider -->
                <ul class=""> <!-- aqui slides -->
                    <li><img src="images/logo_ugr.gif" alt=""></li>
                </ul>
            </div>
        </div>
		<!-- end .slider -->        
        <!-- begin .sidebar1 -->
        <div class="sidebar1">
       		<h2>Enlaces de inter&eacute;s</h2>
            <ul>
            	<li><a href="">¿Qu&eacute es la ETSIIT?</a></li>
                <li><a href="">Vente a la Alhambra</a></li>
                <li><a href="">Sube con nosotros a Sierra Nevada</a></li>
                <li><a href="">...</a></li>
            </ul>
        </div>
        <!-- end .sidebar1 -->
        <!-- begin .mainContent -->
        <div class="mainContent">
        	<h2>Bienvenidos al CEIIE</h2>
Est&aacute;s en la p&aacute;gina principal del congreso de estudiantes de ingenier&iacute;a inform&aacute;tica en España. El congreso se celebrar&aacute; en la ciudad de <strong>Granada</strong> en la facultad de inform&aacute;tica o <strong>ETSIIT</strong> durante los d&iacute;as <strong>1, 2 y 3 de junio</strong>.<br><br>
Durante el congreso podr&aacute;s disfrutar de las interesantes <strong>ponencias</strong> de nuestros invitados, de <strong>talleres</strong> y <strong>actividades</strong> (algunas se realizar&aacute;n fuera del recinto del congreso).<br><br>
Tambi&eacute;n podr&aacute;s disfrutar de la ciudad de Granada durante tu estancia en el Congreso, cuya fecha coincide con la festividad del <strong>Corpus</strong>!!!<br><br>
Al congreso te puedes inscribir gratuitamente, pero si quieres asistir tendr&aacute;s que abonar el precio de la entrada correspondiente . Hay descuento para la compra anticipada (mas informaci&oacute;n en la secci&oacute;n <strong>Inscr&iacute;bete</strong>).
</p>
        </div>
        <!-- begin .boxes -->
        <br class="clearfloat" />
        <div class="boxes">
        	<div class="box">
            	<div><img src="images/granada.jpg" alt=""></div>
                <h2>Granada</h2>
                <p>
                	Informaci&oacuten sobre la ciudad de granada y como llegar a esta.
                </p>
                <p><a href="http://www.granadatur.com/">Leer m&aacute;s</a></p>
            </div>
            <div class="box">
            	<div><img src="images/etsiit.jpg" alt=""></div>
                <h2>ETSIIT</h2>
                <p>
                	Informaci&oacuten sobre la ETSIIT y como llegar a esta
                </p>
                <p><a href="http://etsiit.ugr.es/">Leer m&aacute;s</a></p>
            </div>
            <div class="box">
            	<div><img src="images/inscribete.jpg" alt=""></div>
                <h2>Inscr&iacute;base en el congreso</h2>
                <p>
                	Cuanto antes mejor, se encontrar&aacute; con un descuento en la entrada.
                </p>
                <p><a href="incripcion.html">Leer m&aacute;s</a></p>
            </div>
            <br class="clearfloat" />
        </div>
        <!-- end .boxes -->
        <!-- end .mainContent -->
        <br class="clearfloat" />
    </section>
    <?php include 'estructura/footer.php'; ?>
</div>
</body>
</html>