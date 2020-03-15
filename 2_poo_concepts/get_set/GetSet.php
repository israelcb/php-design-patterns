<?php
// GetSet.php
class GetSet {
  private $dataWarehouse;

  function __construct() {
    $this->setter(200);
    $get = $this->getter();
    echo $get;
  }

  private function getter() {
    return $this->dataWarehouse;
  }

  private function setter($setValue) {
    $this->dataWarehouse = $setValue;
  }
}
$worker = new GetSet();
?>
