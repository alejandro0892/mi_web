<?php 
	require("modelo_clie.php");
	$objModelo = new Formulario();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario</title>
<link rel="stylesheet" href="../css/index_style.css">
	<link rel="stylesheet" type="text/css" href="../css/calendario.css">
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/calendario.js"></script>

<script type="text/javascript" src="../ajax/ajax.js"></script>

</head>

<body >
	<form action="controlador.php" method="post" enctype="multipart/form-data">    
	 <?php	
		if(isset($_GET["folio"]) && isset($_GET["nombre"]) && isset($_GET["apellido"]) ){
			
			$id=$_GET["id"];
			$folio=$_GET["folio"];
			$nombre=$_GET["nombre"];
			$apellido=$_GET["apellido"];
			
			
			}

	?>
	
	
    	<div style="text-align:center; font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#000;">
		 <input type="hidden" name="id_editar" id="id_editar" value="<?php echo $id; ?>" />
        	<h2>Comentarios</h2>
        	<table width="793" border="0">
        	  <tr>
        	    <td width="93">Folio:</td>
        	    <td width="178"><div align="left">
        	      <input type="text" name="folio" id="folio" value="<?php echo $folio; ?>" required="required" />
      	      </div></td>
        	    <td width="68">Nombre:</td>
        	    <td width="156"><input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" required="required" /></td>
        	    <td width="64">Apellido:</td>
        	    <td width="208"><div align="left">
        	      <input type="text"  name="apellido" id="apellido"  value="<?php echo $apellido; ?>" required="required" />
        	    </div></td>
       	      </tr>
        	  <tr>
        	    <td>&nbsp;</td>
        	    <td><div align="left"></div></td>
  
       	      </tr>

        	  <tr>
        	    <td><div align="right">Comentario:</div></td>
        	    <td colspan="5"><label for="textarea"></label>
        	      <div align="center">
        	        <textarea type="text" name="comentario" id="comentario" cols="80" rows="9"  value="" placeholder="Redacte su comentario.."></textarea>
      	        </div></td>
       	      </tr>
      	  </table>
            <button type="submit" value="Registrar" >Enviar</button>
         
            <?php 
            if(isset($_GET["mensaje"])){
            	echo "<center>".$_GET["mensaje"]."</center>";
            }
            ?>            
            <br /><br />
    </div>
    </form>
</body>
</html>