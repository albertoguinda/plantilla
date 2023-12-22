<?php 
include 'db.php';
include 'head.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Realiza la consulta
    $result = $mysqli->query("SELECT * FROM usuarios WHERE id = $id");

    if ($result->num_rows > 0) {
        // Obtiene los datos del registro
        $row = $result->fetch_assoc();

        // Ahora puedes usar $row['columna'] para obtener el valor de cada columna para este registro
        // y usar estos valores para llenar los campos del formulario.
    } else {
        echo "No se encontró el registro.";
    }
} else {
    echo "No se proporcionó un ID válido.";
}
?>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

<?php include 'sidebar.php';?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

<?php include 'topbar.php';?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="mb-0">Editar usuario</h5>
                </div>
                <div class="card-body p-4">
                    <form id="form1" method="post" action="usuarios_update.php" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                        <?php
                            $nombre = $row['nombre'];
                            $apellido = $row['apellido'];
                            $correo_electronico = $row['correo_electronico'];
                            $nombre_usuario = $row['nombre_usuario'];
                            $contraseña = $row['contraseña'];
                            $telefono = $row['telefono'];
                            $codigo_postal = $row['codigo_postal'];
                            $estado = $row['estado'];
                            $preferencias = $row['preferencias'];
                            $cortes_pelo = $row['cortes_pelo'];
                            $cortes_barba = $row['cortes_barba'];
                            $rol = $row['rol'];
                        ?>
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">       
                        <div class="row mb-3">
                            <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce nombre" value="<?php echo $nombre;?>" autocomplete="new-text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellido" class="col-sm-3 col-form-label">Apellido</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Introduce apellido" value="<?php echo $apellido;?>" autocomplete="new-text">
                            </div>
                        </div>
                        <!-- Añade aquí el resto de los campos del formulario -->

                        <!-- Add your submit button here -->
                        <div class="row mb-3">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="usuarios_list.php" class="btn btn-light px-4">Volver</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
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
