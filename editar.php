<?php 
include('inc/conexion.php');
// EDITAR REGISTROS //
	$id = intval($_POST["ID"]);

  var_dump($id);
  $select_query = mysqli_query($mysqli_link, "SELECT * FROM empleados WHERE ID = ".$id);
  if(mysqli_num_rows($select_query)>0){
    while ($row = mysqli_fetch_array($select_query, MYSQLI_ASSOC)) {
      include('inc/formEdit.php');

    }
  } else {
    echo "Dato no encontrado";
  }

    mysqli_close($mysqli_link);

 ?>