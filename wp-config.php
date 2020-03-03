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
define( 'DB_NAME', 'amz_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'CS/5n!~mm$]o=D~:oqoB[z!4W/(<V_o-QV;PP}y2UjH)|yIFpK(y2KC%Kw #K$xk' );
define( 'SECURE_AUTH_KEY',  '^Q&A/Jv*y:N:e<$ljP^{3wZ+l}33M=C6>dNi`>(b#qk,pGuM3I0DIY,eq<|/:-Oo' );
define( 'LOGGED_IN_KEY',    '(P=40byVnhp6K|4kzQ+8Xt{c@MKmsMHb3ct%$TPzgL6/3}:^e/6ov~hzK&K)<MK)' );
define( 'NONCE_KEY',        'K>b.fnvYj;X1xot3IUTmE/rUI{x F!r1*/bgjIoQk5VQ.AVeQ2b095_dnL`n>P~&' );
define( 'AUTH_SALT',        '3xH-|JGNa/X(Yb-S!zlW#+@,z`@hmWY3:Qj9dBMF2#fK31!R?uGhmL!XiZUGN03H' );
define( 'SECURE_AUTH_SALT', 'amnUC9aHixg?jouvBbO/zlN[6LhRcqy$`y)^eF*Lz<?(UlS1CO^Q=U5Hm9^tNu8A' );
define( 'LOGGED_IN_SALT',   'h0H@Zm9lI(>}1rs2b_,h?DE0$vrw-x(TJ4|7!zg)HMAnLpq]=Gc>$1RBob/aU#,9' );
define( 'NONCE_SALT',       'oQ.eW3ZK*p3dB.ny)V]>5nB~uKyIR4bLhm=D6hmzbC;.Eu|XlDCN#5=.P6n+4t+w' );

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
