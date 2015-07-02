<?php
session_start();
require_once ('../conexion/funcion.php');
conectar('127.0.0.1:3307', 'root', '', 'veser_bd');

// Recibir
$user = strip_tags($_POST['user']);
$pas = strip_tags(sha1($_POST['pas']));


$query = @mysql_query('SElECT *FROM empleados WHERE user="'.mysql_real_escape_string($user).'" AND pas="'.mysql_real_escape_string($pas).'"');
if ($existe = @mysql_fetch_object($query)){
      { 
         $query = @mysql_query('SElECT *FROM empleados WHERE user="'.mysql_real_escape_string($user).'" AND pas="'.mysql_real_escape_string($pas).'" AND cargo="'.mysql_real_escape_string(CAJERO).'"');
            if($existe =@mysql_fetch_object($query)){
               $_SESSION['logged'] = 'yes';
               $_SESSION['user'] = $user;
               echo '<script>window.location="../usuarios/cajero.html"</script>';
          } else {
            echo 'El Tipo de usuario son Incorrectos';    
         }
    
     } 
     { 
         $query = @mysql_query('SElECT *FROM empleados WHERE user="'.mysql_real_escape_string($user).'" AND pas="'.mysql_real_escape_string($pas).'" AND cargo="'.mysql_real_escape_string(ADMINISTRADOR).'"');
            if($existe =@mysql_fetch_object($query)){
               $_SESSION['logged'] = 'yes';
               $_SESSION['user'] = $user;
               echo '<script>window.location="../usuarios/admin.html"</script>';
          } else {
            echo 'El Tipo de  usuario son Incorrectos';    
         }
    
     } 
     
     { 
         $query = @mysql_query('SElECT *FROM empleados WHERE user="'.mysql_real_escape_string($user).'" AND pas="'.mysql_real_escape_string($pas).'" AND cargo="'.mysql_real_escape_string(TECNICO).'"');
            if($existe =@mysql_fetch_object($query)){
               $_SESSION['logged'] = 'yes';
               $_SESSION['user'] = $user;
               echo '<script>window.location="../usuarios/tecnico.html"</script>';
          } else {
            echo 'El Tipo de usuario son Incorrectos';    
         }
    
     } 
     
     
   } else {
         echo 'El usuario y/o Pass son Incorrectos';    
    }


?>