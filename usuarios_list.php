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

<!-- Content Row -->
<div class="row">
    <!-- DataTales Example -->
    <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="table-responsive">
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary mr-3">Tabla de Usuarios</h6>
                <a href="usuarios_new.php" class="btn btn-primary btn-sm ml-3">Añadir</a>
            </div>
        </div>
    </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th>Nombre de Usuario</th>
                    <th>Teléfono</th>
                    <th>Código Postal</th>
                    <th>Fecha de Creación</th>
                    <th>Fecha de Modificación</th>
                    <th>Último Acceso</th>
                    <th>Estado</th>
                    <th>Preferencias</th>
                    <th>Cortes de Pelo</th>
                    <th>Cortes de Barba</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                    <?php
// Realiza la consulta
$result = $mysqli->query("SELECT * FROM usuarios");

if ($result->num_rows > 0) {
    // Imprime los datos de cada fila
    while($row = $result->fetch_assoc()) {
        echo "<tr id='fila-{$row['id']}'>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['nombre']}</td>";
        echo "<td>{$row['apellido']}</td>";
        echo "<td>{$row['correo_electronico']}</td>";
        echo "<td>{$row['nombre_usuario']}</td>";
        echo "<td>{$row['telefono']}</td>";
        echo "<td>{$row['codigo_postal']}</td>";
        echo "<td>{$row['fecha_creacion']}</td>";
        echo "<td>{$row['fecha_modificacion']}</td>";
        echo "<td>{$row['ultimo_acceso']}</td>";
        echo "<td>{$row['estado']}</td>";
        echo "<td>{$row['preferencias']}</td>";
        echo "<td>{$row['cortes_pelo']}</td>";
        echo "<td>{$row['cortes_barba']}</td>";
        echo "<td>{$row['rol']}</td>";
        echo "<td>";
        // Icono de editar
        echo "<a href='usuarios_edit.php?id={$row['id']}'><i class='fas fa-edit'></i></a> ";
        // Icono de borrar
        echo "<a href='#' class='borrar borrar-usuario' data-id='{$row['id']}'><i class='fas fa-trash'></i></a>";
        echo "</td></tr>";
    }
} else {
    echo "No se encontraron usuarios.";
}
?>

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Content Row -->

<?php include 'footer.php' ?>

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<?php include 'scroll_button.php' ?>

<?php include 'logout_modal.php' ?>

<?php include 'scripts.php' ?>

<script src="borrar.js"></script>

</body>

</html>
