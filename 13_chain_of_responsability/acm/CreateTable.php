<?php
include_once('./UniversalConnect.php');

class CreateTable {
  private $tableMaster;
  private $hookup;

  function __construct() {

    $this->tableMaster = "helpdesk";
    $this->hookup = UniversalConnect::doConnect();

    $drop = "DROP TABLE IF EXISTS {$this->tableMaster}";

    if ($this->hookup->query($drop) === true)
      printf("Old table %s has been dropped.<br/>", $this->tableMaster);

    $sql = "
      CREATE TABLE {$this->tableMaster} (
        id INT NOT NULL AUTO_INCREMENT,
        chain VARCHAR(3),
        response TEXT,
        PRIMARY KEY(id))
    ";

    if ($this->hookup->query($sql) === true)
      printf("Table %s has been created successfully.<br/>", $this->tableMaster);

    $this->hookup->close();
  }
}
$worker = new CreateTable();
?>
