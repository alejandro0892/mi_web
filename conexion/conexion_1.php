<?php
$cn=mysql_connect("127.0.0.1:3307","root","")or die("Error en Conexion");
$db=mysql_select_db("veser_bd")or die("Error en Db");
return($cn);
return($db);
?>