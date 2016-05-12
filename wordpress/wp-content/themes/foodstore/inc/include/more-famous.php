<?php $args = array(
    'showposts'=>16,
    'meta_key'=>'post_views_count',
    'orderby'=>'meta_value_num',
    'order'=>'DESC'
); ?>
<?php $the_query = new WP_Query($args); ?>
<?php while ($the_query->have_posts()) : $the_query->the_post();
    $img_urls = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
    ?>
    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="marco-contennido-main">
            <a href="<?php the_permalink(); ?>">
                <div class="imagenes-main" style="background-image: url('<?php echo $img_urls; ?>');">
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