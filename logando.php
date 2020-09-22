<?php
require_once('config.php');
require_once(DBAPI);
/*inicialização da sessão (função session_start)*/
session_start();



$login =false;
$login = find('usuario',null," where login='".$_POST['usuario']."' and senha='".$_POST['senha']."'");

	/*verifico as variáveis de usuario e senha passadas pelo formulario */
if ($login)
{
   $_SESSION['logado'] = true;  
   header("location:calculo.php");
   if ((isset($_POST['salvar_chave'])) && ($_POST['salvar_chave']==1)) {
		setcookie("id_usuario_c", $_POST['usuario'] , time()+(60*60*24*365));
		setcookie("senha_c", $_POST['senha'], time()+(60*60*24*365));
   } else {
		echo("teste");
		setcookie ("id_usuario_c", "", time() - 3600);
		setcookie ("senha_c", "", time() - 3600);
   }
	   
}else {
   header("location:login.php");
} 
?>