<?php 
add_action('wp_ajax_formSubscription', 'guardarsuscripcion');
add_action('wp_ajax_nopriv_formSubscription', 'guardarsuscripcion');

function guardarsuscripcion()
{ 
     global $wpdb;
     $table = $wpdb->subcription; 
     $correo=$_POST['correo']; 
     $resultado = $wpdb->get_results( "SELECT * FROM $table WHERE subcription_email='$correo'");
    if(count($resultado)>0)
    {
        $res['status'] = 500;
        $res['value'] = 'existe';
    }else{
        global $wpdb;
        $res = array();
        $table = $wpdb->subcription;
        $data = array(
            'subcription_email' => $_POST['correo'], 
        );
         $result = $wpdb->insert($table, $data);
        if ($result) {       
           $res['status'] = 200; 
           return wp_send_json($res);
        }else{
             $res['status'] = 500;
             $res['value'] = 'error';
        }          
    }
     
    return wp_send_json($res);
}


function create_table_Subscription()
{
    global $wpdb;
    $search_table = $wpdb->prefix . "subcription";
    if ($wpdb->get_var("show tables like '$search_table'") !== $search_table) {
        $sql = "CREATE TABLE " . $search_table . " (
                    subcription_id bigint(20) NOT NULL AUTO_INCREMENT,   
                    subcription_email VARCHAR(100) NOT NULL,
                    subcription_nombre VARCHAR(50),
                    subcription_apellidos VARCHAR(50),
                    subcription_telefono VARCHAR(10),
                    subcription_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                    UNIQUE KEY subcription_id (subcription_id))
                    ENGINE = INNODB
                    CHARACTER SET utf8
                    COLLATE utf8_general_ci;";
        require ABSPATH . 'wp-admin/upgrade-functions.php';
        dbDelta($sql);
    }

    if (!isset($wpdb->subcription)) {
        $wpdb->subcription = $search_table;
        $wpdb->tables[] = str_replace($wpdb->prefix, '', $search_table);
    }
}

add_action('init', 'create_table_Subscription');
