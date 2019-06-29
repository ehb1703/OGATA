<!DOCTYPE html> 
<?php 
	include("conexionBDD.php");
?>
<meta charset="UTF-8">
<html> 	
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>CRUD PHP & SQL SERVER</title>
    <!-- Bootstrap core CSS -->
    <link href="../css/Consulta_SQL.css" rel="stylesheet">     			
	</head>
<body>
	<div class="col-md-8 col-md-offset-2"><br><br>
	<form action="exportarExcel.php" method="POST" class="FORM">
          	<div class="form-group row">
	            <label class="col-2 col-form-label" for="txt_folioI">Folio Inicial:</label>
	            <input class="col-2 form-control" type="text" name="txt_folioI" id="txt_folioI" placeholder="Folio I:">
	            <label class="col-1 col-form-label" for="txt_folioF">Folio Terminal:</label>
	            <input class="col-2 form-control" type="text" name="txt_folioF" id="txt_folioF" placeholder="Folio F:">     
       		</div>
       	<button type="submit" class="btn btn-info" name="formk">Generar Reporte</button>  
	</form>	

<br />

	<div class="col-md-8 col-md-offset-2">
	<table class="table table-bordered table-responsive">
		<tr>
			<td>CIDCLIENTEPROVEEDOR</td>
			<td>CCODIGOCLIENTE</td>
			<td>CRAZONSOCIAL</td>
			<td>Email</td>
		</tr>

		<?php
			$consulta = "SELECT * FROM admClientes";

			$ejecutar = sqlsrv_query($conexion, $consulta);

			$i = 0;

			while($fila = sqlsrv_fetch_array($ejecutar)){
				$id = $fila['CIDCLIENTEPROVEEDOR'];
				$usuario = $fila['CCODIGOCLIENTE'];
				$password = $fila['CRAZONSOCIAL'];
				$email = $fila['CEMAIL1'];
				$i++;
			

		?>

		<tr align="center">
			<td><?php echo $id; ?></td>
			<td><?php echo $usuario; ?></td>
			<td><?php echo $password; ?></td>
			<td><?php echo $email; ?></td>
		</tr>

		<?php } ?>

	</table>
	</div>

	<?php
		if(isset($_GET['editar'])){
			include("editar.php");
		}

	?>	

	<?php	
	if(isset($_GET['borrar'])){

			$borrar_id = $_GET['borrar'];

			$borrar = "DELETE FROM usuarios WHERE id='$borrar_id'";
			
			$ejecutar = sqlsrv_query($con, $borrar);

			if($ejecutar){
				echo "<script>alert('El usuario ha sido borrado')</script>";
				echo "<script>window.open('formulario.php', '_self')</script>";
			}	
		}
?>
</body>
</html>



