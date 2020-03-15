<?php
//Maintenance.php
//Decorador concreto
class Maintenance extends Decorator {
    public function __construct(IComponent $siteNoow) {
        $this->site = $siteNoow;
    }
    public function getSite() {
        $fmat = "<br/>&nbsp;&nbsp; Maintenance ";
        return $this->site->getSite() . $fmat;
    }
    public function getPrice() {
        return 950 + $this->site->getPrice();
    }
}
?>