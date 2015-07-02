<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="bootstrap.css">

	
	<script>

          function reloj() {
          	var fecha = new Date();
          	var h = fecha.getHours();
          	var m = fecha.getMinutes();
          	var s = fecha.getSeconds();
          	var dia = fecha.getDate();
          	var mes =  fecha.getMonth("i")+1;
          	var ano = fecha.getFullYear();
           	document.getElementById('reloj') .innerHTML = dia + " /" + mes + "/"+ ano+ " _<th> " + h + " : " + m + " :" + s  ;

           	setTimeout('reloj()', 1000);

          }
	</script>


<style type="text/css">

.container{
	background-color: rgba(100, 100, 100, 0.4);
}
.container p {
	color: #FFF;
}
.container div table {
	color: #FFF;
}
a {
	font-size: 18px;
	color: #FFF;
	font-weight: bold;
}
.container div table tr th {
	font-weight: bold;
}
h2 {
	color: YELLOW ;
}
.h {
	color: #FFF;
}
.h {
	font-size: 36px;
}
.h .h {
	font-size: 28px;
}
.container div {
	color: #FFF;
}
#reloj	{
		color: #ff8000;
        align: center;
		font-weight: bold;
		font-size: 18px;
	}

</style>

</head>

<body onload ="reloj()" background="../img/logo6.png">
  <h2 align="center" >
    <?php
session_start();
if ($_SESSION['logged'] == 'yes')
{
    echo 'Bienvenido '.$_SESSION['user'].',  Esta es Tu Pagina Personal Tecnico.';
}  else {
    echo 'No estas logeado largate de aqui';    
}

?>
  </h3>  

  <div id="reloj" align ="center">
		
	</div>
  
<div align="center"></div>
</div>
</body>
</html>