
<link href="../css/estilos_tabla.css" rel="stylesheet" type="text/css" />
<?php
	require "../conexion/conexion.php";
	class Formulario{
		var $conn;
		var $conexion;
		var $mensajeExito;
		var $mensajeError;
		
		  function Formulario(){
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
			$this->mensajeExito="Registro Exitoso";
			$this->mensajeError="Error al Registrar";
			}		
		
		//---------------------------------------------------------------------------------------------
			function registrar($folio, $nombre, $apellido, $telefono, $sexo, $modelo, $serie, $des, $fallas, $resultado, $estatus, $fechar, $fechae ){
			
			$queryRegistrar = "insert into empleados (folio, nombre, apellido, telefono, sexo, modelo, serie, des, fallas, resultado, estatus, fechar, fechar) 
			values ('".$folio."', '".$nombre."', '".$apellido."', '".$telefono."', '".$sexo."', '".$modelo."', '".$serie."', '".$des."', '".$fallas."',
			'".$resultado."', '".$estatus."', '".$fechar."', '".$fechae."')";
			$registrar = mysqli_query($this->conn, $queryRegistrar) or die(mysqli_error());					
			if($registrar){
			      
				echo "<script>location.href='../vista/index.php?mensaje=". $this->mensajeExito."';</script>";	
     			
			}
		      else{
				echo "<script>location.href='../vista/index.php?mensaje=".$this->mensajeError."';</script>";
			  }	
		}		
		//---------------------------------------------------------------------------------------------------------------------------
		function listar(){
			$sql="select * from  empleados";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "No hay clientes registrados";	
			}else{
			 echo "<table border='0' align='center' class='table_' >";
			 echo "<thead>
					<th>Folio</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Email</th>	
					<th>Usuario</th>	
					<th>Cargo</th>
					<th>Sexo</th>
                    <th>Fecha_Reg</th>					
					<th>Modificar</th>
					<th>Eliminar</th>
				</thead>";
			 while ($row = mysqli_fetch_array($rs)){	 								
			echo "<td align='center'>".$row["folio"]."</td>";
			echo "<td align='center'>".$row["nombre"]."</td>";	
			echo "<td align='center'>".$row["apellido"]."</td>";
			echo "<td align='center'>".$row["direccion"]."</td>";
			echo "<td align='center'>".$row["telefono"]."</td>";			
			echo "<td align='center'>".$row["email"]."</td>";	 
            echo "<td align='center'>".$row["user"]."</td>";				
            echo "<td align='center'>".$row["cargo"]."</td>";		
            echo "<td align='center'>".$row["sexo"]."</td>";		
            echo "<td align='center'>".$row["fecha"]."</td>";			
			
						
			echo '<td align="center">
			<a class="fancybox fancybox.iframe" href="../registro_us/fancyBoxModificar.php? id='.$row["id"].' &folio='.$row["folio"].'&nombre='.$row["nombre"].'&apellido='.$row["apellido"].'&direccion='.$row["direccion"].'&telefono='.$row["telefono"].'&email='.$row["email"].'&user='.$row["user"].'&pas='.$row["pas"].'&cargo='.$row["cargo"].'&fecha='.$row["fecha"].' &sexo='.$row["sexo"].'" >Editar</a></td>';
			echo "<td><a href='../control/controlador_us.php? eliminar=si&codigo=".$row["id"]."'>Eliminar</a></td></tr>";
			$i++; 
			}			
			}
			echo "</table>";
		}
		//---------------------------------------------------------------------------------------------------------------------------	
			function modificarUsuario($folio, $nombre, $apellido, $direccion, $telefono,  $email, $user, $pas, $cargo, $sexo,  $id){
			$queryUpdate = "update empleados set folio = '".$folio."', nombre = '".$nombre."', apellido = '".$apellido."',  direccion = '".$direccion."',telefono = '".$telefono."', email = '".$email."',user = '".$user."', pas = '".$pas."', cargo = '".$cargo."', sexo = '".$sexo."' where id = ".$id;
			$update =mysqli_query($this->conn, $queryUpdate);
			if($update){
				echo "Actualizacion Exitosa";
			}else{
				echo "Error Al Actualizar";
				}
		}
		
		
		
		//---------------------------------------------------------------------------------------------------------------------------
		function eliminar($pk){
			$queryDelete = "delete from empleados where id = ".$pk;
			$delete =mysqli_query($this->conn, $queryDelete);
			if($delete){						
				echo "<script>
						alert('Eliminacion exitosa');
						location.href='../registro_us/modificarInformacion_us.php';
				</script>";				
			}else{
				echo "<script>
						alert('Error Al Eliminar');
						location.href='../registro_us/modificarInformacion_us.php';
				</script>";	
				}
		}
		//--------------------------------------------------------------------------------------------------------------
		function buscar($dato){
			$sql="select * 
			from empleados
			where folio like '%".$dato."%' OR nombre like '%".$dato."%' OR apellido like '%".$dato."%'  OR direccion like '%".$dato."%' OR telefono like '%".$dato."%'
			OR email like '%".$dato."%' OR user like '%".$dato."%'  OR cargo like '%".$dato."%' OR sexo like '%".$dato."%'	";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "La busqueda no obtuvo resultados.";	
			}else{
			echo "<table border='0' align='center' class='table_' ><thead>
					<th>Folio</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>User</th>
					<th>Cargo</th>					
					<th>Sexo</th>
					<th>Fecha_Reg</th>
	
					<th>Modificar</th>
					<th>Eliminar</th>
				</thead><tbody>";
			 while ($row = mysqli_fetch_array($rs)){	 								
			echo "<tr><td align='center'>".$row["folio"]."</td>";
			echo "<td align='center'>".$row["nombre"]."</td>";
			echo "<td align='center'>".$row["apellido"]."</td>";
			echo "<td align='center'>".$row["direccion"]."</td>";
			echo "<td align='center'>".$row["telefono"]."</td>";
			echo "<td align='center'>".$row["email"]."</td>";
			echo "<td align='center'>".$row["user"]."</td>";
			echo "<td align='center'>".$row["cargo"]."</td>";
			echo "<td align='center'>".$row["sexo"]."</td>";
			echo "<td align='center'>".$row["fecha"]."</td>";
			
			echo '<td align="center">
			<a class="fancybox fancybox.iframe" href="../registro_us/fancyBoxModificar.php?id='.$row["id"].'&folio='.$row["folio"].'&nombre='.$row["nombre"].'&apellido='.$row["apellido"].'&direccion='.$row["direccion"].'&telefono='.$row["telefono"].'
			&email='.$row["email"].' &user='.$row["user"].'&cargo='.$row["cargo"].'&pas='.$row["pas"].' &sexo='.$row["sexo"].' &fecha='.$row["fecha"].' " >Editar</a></td>';
			echo "<td><a href='../control/controlador_us.php?eliminar=si&codigo=".$row["id"]."'>Eliminar</a></td></tr>";
			$i++; 
			}			
			}
			echo "</tbody></table>";
		}

	}
	
?>
