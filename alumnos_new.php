<?php include 'db.php';?>
<?php include 'head.php';?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include 'sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

<?php include 'topbar.php';?>

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <div class="card">
                  <div class="card-header px-4 py-3">
                    <h3 class="mb-0">Agregar nuevo alumno</h3>
                  </div>
                  <div class="card-body p-4">
                    <form id="form1" method="post" action="alumnos_insert.php" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                        <?php
                          $id="";
                          $id_familias="";
                          $id_ciclos="";
                          $nombre="";
                          $apellidos="";
                          $edad="";
                          $sexo="";
                        ?>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">       
                      <div class="row mb-3">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce Nombre" value=""   autocomplete="new-text">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="apellidos" class="col-sm-3 col-form-label">Apellidos</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Introduce Apellidos" value=""   autocomplete="new-text">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="edad" class="col-sm-3 col-form-label">Edad</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="edad" name="edad" placeholder="Introduce Edad" value=""   autocomplete="new-text">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Introduce Sexo" value=""   autocomplete="new-text">
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                          <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4" name="submit2">Crear</button>
                            <a href="alumnos_list.php" class="btn btn-light px-4">Volver</a>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
    </main>
  </div>
</div>

<?php include 'footer.php' ?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include 'scroll_button.php' ?>

<?php include 'logout_modal.php' ?>

<?php include 'scripts.php' ?>

</body>

</html>
