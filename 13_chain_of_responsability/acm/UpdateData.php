<?php
include_once('./UniversalConnect.php');

class UpdateData {

  private $tableMaster;
  private $hookup;

  function __construct() {

    // Nomeia a tabela e faz a conexão
    $this->tableMaster = 'helpdesk';
    $this->hookup = UniversalConnect::doConnect();

    // Do formulário HTML
    $chain = $this->hookup->real_escape_string($_POST['chain']);
    $response = $this->hookup->real_escape_string($_POST['response']);

    // Cria instrução para o MySQL
    $sql = "
      UPDATE {$this->tableMaster} SET
        response = '{$response}'
      WHERE
        chain = '{$chain}'
    ";

    $result = $this->hookup->query($sql);

    if ($result === true) {

      printf(
        "Chain query: %s <br/> Response %s <br/>"
        . "have been changed and set into %s.",
        $chain, $response, $this->tableMaster
      );
    }

    // %s é uma string especificada como parâmetro
    else {

      printf(
        "Invalid query: %s <br/> Whole query: %s <br/>",
        $this->hookup->error, $sql
      );
      exit;
    }

    $this->hookup->close();

  }
}
$worker = new UpdateData();
?>
