<?php
function page_company(){

    ?>
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        #wpwrap{background-color: #fff;}
    </style>
    <div class="container-fluid">
        <div class='wrap'>
            <div class="page-header">
                <h1>Información</h1>
            </div>
            <form method="post" action="options.php" role="form">
                <?php wp_nonce_field('update-options') ?>
                <div class="form-group col-sm-12 col-lg-12">
                    <label for="text">Quienes somos:</label>
                    <textarea name="quienes_somos" cols="100%" class="form-control" rows="3"><?php echo get_option('quienes_somos'); ?></textarea>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <h4>Dirección:</h4>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Trujillo: </label>
                        <input class="form-control" type="text" name="direccion" size="45" value="<?php echo get_option('direccion'); ?>" placeholder="795 Park Ave, Suite 120" /><br>

                    </div>
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Referencia: </label>
                        <textarea name="referencia" cols="100%" class="form-control" rows="3"><?php echo get_option('referencia'); ?></textarea>

                    </div>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <h4>Contacto:</h4>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Telefono  </label>
                        <input class="form-control" type="text" name="first_telefono" size="45" value="<?php echo get_option('first_telefono'); ?>" placeholder="RPC (52) 2215-251" /><br>
                    </div>
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Telefono 2 </label>
                        <input class="form-control" type="text" name="second_telefono" size="45" value="<?php echo get_option('second_telefono'); ?>" placeholder="RPM (22) 5138-219 " /><br>
                    </div>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <h4>Redes Sociales:</h4>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Facebook: </label>
                        <input class="form-control" type="text" name="social_fb" size="45" value="<?php echo get_option('social_fb'); ?>" /><br>
                    </div>
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">twitter: </label>
                        <input class="form-control" type="text" name="social_tw" size="45" value="<?php echo get_option('social_tw'); ?>" /><br>
                    </div>
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Servicio al cliente: </label>
                        <input class="form-control" type="text" name="mail" size="45" value="<?php echo get_option('mail'); ?>" placeholder="contact@email.com" /></p>
                    </div>
                    <div class="form-group col-sm-6 col-lg-6">
                        <label for="text">Devoluciones y reembolsos: </label>
                        <input class="form-control" type="text" name="devoluciones" size="45" value="<?php echo get_option('devoluciones'); ?>" placeholder="contact@email.com" /></p>
                    </div>
                </div>
                <div class="form-group col-sm-12 col-lg-12">
                    <button type="submit" name="Submit" class="btn btn-primary">Guardar</button>
                </div>
                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="page_options" value="quienes_somos,direccion,referencia,first_telefono,second_telefono,social_fb,social_tw,mail,devoluciones" />
            </form>
        </div>
    </div>
    <?php
}
add_action('admin_menu', 'register_page_companyinfo');

function register_page_companyinfo()
{
    add_menu_page('Información de Foodstore', 'Foodstore info', 'manage_options', 'informacion', 'page_company', 'dashicons-store', 2);
}