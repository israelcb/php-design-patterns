<?php
//IState.php
interface IState {
    public function turnLightOn();
    public function turnLightOff();
    public function turnBrighter();
    public function turnBrightest();
}
?>