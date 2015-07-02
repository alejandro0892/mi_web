<?php
include("../conexion/conexion_1.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Veser_OT </title>
<link href="../css/estilos_tabla.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/index_style.css">


	<link rel="stylesheet" type="text/css" href="../css/calendario.css">
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/calendario.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#txtfecha").datepicker({
				changeMonth:true,
				changeYear:true,
				showOn: "button",
				buttonImage: "../img/ico.png",
				buttonImageOnly: true,
				showButtonPanel: true,
			})
			
			$("#txtfechae").datepicker({
				changeMonth:true,
				changeYear:true,
				showOn: "button",
				buttonImage: "../img/ico.png",
				buttonImageOnly: true,
				showButtonPanel: true,
			})
 
               
			
			
		})
	</script>


</head>
  <form id="form1" name="form1" method="post" action="">
	<body background="../img/fon1.png" #000 onLoad="carga();">
<div class="container" >
<!--DE AQUI COMIENZA SI DESEAR COPIAR A TU SITIO WEB TOMALO COMO SI EMPEZARAS DESDE BODY-->
 <h3 align="center" >

<?php
$var0="";
$var="";
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";
$var9="";
$var10="";
$var11="";
$var12="";
$var13="";


if(isset($_POST["btn1"])){
	$btn=$_POST["btn1"];
		
		if($btn=="Nuev_OT"){
		
		$sql="select count(folio),Max(folio) from ot";
		$cs=mysql_query($sql,$cn);
		while($resul=mysql_fetch_array($cs)){
			$count=$resul[0];
			$max=$resul[1];
			}
			if($count==0){
				$var5="A0001";
				}
				else{
					$var5='A'.substr((substr($max,1)+10001),1);
					}
			
		}
		 
	  if($btn=="Agregar"){
		
		$folio=$_POST["txtfolio"];
		$nom=$_POST["txtnom"];
		$ape=$_POST["txtape"];
		$tel=$_POST["txttel"];
		$modelo=$_POST["txtmodelo"];
		$serie=$_POST["txtserie"];
		$des=$_POST["txtdes"];
		$fallas=$_POST["txtfallas"];
		$estatus=$_POST["estatus"];
		$fechae=$_POST["txtfechae"];
		$fecha=$_POST["txtfecha"];
		
	
		
		$sql= "insert into ot values ('','$folio','$nom','$ape','$tel','$modelo','$serie','$des','$fallas','','$estatus','$fechae','$fecha')";
		 $cs=mysql_query($sql,$cn);
		   echo 'Usuario Registrado Con Exito';	  
		  }
		 

		 
		 


        if($btn=="Actualizar"){
		$id=$_POST["txtfolio"];
		$folio=$_POST["txtfolio"];
		$nom=$_POST["txtnom"];
		$ape=$_POST["txtape"];
		$tel=$_POST["txttel"];
		$modelo=$_POST["txtmodelo"];
		$serie=$_POST["txtserie"];
		$des=$_POST["txtdes"];
		$fallas=$_POST["txtfallas"];
		$estatus=$_POST["cboestatus"];
		$fechar=$_POST["txtfechar"];
		$fechae=$_POST["txtfechae"];
		$sql="update ot set  nom='$nom', ape='$ape',tel='$tel' where folio='$folio'";
		$cs=mysql_query($sql,$cn);
		}			  

	}
?>
  </h3>  
<form name="fe" action="" method="post">
<center>

  <p>&nbsp;</p>
  <table width="890" border="0">
    <tr>
      <td width="234"><div align="center"><img src="../img/tec.png" width="161" height="107"   class="img-responsive img-thumbnail" align="middle"></div></td>
      <td width="655"><h1 align="center" id="form1"><strong>INFORME  DE MANTENIMIENTO</strong></h1>
        <h1 align="center"><strong>PREVENTIVO Y/O </strong><strong>CORRECTIVO</strong></h1></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <div align="right">
    <table width="848" border="0">
      <tr>
        <td width="95"><div align="center">PREVENTIVO:</div></td>
        <td width="24"><input type="checkbox" name="checkbox" id="checkbox" />
          <label for="checkbox"></label><div align="left"></div></td>
        <td width="98"><div align="center">CORRECTIVO:</div></td>
        <td width="190"><input type="checkbox" name="checkbox2" id="checkbox2" />
          <label for="checkbox2"></label><div align="left"></div><div align="left"></div><div align="left"></div><div align="left"></div></td>
        <td width="145"><div align="center">FECHA:</div></td>
        <td width="270"><label for="textfield8"></label>
          <div align="left">
            <input type="text" name="textfield8" id="textfield8" />
          </div></td>
        </tr>
    </table>
  </div>
  <p>&nbsp;</p>
  <table width="830" border="0">
    <tr>
      <td width="295" class="tex"><div align="left"><strong>Nombre del Usuario:</strong></div></td>
      <td width="525"><label for="textfield5"></label>
        <div align="left">
          <input type="text" name="textfield5" id="textfield5" />
        </div></td>
    </tr>
    <tr>
      <td><div align="left"><strong class="tex">DEPARTAMENTO:</strong></div></td>
      <td><label for="textfield6"></label>
        <div align="left">
          <input type="text" name="textfield6" id="textfield6" />
        </div></td>
    </tr>
    <tr>
      <td><div align="left"><strong class="tex">SUBDIRECCIÓN A LA QUE PERTENECE:</strong></div></td>
      <td><label for="textfield7"></label>
        <div align="left">
          <input type="text" name="textfield7" id="textfield7" />
        </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="831" border="0">
    <tr>
      <td colspan="4"><h2 align="center" class="tex">DATOS DEL  EQUIPO</h2></td>
      </tr>
    <tr>
      <td width="264"><strong class="tex">BREVE DESCRIPCION DEL EQUIPO</strong></td>
      <td width="225"><strong class="tex">NO. DE INVENTARIO</strong></td>
      <td width="162"><strong class="tex">NO. DE SERIE</strong></td>
      <td width="152" class="tex"><strong>MODELO:</strong></td>
    </tr>
    <tr>
      <td><label for="textfield"></label>
        <input type="text" name="textfield" id="textfield" /></td>
      <td><label for="textfield2"></label>
        <input type="text" name="textfield2" id="textfield2" /></td>
      <td><label for="textfield3"></label>
        <input type="text" name="textfield3" id="textfield3" /></td>
      <td><label for="textfield4"></label>
        <input type="text" name="textfield4" id="textfield4" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="849" border="0">
    <tr>
      <td><h2 align="center" class="tex"><strong>DESCRIPCIÓN DE LOS SERVICIOS REALIZADOS:</strong></h2></td>
    </tr>
    <tr>
      <td><label for="textarea"></label>
        <textarea name="textarea" id="textarea" cols="120" rows="6"></textarea></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="849" border="0">
    <tr>
      <td><h2 align="center" class="tex"><strong>OBSERVACIONES:</strong></h2></td>
    </tr>
    <tr>
      <td><label for="textarea2"></label>
        <textarea name="textarea2" id="textarea2" cols="120" rows="6"></textarea></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p></center>
</form>
</div>
	</body>
</html>
