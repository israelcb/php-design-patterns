<?php
class Context {
    private $strategy;
    private $dataPack;

    function __construct(IStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function algorithm(Array $dataPack) {
        $this->dataPack = $dataPack;
        $this->strategy->algorithm($this->dataPack);
    }
}
?>