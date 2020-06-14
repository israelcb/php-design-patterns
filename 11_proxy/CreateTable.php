<?php
include_once('UniversalConnect.php');

class CreateTable {
    private $tableMaster;
    private $hookup;
    public function __construct() {
        $this->tableMaster = "proxyLog";
        $this->hookup = UniversalConnect::doConnect();
        $drop = "DROP TABLE IF EXISTS $this->tableMaster";
        if ($this->hookup->query($drop) === true) {
            printf("Old table %s has been dropped.<br/>", $this->tableMaster);
        }
        $sql = "CREATE TABLE {$this->tableMaster} (uname NVARCHAR(15),
            pw VARCHAR(120))";
        if ($this->hookup->query($sql)) {
            echo "Table $this->tableMaster has been created successfully.<br/>";
        }
        $this->hookup->close();
    }
}
$worker = new CreateTable();
?>