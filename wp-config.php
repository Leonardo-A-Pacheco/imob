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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', '02imob' );

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
define( 'AUTH_KEY',         'C&@xxBrE*]~b.H*jwuU^Wo^Zr6QMmjsG~`/`kXsdEYYv=:MkA*RsvR)t`9b,d=[D' );
define( 'SECURE_AUTH_KEY',  'ju}h/RNdR2cISb`+O=a!b/[cWkgg{,L$B8V8F7p^+Hj^1!f-X|$3!yE<}8C$Pwz=' );
define( 'LOGGED_IN_KEY',    'NEKj.@xsX|n^iPRA0Hl<:bNSx]PsqrZRd6v[PTvn;MO(zWPI.`Pf9k[h+DJuZ@G5' );
define( 'NONCE_KEY',        'pJZO2Mvb3>`x8G4H$f)HV> a0>_,M>vTQn1@TYqI;bUP.c2*AAlBy5Z1.15+<83H' );
define( 'AUTH_SALT',        'L(rbg!;NSKl<DO`?,LGKH<lbnW_q0:ApQm4rz0h.|K3G!2T~j9v99 wh}s.3nY_b' );
define( 'SECURE_AUTH_SALT', 'J%3#g.uR}`IqzSS-Q@#fVDqiJAP+u Ohjk;=.HTEe1~=8v_yE2tnm %mt!uL?L;>' );
define( 'LOGGED_IN_SALT',   'VN|m<_4HLlXMU0 qNH2Y<#L)!N4Ev-b`snE_~Xexw5&3.[yZ&TD2lsQUHZf)~|dw' );
define( 'NONCE_SALT',       ':s=Qjr[H%W?c.?T9jj^,H!V|d,NUsRp2ktcwW76(8oq_:rXiNv4jlyJdTY1|1;gF' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
