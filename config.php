<?php
/** codigos PHP começam com <?php e terminam com ?>. Os comandos vão no meio disso. CRUD (Create, Read, Update e Delete em dados)*/

/** define = permite definir uma constante (nunca se altera)*/

/** Aqui definimos que DB_NAME será o nome da constante do banco de dados. No caso do professor o banco de dados chama wda_crud*/
define('DB_NAME', 'stephanie');

/** Aqui definimos que DB_USER será nome da constante do usuarioo do banco de dados. No caso do professor o usuario do banco de dados chama root*/
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** O operador . faz a união de duas Strings em PHP  */
/** dirname(__FILE__) - comando especial - "hadouken" - que recebe a pasta que contem o arquivo config.php  */
/** ! - interrogacao operador negação php, no caso if (!defined('ABSPATH')) esta verificando se a constante ABSPATH não esta definida */

/** Caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no servidor para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/ProjetoBombeio/');

if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

function verifica_login(){
if (!$_SESSION['logado'])
{     
    header("Location:".BASEURL."login.php");
    die;
}
}
    	
/**caminhos dos templates de header e footer - VAMOS USAR DEPOIS**/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

define('HEADER_TEMPLATE2', ABSPATH . 'inc/header2.php');
define('HEADER_TEMPLATE3', ABSPATH . 'inc/header3.php');
?>
