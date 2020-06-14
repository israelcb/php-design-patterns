<?php
// Nome do arquivo: IConnectInfo.php
interface IConnectInfo {
    const HOST = "localhost";
    const UNAME = "root";
    const PW = "";
    const DBNAME = "php_design_patterns";
    public function doConnect();
}
?>