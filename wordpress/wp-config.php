<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'parcours' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'explorateur' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Ereul9Aeng' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yv6PEw/,,y`}hW/%tg2kDiQ1KK278)gUg&P@FSqQ;44I||GH^yj{>md,*jj^e-pr' );
define( 'SECURE_AUTH_KEY',  ').Lr]/oy1.PoMn433lL~DD%!veO}p>4s>9h;m01~R.l]u;13|U3NQ/X/^y~4}QR5' );
define( 'LOGGED_IN_KEY',    'E|MaZI0RPrB:jLj9M>`RDu$waXMH|F2t7yW6?Is-qLCsN5qROvo&vZCP2C_oPoWy' );
define( 'NONCE_KEY',        '1fBvQ!ENMEbY|sZZ83<2c8~W<z!HxA]sU2M&oWR$@-*_)waT#1~5b^Ej#=|M W)Q' );
define( 'AUTH_SALT',        'J?b<Z`o#d]_IYVQEAmRm,RA|w>8,O|r}hRQD~Q5JfHfJ_0]$[D4bw#OsknBM/6!)' );
define( 'SECURE_AUTH_SALT', 'XsNzHP5Gr3e`e]PuQ:!y1$y4v6: d1Y(#p}Y|*gkJ_]hEOM=zAS4PXGq+_+3A~sb' );
define( 'LOGGED_IN_SALT',   '0XxNO8TCK$OLu*K7+~{|/qC|ZA=6>0ZVGg P!%8iO7wG-kJ07RMP=q|s:>=D^(,F' );
define( 'NONCE_SALT',       ',o<gHCH7Z).,Vd2}_,7cEv#lprn6ik3,S#EYk.e!M?|1u^:.Y2xL@LT%h<&Kn_=L' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
