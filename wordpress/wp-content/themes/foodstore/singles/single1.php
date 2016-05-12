<?php setPostViews(get_the_ID()); ?>
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
                    <!-- begin contenido de detalle -->
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <div class="col-xs-6  col-sm-6 col-md-6">
                                    <div class="img-detalle">
                                        <?php $img_url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                                        <div class="img-product" style="background-image: url('<?php echo $img_url; ?>')"></div>

                                    </div>
                                </div>
                                <div class=" col-md-6 col-sm-6 col-xs-12 ">
                                    <div class="container">
                                        <div class="title">
                                            <h1 ><?php the_title(); ?></h1>
                                        </div>
                                        <div class="description">
                                                <i class="fa fa-chevron-down"></i>
                                                <b>Puntos por la compra:</b>
                                               <span><?php echo get_post_meta( $post->ID, 'puntos_por_la_compra', true ) ?></span> </p>
                                            <p>
                                                <i class="fa fa-chevron-down"></i>
                                                <b>Precio en puntos:</b>
                                                <span><?php echo get_post_meta( $post->ID, 'precio_en_puntos', true ) ?></span>
                                            </p>
                                            <p>
                                                <i class="fa fa-chevron-down"></i>
                                                <b>Disponibilidad:</b>
                                                <span><?php echo get_post_meta( $post->ID, 'disponibilidad', true ) ?></span>
                                            </p>
                                        </div>
                                        <div class="price">
                                            <span class="precio-real"> $/ <?php echo get_post_meta( $post->ID, 'precio_actual', true )  ?></span> <br>
                                            <span class="price-tax">Delivery: $/ <?php echo get_post_meta( $post->ID, 'delivery', true )  ?></span><br>
                                            <span class="reward">Precio incluye delivery: $/ <?php echo ((float)get_post_meta( $post->ID, 'delivery', true ))+ ((float)get_post_meta( $post->ID, 'precio_actual', true )) ?></span><br>
                                        </div>
                                        <div class="pedidos">                                          
                                           <?php get_template_part( 'inc/include/modal', 'pedidos' ); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12  col-sm-12 col-md-12">
                                    <div class="container margen">
                                        <div class="title">
                                            <h1 >Descripcion del producto</h1>
                                        </div>
                                        <div class="tab-content">
                                            <?php
                                            if (have_posts()) :
                                                while (have_posts()) :
                                                    the_post();
                                                    the_content();
                                                endwhile;
                                            endif;
                                            ?> 

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end contenido de detalle -->
                </div>
                <div class="espacio"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="pts-container">
                                    <div class="img-container-main"
                                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/banners/banner1.jpg'); "></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="pts-container">
                                    <div class="img-container-main"
                                         style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/banners/banner2.jpg');">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="info-header">
                            <span>Nuestro Menu de hoy</span>
                            <div class="decor-info"></div>
                        </div>
                        <div class="info-body">
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce09.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce10.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce11.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce12.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce09.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce10.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce11.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce12.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce09.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce10.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce11.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">
                                <div class="marco-contennido-main">
                                    <a href="">
                                        <div class="imagenes-main"
                                             style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/demo/product/img-produce12.jpg');">
                                        </div>
                                        <div class="producto-meta-main">
                                            <h3>donec tellus</h3>
                                        </div>
                                    </a>
                                    <div class="precio-main">
                                        <span class="precio-new-main">$110.00</span>
                                    </div>
                                </div>
                            </div>
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
            <?php include('inc/sidebar-mid.php') ?>
            <!-- End sidebar-main -->
        </section>
    </div>
</div>
<?php get_footer(); ?>