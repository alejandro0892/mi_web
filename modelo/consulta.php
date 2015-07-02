
<?php 

	require "../conexion/conexion.php";
	class consulta{
		var $conn;
		var $conexion;
		function consulta(){		
			$this->conexion= new  Conexion();				
			$this->conn=$this->conexion->conectarse();
		}			
		//-----------------------------------------------------------------------------------------------------------------------
		function reportePdfUsuarios(){			
			$html="";
			$sql="select * from ot order by id";
			$rs=mysqli_query($this->conn,$sql);
			$i=0;
			
			     $html=$html.'<div align="center"><table   width="670" border="0">
		      <tr>
        	    <td width="470" ><br><h1>Reporte de usuarios registrados en la Base de Datos. Lista de O_T registrado.</h1></td>
        	    <td width="160"  ><img src="../img/pdf.png" align="center" width="200" height="100" /></td>
       	       </tr>
		      </table>
		
			<div align="center"><table border="0.5" bordercolor="#0000CC" bordercolordark="#FF0000">';	
			$html=$html.'<tr bgcolor="#FF0000">
			<td><font color="#FFFFFF">Folio</font></td>
			<td><font color="#FFFFFF">Nombre</font></td>
			<td><font color="#FFFFFF">Apellidos</font></td>
			<td><font color="#FFFFFF">Modelo</font></td>
			<td><font color="#FFFFFF">Serie</font></td>
			<td><font color="#FFFFFF">Descripcion</font></td>
			<td><font color="#FFFFFF">Fallas</font></td>
			<td><font color="#FFFFFF">Resultado</font></td>
			<td><font color="#FFFFFF">Estatus</font></td>
			<td><font color="#FFFFFF">Fecha_Reg</font></td>
			<td><font color="#FFFFFF">Fecha_En</font></td></tr>';
			while ($row = mysqli_fetch_array($rs)){
				if($i%2==0){
					$html=  $html.'<tr bgcolor="#95B1CE">';
				}else{
					$html=$html.'<tr>';
				}
				$html = $html.'<td>';				
				$html = $html. $row["folio"];
				$html = $html.'</td><td>';
				$html = $html. $row["nombre"];
				$html = $html.'</td><td>';
				$html = $html. $row["apellido"];
				$html = $html.'</td><td>';
				$html = $html. $row["modelo"];
				$html = $html.'</td><td>';
				$html = $html. $row["serie"];
				$html = $html.'</td><td>';
				$html = $html. $row["des"];
				$html = $html.'</td><td>';
				$html = $html. $row["fallas"];
				$html = $html.'</td><td>';
				$html = $html. $row["resultado"];
				$html = $html.'</td><td>';
				$html = $html. $row["estatus"];
				$html = $html.'</td><td>';
				$html = $html. $row["fecha"];
				$html = $html.'</td><td>';
				$html = $html. $row["fechae"];
				$html = $html.'</td></tr>';	
			
				$i++;
			}			
			$html=$html.'</table></div>';			
     		 return ($html);
		}
		//-----------------------------------------------------------------------------------------------------------------------		
	}

?>

