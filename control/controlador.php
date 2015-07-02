<?php 
	require("../modelo/modelo.php");
	$objFormulario = new Formulario();
	$mensajeExito="Registro Exitoso";
	$mensajeError="Error al Registrar: Datos Incompletos";	

	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["folio_editar"]) && isset($_GET["nombre_editar"]) && isset($_GET["apellido_editar"]) && isset($_GET["telefono_editar"]) && isset($_GET["modelo_editar"]) && isset($_GET["serie_editar"]) && isset($_GET["des_editar"])&& isset($_GET["fallas_editar"]) && isset($_GET["fechae_editar"])   && isset($_GET["fecha_editar"]) && isset($_GET["id_editar"])){

			$objFormulario->modificarUsuario($_GET["folio_editar"],$_GET["nombre_editar"],$_GET["apellido_editar"],$_GET["telefono_editar"],$_GET["modelo_editar"],$_GET["serie_editar"],$_GET["des_editar"],$_GET["fallas_editar"],$_GET["fechae_editar"], $_GET["fecha_editar"], $_GET["id_editar"]);			
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