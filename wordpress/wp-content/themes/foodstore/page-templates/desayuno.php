<?php /* Template Name: desayuno*/ ?>
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
                <div id="contenido-main">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="info-header">
                                <span>Desayuno mas populares</span>
                                <div class="decor-info"></div>
                            </div>
                            <div class="info-body">
                                <article>
                                    <?php $args = array(
                                        'posts_per_page' => 12,
                                        'cat' => 1,
                                        'tag__in' => array( 12,15,16,17,18,19,20 )
                                    ); ?>
                                    <?php $the_query = new WP_Query($args); ?>
                                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                                        $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                                        ?>
                                        <div class="col-xs-6 col-sm-3 col-md-3">
                                            <div class="marco-contennido-main">
                                                <?php//como extrar los datos de la tabla
                                                $custom_fields = get_post_custom();
                                                $valor = $custom_fields['precio_actual'];
                                                ?>
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="imagenes-main" style="background-image: url('<?php echo $img_url; ?>');">
                                                    </div>
                                                    <div class="producto-meta-main">
                                                        <h3><?php the_title(); ?></h3>
                                                    </div>
                                                </a>
                                                <div class="precio-main">
                                                    <span class="precio-new-main">$/<?php echo get_post_meta( $post->ID, 'precio_actual', true ) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="espacio"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="pts-container">
                                        <div class="img-container-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/banners/banner1.jpg'); "> </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="pts-container">
                                        <div class="img-container-main" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/banners/banner2.jpg');">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="info-header">
                                <span>Mas Vistos</span>
                                <div class="decor-info"></div>
                            </div>
                            <div class="info-body">
                                <?php get_template_part( 'inc/include/more', 'famous' ); ?>
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