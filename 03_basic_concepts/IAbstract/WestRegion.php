<?php
// WestRegion.php
include_once('IAbstract.php');

class WestRegion extends IAbstract {
    // Deve retornar um valor decimal
    protected function giveCost() {
        $solarSavings = 2;
        $this->valueNow = 210.54/$solarSavings;
        return $this->valueNow;
    }
    // Deve retornar uma string
    protected function giveCity() {
        return "Rattlesnake Gulch";
    }
}
?>