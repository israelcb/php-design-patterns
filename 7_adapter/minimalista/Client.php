<?php
// Client.php
// Client
include_once('EuroAdapter.php');
include_once('DollarCalc.php');

class Client {
  private $requestNow;
  private $dollarRequest;

  public function __construct() {

    $this->requestNow = new EuroAdapter();
    $this->dollarRequest = new DollarCalc();

    printf("Euros: € %.3f", $this->makeAdapterRequest($this->requestNow));
    echo '<br />';
    printf("Dollars: $ %.3f", $this->makeDollarRequest($this->dollarRequest));
  }

  private function makeAdapterRequest(ITarget $req) {
    return $req->requestCalc(40,50);
  }

  private function makeDollarRequest(DollarCalc $req) {
    return $req->requestCalc(40,50);
  }
}
$worker = new Client();
?>
