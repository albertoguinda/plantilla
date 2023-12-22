<?php 
include 'db.php';
include 'head.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Realiza la consulta
    $result = $mysqli->query("SELECT * FROM alumnos WHERE id = $id");

    if ($result->num_rows > 0) {
        // Obtiene los datos del registro
        $row = $result->fetch_assoc();

        // Ahora puedes usar $row['columna'] para obtener el valor de cada columna para este registro
        // y usar estos valores para llenar los campos del formulario.
        $id_familias = $row['id_familias'];
        $id_ciclos = $row['id_ciclos'];
        $nombre = $row['nombre'];
        $apellidos = $row['apellidos'];
        $edad = $row['edad'];
        $sexo = $row['sexo'];
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
                    <h5 class="mb-0">Editar Alumno</h5>
                </div>
                <div class="card-body p-4">
                    <form id="form1" method="post" action="alumnos_insert.php" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">       

                        <div class="row mb-3">
                            <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce Nombre" value="<?php echo $nombre;?>" autocomplete="new-text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="apellidos" class="col-sm-3 col-form-label">Apellidos</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Introduce Apellidos" value="<?php echo $apellidos;?>" autocomplete="new-text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="edad" class="col-sm-3 col-form-label">Edad</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="edad" name="edad" placeholder="Introduce Edad" value="<?php echo $edad;?>" autocomplete="new-text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="sexo" class="col-sm-3 col-form-label">Sexo</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Introduce Sexo" value="<?php echo $sexo;?>" autocomplete="new-text">
                            </div>
                        </div>

                        <!-- Add your submit button here -->
                        <div class="row mb-3">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <a href="alumnos_list.php" class="btn btn-light px-4">Volver</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

<script>
/*    PARA EL BOTON VER CONTRASEÑA (cambia text x password)
 var togglePassword = document.querySelector('#togglePassword');
    var password = document.querySelector('#pass');
    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    });

    var togglePassword2 = document.querySelector('#togglePassword2');
    var password2 = document.querySelector('#pass2');
    togglePassword2.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
        password2.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    }); */
</script>

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
