<?php 
	require ("../modelo/modelo_emp.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar ss </title>
<script type="text/javascript" src="../ajax/ajax.js"></script>
<script type="text/javascript">
	var folio = "",nombre = "", apellido="",direccion="", telefono="", email="", user="", pas="", cargo="",   fechaRegistro="", sexo="",  imagen="", pais="", pk="";	
	
	function modificarInformacion(){
		folio = document.getElementById("folio_editar").value;
		nombre = document.getElementById("nombre_editar").value;
		apellido = document.getElementById("apellido_editar").value;
		direccion = document.getElementById("direccion_editar").value;
		telefono = document.getElementById("telefono_editar").value;
		email = document.getElementById("email_editar").value;
		user = document.getElementById("user_editar").value;
		pas = document.getElementById("pas_editar").value;
		cargo = document.getElementById("cargo_editar").value;
		sexo = document.getElementById("sexo_editar").value;
		
		
		id = document.getElementById("id_editar").value;
		
		if(folio!="" && nombre!="" && apellido!="" && direccion!="" && telefono!="" && email!="" && user!=""  && pas!=""  && cargo!=""   && sexo!=""){
			ajax_("../control/controlador_us.php?folio_editar="+folio+"&nombre_editar="+nombre+"&apellido_editar="+apellido+"&direccion_editar="+direccion+"&telefono_editar="+telefono+"&email_editar="+email+" &user_editar="+user+" &pas_editar="+pas+" &cargo_editar="+cargo+" &sexo_editar="+sexo+"&id_editar="+id);
		}else{
			alert("Ingrese toda la informacion.");
		}		
	}
</script>
</head>

<body>
<form>
  <?php	
		if(isset($_GET["folio"]) && isset($_GET["nombre"]) && isset($_GET["apellido"])&& isset($_GET["direccion"]) && isset($_GET["telefono"]) && isset($_GET["email"]) && isset($_GET["user"]) && isset($_GET["pas"])&& isset($_GET["cargo"]) && isset($_GET["sexo"]) ){
			
			$id=$_GET["id"];
			$folio=$_GET["folio"];
			$nombre=$_GET["nombre"];
			$apellido=$_GET["apellido"];
			$direccion=$_GET["direccion"];
			$telefono=$_GET["telefono"];
			$email=$_GET["email"];	
            $user=$_GET["user"];	
            $pas=$_GET["pas"];	
            $cargo=$_GET["cargo"];
            $sexo=$_GET["sexo"];	
			}
	?>
  <br />
  <br />
  <table width="200" border="0" align="center">
    <input type="hidden" name="id_editar" id="id_editar" value="<?php echo $id; ?>" />
    <tr>
      <td>Folio</td>
      <td><input type="text" name="folio_editar" id="folio_editar" value="<?php echo $folio; ?>" /></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><input type="text" name="nombre_editar" id="nombre_editar" value="<?php echo $nombre; ?>" /></td>
    </tr>
    <tr>
      <td>Apellido</td>
      <td><input type="text" name="apellido_editar" id="apellido_editar"  value="<?php echo $apellido; ?>" /></td>
    </tr>
    <tr>
	  <tr>
      <td>Direccion</td>
      <td><input type="text" name="direccion_editar" id="direccion_editar"  value="<?php echo $direccion; ?>" /></td>
    </tr>
    <tr>
      <td>Telefono</td>
      <td><input type="text" name="telefono_editar" id="telefono_editar" value="<?php echo $telefono; ?>" /></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="email_editar" id="email_editar" value="<?php echo $email; ?>" /></td>
    </tr>
	<tr>
      <td>Usser</td>
      <td><input type="text" name="user_editar" id="user_editar" value="<?php echo $user; ?>" /></td>
    </tr>
	<tr>
      <td>Password</td>
      <td><input type="text" name="pas_editar" id="pas_editar" value="<?php echo $pas; ?>" /></td>
    </tr>
	<tr>
      <td>Cargo</td>
      <td><input type="text" name="cargo_editar" id="cargo_editar" value="<?php echo $cargo; ?>" /></td>
    </tr>
	<tr>
      <td>Sexo</td>
      <td><input type="text" name="sexo_editar" id="sexo_editar" value="<?php echo $sexo; ?>" /></td>
    </tr>
    
    <tr>
      <td colspan="3" align="center"><input type="button" value="Modificar" onclick="modificarInformacion();" /></td>
    </tr>
  </table>
  <div id="resultado" align="center"></div>
</form>
<br />
<br />
<br />
</body>
</html>