$(".borrar").click(function (e) {
  e.preventDefault();
  var id = $(this).data("id");
  var confirmacion = confirm(
    "¿Estás seguro de que quieres borrar este registro?"
  );

  var url;
  if ($(this).hasClass("borrar-alumno")) {
    url = "alumnos_deleteAjax.php";
  } else if ($(this).hasClass("borrar-familia")) {
    url = "familias_deleteAjax.php";
  } else if ($(this).hasClass("borrar-ciclo")) {
    url = "ciclos_deleteAjax.php";
  }

  if (confirmacion) {
    $.ajax({
      url: url,
      type: "POST",
      data: { id: id },
      success: function (result) {
        if (result == "success") {
          alert("Registro borrado con éxito");
          $("#fila-" + id).remove();
        } else {
          alert("Hubo un error al borrar el registro");
        }
      },
    });
  }
});
