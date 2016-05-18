<?php
add_action('wp_ajax_formOrder', 'guardarorders');
add_action('wp_ajax_nopriv_formOrder', 'guardarorders');

function guardarorders()
{
    global $wpdb;
    $res = array(); 
    $table = $wpdb->subcription;
    $ban = $_POST['nombreorder'];
    $correo = trim($_POST['correoorder']);
    $resultado = $wpdb->get_results("SELECT * FROM $table WHERE subcription_email='$correo'");

    $to = get_option('admin_email');
    if(trim($_POST['nombreorder'])!='')
        $nombre = trim($_POST['nombreorder'])." ".trim($_POST['apellidosorder']);
    else
        $nombre = $resultado[0]->subcription_nombre." ".$resultado[0]->subcription_apellidos;

    if(trim($_POST['telefonoorder'])!='')
        $telefono =trim($_POST['telefonoorder']);
    else
     $telefono =$resultado[0]->subcription_telefono;

    $subject = $nombre . " A hecho un pedido ***" . get_option("blogname")."***";
    $message = "- Nombre : " .$nombre." \r\n \r\n"."- Telefono : ".$telefono."\r\n \r\n"." A hecho un pedido de ".trim($_POST['nom-producto']) ;
    $headers = "De: " . trim($_POST['nombreorder']) . " <" . trim($_POST['correoorder']) . ">\r\nReply-To:" . trim($_POST['correoorder']);

    if ($ban == '') {
        if (count($resultado) > 0) {
            if ($resultado[0]->subcription_nombre == null && $resultado[0]->subcription_apellidos == null && $resultado[0]->subcription_telefono == null) {
                $res['datos'] = 'sin-data';
                $res['status'] = 500;
                $res['value'] = 'existe';
            } else {
                $res['status'] = 200;
                $res['datos'] = 'datos-completos';

                wp_mail($to, $subject, $message, $headers);
                //enviar msn al cliente
                wp_mail($_POST['correoorder']," Sr(a). ". $nombre . " Se contacto con FOODSTORE", "Muchas gracias por confiar en nosotros, su pedido de ".trim($_POST['nom-producto'])." esta siendo procesado. En breve nos estaremos contactando con usted via telefono...", "De: " . $to . " <" . $to . ">\r\n", "FOODSTORE");
            }
        } else {
            $res['status'] = 500;
            $res['value'] = 'no-existe';
        }
    } else {
        if (count($resultado) > 0) {
            $data = array(
                'subcription_nombre' => $_POST['nombreorder'],
                'subcription_apellidos' => $_POST['apellidosorder'],
                'subcription_telefono' => $_POST['telefonoorder'],
            );
            $result = $wpdb->update($table, $data, array('subcription_email' => $correo));
            if ($result) {
                $res['status'] = 200;
                wp_mail($to, $subject, $message, $headers);
                //enviar msn al cliente
                wp_mail($_POST['correoorder']," Sr(a). ".trim($_POST['nombreorder'])." ". trim($_POST['apellidosorder']) . " Se contacto con FOODSTORE", "Muchas gracias por confiar en nosotros, su pedido de ".trim($_POST['nom-producto'])." esta siendo procesado. En breve nos estaremos contactando con usted via telefono...", "De: " . $to . " <" . $to . ">\r\n", "FOODSTORE");
            } else {
                $res['status'] = 500;
                $res['value'] = 'error';
            }
        } else {
            $data = array(
                'subcription_email' => $_POST['correoorder'],
                'subcription_nombre' => $_POST['nombreorder'],
                'subcription_apellidos' => $_POST['apellidosorder'],
                'subcription_telefono' => $_POST['telefonoorder'],
            );
            $result = $wpdb->insert($table, $data);
            if ($result) {
                $res['status'] = 200;
                wp_mail($to, $subject, $message, $headers);
                //enviar msn al cliente
                wp_mail($_POST['correoorder']," Sr(a). ".trim($_POST['nombreorder'])." ".trim($_POST['apellidosorder']). " Se contacto con FOODSTORE", "Muchas gracias por confiar en nosotros, su pedido de ".trim($_POST['nom-producto'])." esta siendo procesado. En breve nos estaremos contactando con usted via telefono...", "De: " . $to . " <" . $to . ">\r\n", "FOODSTORE");
            } else {
                $res['status'] = 500;
                $res['value'] = 'error';
            }
        }
    }
    return wp_send_json($res);
}

