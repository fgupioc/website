<?php
add_action('wp_ajax_formContacto', 'guardarcontacto');
add_action('wp_ajax_nopriv_formContacto', 'guardarcontacto');

function guardarcontacto()
{
    global $wpdb;
    $res = array();
    $table = $wpdb->contactos;
    $data = array(
        'contact_name' => $_POST['nombre'],
        'contact_email' => $_POST['email'],
        'contact_phone' => $_POST['telefono'],
        'contact_mensaje' => $_POST['mensaje'], 
    );
     $result = $wpdb->insert($table, $data);
    if ($result) {
       /* $subject = trim($_POST['nombre']) . " Check Availability" . get_option("blogname");
        $emails = get_option('joboard_email');
        if ($emails != '')
            $to = explode(',', $emails);
        else
            $to = get_option("admin_email");
            $message = " DATOS GENERALES \r\n \r\n" . "- Nombre : " . trim($_POST['nombre']).".". "\r\n" . "- email: " . trim($_POST['email']).".". "\r\n" .       "- telefono : ". trim($_POST['telefono']).".". "\r\n". "- Detalle : " .  trim($_POST['mensaje']).".";
        $headers = "De: " . trim($_POST['nombre']) . " <" . trim($_POST['email']) . ">\r\nReply-To:" . trim($_POST['email']);
        wp_mail($to, $subject, $message, $headers);
        //enviar msn al cliente
        wp_mail($_POST['email']," Sr(a). ". trim($_POST['nombre']) . " Se contacto con Footstore", "Muchas gracias por confiar en nosotros, nos pondremos en contacto con usted...", "De: " . $to . " <" . $to . ">\r\n", "Footstore");
        */
       $res['status'] = 200; 
       return wp_send_json($res);
    }
    $res['status'] = 500;
    return wp_send_json($res);
}


function create_table_Contact()
{
    global $wpdb;
    $search_table = $wpdb->prefix . "contactos";
    if ($wpdb->get_var("show tables like '$search_table'") !== $search_table) {
        $sql = "CREATE TABLE " . $search_table . " (
                    contact_id bigint(20) NOT NULL AUTO_INCREMENT,
                    contact_name VARCHAR(100) NOT NULL,  
                    contact_email VARCHAR(100) NOT NULL,
                    contact_phone VARCHAR(9),
                    contact_mensaje VARCHAR(250) NOT NULL, 
                    contact_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    UNIQUE KEY contact_id (contact_id))
                    ENGINE = INNODB
                    CHARACTER SET utf8
                    COLLATE utf8_general_ci;";
        require ABSPATH . 'wp-admin/upgrade-functions.php';
        dbDelta($sql);
    }

    if (!isset($wpdb->contactos)) {
        $wpdb->contactos = $search_table;
        $wpdb->tables[] = str_replace($wpdb->prefix, '', $search_table);
    }
}

add_action('init', 'create_table_Contact');
