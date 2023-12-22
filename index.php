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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tabla de Familias</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Exportar en PDF</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Exportar en Excel</a>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Exportar en CSV</a>
                    </div>

<!-- Content Row -->
<div class="row">
    <!-- DataTales Example -->
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Familias</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Familia</th>
                        <th>Fecha de Creación</th>
                        <th>Fecha de Actualización</th>
                        <th>Acciones</th>
                    </tr>
                    <?php
                    // Realiza la consulta
                    $result = $mysqli->query("SELECT * FROM familias");

                    if ($result->num_rows > 0) {
                        // Imprime los datos de cada fila
                        while($row = $result->fetch_assoc()) {
                            echo "<tr id='fila{$row['id']}'><td>{$row['id']}</td><td>{$row['familia']}</td><td>{$row['created_at']}</td><td>{$row['updated_at']}</td>";
                            echo "<td>";
                            // Icono de editar
                            echo "<a href='familias_edit.php?id={$row['id']}'><i class='fas fa-edit'></i></a> ";
                            // Icono de borrar
                            echo "<a href='#?id={$row['id']}' id='borrar{$row['id']}'><i class='fas fa-trash'></i></a>";
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

<script>
$(document).ready(function() {
    $('[id^=borrar]').click(function() {
        var id = $(this).attr('id').replace('borrar', '');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "GET",  
                    dataType:"html",
                    url: "familias_delete.php",
                    data: {id: id}, 
                    success: function(data){  
                        if(data==1){
                            $("#fila" + id).fadeOut();        
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert("Status: " + textStatus); alert("Error: " + errorThrown); 
                    }       
                });
            }
        })
    });
});
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
