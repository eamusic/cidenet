<?php 
$loc_co = setlocale(LC_ALL, 'co_CO'); ?>
<!doctype html>
<html lang="ES-CO">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Edwin A. Andrade">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Prueba Cidenet</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .re-mark-red {
        color: red;
      }

      .re-mark-black {
        color: black;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><img src="img/logo_vertical.jpg" width="100px" height="auto"></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <p class="pull-center w-100" aria-label="Search" style="color: white;">ADMINISTRACIÓN DE EMPLEADOS</p>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#"></a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="file"></span>
              Consultar
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="registrar.php">
              <span data-feather="user-plus"></span>
              Registrar
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Listado de Empleados</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <span data-feather="calendar"></span>
            Ordenar por
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" id="opciones">
            <li class="dropdown-item" value="ID">ID</li>
            <li class="dropdown-item" value="prinom">Primer Nombre</li>
            <li class="dropdown-item" value="otronom">Otros Nombres</li>
            <li class="dropdown-item" value="primapel">Primer Apellido</li>
            <li class="dropdown-item" value="secuapel">Segundo Apellido</li>
            <li class="dropdown-item" value="tipoid">Tipo Identificación</li>
            <li class="dropdown-item" value="nroid">Nro. Identificación</li>
            <li class="dropdown-item" value="paisempleo">País</li>
            <li class="dropdown-item" value="email">Email</li>

          </ul> -->
          <select id="orden" name="orden">
            <span data-feather="calendar"></span>
            <option selected>Ordenar por</option>
            <option value="ID">ID</option>
            <option value="prinom">Primer Nombre</option>
            <option value="otronom">Otros Nombres</option>
            <option value="primapel">Primer Apellido</option>
            <option value="secuapel">Segundo Apellido</option>
            <option value="tipoid">Tipo Identificación</option>
            <option value="nroid">Nro. Identificación</option>
            <option value="paisempleo">País</option>
            <option value="email">Email</option>
          </select>
        </div>
      </div>

      <div id="response"></div>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" id="ID">ID</th>
              <th scope="col" id="prinom">1er Nombre</th>
              <th scope="col" id="otronom">Otros Nombres</th>
              <th scope="col" id="primapel">1er Apellido</th>
              <th scope="col" id="secuapel">2do Apellido</th>
              <th scope="col" id="tipoid">Tipo Id.</th>
              <th scope="col" id="nroid">Nro. Id.</th>
              <th scope="col" id="paisempleo">País</th>
              <th scope="col" id="email">Correo</th>
              <th scope="col">Área</th>
              <th scope="col">Fecha Ing.</th>
              <th scope="col">Est.</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody id="ordenPor">
            <?php
            require('inc/conexion.php');
            $select_query = "SELECT * FROM empleados  ORDER BY primapel";
            $result = mysqli_query($mysqli_link, $select_query);
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

              echo "<tr>";
              echo "<td>".$row['ID']."</td>";
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
          </tbody>
        </table>
      </div>
      <!-- Button trigger modal -->
      <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
      </button> -->

      <!-- Modal -->
      <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edición de Registro</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <?php include('inc/formEdit.php'); ?>
              <!-- <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
              </form> -->
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Script necesarios -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
    <script src="js/feather.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script> -->
    <script src="dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  </div>
</div>


    

    <script>
      var editModal = document.getElementById('editModal')
      editModal.addEventListener('show.bs.modal', function (event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var ID = button.getAttribute('data-bs-ID')
        var primapel = button.getAttribute('data-bs-primapel')
        var secuapel = button.getAttribute('data-bs-secuapel')
        var prinom = button.getAttribute('data-bs-prinom')
        var otronom = button.getAttribute('data-bs-otronom')
        var paisempleo = button.getAttribute('data-bs-paisempleo')
        var tipoid = button.getAttribute('data-bs-tipoid')
        var nroid = button.getAttribute('data-bs-nroid')
        var email = button.getAttribute('data-bs-email')
        var area = button.getAttribute('data-bs-area')
        var fechaini = button.getAttribute('data-bs-fechaini')
        var fechareg = button.getAttribute('data-bs-fechareg')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = editModal.querySelector('.modal-title')
        var modalBodyInputID = editModal.querySelector('.modal-body input#ID')
        var modalBodyInputPrimapel = editModal.querySelector('.modal-body input#primapel')
        var modalBodyInputSecuApel = editModal.querySelector('.modal-body input#secuapel')
        var modalBodyInputPriNom = editModal.querySelector('.modal-body input#prinom')
        var modalBodyInputOtroNom = editModal.querySelector('.modal-body input#otronom')
        var modalBodySelectPaisEmpleo = editModal.querySelector('.modal-body select#paisempleo')
        var modalBodySelectTipoId = editModal.querySelector('.modal-body select#tipoid')
        var modalBodyInputNroId = editModal.querySelector('.modal-body input#nroid')
        var modalBodyInputEmail = editModal.querySelector('.modal-body input#email')
        var modalBodySelectArea = editModal.querySelector('.modal-body select#area')
        var modalBodyInputFechaIni = editModal.querySelector('.modal-body input#fechaini')
        var modalBodyInputFechaReg = editModal.querySelector('.modal-body input#fechareg')
        var modalBodyInputFechaIniNew = fechaini.split(" ")[0].split("-").reverse().join("-");

        modalTitle.textContent = 'Editando datos de ' + prinom + ' ' + primapel 
        modalBodyInputID.value = ID
        modalBodyInputPrimapel.value = primapel
        modalBodyInputSecuApel.value = secuapel
        modalBodyInputPriNom.value = prinom
        modalBodyInputOtroNom.value = otronom
        modalBodySelectPaisEmpleo.value = paisempleo
        modalBodySelectTipoId.value = tipoid
        modalBodyInputNroId.value = nroid
        modalBodyInputEmail.value = email
        modalBodySelectArea.value = area
        modalBodyInputFechaIni.value = fechaini
        modalBodyInputFechaReg.value = fechareg
      })
    </script>
    <script>
      $(document).ready(function(){

        $('.btn-primary').click(function(event){
          event.preventDefault();
          let $valorBtn = $(this).val();
          var param = {
            "ID" : $(this).val()
          };
          var confirma = confirm('¿Está seguro de que desea eliminar el empleado?. ID: ' + $valorBtn);
          if (confirma) {

            $.ajax({
                        type: "POST",
                        url: "borrar.php",
                        data: param,
                        success: function(response) {
                            $('#response').empty();
                            $('#response').append(response).fadeIn("slow");
                        }
                    });
          }
        });
        $('.btn-warning').click(function () {
          let $valorBtn = $(this).val();
          $("#editModal").modal('show');
          var param = {
            "ID" : $(this).val()
          };
          $.ajax({
                      type: "POST",
                      url: "editar.php",
                      data: param,
                      success: function(response) {
                          $('#response').empty();
                          $('#response').append(response).fadeIn("slow");
                      }
                  });
        })
        $("#orden").on('change', function () {
          // $(".dropdown-item").on('change', function () {
            // let $opcion = $(this).val();
            let $reMark = "alert alert-warning role='alert'";
            // let $encFila = document.getElementById('ID') 
            let param = {
              "order" : $(this).val()
            }

            $.ajax({
                    type: "POST",
                    url: "ordenar.php",
                    data: param,
                    success: function (response) {
                      $('#ordenPor').empty();
                      $('#ordenPor').append(response).fadeIn("slow");
                    }
            })
            // console.log($opcion);
          // })
            // alert('Filtrar resultados por: ' $opcion);
        })
      });
    </script>
    
  </body>
</html>