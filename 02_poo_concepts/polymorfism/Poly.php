<?php
// Poly.php
interface ISpeed {
  function fast();
  function cruise();
  function slow();
}

class Jet implements ISpeed {

    function slow() {
      return 120;
    }

    function cruise() {
      return 1200;
    }

    function fast() {
      return 1500;
    }
}

class Car implements ISpeed {

  function slow() {
    $carSlow = 15;
    return $carSlow;
  }

  function cruise() {
    $carCruise = 65;
    return $carCruise;
  }

  function fast() {
    $carZoom = 110;
    return $carZoom;
  }
}
ini_set('display_erros', 1);
error_reporting(E_ALL);
$f22 = new Jet();

$jetSlow = $f22->slow();
$jetCruise = $f22->cruise();
$jetFast = $f22->fast();

printf(
  "<br />My jet can take off at %d mph and cruises at %d mph."
  . "However, I can cranck it up to %d mph if I'm in a hurry.<br />",
  $jetSlow, $jetCruise, $jetFast
);


$ford = new Car();

$fordSlow = $ford->slow();
$fordCruise = $ford->cruise();
$fordFast = $ford->fast();

printf(
  "<br />My car pokes along at %d mph in a school zone and cruises at "
  . "%d mph on the highway. However, I can cranck it up to %d mph"
  . "if I'm in a hurry",
  $fordSlow, $fordCruise, $fordFast
);
?>
