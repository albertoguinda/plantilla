<?php 
include 'db.php';
include 'head.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Realiza la consulta
    $result = $mysqli->query("SELECT * FROM ciclos WHERE id = $id");

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
                    <h5 class="mb-0">Editar ciclo</h5>
                </div>
                <div class="card-body p-4">
                    <form id="form1" method="post" action="ciclos_insert.php" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                        <?php
                            $id_familias="";
                            $ciclo="";
                        ?>
                        <input type="hidden" name="id" id="id" value="<?php echo $id;?>">       
                        <div class="row mb-3">
                            <label for="id_familias" class="col-sm-3 col-form-label">ID Familias</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="id_familias" name="id_familias" placeholder="Introduce ID Familias" value="<?php echo $row['id_familias'];?>" autocomplete="new-text">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ciclo" class="col-sm-3 col-form-label">Ciclo</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="Introduce Ciclo" value="<?php echo $row['ciclo'];?>" autocomplete="new-text">
                            </div>
                        </div>

                        <!-- Add your submit button here -->
                        <div class="row mb-3">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="ciclos_list.php" class="btn btn-light px-4">Volver</a>
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
