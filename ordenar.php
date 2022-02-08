<?php 
// echo $_POST['order'];

require('inc/conexion.php');
 switch ($_POST['order']) {
 	case 'ID':
		$reMark_ID = "alert alert-danger";
 		break;
 	case 'prinom':
 		# code...
 		break;
 	
 	default:
 		$reMark_ID = "";
 		break;
 }


$select_query = "SELECT * FROM empleados  ORDER BY ".$_POST['order'];
$result = mysqli_query($mysqli_link, $select_query);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

  echo "<tr>";
  echo "<td class='".$reMark_ID."'>".$row['ID']."</td>";
  echo "<td>".$row['prinom']."</td>";
  echo "<td>".$row['otronom']."</td>";
  echo "<td>".$row['primapel']."</td>";
  echo "<td>".$row['secuapel']."</td>";
  echo "<td>".$row['tipoid']."</td>";
  echo "<td>".$row['nroid']."</td>";
  echo "<td>".$row['paisempleo']."</td>";
  echo "<td><small>".$row['email']."</small></td>";
  echo "<td>".$row['area']."</td>";
  echo "<td>".$row['fechaini']."</td>";
  echo "<td><input class='form-check-input' type='checkbox' id='estado' checked='true' disabled='true'></td>";
  echo "<td>
          <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#editModal' data-bs-ID='".$row['ID']."' data-bs-primapel='".$row['primapel']."' data-bs-secuapel='".$row['secuapel']."' data-bs-prinom='".$row['prinom']."' data-bs-otronom='".$row['otronom']."' data-bs-paisempleo='".$row['paisempleo']."' data-bs-tipoid='".$row['tipoid']."' data-bs-nroid='".$row['nroid']."' data-bs-email='".$row['email']."' data-bs-area='".$row['area']."' data-bs-fechaini='".$row['fechaini']."' data-bs-fechareg='".$row['fechareg']."'><span data-feather='edit'></span></button>
          <button id='btnBorrar' value='".$row['ID']."' type='button' class='btn btn-primary' title='Borrar Registro'".$row['ID']."'><span data-feather='delete'></span>
          </button>
        </td>";
  echo "</tr>";
}
// cerrar la conexión a la base de datos
mysqli_close($mysqli_link);
?>