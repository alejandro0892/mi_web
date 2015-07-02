<?php 
	require("modelo_m.php");
	$objFormulario = new Formulario();
	$mensajeExito="Registro Exitoso";
	$mensajeError="Error al Registrar: Datos Incompletos";	

	//---------------------------------------------------------------------------------------------------------------------------	
	if(isset($_GET["folio_editar"]) && isset($_GET["nombre_editar"]) && isset($_GET["apellido_editar"]) && isset($_GET["telefono_editar"]) && isset($_GET["modelo_editar"]) && isset($_GET["serie_editar"]) && isset($_GET["des_editar"])&& isset($_GET["fallas_editar"]) && isset($_GET["estatus_editar"]) && isset($_GET["fechar_editar"]) && isset($_GET["fechae_editar"]) && isset($_GET["id_editar"])){

			$objFormulario->modificarUsuario($_GET["folio_editar"],$_GET["nombre_editar"],$_GET["apellido_editar"],$_GET["telefono_editar"],$_GET["modelo_editar"],$_GET["serie_editar"],$_GET["des_editar"],$_GET["fallas_editar"], $_GET["estatus_editar"],$_GET["fechar_editar"],$_GET["fechae_editar"],	$_GET["id_editar"]);			
	}
	
	//------------------------------------------ REGISTRAR--------------------------------------------------------------------------------	
	if(isset($_POST["folio"]) && isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["telefono"]) && isset($_POST["sexo"])&& isset($_POST["modelo"]) && isset($_POST["serie"])&& isset($_POST["des"]) && isset($_POST["fallas"]) && isset($_POST["resultado"]) && isset($_POST["estatus"])&& isset($_POST["fechar"])&& isset($_POST["fechae"]) ){
			$objFormulario->registrar($_POST["folio"],$_POST["nombre"],$_POST["apellido"],$_POST["telefono"],$_POST["sexo"],$_POST["modelo"],$_POST["serie"],$_POST["des"],$_POST["fallas"],$_POST["resultado"],$_POST["estatus"],$_POST["fechar"],$_POST["fechae"]   );
			
		}	
	//-------------------------ELIMINAR USUARIO-------------------------	
	if(isset($_GET["eliminar"])){
		?>
			<script>
            	confirmar=confirm("¿Esta seguro de elimiar el registro?");
				if(confirmar){
					location.href="controlador.php?confirmacion=si&codigo_user=<?php echo $_GET["codigo"]; ?>";
				}else{
					location.href="mensajeria.php";
				}
           </script>
		<?php
	}
	if(isset($_GET["confirmacion"])){
		$objFormulario->eliminar($_GET["codigo_user"]);
	}	
?>