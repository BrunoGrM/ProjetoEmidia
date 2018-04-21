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
define('DB_NAME', 'db_Emidia');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ':)F&j2=dS9:C_h,$@dtqQ$B{lM=oB]q0awj%wJA`*V|zp`8MKH#&?7eGTfilN%*(');
define('SECURE_AUTH_KEY',  'U6vHpPO}HWn4(oZj;mN1YkEXp%FLCLf9]=K%6.}sy3Ysk$2&cz;[JJZ2h@143_2/');
define('LOGGED_IN_KEY',    'qO33?-@6+hc:axRk4f} $`37=#2smr.prR:e:DADJ,klY4tT.y>y2[cYKU&a[jqX');
define('NONCE_KEY',        ' Ey;:Nc)4@@Y^#P^$oP&i/R/Lo{stl%)GSbeOudXVk]Q[k{hDfHL8>M[aAIo~Dc-');
define('AUTH_SALT',        '-}#mp#]?s6oBs.,_|Wzjx%JBtrD;4w)y-vm;gSvyMuQl,0S(ys}I4CR1= >F3A/x');
define('SECURE_AUTH_SALT', 'HR}lP:}WQ^>*5JGmvA0zJQB`E ml;=d{WmQ[a_wUgz<35uG{v/&!uP8;qxL2}D{/');
define('LOGGED_IN_SALT',   '3.OH0TiL8]JZS!g&S$tL- p&^&~A{v~#H`egzE0]o-/|f5b*yu+j@@P-R;N!waCn');
define('NONCE_SALT',       'cMY9mjniLoG?)FF.HF6(.U3b!^!cs^:d$fvA^${F]MI_Q:gEyic?QCy!jmKILbEv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
