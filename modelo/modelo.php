
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
		//---------------------------------------------------------------------------------------------------------------------------
		function listar(){
			$sql="select * from  ot";
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
					<th>Telefono</th>
				
					<th>Modelo</th>
					<th>Serie</th>
					<th>Descripcion</th>
					<th>Fallas</th>
					<th>Resultado</th>
					<th>Estatus</th>
					<th>Fecha_Entr</th>
					<th>Fecha_Reg</th>					
					<th>Modificar</th>
					<th>Eliminar</th>
				</thead>";
			 while ($row = mysqli_fetch_array($rs)){	 								
			echo "<td align='center'>".$row["folio"]."</td>";
			echo "<td align='center'>".$row["nombre"]."</td>";	
			echo "<td align='center'>".$row["apellido"]."</td>";
			echo "<td align='center'>".$row["telefono"]."</td>";			
		
            echo "<td align='center'>".$row["modelo"]."</td>";
            echo "<td align='center'>".$row["serie"]."</td>";	
            echo "<td align='center'>".$row["des"]."</td>";	
            echo "<td align='center'>".$row["fallas"]."</td>";	
            echo "<td align='center'>".$row["resultado"]."</td>";
            echo "<td align='center'>".$row["estatus"]."</td>";	
            echo "<td align='center'>".$row["fechae"]."</td>";				
		    echo "<td align='center'>".$row["fecha"]."</td>";
						
			echo '<td align="center">
			<a class="fancybox fancybox.iframe" href="../vista/fancyBoxModificar.php? id='.$row["id"].' &folio='.$row["folio"].'&nombre='.$row["nombre"].'&apellido='.$row["apellido"].'&telefono='.$row["telefono"].'&modelo='.$row["modelo"].'&serie='.$row["serie"].' &des='.$row["des"].'&fallas='.$row["fallas"].'&resultado='.$row["resultado"].' &estatus='.$row["estatus"].'  &fechae='.$row["fechae"].' &fecha='.$row["fecha"].'" >Editar</a></td>';
			echo "<td><a href='../control/controlador.php? eliminar=si&codigo=".$row["id"]."'>Eliminar</a></td></tr>";
			$i++; 
			}			
			}
			echo "</table>";
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function modificarUsuario($folio, $nombre, $apellido, $telefono,  $modelo, $serie, $des, $fallas, $fechae, $fecha, $id){
			$queryUpdate = "update ot set folio = '".$folio."', nombre = '".$nombre."', apellido = '".$apellido."', telefono = '".$telefono."',  modelo = '".$modelo."',serie = '".$serie."', des = '".$des."', fallas = '".$fallas."',   fechae = '".$fechae."', fecha = '".$fecha."' where id = ".$id;
			$update =mysqli_query($this->conn, $queryUpdate);
			if($update){
				echo "Actualizacion Exitosa";
			}else{
				echo "Error Al Actualizar";
				}
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function eliminar($pk){
			$queryDelete = "delete from ot where id = ".$pk;
			$delete =mysqli_query($this->conn, $queryDelete);
			if($delete){						
				echo "<script>
						alert('Eliminacion exitosa');
						location.href='../vista/modificarInformacion.php';
				</script>";				
			}else{
				echo "<script>
						alert('Error Al Eliminar');
						location.href='../vista/modificarInformacion.php';
				</script>";	
				}
		}
		//--------------------------------------------------------------------------------------------------------------
		function buscar($dato){
			$sql="select * 
			from ot
			where folio like '%".$dato."%' OR nombre like '%".$dato."%' OR apellido like '%".$dato."%' OR telefono like '%".$dato."%' 
			OR modelo like '%".$dato."%' OR serie like '%".$dato."%' OR des like '%".$dato."%' OR fallas like '%".$dato."%' OR resultado like '%".$dato."%' 
     		OR fecha like '%".$dato."%' OR fechae like '%".$dato."%'	";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "La busqueda no obtuvo resultados.";	
			}else{
			echo "<table border='0' align='center' class='table_' ><thead>
					<th>Folio</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>					
					<th>Modelo</th>
					<th>Serie</th>
					<th>descripcion</th>
					<th>Fallas</th>
					<th>Resultado</th>
					<th>Estatus</th>
					<th>Fecha_Entr</th>
					<th>Fecha_Reg</th>
					<th>Modificar</th>
					<th>Eliminar</th>
				</thead><tbody>";
			 while ($row = mysqli_fetch_array($rs)){	 								
			echo "<tr><td align='center'>".$row["folio"]."</td>";
			echo "<td align='center'>".$row["nombre"]."</td>";
			echo "<td align='center'>".$row["apellido"]."</td>";
			echo "<td align='center'>".$row["telefono"]."</td>";
			
			echo "<td align='center'>".$row["modelo"]."</td>";
			echo "<td align='center'>".$row["serie"]."</td>";
			echo "<td align='center'>".$row["des"]."</td>";
			echo "<td align='center'>".$row["fallas"]."</td>";
			echo "<td align='center'>".$row["resultado"]."</td>";
			echo "<td align='center'>".$row["estatus"]."</td>";
			echo "<td align='center'>".$row["fechae"]."</td>";
			echo "<td align='center'>".$row["fecha"]."</td>";
			
			echo '<td align="center">
			<a class="fancybox fancybox.iframe" href="../vista/fancyBoxModificar.php?id='.$row["id"].'&folio='.$row["folio"].'&nombre='.$row["nombre"].'&apellido='.$row["apellido"].'&telefono='.$row["telefono"].'
			&modelo='.$row["modelo"].' &serie='.$row["serie"].' &des='.$row["des"].'&fallas='.$row["fallas"].'&resultado='.$row["resultado"].'&estatus='.$row["estatus"].' &fechae='.$row["fechae"].' &fecha='.$row["fecha"].' " >Editar</a></td>';
			echo "<td><a href='../control/controlador.php?eliminar=si&codigo=".$row["id"]."'>Eliminar</a></td></tr>";
			$i++; 
			}			
			}
			echo "</tbody></table>";
		}

	}
	
?>
