<!DOCTYPE HTML>
<?php
	@session_start();
	$usu = $_SESSION['usuario'];
	$seccion="";
	$ponencia="";
	
	if(isset($_REQUEST['sec'])){
		$seccion=$_REQUEST['sec'];
	}
	if(isset($_REQUEST['pon'])){
		$ponencia=$_REQUEST['pon'];
	}
	
?>
<html>
	
<!-- para el title de la pagina -->
<?php include 'estructura/head.php'; ?>

<body>
<div class="container">
	
	<!-- para el navegador -->
    <?php include 'estructura/navigator.php'; ?>
    
    <section>
    	<!-- begin .slider -->
		<div class="slider"> <!-- Aqui va menu desplazable (poner lider dentro de class -->
            <div class="flexslider"> <!-- aqui flexslider -->
                <ul class=""> <!-- aqui slides -->
                    <li><img src="seccion/imagenes/index/logo_ugr.gif" alt=""></li>
                </ul>
            </div>
        </div>  
            
        <!-- para la barra lateral de enlaces -->
        <?php include 'estructura/sidebarSesion.php'; ?>
        
        <!-- para el contenido de la pagina -->
        <?php include 'estructura/contentSesion.php'; ?>
        
    </section>
    
    <!-- para el pie de pagina -->
    <?php include 'estructura/footer.php';?>
    
</div>
</body>
</html>