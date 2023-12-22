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
                <h3 class="mb-0">Agregar nuevo usuario</h3>
              </div>
                <div class="card-body p-4">
                  <form id="form1" method="post" action="usuarios_insert.php" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                  <?php
                    $nombre = "";
                    $apellido = "";
                    $correo_electronico = "";
                    $nombre_usuario = "";
                    $contraseña = "";
                    $telefono = "";
                    $codigo_postal = "";
                    $estado = "";
                    $preferencias = "";
                    $cortes_pelo = "";
                    $cortes_barba = "";
                    $rol = "";
                  ?>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">       
                  <div class="row mb-3">
                    <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introduce nombre" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="apellido" class="col-sm-3 col-form-label">Apellido</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Introduce apellido" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="correo_electronico" class="col-sm-3 col-form-label">Correo Electrónico</label>
                    <div class="col-sm-5">
                      <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Introduce correo electrónico" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="nombre_usuario" class="col-sm-3 col-form-label">Nombre de Usuario</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" placeholder="Introduce nombre de usuario" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="contraseña" class="col-sm-3 col-form-label">Contraseña</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Introduce contraseña" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="telefono" class="col-sm-3 col-form-label">Teléfono</label>
                    <div class="col-sm-5">
                      <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Introduce teléfono" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="codigo_postal" class="col-sm-3 col-form-label">Código Postal</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Introduce código postal" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="estado" class="col-sm-3 col-form-label">Estado</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="estado" name="estado" placeholder="Introduce estado" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="preferencias" class="col-sm-3 col-form-label">Preferencias</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="preferencias" name="preferencias" placeholder="Introduce preferencias" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="cortes_pelo" class="col-sm-3 col-form-label">Cortes de Pelo</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="cortes_pelo" name="cortes_pelo" placeholder="Introduce cortes de pelo" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="cortes_barba" class="col-sm-3 col-form-label">Cortes de Barba</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="cortes_barba" name="cortes_barba" placeholder="Introduce cortes de barba" value=""   autocomplete="new-text">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="rol" class="col-sm-3 col-form-label">Rol</label>
                    <div class="col-sm-3">
                      <select class="form-control" id="rol" name="rol">
                        <option value="">Selecciona un rol</option>
                        <option value="administrador">Administrador</option>
                        <option value="usuario">Usuario</option>
                      </select>
                    </div>
                  </div>

                  <div class="row">
                    <label class="col-sm-3 col-form-label"></label>
                    <div class="col-sm-9">
                      <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-primary px-4" name="submit2">Crear</button>
                        <a href="usuarios_list.php" class="btn btn-light px-4">Volver</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </main>
        </div>
      </div>
<script>
      console.log(jQuery.fn.jquery);
      console.log(jQuery.validator); // undefined

    // Controlador de eventos de clic para el botón "Volver"
    $("#volver").click(function() {
        window.location.href = 'usuarios_list.php';
    });

     // VALIDAR NIF

     jQuery.validator.addMethod( "nifES", function ( value, element ) {
      "use strict";

      value = value.toUpperCase();

      if ( !value.match('((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)') ) {
        return false;
      }

      if ( /^[0-9]{8}[A-Z]{1}$/.test( value ) ) {
        return ( "TRWAGMYFPDXBNJZSQVHLCKE".charAt( value.substring( 8, 0 ) % 23 ) === value.charAt( 8 ) );
      }

      if ( /^[KLM]{1}/.test( value ) ) {
        return ( value[ 8 ] === String.fromCharCode( 64 ) );
      }

      return false;

      }, "Por favor, introduce un NIF válido." );


// VALIDAR NIE
      jQuery.validator.addMethod( "nieES", function ( value, element ) {
      "use strict";

      value = value.toUpperCase();

      if ( !value.match('((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)') ) {
        return false;
      }

      if ( /^[T]{1}/.test( value ) ) {
        return ( value[ 8 ] === /^[T]{1}[A-Z0-9]{8}$/.test( value ) );
      }

      if ( /^[XYZ]{1}/.test( value ) ) {
        return ( 
        value[ 8 ] === "TRWAGMYFPDXBNJZSQVHLCKE".charAt( 
          value.replace( 'X', '0' )
          .replace( 'Y', '1' )
          .replace( 'Z', '2' )
          .substring( 0, 8 ) % 23 
        ) 
        );
      }

      return false;

      }, "Por favor, introduce un NIE válido." );


// VALIDAR CIF
      jQuery.validator.addMethod( "cifES", function ( value, element ) {
      "use strict";
      
      var sum,
        num = [],
        controlDigit;
      
      value = value.toUpperCase();
      
      if ( !value.match( '((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)' ) ) {
        return false;
      }
      
      for ( var i = 0; i < 9; i++ ) {
        num[ i ] = parseInt( value.charAt( i ), 10 );
      }
      
      sum = num[ 2 ] + num[ 4 ] + num[ 6 ];
      for ( var count = 1; count < 8; count += 2 ) {
        var tmp = ( 2 * num[ count ] ).toString(),
        secondDigit = tmp.charAt( 1 );
        
        sum += parseInt( tmp.charAt( 0 ), 10 ) + ( secondDigit === '' ? 0 : parseInt( secondDigit, 10 ) );
      }
      
      if ( /^[ABCDEFGHJNPQRSUVW]{1}/.test( value ) ) {
        sum += '';
        controlDigit = 10 - parseInt( sum.charAt( sum.length - 1 ), 10 );
        value += controlDigit;
        return ( num[ 8 ].toString() === String.fromCharCode( 64 + controlDigit ) || num[ 8 ].toString() === value.charAt( value.length - 1 ) );
      }
      
      return false;
      
      }, "Por favor, introduce un CIF válido." );

// VALIDAR CONTRASEÑA
  jQuery.validator.addMethod("passwordCheck", function(value, element) {
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[_=-]).{8,15}$/g.test(value);
  }, "La contraseña debe tener de 8 a 15 caracteres alfanuméricos, contener al menos un dígito, una letra mayúscula y uno de los siguientes caracteres: _-= ");

// VALIDAR QUE LAS CONTRASEÑAS COINCIDAN
  jQuery.validator.addMethod("passwordMatch", function(value, element) {
    return $('#pass').val() === value;
  }, "Las contraseñas no coinciden");

    $(document).ready(function() {
      $('#form1').validate({
        rules: {
          nombre: {
            required: true
          },
          apellido: {
            required: true
          },
          // Añade aquí el resto de los campos de la tabla usuarios
          nif: {
            required: true,
            nifES: true
          },
          nie: {
            required: true,
            nieES: true
          },
          cif: {
            required: true,
            cifES: true
          },
          nifNieCif: {
            required: true,
            nifNieCifES: true
          },
          pass: {
            required: true,
            passwordCheck: true
          },
          pass2: {
            required: true,
            passwordCheck: true,
            passwordMatch: true
          }
        },
        messages: {
          nombre: {
            required: "Introduce nombre"
          },
          apellido: {
            required: "Introduce apellido"
          },
          // Añade aquí el resto de los campos de la tabla usuarios
          nif: {
            required: "Introduce nif"
          },
          nie: {
            required: "Introduce nie"
          },
          cif: {
            required: "Introduce cif"
          },
          nifNieCif: {
            required: "Introduce NIF, NIE ó CIF"
          },
          pass: {
            required: "Introduce contraseña"
          },
          pass2: {
            required: "Confirma tu contraseña",
            passwordMatch: "Las contraseñas no coinciden"
          }
        }
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
