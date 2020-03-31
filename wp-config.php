<?php
/**
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define( 'DB_NAME', 'base' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'a4]r+J)5)~,Pxp$&I1=klbC#FY9~[ST.!Gg#s:v]~nTzoUJ_$NpvgW`>fm>;(N5-' );
define( 'SECURE_AUTH_KEY', '$$1U9D.:wl@m pdtZa>,=IywA(}CyMKf/)F4f.M|XI.[ouf|ubP(sB!LUc=p%!?|' );
define( 'LOGGED_IN_KEY', 'C?zP(v|D;GuQH3lz^-]{bSclrsqM.b49tO4G7U4*X:7x;C^k1aD*}WD.Qd}:,dQQ' );
define( 'NONCE_KEY', '3[A0|xjE97MR`%,guN<NQh!E #syqE(N:FYas(-Ie>dKtZSsSs4/}8H4l?9ZWKW@' );
define( 'AUTH_SALT', '8oW+]@~b#I3my3ifDsho7uCqyZfe8*P^6(v NId]qz((fT9oq;0M+r<xx-]$FlMI' );
define( 'SECURE_AUTH_SALT', 'Ko2;5QlA<NYq%tpRjwrDug<,<< xR!yj#{D}^}c2CtXj27`9SZ=E6,WDrak,pBsW' );
define( 'LOGGED_IN_SALT', '%-lR;-j&=cd3(*x.glx3/}Y~tW5ZyC_Hw,@pbL_An[R#8AcB%ck8<b?L8Gy9R^m|' );
define( 'NONCE_SALT', 'tckl,@@/x:h4bGFrxrT$IQIf:A+:2G,s~Y$W{~ycaeF#B+AVm[/9hdOvl9Y$.?yA' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

