<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'foodstore');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '123456');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0Sxb4n;#hKi$C.+#xXuc!nQ:J_kI*-jYa%Vvo5g/i%cN:*ayLBaX1f.2wbE# 8V,');
define('SECURE_AUTH_KEY',  'hU{ INM-J+jI=$8&n->8s+3D0#B7rA*D@9Zh>1|w}p+$9MMIJd{lLm!oB[ &vmI5');
define('LOGGED_IN_KEY',    '5(QTTp <etQt.Uw~,FX|Aj3_ortfo7FurqHMK(Z9<:|_,Q}!-(vag-AGG_d-Tv#b');
define('NONCE_KEY',        '/.]g&xXH-|/,YskS $2u|:g*fc_q7!3hW%NqWYWyoks=T;-%F^;M!+Y+WFM(]|,o');
define('AUTH_SALT',        'LmxT?AA-e%sA,c]TXb5C`qpe`43>|vHV$qnA|-<QNDJg(/.A-kaKxgG(<!b3UV|(');
define('SECURE_AUTH_SALT', 's|lDa>Gp.Mj?$w&HDMgsGR;:{kaMmZDWRVL4G|;,Pwol|!b.tVzdCW2xMwDLYgs%');
define('LOGGED_IN_SALT',   '@^S;K|Yt?m{kX8^a^j[s;{Crh@L;JeZk<fwA8LB=gq;vLw%9&H9.-YnN[%P enZO');
define('NONCE_SALT',       'K&:+CD_)+V*}v@i]yWQE_G;e_krTi^x%C4,+s D|JOO|Jm}$so=w%k#InZMp34bB');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
