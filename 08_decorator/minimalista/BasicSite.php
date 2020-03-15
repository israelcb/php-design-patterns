<?php
//BasicSite.php
//Componente concreto
class BasicSite extends IComponent {
    public function __construct() {
        $this->site = "Basic Site";
    }
    public function getSite() {
        return $this->site;
    }
    public function getPrice() {
        return 1200;
    }
}
?>