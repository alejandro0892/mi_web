<?php 
	require("../modelo/modelo_emp.php");
	$objFormulario = new Formulario();
	$mensajeExito="Registro Exitoso";
	$mensajeError="Error al Registrar: Datos Incompletos";	

	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["folio_editar"]) && isset($_GET["nombre_editar"]) && isset($_GET["apellido_editar"])&& isset($_GET["direccion_editar"]) && isset($_GET["telefono_editar"]) && isset($_GET["email_editar"]) && isset($_GET["user_editar"]) && isset($_GET["pas_editar"])&& isset($_GET["cargo_editar"]) && isset($_GET["sexo_editar"]) && isset($_GET["id_editar"])){

			$objFormulario->modificarUsuario($_GET["folio_editar"],$_GET["nombre_editar"],$_GET["apellido_editar"], $_GET["direccion_editar"],$_GET["telefono_editar"],$_GET["email_editar"],$_GET["user_editar"],$_GET["pas_editar"],$_GET["cargo_editar"], $_GET["sexo_editar"],	$_GET["id_editar"]);			
	}
	
	//-------------------------ELIMINAR USUARIO-------------------------	
	if(isset($_GET["eliminar"])){
		?>
			<script>
            	confirmar=confirm("¿Esta seguro de elimiar el registro?");
				if(confirmar){
					location.href="controlador_us.php?confirmacion=si&codigo_user=<?php echo $_GET["codigo"]; ?>";
				}else{
					location.href="../registro_us/modificarInformacion_us.php";
				}
           </script>
		<?php
	}
	if(isset($_GET["confirmacion"])){
		$objFormulario->eliminar($_GET["codigo_user"]);
	}	
?>