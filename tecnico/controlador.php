<?php 
	require("modelo_tec.php");
	$objFormulario = new Formulario();
	$mensajeExito="Registro Exitoso";
	$mensajeError="Error al Registrar: Datos Incompletos";	

	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["resultado_editar"])&& isset($_GET["estatus_editar"]) && isset($_GET["id_editar"])){

			$objFormulario->modificarUsuario($_GET["resultado_editar"], $_GET["estatus_editar"],	$_GET["id_editar"]);			
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