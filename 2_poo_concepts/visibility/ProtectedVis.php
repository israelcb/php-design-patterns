<?php
// ProtectedVis.php
abstract class ProtectedVis {

  protected $wage;

  protected function setHourly($hourly) {
    $money = $hourly;
    return $money;
  }

  abstract protected function countMoney();
}
?>
