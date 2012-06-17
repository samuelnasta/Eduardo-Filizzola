<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
define('DB_NAME', 'filizzola');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'ef');



/*define('DB_NAME', 'goal_filizzola');
define('DB_USER', 'goal');
define('DB_PASSWORD', 'Hvn}a%QT!94m');
define('DB_HOST', 'localhost');
*/


define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N7S;Kr[.({={w~D]cd~#Ox(DN4C/*TlZp*-#}ukI(Z-<~!^SIB?y:*e%;qV1.>{b');
define('SECURE_AUTH_KEY',  'sCe>^xrr9d@gob9`i|P:,bH;4;8:Pes}B/W]#m#i#X,;h2e!g8IYH</|](5pT_1Y');
define('LOGGED_IN_KEY',    'dImJHS*a]xaPGOays};> @t:8&i0s+&dX:{3M]u?h*y%0^;Jp#$|e*wM5qc>2|Yc');
define('NONCE_KEY',        'Ftd~o$uS%GbALW{2dA7bv5d*tMJMNw_uRR,t)1vCl805#S(AZ<Ualk-%JEnRwqrN');
define('AUTH_SALT',        ')0`AWSQr)]|d}1UG&tF#&7KP~DbaD?#ZRele5XB)E)nxV/qUZN2#}[$lm;?PyUG4');
define('SECURE_AUTH_SALT', '-E49};<^Tqh^s!TyulJP#6(RMB9|w~]At!a3#k} ggfxM$}/{s8Rm?s|5G>6lz;)');
define('LOGGED_IN_SALT',   'v1N&iiH|-Zu#6O%NVx3}DGP&xNm}C D@Vn5^Ei}cnsBusR~B7#[e%mLSd(3bU?H6');
define('NONCE_SALT',       'ui5W9.%1Z]K2}o*<>i01g3qrmYz(FzMQbs/V%IR.HpM79ZhA8m,nn+~9Js+[U6PI');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
