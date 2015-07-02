<?php 
	require ("modelo_tec.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar ss </title>
<script type="text/javascript" src="../ajax/ajax.js"></script>
<link rel="stylesheet" href="../css/index_style.css">
<script type="text/javascript">
	var folio = "",nombre = "", apellido="", telefono="",sexo="",modelo="",serie="",fallas="",resultado="",estatus="",fechar="",fechae="",   descripcion="", imagen="", pais="", pk="", email="";	
	
	function modificarInformacion(){
		
		resultado = document.getElementById("resultado_editar").value;
		estatus = document.getElementById("estatus_editar").value;
		
		
		id = document.getElementById("id_editar").value;
		
		if(resultado!=""&& estatus!=""  ){
			ajax_("controlador.php?resultado_editar="+resultado+" &estatus_editar="+estatus+"  &id_editar="+id);
		}else{
			alert("Ingrese toda la informacion.");
		}		
	}
</script>
</head>

<body background="../img/44.png">
<form>
  <?php	
		if( isset($_GET["folio"])   && isset($_GET["resultado"]) && isset($_GET["estatus"]) ){
			
			$id=$_GET["id"];
			$folio=$_GET["folio"];
		 
            $resultado=$_GET["resultado"];
            $estatus=$_GET["estatus"];
           
			}

	?>
  <br />
  <br />
  <table width="200" border="0" align="center">
    <input type="hidden" name="id_editar" id="id_editar" value="<?php echo $id; ?>" />
	<h1 id="form1" align="center">ORDEN DE TRABAJO TECNICO</h1>
	<tr>
      <td>Folio</td>
      <td><div align="left"><input type="text" name="folio_editar" id="folio_editar" value="<?php echo $folio; ?>" /></div></td>
    </tr>
	
<tr>
<td>*Resultado</td>
<td><div align="left">
   <label for="textarea"></label>
  <textarea type="text" name="resultado_editar" id="resultado_editar" cols="80" rows="9"  value="<?php echo $resultado; ?>" placeholder="Redacte su respuesta antes de guardar.."></textarea>
</div></td>
</tr>


	<tr>
        <td><div align="left">*Estatus:</div></td>
         <td><div align="left">
        <div align="left">
        <select name="estatus_editar" id="estatus_editar">
      <option >Entrada</option>
      <option>Proceso</option>
      <option>Finalizado</option>
      <option>Entregado</option>
        </select>
        </div>
         </div></td>
     </tr>

    <tr>
      <td colspan="3" align="center"><button type="button" value="Modificar" onclick="modificarInformacion();" >Guardar</button></td>
    </tr>
  </table>
  <div id="resultado" align="center"></div>
</form>
<br />
<br />
<br />
</body>
</html>