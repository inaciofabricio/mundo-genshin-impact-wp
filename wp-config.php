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
define( 'DB_NAME', 'genshin' );

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
define( 'AUTH_KEY',         'CWKJQ66.Z]Q-11M0*ck&r>i&]9:F^u1vtR]W3=fu+.pry1i&,pP=jQfY,HJLoeLW' );
define( 'SECURE_AUTH_KEY',  '[t(Ty~E1?Iae|{kGtui;9/B-o]K 6Vm- Dor0jvLc^R#+m@vea4N:i;S3:@dbD?z' );
define( 'LOGGED_IN_KEY',    'dtt/l&WVP/`B8e_PE2Oa=A{JM73SXkQTt*`-A%Jj$kFAy{+;uU-C.s^v.K5]aiwZ' );
define( 'NONCE_KEY',        '>qC2p,Gd36KsC~gz|YRZN#F(o6CSl}>}6HNH#|.@bg@:N,Hf;RS)e%/kDXO8MNIt' );
define( 'AUTH_SALT',        'a+Dt7VQJ2&LLDOswaIW$bNA~jfQR4qCk@jkDCyf!UDUW8O$3,sQ9%:pyymNf28M{' );
define( 'SECURE_AUTH_SALT', 'QF#ga6P8g)_zzW:[v4C3<jsKytjVmn]w@&.qr@M6-,m6`k:0G 4H/jG9w]a/UiN@' );
define( 'LOGGED_IN_SALT',   '-81V[Euo=LH6Y5B[L?$tP/.n@sbs^97s~I(JjJ24bYwx4]V9@Jg9 1>kn#-v0?v!' );
define( 'NONCE_SALT',       'j:Nyu} ~h]5VOFLOp/A;^Ob4eVXlM?:NVQa>M-Jc`H(#-2R~i*#,+TI4h&*Uk^ Q' );

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
