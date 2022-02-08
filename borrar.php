<?php 
include('inc/conexion.php');
// BORRAR REGISTROS //
	$id = $_POST["ID"];

    $sql = "DELETE FROM empleados WHERE ID =".$id;

    if($mysqli_link->query($sql) === TRUE){
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>";
      echo "<strong>¡Dato Borrado Exitósamente!</strong> Registro eliminado";
      echo "<span class='text-right'><small> para actualizar cierre este mensaje</small></span>";
      echo "<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close' onclick='location.reload()'></button>";
      echo "</div>";
      echo "";
    } else{
      echo "Error deleting record: " . $mysqli_link->error;
    }
    // FIN BORRAR REGISTROS //




 ?>