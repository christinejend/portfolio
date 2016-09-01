<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** The name of the database for WordPress */
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b~%PUGJf)iU=Uh*TqP~NB+!U[(o%O)KB8d]Al{rhMD,rAoQ/>YquBxb]L!WH}<ms');
define('SECURE_AUTH_KEY',  'egGeK_j1Y?hpOr2RpvX(dtdy{P=Q?_?B=Xh8@F$G&DnFhUO2&pg54&voa.ig78B@');
define('LOGGED_IN_KEY',    '$oP5YfB~>PbI!*]ku2[TC.+3/]|#dnHL|PUw+E.8bS+l2L@E?ddQo^W@f`H>x&nM');
define('NONCE_KEY',        '!;pVV7. BC*#2wc8?[(wqh:EG*9pZ__^;kh/!ILnu++]YMHh[<&s`{QB`}NM1.oN');
define('AUTH_SALT',        'M orTjsi*!9hp5IR;I{R)wB ,!HM+{!O,nkB^s>~;vFUEf4~J/=4g%kv{+}bA*]V');
define('SECURE_AUTH_SALT', '+U1Mb`/dVoiQf3YV2E*xtS0.x4W_z9AHi(E9Jt80?{~8_/~E-)C}!Ih7Rg&8#Vh>');
define('LOGGED_IN_SALT',   'DcAs3Hn-`e5;~ooY5+)6bA]OuZatXy*x0=fWxBfS;a+P Twh8+R9[r#j,1&{vtGQ');
define('NONCE_SALT',       '%}B%9z:J[WEF%(#<)L}V9cSnP>7{%a0o/)AO.D]*l(He4bSLwz<*}~:Zi$l#3c?D');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'portfolio_wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');