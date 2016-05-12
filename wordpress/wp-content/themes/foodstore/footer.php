</div>
</div>
<!-- Begin footer -->
<footer id="footer">
    <!--Begin site-info -->
    <div class="foot-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="contactos-meta">
                        <div class="title-header">
                            <span>contacto</span>
                        </div>
                        <ul>
                            <li>
                                <span class="iconbox button"><i class="fa fa-map-marker">&nbsp;</i></span>
                                <h4>Nuesra ubicacion</h4>
                            </li>
                            <li>
                                <span class="iconbox button"><i class="fa fa-mobile-phone">&nbsp;</i></span>
                                <h4>Phone: <?php echo get_option('first_telefono'); ?></h4>
                            </li>
                            <li>
                                <span class="iconbox button"><i class="fa fa-envelope-o">&nbsp;</i></span>
                                <h4>Email: <?php echo get_option('mail'); ?></h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="informacion-meta">
                        <div class="title-header">
                            <span>informacion</span>
                        </div>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_title('nosotros'))); ?>"><h4>acerca de nosotros</h4></a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_title('delivery'))); ?>">Delivery</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_title('politicas y privacidad'))); ?>">politicas
                                    y privacidad</a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_title('terminos y condiciones'))); ?>">terminnos
                                    y condiciones</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="informacion-meta">
                        <div class="title-header">
                            <span>Servicio personalizado</span>
                        </div>
                        <ul>
                            <li>
                                <a href="<?php echo esc_url(get_permalink(get_page_by_title('contactanos'))); ?>">
                                    <h4>contactanos</h4>
                                </a>
                            </li>
                            <li>
                                <h4>Devoluciones</h4>
                            </li>
                            <li>
                                <h4>Sito en el mapa</h4>
                            </li>
                            <li>
                                <h4>Vales de regalos</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
                    <div class="informacion-meta">
                        <div class="title-header">
                            <span>EXTRAS</span>
                        </div>
                        <ul>
                            <li>
                                <h4>Marcas</h4>
                            </li>
                            <li>
                                <h4>Regalos</h4>
                            </li>
                            <li>
                                <h4>Afiliacion</h4>
                            </li>
                            <li>
                                <h4>Especiales</h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                    <div class="informacion-meta">
                        <div class="title-header">
                            <span>Suscribete</span>
                        </div>
                        <div class="description">Suscribete para que te llegue nuestras novedades.</div>
                        <div class="block_content">
                            <div class="cont-form">
                                <form role="form" id="formularioSusbs" method="post" action="formSubscription"
                                      data-url="<?php echo bloginfo('url'); ?>/wp-admin/admin-ajax.php">
                                    <div class="message"></div>
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type="email" class="form-control" id="correo" name="correo">
                                    </div>
                                    <button type="submit" class="btn btn-default" id="enviarcorreo">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="foot">
        <div class="container">
            <div class="foot-bottom">
                <div class="copy">
                    <span>Powered by</span>
                    <a href="">Franz junior</a>
                    </br>
                    <span>Pav FoodStore - Responsive Opencart Theme © 2016. Designed by</span>
                    <a href="">Franz junior</a>
                </div>
                <div class="social-pago">
                    <img alt="" src="<?php echo get_template_directory_uri(); ?>/img/image/paypal.png">
                </div>
            </div>
        </div>
    </div>
    <!-- End site-info -->
</footer>
<!-- End footer -->
<!-- End page -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/franz.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;language=en"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gmap3.min.js"></script>

<?php wp_footer(); ?>
<script>

</script>
</body>
</html>
