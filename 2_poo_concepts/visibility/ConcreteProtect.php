<?php
// ConcreteProtect.php
include_once('ProtectedVis.php');

class ConcreteProtect extends ProtectedVis {

  function __construct() {
    $this->countMoney();
  }

  protected function countMoney() {
    $this->wage = "Your hourly wage is $";
    echo $this->wage . $this->setHourly(36);
  }
}
$worker = new ConcreteProtect();
?>
