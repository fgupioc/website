<?php
add_action( 'admin_menu', 'register_page_listsubcription' );

function register_page_listsubcription(){
  add_menu_page( 'Información de las suscripciones', 'Suscripciones', 'manage_options', 'pagesubcription', 'page_pagesubcription', 'dashicons-clipboard', 15 );
}
function page_pagesubcription(){
  global $wpdb;
  $consultan = $wpdb->get_results("SELECT * FROM wp_subcription ORDER BY subcription_date DESC");
  ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
  <script src="<?php echo get_template_directory_uri();?>/js/jquery-2.1.1.min.js"></script>
  <style type="text/css">
  #wpwrap{background-color: #fff;}
  </style>
  <div class="container-fluid">
    <div class='wrap'>
      <div class="page-header">
        <h1>Lista de los suscritos</h1>
      </div>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Fecha</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i =1;
          foreach ($consultan as $subcription) {
            ?>
            <tr>
              <th scope="row"><?php echo $i?></th>
              <td><?php echo($subcription->subcription_nombre." ".$subcription->subcription_apellidos) ?></td>
              <td><?php echo($subcription->subcription_email) ?></td>
              <td><?php echo($subcription->subcription_telefono) ?></td>
              <td><?php echo($subcription->subcription_date) ?></td>
              <td><button type="button" id="delete-<?php echo $i?>" onclick="delete_subcription(<?php echo $subcription->subcription_id ?>,<?php echo $i?>);" class=" btn btn-primary">Eliminar</button></td>

              <?php $i++; } ?>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <script type="text/javascript">
    //eliminar suscriptores
    function delete_subcription(id,i){
      var stringdata ='id='+id + '&action=' + 'eliminarsuscription';
      $.ajax({
        url: "<?php echo bloginfo('url'); ?>/wp-admin/admin-ajax.php",
        type: "POST",
        data: stringdata,
        beforeSend: function() {
          $('#delete-'+i).attr('disabled',true);
        },
        success: function (data) {
          if(data.status==200){
            $('#delete-'+i).attr('disabled',false);
            console.log('eliminado correctamente');
            location.reload();
          }
        }
      });
    }
    </script>
    <?php
  }
  add_action('wp_ajax_eliminarsuscription', 'eliminarsuscription');
  add_action('wp_ajax_nopriv_eliminarsuscription', 'eliminarsuscription');

  function eliminarsuscription(){
    global $wpdb;
    $id=$_POST['id'];
    $res = array();
    $consultan = $wpdb->get_results("DELETE FROM wp_subcription WHERE subcription_id = '$id'");
    $res['status'] = 200;
    return wp_send_json($res);
  }
