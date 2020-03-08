<?php
//Context.php
class Context {
    private $offState;
    private $onState;
    private $currentState;

    public function __construct() {
        $this->offState = new OffState($this);
        $this->onState = new OnState($this);
        //Estado inicial és Off (Apagado)
        $this->currentState = $this->offState;
    }

    //Chama método de Estado--acionadores
    public function turnOnLight() {
        $this->currentState->turnLightOn();
    }
    public function turnOffLight() {
        $this->currentState->turnLightOff();
    }

    //Define o estado corrente
    public function setState(IState $state) {
        $this->currentState = $state;
    }

    //Obtém os estados
    public function getOnState() {
        return $this->onState;
    }
    public function getOffState() {
        return $this->offState;
    }
}
?>