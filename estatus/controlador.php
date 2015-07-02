<?php 
	require("modelo_clie.php");
	$objFormulario = new Formulario();
	$mensajeExito="Registro Exitoso";
	$mensajeError="Error al Registrar: Datos Incompletos";	

	//------------------------------------------ REGISTRAR--------------------------------------------------------------------------------	
	if(isset($_POST["folio"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["comentario"])){
			$objFormulario->registrar($_POST["folio"],$_POST["nombre"],$_POST["apellido"],$_POST["comentario"]);
			
		}	
	//-------------------------ELIMINAR USUARIO-------------------------	
	if(isset($_GET["eliminar"])){
		?>
			<script>
            	confirmar=confirm("¿Esta seguro de elimiar el registro?");
				if(confirmar){
					location.href="controlador.php?confirmacion=si&codigo_user=<?php echo $_GET["codigo"]; ?>";
				}else{
					location.href="../vista/modificarInformacion.php";
				}
           </script>
		<?php
	}
	if(isset($_GET["confirmacion"])){
		$objFormulario->eliminar($_GET["codigo_user"]);
	}	
?>