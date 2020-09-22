<?php
//* recursos do MySQLi permitem acessar o banco de dados MySQL.*/
//* configuracao da conexao PHP x MYSQL para avisar so erros graves */
mysqli_report(MYSQLI_REPORT_STRICT);

//* funcao php comeca com function NOME_DA_FUNCAO(){ e termina com }, como em c ou em java */
//* reparem na funcao open_database(), os parenteses podem ou nao receber parametros */
function open_database() {
	//* try e um comando para teste/tentativa ou traduzindo esta dizendo tente... o codigo dentro das chaves {} e o que ele tenta, se der erro e chamado o catch */
	//* o catch recebe do navegador o erro-Exception na variavel $e (em php variaveis sao definidas com $) */
	//* echo (usado para impressao na tela), no caso exibe a mensagem do erro */
	try {
		//* aqui o objeto $conn esta recebendo uma conexao com o banco de dados, estabelecida com a classe mysqli. Basicamente o comando indica a conexao com banco de dados */		
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		mysqli_set_charset($conn, "UTF8");
		//* retorna conexao para operacoes de insercao, consulta, alteracao, etc */
		return $conn;
	} catch (Exception $e) {		
		echo $e->getMessage();
		return null;
	}
}
//* funcao que encerraa conexao com banco de dados.
function close_database($conn) {
	try { //try e uma tentativa, no caso tenta conectar
		mysqli_close($conn);
	} catch (Exception $e) { //se falhar a conexao o catch ira pegar o erro e exibir.
		echo $e->getMessage();
	}
}

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 *  id e tabela sao parametros na funcao find
 */
function find( $table = null, $id = null, $complemento = null) {
    /*conecta no banco de dados*/
    $database = open_database();
    $found = null;
    try {
      /*se o parametro id estiver preenchido faz o select usando ele*/  
      if ($id) {
        $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
        $result = $database->query($sql);
        
        if ($result->num_rows > 0) {
          $found = $result->fetch_assoc();
        }
        
      } else {
        /*se o parametro id não estiver preenchido faz o select geral*/    
        $sql = "SELECT * FROM " . $table;
		if ($complemento) {
			$sql=$sql." ".$complemento;
		}
        $result = $database->query($sql);
        if ($result->num_rows > 0) {
          $found = $result->fetch_all(MYSQLI_ASSOC);        
        }		
      }
    } catch (Exception $e) { 
      $_SESSION['message'] = $e->GetMessage();
      $_SESSION['type'] = 'danger';
    }
    
    close_database($database);
    return $found;
}

/**
 *  Pesquisa Todos os Registros de uma Tabela
 */
function find_all( $table ) {
  return find($table);
}

function save($table = null, $data = null) {
  $database = open_database();
  $columns = null;
  $values = null;
  //print_r($data);
  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }
  // remove a ultima virgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";
  echo($sql);
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
  
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  } 
  close_database($database);
}

?>