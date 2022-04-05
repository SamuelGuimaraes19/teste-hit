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
define( 'DB_NAME', 'u639459923_hit' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'u639459923_hit' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'Agencia1801@1324' );

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
define( 'AUTH_KEY',         '?Fs^BQ&w@1yu8ZPjp2+a/XCwlGKhc?nd=*?dK(Z,(a4t)>ksD).d7^X[lC{K$FtZ' );
define( 'SECURE_AUTH_KEY',  'vT34CJ9b?X=QbSpV0nNOW&^,=5[72;h1:7]XDjT>Izra<eZGEb3Mt4O;V7$5%r`g' );
define( 'LOGGED_IN_KEY',    'tP)<D]vX6+i&3u|oOq^F`GLw/vJdRTw^kp{ADhWILW|/Uy?.QeMr!z7Dkvp}dbd=' );
define( 'NONCE_KEY',        'C%p@[>ZQ)FREIcG6gY_#GU]X7|9uk0gx{k4T+{KukAvSrcn69}#Ly*=scIk6DMR%' );
define( 'AUTH_SALT',        ',Dw2@F9bFmibw,/OUXC;ASXzO=6HyKqUHSNbiZ?Yqt}TJ^_R]q]HNM&<`#;7QlX]' );
define( 'SECURE_AUTH_SALT', '`@yjuHNzV#3P>t<v{:o7 r_5R0W:M_LOH(_9o,j#{bZc2s7m|CT3$|6?{>Cl9#4_' );
define( 'LOGGED_IN_SALT',   'f<0h21_B9=PR78j^#PVYizLP?L]Izia#|m7CZhS=rJ[}zhOf#RnEmcOp)? fCi],' );
define( 'NONCE_SALT',       '+3}vNz&dbN}pzb4fJ%YgSZ:$_:LDn)&`9_O*TXgA3`sOm}5Tdwrxjy 87c~LAYfg' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'bd_';

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
