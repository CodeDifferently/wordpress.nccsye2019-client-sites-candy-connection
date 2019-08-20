<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'geH@mnZODm@4kRXEBr7#3GBK8eHU%91#D?,e(~[dMIU:j_$/5#Btp3##.-=8U@2h' );
define( 'SECURE_AUTH_KEY',  '-Pemwg$Eo}R(q@ki[:VT[(OSCi}0~!:5782^&0uO]0zF`6kvrmf@F~q+]>t2lv`B' );
define( 'LOGGED_IN_KEY',    'Ru1N;r%>`,/@GSc8~wjaAI4umUkz~2E-NSpn[JVUmAm(Iu^aIkAM$Ks|8sF=n~2&' );
define( 'NONCE_KEY',        '_@G;=Gz9%K#cl!?2SoTK@x:0#y&l2%{v*bK+s?c~h5vsozQqBb_)M:$PM3eH}A/D' );
define( 'AUTH_SALT',        'NEi[%.av9 sK4b)s:9Vb-*v`dM!COCc&]{04gWZu7svnCb8@Ze]&.tA$~PlXd8|6' );
define( 'SECURE_AUTH_SALT', 'rpKfs=@aZPk=SYRIYo6(WMH}t+taSkd|K(.^QV_XYS`8wZ>Q)e^u[B=YW5<T[zi(' );
define( 'LOGGED_IN_SALT',   'qJY&tri?_Loe9NB!M)g?tZ,V(UW)Sd6f_.JxRMeK)Op,A%CbIeQ/@,<QJr^V&4+R' );
define( 'NONCE_SALT',       '^>F|[4J,LgpV<4]aHMeMZEsuG(iJT@%Hw/{6,Z/qdQ8n.BcX-gGWugwcw&<Bvoyp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );



// automatically-activate-plugins/
$plugins = get_option('active_plugins');
if($plugins){
    $puginsToActiv = array('Plugin1', 'Plugin2', 'Plugin3');
    foreach ($puginsTostActiv as $plugin){
        if (!in_array($plugin, $plugins)) {
             array_push($plugins,$plugin);
             update_option('active_plugins',$plugins);
        }
    }
}
