<?php
//Cell1State.php
class Cell1State implements IMatrix {
    private $context;

    function __construct(Context $contextNow) {
        $this->context = $contextNow;
    }

    public function goLeft() {
        //Movimento não permitido
    }
    public function goRight() {
        echo "<img src='cells/two.png'>";
        $this->context->setState($this->context->getCell2State());
    }
    public function goUp() {
        //Movimento não permitido
    }
    public function goDown() {
        echo "<img src='cells/four.png'>";
        $this->context->setState($this->context->getCell4State());
    }
}
?>