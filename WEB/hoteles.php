<!DOCTYPE HTML>
<?php 
	include 'extension/recuperador.php';
	$arrayHoteles = searchHoteles();
?>
<html>
	<head>
		<title>Hoteles Granada</title>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>
	<body>
		<table>
			<tr>
				<?php $hotel = mysql_fetch_assoc($arrayHoteles); ?>
				<th><?php echo $hotel['nombre']; ?></th>
				<td><img style="width: 150px;height: 100px" src="<?php echo $hotel['foto']; ?>"/></td>
				<td><?php echo $hotel['precio']; ?>&euro;</td>
				<td><input type="radio" onclick="addHotel(this)" name="hotel" value="<?php echo $hotel['nombre']. "|" .$hotel['precio'];?>"  id="hotel" ></td>
			</tr>
			<tr>
				<?php $hotel = mysql_fetch_assoc($arrayHoteles); ?>
				<th><?php echo $hotel['nombre']; ?></th>
				<td><img style="width: 150px;height: 100px" src="<?php echo $hotel['foto']; ?>"/></td>
				<td><?php echo $hotel['precio']; ?>&euro;</td>
				<td><input type="radio" onclick="addHotel(this)" name="hotel" value="<?php echo $hotel['nombre']. "|" .$hotel['precio'];?>"  id="hotel"></td>
			</tr>
			<tr>
				<?php $hotel = mysql_fetch_assoc($arrayHoteles); ?>
				<th><?php echo $hotel['nombre']; ?></th>
				<td><img style="width: 150px;height: 100px" src="<?php echo $hotel['foto']; ?>"/></td>
				<td><?php echo $hotel['precio']; ?>&euro;</td>
				<td><input type="radio" onclick="addHotel(this)" name="hotel" value="<?php echo $hotel['nombre']. "|" .$hotel['precio'];?>" id="hotel"></td>
			</tr>
			<tr>
				<th></th>
				<td>Ninguno</td>
				<td></td>
				<td><input type="radio" onclick="addHotel(this)" name="hotel" value="no" id="hotel" checked="true"></td>
			</tr>
			<tr><td><a href="#" onclick="return CloseMySelf()">Volver</a></td></tr>
		</table>
		<input type="radio" onclick="addHotel(this)" name="precio" value=""  id="precioHotel" checked="true" style="visibility: hidden">
	</body>
</html>