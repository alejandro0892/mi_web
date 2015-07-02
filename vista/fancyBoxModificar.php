<?php 
	require ("../modelo/modelo.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar ss </title>

<link rel="stylesheet" href="../css/index_style.css">

<script type="text/javascript" src="../ajax/ajax.js"></script>
<script type="text/javascript">
	var folio = "",nombre = "", apellido="", telefono="",sexo="",modelo="",serie="",des="",fallas="",resultado="",estatus="",fechar="",fechae="",   descripcion="", imagen="", pais="", pk="", email="";	
	
	function modificarInformacion(){
		folio = document.getElementById("folio_editar").value;
		nombre = document.getElementById("nombre_editar").value;
		apellido = document.getElementById("apellido_editar").value;
		telefono = document.getElementById("telefono_editar").value;
		modelo = document.getElementById("modelo_editar").value;
		serie = document.getElementById("serie_editar").value;
		des = document.getElementById("des_editar").value;
		fallas = document.getElementById("fallas_editar").value;

		fechae = document.getElementById("fechae_editar").value;
		fecha = document.getElementById("fecha_editar").value;
		id = document.getElementById("id_editar").value;
		
		if(folio!="" && nombre!="" && apellido!="" && telefono!="" && modelo!=""  && serie!=""  && des!=""  && fallas!=""    && fechae!="" && fecha!="" ){
			ajax_("../control/controlador.php?folio_editar="+folio+"&nombre_editar="+nombre+"&apellido_editar="+apellido+"&telefono_editar="+telefono+"&modelo_editar="+modelo+" &serie_editar="+serie+" &des_editar="+des+" &fallas_editar="+fallas+"  &fechae_editar="+fechae+" &fecha_editar="+fecha+" &id_editar="+id);
		}else{
			alert("Ingrese toda la informacion.");
		}		
	}
</script>
</head>

<body background="../img/44.png">
<form>
  <?php	
		if(isset($_GET["folio"]) && isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset($_GET["telefono"])  && isset($_GET["modelo"]) && isset($_GET["serie"])&& isset($_GET["des"]) && isset($_GET["fallas"]) && isset($_GET["resultado"]) && isset($_GET["fechae"])  && isset($_GET["fecha"]) ){
			
			$id=$_GET["id"];
			$folio=$_GET["folio"];
			$nombre=$_GET["nombre"];
			$apellido=$_GET["apellido"];
			$telefono=$_GET["telefono"];
			
            $modelo=$_GET["modelo"];	
            $serie=$_GET["serie"];	
            $des=$_GET["des"];
            $fallas=$_GET["fallas"];
            $fechae=$_GET["fechae"];	
            $fecha=$_GET["fecha"];
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
      <td>Telefono</td>
      <td><input type="text" name="telefono_editar" id="telefono_editar" value="<?php echo $telefono; ?>" /></td>
    </tr>
   
	<tr>
      <td>Modelo</td>
      <td><input type="text" name="modelo_editar" id="modelo_editar" value="<?php echo $modelo; ?>" /></td>
    </tr>
	<tr>
      <td>Serie</td>
      <td><input type="text" name="serie_editar" id="serie_editar" value="<?php echo $serie; ?>" /></td>
    </tr>
	<tr>
      <td>Descripcion</td>
      <td><input type="text" name="des_editar" id="des_editar" value="<?php echo $des; ?>" /></td>
    </tr>
	<tr>
      <td>Fallas</td>
      <td><input type="text" name="Fallas_editar" id="fallas_editar" value="<?php echo $fallas; ?>" /></td>
    </tr>
	<tr>
      <td>Fecha_Entr</td>
      <td><input type="text" name="feche_editar" id="fechae_editar" value="<?php echo $fechae; ?>" /></td>
    </tr>
	
	<tr>
      <td>Fecha_Reg</td>
      <td><input type="text" name="fecha_editar" id="fecha_editar" value="<?php echo $fecha; ?>" /></td>
    </tr>
    
    <tr>
      <td colspan="3" align="center"><button type="button" value="Modificar" onclick="modificarInformacion();" >Modificar</button></td>
    </tr>
  </table>
  <div id="resultado" align="center"></div>
</form>
<br />
<br />
<br />
</body>
</html>