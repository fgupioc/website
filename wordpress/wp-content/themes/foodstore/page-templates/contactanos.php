<?php /* Template Name: contactanos*/ ?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <!-- begin sidebar-left-->
        <div id="sidebar-left" class="col-xs-3 col-sm-3 col-md-3">
            <!-- Begin sidebar-left-->
            <?php get_template_part( 'inc/sidebar', 'left' ); ?>
            <!-- End sidebar-left -->
        </div>
        <!-- end sidebar-left-->
        <!-- begin sidebar-main-->
        <section id="siderbar-main" class="col-xs-9 col-sm-9 col-ms-9">
            <!-- Begin sidebar-main-->
            <div class="container">
                <div class="col-sm-12">
                    <div id="content">
                        <h3>  nuestra ubicación</h3>

                        <div class="contact-location hidden-xs">
                            <div id="contact-map"></div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-4">
                            <h3></h3>
                            <div class="contact-customhtml">
                                <div class="content">
                                    <div class="panel-contact-custom">
                                       <span style="font-size: 18px;color:black;">Referencia </span>
                                        <p><?php echo get_option('referencia'); ?></p>
                                        <ul>
                                            <li><i class="iconbox button fa fa-tasks">&nbsp;</i><span><strong>
                                                        Servicio al cliente</strong><br><?php echo get_option('mail'); ?></span></li>
                                            <li><i class="iconbox button fa fa-share-alt">&nbsp;</i><span><strong>
                                                        Devoluciones y reembolsos:</strong><br><?php echo get_option('devoluciones'); ?></span></li>
                                        </ul>
                                    </div>
                                    <div class="panel-contact-info">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="media">
                                                    <div class="media-icon pull-left"><span
                                                            class="fa fa-home fa-3x"></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Direccion exacta</h4>
                                                        <address>
                                                            <?php echo get_option('direccion'); ?>
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon pull-left"><span
                                                            class="fa fa-phone fa-3x"></span></div>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">telefono</h4>
                                                        <?php echo get_option('first_telefono'); ?><br/>
                                                        <br/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="descripcion">
                                <span>Puedes enviarnos un mensaje para alguna consulta,sugerencia o reclamo</span>
                            </div>
                            <div class="cont-form">
                                <form role="form" id="formulario" method="post" action="formContacto" data-url="<?php echo bloginfo('url');?>/wp-admin/admin-ajax.php">
                                    <div class="message"></div>
                                    <div class="form-group">
                                        <label>Nombre :</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                     <div class="form-group">
                                        <label>Telefono :</label>
                                        <input type="telefono" class="form-control" id="telefono" name="telefono">
                                    </div>
                                    <div class="form-group hidden">
                                        <label>precio :</label>
                                        <input type="text" class="form-control" id="precio" name="precio">
                                    </div>
                                    <div class="form-group">
                                        <label>Mensaje:</label>
                                        <textarea class="form-control" rows="10" id="mensaje" name="mensaje"></textarea>
                                        <span>maximo de caracteres 250</span>
                                    </div>
                                    <button type="submit" class="btn btn-default" id="enviar">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End sidebar-main -->
        </section>
        <!-- end sidebar-main-->
    </div>
    <div class="row">
        <section class="col-xs-12 col-sm-12 col-md-12">
            <!-- Begin sidebar-main-->
            <?php get_template_part( 'inc/sidebar', 'mid' ); ?>
            <!-- End sidebar-main -->
        </section>
    </div>
</div>
<?php get_footer(); ?>

