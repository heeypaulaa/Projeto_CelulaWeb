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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetoPaula' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'p:9!=%;?8C&}s!M^kHT6|eYqtxW1/E*SHpuD})6x=LF7{@}Mk_8_]x|D7>Vnk-Gn' );
define( 'SECURE_AUTH_KEY',  '8Dy%tr@pU!?oa~^p^26tSO;q4w04>FL1+YLv4fQk?RBm0t*tRINe@](# {SayEsu' );
define( 'LOGGED_IN_KEY',    'N7^<nu][;Y`x%Y:B 5~6$?;!5Pns,D%W*P/H}Mp._be|vV>)<vo,`4-WhhD^4tqb' );
define( 'NONCE_KEY',        '=oz2^ W?q=ZQmu`H)^|{hq&.(uk*^iH^M+ q0pw)~x5z9hXNmer=lg>ycqi6rU|U' );
define( 'AUTH_SALT',        'yk.YP{6R/_JNvk5t7wy/[Y5uY=p5)y-_Y_JUG2g/U=f7$x#>R:[i8^7O:,{>3fu^' );
define( 'SECURE_AUTH_SALT', 'U}_SB8tT%g.0%c8VTY8bM,%5$^DC2Yy!{D0(BiYf!is]d6q~F}uX/)D|<_PT>cd7' );
define( 'LOGGED_IN_SALT',   'WDF8FYT`*L+)O_ JiG,G?N0;*>(H9a`;Lgez#2EueE}z|/0]BjW31+*nAKV!y{U1' );
define( 'NONCE_SALT',       'CObJ,Te=}12$l(G#tf}H2z3+EyP.!{514]RcOg`iWbgw37&(nIN*65B^H:O)aRN9' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
