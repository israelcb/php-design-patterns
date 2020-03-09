<?php
class Context {
    private $strategy;

    function __construct(IStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function algorithm() {
        $this->strategy->algorithm();
    }
}
?>