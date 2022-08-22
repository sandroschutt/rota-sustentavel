<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dadoswp_
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'rota_sustentavel' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k..lM)s{%haYtj vgA/J8O?4kC7<cPmeg[U<i+&j|n/&xL$w;.`TEL Zi2]7.qhP' );
define( 'SECURE_AUTH_KEY',  '$C+_^YK9<~8jdQC$rubp|[Glh)7F-nsSkb%kq)n6LM:MK>cnF=;d#.!1CiI^5ExO' );
define( 'LOGGED_IN_KEY',    'je*U9VY$WRqD>Q6I<f{jx{2Z.LMw4Zs7F}HD_14<BB3iv(z{H_Kvxc_}>]ea61(b' );
define( 'NONCE_KEY',        'HP#pq~N WR2%e_|0]l6E,GDHsLs!}vi{?c~:2<5KQnqJ#qI7m$be^eu@eKC]hpd$' );
define( 'AUTH_SALT',        '[jbYLdw+cn$/-EboP#b#v<C(~JqK++48J Pj=nKb*+ai-Pfx@M$ni*awo#j*t$j@' );
define( 'SECURE_AUTH_SALT', 'O4-?_W>wOXI3V-,F.feGX$Oiq90L5G^%{py<No#iyWn/6@Fnp#xQ>S`7?G6hkvQR' );
define( 'LOGGED_IN_SALT',   'L4YsT9j#)XI>JFd-U4Y)pqmjFS3ufU$e`Zo:jag2GhZP6#NlK7OkMegu<>k.H<ZH' );
define( 'NONCE_SALT',       'XQc2J%{N0;@z%,qj&O@I}t!/7E-359^poM#d])zX#v}Ltzt0e!ZFvJLE@99ret6R' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
