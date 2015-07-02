
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
		function registrar($folio, $nombre, $apellido, $comentario){
			
			$queryRegistrar = "insert into comentario (folio, nombre, apellido, comentario) 
			values ('".$folio."', '".$nombre."', '".$apellido."','".$comentario."')";
			$registrar = mysqli_query($this->conn, $queryRegistrar) or die(mysqli_error());			
			
			if($registrar){
				echo "<script>location.href='index.php?mensaje=". $this->mensajeExito."';</script>";				
			}else{
				echo "<script>location.href='index.php?mensaje=".$this->mensajeError."';</script>";
			}
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
					<br>Folio</br>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>Modelo</th>
					<th>Serie</th>
					<th>Descripcion</th>
					<th>Fallas</th>
					<th>Resultado</th>
					<th>Estatus</th>
					<th>Fecha_Reg</th>
					<th>Fecha_Entr</th>					
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
			$i++; 
			}			
			}
			echo "</table>";
		}

		//--------------------------------------------------------------------------------------------------------------
		function buscar($dato){
			$sql="select * 
			from ot
			where folio like '%".$dato."%' OR nombre like '%".$dato."%' OR modelo like '%".$dato."%' OR serie like '%".$dato."%' ";
			$rs=mysqli_query($this->conn, $sql);
			$i=0;
			if(mysqli_num_rows($rs)<1){
				echo "La busqueda no obtuvo resultados.";	
			}else{
			echo "<table border='1' align='center' class='table_' ><thead>
					<th>Folio</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Modelo</th>
					<th>Serie</th>
					<th>descripcion</th>
					<th>Fallas</th>
					<th>Resultado</th>
					<th>Estatus</th>
					<th>Fecha_Reg</th>
					<th>Fecha_Entr</th>
					<th>Comentario</th>
				</thead><tbody>";
			 while ($row = mysqli_fetch_array($rs)){	 								
			echo "<tr><td align='center'>".$row["folio"]."</td>";
			echo "<td align='center'>".$row["nombre"]."</td>";
			echo "<td align='center'>".$row["apellido"]."</td>";
			echo "<td align='center'>".$row["modelo"]."</td>";
			echo "<td align='center'>".$row["serie"]."</td>";
			echo "<td align='center'>".$row["des"]."</td>";
			echo "<td align='center'>".$row["fallas"]."</td>";
			echo "<td align='center'>".$row["resultado"]."</td>";
			echo "<td align='center'>".$row["estatus"]."</td>";
			echo "<td align='center'>".$row["fechae"]."</td>";
			echo "<td align='center'>".$row["fecha"]."</td>";
			
            
			echo '<td align="center">
			<a class="fancybox fancybox.iframe" href="index.php?id='.$row["id"].'&folio='.$row["folio"].'&nombre='.$row["nombre"].'&apellido='.$row["apellido"].'&telefono='.$row["telefono"].' " >Comentario</a></td>';
			
		
			$i++; 
			}			
			}
			echo "</tbody></table>";
		}

	}
	
?>
