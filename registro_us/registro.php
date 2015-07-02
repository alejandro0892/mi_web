<?php
require_once ('../conexion/funcion.php');
conectar('127.0.0.1:3307', 'root', '', 'veser_bd');
  
$folio = strip_tags($_POST['folio']);
$nombre = strip_tags($_POST['nombre']);
$apellido = strip_tags($_POST['apellido']);
$direccion = strip_tags ($_POST['direccion']);
$telefono = strip_tags ($_POST['telefono']);
$email = strip_tags($_POST['email']);
$user = strip_tags($_POST['user']);
$pas = strip_tags(sha1($_POST['pas']));
$cargo = strip_tags($_POST['cargo']);
$sexo = strip_tags ($_POST['sexo']);

$query = @mysql_query('SElECT *FROM empleados WHERE  folio="'.mysql_real_escape_string($folio).'" or user="'.mysql_real_escape_string($user).'"');
if ($existe = @mysql_fetch_object($query)){
    echo 'el Usuario  '.$user.' o el Folio  '.$folio.' ya Existe.';
}  else {
       $meter = @mysql_query('INSERT INTO empleados ( folio, nombre, apellido, direccion, telefono, email, user, pas, cargo, sexo) '
               . 'values ("'.mysql_real_escape_string($folio).'","'.mysql_real_escape_string($nombre).'","'.mysql_real_escape_string($apellido).'","'.mysql_real_escape_string($direccion).'","'.mysql_real_escape_string($telefono).'","'.mysql_real_escape_string($email).'","'.mysql_real_escape_string($user).'","'.mysql_real_escape_string($pas).'","'.mysql_real_escape_string($cargo).'","'.mysql_real_escape_string($sexo).'")');  
       if ($meter){
           echo 'Usuario Registrado Con Exito';
       }  else {
           echo 'Hubo un error en el Registro';    
       }
       

}
?>
