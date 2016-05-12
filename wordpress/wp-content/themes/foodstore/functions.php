<?php
//soporte para imagenes destacadas
add_theme_support('post-thumbnails');
// without parameter -> Post Thumbnail (as set by theme using set_post_thumbnail_size())
the_post_thumbnail();

the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
the_post_thumbnail('full');            // Original image resolution (unmodified)

the_post_thumbnail(array(100, 100));  // Other resolutions

// informacion
require get_template_directory() . '/inc/include/information_web.php';
//crear la tabla de contactos
require get_template_directory() . '/inc/include/savecontact.php';
//crear tabla de subscripciones 
require get_template_directory() . '/inc/include/savesubscription.php';
//guardar ordenes
require get_template_directory() . '/inc/include/saveorders.php';

//post mas populares
function getPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count . ' Views';
}

function setPostViews($postID)
{
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}



function ts_post_type_informacion()
{
    register_post_type('informaciones',
        array(
            'label' => __('informaciones', 'templatesquare'),
            'public' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'rewrite' => true,
            'hierarchical' => true,
            'menu_position' => 22,
            'menu_icon' => 'dashicons-index-card',
            'exclude_from_search' => true,
            'rewrite' => array('slug' => 'informaciones'),
            'supports' => array(
                'title', 
                'template',
                'editor',
                'thumbnail')
        )
    );
    register_taxonomy('category_informaciones', __('informaciones', 'templatesquare'),
        array(
            'hierarchical' => true,
            'label' => __('Categorias', 'templatesquare'),
            'portfoliocat' => __('Categorias', 'templatesquare')
        )
    );
}

add_action('init', 'ts_post_type_informacion');
 