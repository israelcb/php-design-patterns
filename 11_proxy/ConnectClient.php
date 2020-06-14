<?php
include_once('UniversalConnect.php');

class ConnectClient {
    private $hookup;
    public function __construct() {
        // Uma linha para toda a operação de conexão
        $this->hookup = UniversalConnect::doConnect();
    }
}
$worker = new ConnectClient();
?>