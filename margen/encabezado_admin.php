<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
*{
	margin:0px;
	padding:0px;
	font-family: Helvetica Neue; 
}
body {
width: 100%;
height:auto;
background-attachment: fixed;
line-height:25px;
}
.contenedor{
	width: 100%;
	max-width: 2500px;
	height:auto;
	margin: auto;
	background: url(../img/logo6.png); 
    overflow:hidden;
	text-align:center;
}
.imagen{

}
h2 {
	color: YELLOW ;
   font-size: 25px;
}

@media screen and (max-width: 600px){
  .contenedor{
 width:100%;
 }
 
}

</style>

</head>


<div class="contenedor">
<body >
<br />

  <h2 align="center" >
    <?php
session_start();
if ($_SESSION['logged'] == 'yes')
{
    echo 'Bienvenido '.$_SESSION['user'].',  Esta es Tu Pagina Personal Administrador.';
}  else {
    echo 'No estas logeado largate de aqui';    
}

?></h2>

<br>
<br>
</body>
<div>
</html>