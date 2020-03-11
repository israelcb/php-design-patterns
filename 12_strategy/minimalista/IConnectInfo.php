<?php
//Nome do arquivo: IConnectInfo.php
interface IConnectInfo {
    const HOST = "127.0.0.1";
    const UNAME = "rozcovo";
    const PW = "rozcovo";
    const DBNAME = "php_design_patterns";

    public function doConnect();
}
?>