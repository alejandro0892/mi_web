
<html>
<head>
       <span style="color:#FFFFFF"> 
        <title> Registro </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
 <link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/empleados.css">


   <link rel="stylesheet" type="text/css" href="../css/calendario.css">
	<script type="text/javascript" src="../jquery/jquery.js"></script>
	<script type="text/javascript" src="../jquery/calendario.js"></script>
	<script type="text/javascript">
		$(function(){
			$("#fecharRegistro").datepicker({
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
    <body background="../img/fon1.png" #000 >	
	<div class="container" >
  <!--Registro-->
        <form action="registro.php" method="POST">
          <div align="center">
            <h1><strong>Registro De Empleados</strong></h1>
            <h3><strong>Porfavor de Rellenar los cuadros con (*)</strong>   </h3>
            <table width="460" border="0" style="color:#FFFFFF">
              
              <tr>
      <td width="220" height="29"><p align="left"><strong>*Folio:</strong></p></td>
      <td width="230"><div align="left">
        <input type="text" name="folio"  id="folio"  placeholder="Folio" value="" required="required"  />
      </div></td>
      </tr>
    <tr>
      <td height="30"><p align="left"><strong>*Nombre:</strong></p></td>
      <td><div align="left">
        <input type="text" name="nombre" placeholder="Nombre" required="required"  />
      </div></td>
      </tr>
    <tr>
      <td height="30"><p align="left"><strong>*Apellido:</strong></p></td>
      <td><div align="left">
        <input type="text" name="apellido" placeholder="Apellido" required="required" />
      </div></td>
      </tr>
    <tr>
      <td height="34"><p align="left"><strong>*Direcciòn: </strong></p></td>
      <td><div align="left">
        <input type="text" name="direccion" placeholder="Direccion" required="required" />
      </div></td>
      </tr>
	  <tr>
      <td height="34"><p align="left"><strong>*Telefono: </strong></p></td>
      <td><div align="left">
        <input type="text" name="telefono" placeholder="telefono" required="required" />
      </div></td>
      </tr>
	  
    <tr>
      <td height="36"><p align="left"><strong>Correo:</strong></p></td>
      <td><div align="left">
        <input type="text" name="email" placeholder="Correo" />
      </div></td>
      </tr>
    <tr>
      <td height="38"><p align="left"><strong>*Usuario:</strong></p></td>
      <td><div align="left">
        <input type="text" name="user" placeholder="Usuario" required="required"  />
      </div></td>
      </tr>
    <tr>
      <td height="28"><p align="left"><strong>*Password:</strong></p></td>
      <td><div align="left">
        <input type="password" name="pas" placeholder="Password" required="required" />
      </div></td>
      </tr>
    <tr>
      <td height="33"><p align="left"><strong>*Cargo: </strong></p></td>
      <td><label for="select"></label>
        <div align="center">
          <select name="cargo" id="select" required="required" >
            <option>Selecciona tipo de usuario</option>
            <option>ADMINISTRADOR</option>
            <option>CAJERO</option>
            <option>TECNICO</option>
          </select>
        </div></td>
      </tr>
	  
	   <tr>
      <td height="30"><p align="left"><strong>*sexo: </strong></p></td>
      <td><label for="select"></label>
        <div align="center">
          <select name="sexo" id="select">
            <option>F</option>
            <option>M</option>    
          </select>
        </div></td>
      </tr>
    </table>
              <tr>
                      
             <button type="Subimit" name="btn1" value="Registrar">Registrar</button>
			 <p><a href='modificarInformacion_us.php'>Lista De Orden De Trabajo</a>
			
			
                                              
             </tr>         
          </div> 
        </form>

    <div align="center"> 
    
      <p>&nbsp;</p>
      <p>Copyright 2015 ISC, ITS Felipe Carrillo Puerto Q.R00, Mexico </p>
    </div> </div> 
    </body>
    
</html>