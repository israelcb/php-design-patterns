<?php
// TmAb.php
// Classe abstrata do Template Method
abstract class TmAb {
    protected $pix;
    protected $cap;

    public function templateMethod() {
        $this->addPix();
        $this->addCaption();
    }

    protected abstract function addPix();
    protected abstract function addCaption();
}
?>