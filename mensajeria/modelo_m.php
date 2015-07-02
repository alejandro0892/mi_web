
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
		function eliminar($pk){
			$queryDelete = "delete from comentario where id = ".$pk;
			$delete =mysqli_query($this->conn, $queryDelete);
			if($delete){						
				echo "<script>
						alert('Eliminacion exitosa');
						location.href='mensajeria.php';
				</script>";				
			}else{
				echo "<script>
						alert('Error Al Eliminar');
						location.href='mensajeria.php';
				</script>";	
				}
		}
		//---------------------------------------------------------------------------------------------------------------------------
		function listar(){
			$sql="select * from  comentario";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "No hay clientes registrados";	
			}else{
			 echo "<table border='0' align='center' class='table_' >";
			 echo "<thead>
					<th>Folio</th>
					<th>Nombre</th>
                     <th>Fecha</th>					
					<th>Comentarios</th>
					<th>Eliminar</th>
					
				</thead>";
			 while ($row = mysqli_fetch_array($rs)) {

			    echo "<td align='center'>".$row["folio"]."</td>";		
          	    echo "<td align='center'>".$row["nombre"]."</td>";	
			    echo "<td align='center'>".$row["fecha"]."</td>";						
			    echo "<td align='center'>".$row["comentario"]."</td>";	
						
		      echo "<td><a href='controlador.php?eliminar=si&codigo=".$row["id"]."'>Eliminar</a></td></tr>";
			    $i++; 
			
             }			
			}
			echo "</table>";
		}

		//--------------------------------------------------------------------------------------------------------------		
		function buscar($dato){
			$sql="select * 
			from  comentario
			where  fecha like '%".$dato."%'";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "La busqueda no obtuvo resultados.";	
			}else{
			echo "<table border='0' align='center' class='table_' ><thead>
					<th>Folio</th>
					<th>Nombre</th>
					<th>Fecha</th>
					<th>Comentarios</th>
					<th>Eliminar</th>
			
	
				
					
				</thead><tbody>";
			 while ($row = mysqli_fetch_array($rs)){	 								
			echo "<tr><td align='center'>".$row["folio"]."</td>";
			echo "<td align='center'>".$row["nombre"]."</td>";
			echo "<td align='center'>".$row["fecha"]."</td>";
			echo "<td align='center'>".$row["comentario"]."</td>";
			
			echo "<td><a href='controlador.php?eliminar=si&codigo=".$row["id"]."'>Eliminar</a></td></tr>";
			
			$i++; 
			}			
			}
			echo "</tbody></table>";
		}

	}
	
?>
