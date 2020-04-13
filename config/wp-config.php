<?php


// Change as per your laptop RAM
define('WP_MEMORY_LIMIT' ,'1024M' );


// Load Site Home from ENV
define('WP_HOME',$_ENV['WP_HOME']);
define('WP_SITEURL',$_ENV['WP_HOME']);


if(!WP_LOCAL_DEV){

	// Replace the Block with Production Details
	define( 'DB_NAME', 'w3dev');
	define( 'DB_USER', 'root');
	define( 'DB_PASSWORD', 'password');
	define( 'DB_HOST', 'localhost');

}else{
	
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	ini_set('post_max_size', '40M');
	ini_set('upload_max_filesize', '80M');

	
	// Enable Local Dev Env
	define('WP_LOCAL_DEV', true);
	define('FS_METHOD','direct');


	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', 'wp-content/debug.log');
	define('WP_DEBUG_DISPLAY', true);

	// Enable Theme Script Debug
	define('SCRIPT_DEBUG', true);


	/** The name of the database for WordPress */
	define( 'DB_NAME', 'wordpress');
	define( 'DB_USER', 'root');
	define( 'DB_PASSWORD', 'password');
	define( 'DB_HOST', 'db');

}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/** Changing these keys is recommeneded */
define( 'AUTH_KEY',         '..aa@I],8T5#@N%p<Bi,%Az]AIQZw3)2{[|wz_P0<]O*:l=rd%!Ss)V;Q_uvxR;@' );
define( 'SECURE_AUTH_KEY',  'PU$CVng*HCpNgd-ca+abQ:&ZCf(Ae?$Q@NH;C w/L-f/BJ4l8`dRH<A3yplQ>2Ab' );
define( 'LOGGED_IN_KEY',    ';nrASd}RL]vXte7?D}g1u9?=R2}?T*b4VK9#QYs})C[: R=UEFF@QX#C#KfKFcMe' );
define( 'NONCE_KEY',        ':6$}+`#excb`Y3[Ic$XL++yq=A(7ZE-NDaMvS?B})qf9oR1`NJi`%TuCQ#[x})n%' );
define( 'AUTH_SALT',        '},N=&znn_FsiCr]3oy4DS>i&l~+$lu+P3el>.]-8.tHF@%`C3?8Q!F1;lr&^dOG|' );
define( 'SECURE_AUTH_SALT', 'XJIV$%vn.vaj_hXUcIqgj=f7RTw!+auquE_}sqM-7:)>tX*[C$Dio)7xX%+F9{~T' );
define( 'LOGGED_IN_SALT',   'ZJ,4dNrqB-+$ig]#?HNt.Z:{1#jPJ]K)-]Bkj:E?;_WaZ]/fLEi&}d.G>koJlK^H' );
define( 'NONCE_SALT',       'Hknu9aAUQ>tCL^qF(}e:#%*uoNvG!_O.x@IF}(?lUy@8nctK$j>J48`Cg,*xU07p' );


$table_prefix = 'wp_';



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
