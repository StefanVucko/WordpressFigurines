<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%IAUxdRz-rRT8_6A=/iC,,$G!-n2Z%NjlgrCe7^8SSZvYUQ,qrSY?YAO{ECBdVgA' );
define( 'SECURE_AUTH_KEY',  '{jokE&4tnu >+Gi]DR,(,=&yK)m3Nz)b}u4l4aA)WC5(8#Z b;iy)[(j42h1tm/A' );
define( 'LOGGED_IN_KEY',    '@J:R5P}PsEEtZC;MOs|/`GxjH[fgEe[r)@e^`C#3ipO61<_IK8VTmgCsR (lLt]S' );
define( 'NONCE_KEY',        'VY@P_6cepifRfh%s*-;d0ONX~b}#:D$g_3W-$}UaNaR^!S Fgau@bB?OBzeobF#L' );
define( 'AUTH_SALT',        'v:ME^t`[dUv*$m_lP,Ix:z7ZsJ@|Pg3?9SgJx*M>P7GWzDI/KmYtyfu-Yaz1?<wq' );
define( 'SECURE_AUTH_SALT', 'pgx`.)xrJP#XGgqP2(^0Y2iG;S2|S<c/D;1zp6L#-]$D/PBTuU^qPEo2KY`:f,;$' );
define( 'LOGGED_IN_SALT',   'M1Xb}yn1qDa8HbGR[A]B|FPMp|$JPML>b`=zm01u!0y-GC+hO;/U:.Yfh?8 m&(0' );
define( 'NONCE_SALT',       '5PuUtbwQujGg:mC;E,.y,?y=a8nbz:U],q[C!k{u?KeY-9Qj4,(/:B$;Ft161gau' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
