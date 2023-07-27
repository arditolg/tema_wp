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
 * * Configurações do banco de dados
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
define( 'DB_NAME', 'wp_tema' );

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
define( 'AUTH_KEY',         'wr0*b1_wt.GC?+SJF$X{V5l^HHUUTh1?_((d&5trjsfmC{PBFY(LBPT]S:<}-YE(' );
define( 'SECURE_AUTH_KEY',  '+^HehAri DjL*]Xo-|,>`3XJwq>S;%[FMu(ugZO`uUR;H~q(_4Z@=Wq Ql(W: )x' );
define( 'LOGGED_IN_KEY',    '?R]!RwhA_9yIftUNBw;,<SqO!! (ffW6qXwL[L3MKc4$MXL~.E.+[?^QmWR#+PVi' );
define( 'NONCE_KEY',        'I?y(y9Z+%= ,Ez}1>oyI)FS3xnQ`UrZv=$ &22^6WE=w9v!{04?6PF,z9dLbspU/' );
define( 'AUTH_SALT',        '|TRGRDu*%W 9YvUk<+j}I&~.JS.@{iviRY#KPZEV;K#}}} R,-@.anDRr!ss^O|O' );
define( 'SECURE_AUTH_SALT', 'f@qAg8E3~ayP-9,S]~!`f):AYd1muKMz]mdt9M:0quHde3|w09aJUKb>(_5 ~eA9' );
define( 'LOGGED_IN_SALT',   '}06RV]7]`67nwfp%s@N4v]Aj)Uh.fO;o8S,*ISilHIdsUEQ3GL RjOg@O1qgK81p' );
define( 'NONCE_SALT',       'ic:!tKX@]yOrM&9M?{!1*UAGCy*aNCs1.aFK+I-c jyfA?1Vj- kbe*n|C-5h6Mw' );

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
