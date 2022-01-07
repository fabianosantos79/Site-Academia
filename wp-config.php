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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'elementorpro' );

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
define( 'AUTH_KEY',         '[v}~,:9R.F#tbKI5lUrcOG=3k@/*J}#?a,z@^GV[!h0h2}q$^_0RSdAj@^K=~^gb' );
define( 'SECURE_AUTH_KEY',  'C?$(fp.)/eO7iF}{M71?zt#Ub_A,)/y-v?Q}`46t}`*){zfTGW.u f+%AD3`.RBI' );
define( 'LOGGED_IN_KEY',    'bP9Cw&{~TH]l-?N<rzd_3%JhJI@mV 5]x`4,j8Ax,0+3#N@6F*)juBe@-Y_=**Gz' );
define( 'NONCE_KEY',        '|+r&ys!28M;qsXHt<Z`?G8Tl0Ji/`1XaO1^o}kt{^M#Rn~k3_=R;+x2@IrWY7{/j' );
define( 'AUTH_SALT',        '-`oi&PP#6hO)Xmz,stR68NxQ6rz?(3(Ie!]?9KEg?158drA!%ynO=mKe5MO=}D{#' );
define( 'SECURE_AUTH_SALT', 'y#6MG<R@m; di}etK-k$K^iKYR@) yS;Apl8T<:Gl.sA0d%zFr+@a-iF;4Wu=)Hh' );
define( 'LOGGED_IN_SALT',   ';]?o#zP?+94xDDm,jcXf`;LT((55Y=>.K;iU}V+4:xz@?;gl]Fm9D_FNK*?vB>gN' );
define( 'NONCE_SALT',       'r0S5(~IK*i+}rWEUTFnz;,8:<}B6$zmIar8<3}nR0T}~k<Kf)DEQ0Fy[O5C2n&cz' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
