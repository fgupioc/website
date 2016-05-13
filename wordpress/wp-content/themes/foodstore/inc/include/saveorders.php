<?php
add_action('wp_ajax_formOrder', 'guardarorders');
add_action('wp_ajax_nopriv_formOrder', 'guardarorders');

function guardarorders()
{
    global $wpdb;
    $res = array();
    $table = $wpdb->subcription;
    $ban = $_POST['nombreorder'];
    $correo = $_POST['correoorder'];
    if ($ban == '') {
        $resultado = $wpdb->get_results("SELECT * FROM $table WHERE subcription_email='$correo'");
        if (count($resultado) > 0) {
            if ($resultado[0]->subcription_nombre == null && $resultado[0]->subcription_apellidos == null && $resultado[0]->subcription_telefono == null) {
                $res['datos'] = 'sin-data';
                $res['status'] = 500;
                $res['value'] = 'existe';
            } else {
                $res['status'] = 200;
                $res['datos'] = 'datos-completos';
              
            }
        } else {
            $res['status'] = 500;
            $res['value'] = 'no-existe';
        }
    } else {
        $resultado = $wpdb->get_results("SELECT * FROM $table WHERE subcription_email='$correo'");
        if (count($resultado) > 0) {
            $data = array(
                'subcription_nombre' => $_POST['nombreorder'],
                'subcription_apellidos' => $_POST['apellidosorder'],
                'subcription_telefono' => $_POST['telefonoorder'],
            );
            $result = $wpdb->update($table, $data, array('subcription_email' => $correo));
            if ($result) {
                $res['status'] = 200;
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
            } else {
                $res['status'] = 500;
                $res['value'] = 'error';
            }
        }
    }
    return wp_send_json($res);
} 