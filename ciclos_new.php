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
                    <h3 class="mb-0">Agregar nuevo ciclo</h3>
                  </div>
                  <div class="card-body p-4">
                    <form id="form1" method="post" action="ciclos_insert.php" novalidate="novalidate" autocomplete="off" enctype="multipart/form-data">
                        <?php
                          $id="";
                          $id_familias="";
                          $ciclo="";
                        ?>
                  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">       

                      <div class="row mb-3">
                        <label for="ciclo" class="col-sm-3 col-form-label">Ciclo</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="Introduce Ciclo" value=""   autocomplete="new-text">
                        </div>
                      </div>

                      <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                          <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4" name="submit2">Crear</button>
                            <a href="ciclos_list.php" class="btn btn-light px-4">Volver</a>

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
        window.location.href = 'ciclos_list.php';
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
          ciclo: {
            required: true
          },
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
          ciclo: {
            required: "Introduce Ciclo"
          },
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
