<?php
// TmFac.php
// Classe concreta do Template Method
class TmFac extends TmAb {

    protected function addPix() {
        $this->pix = new GraphicFactory();
        echo $this->pix->doFactory();
    }

    protected function addCaption() {
        $this->cap = new TextFactory();
        echo $this->cap->doFactory();
    }
}