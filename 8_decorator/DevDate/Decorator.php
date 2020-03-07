<?php
//Decorator.php
//Participante Decorator
abstract class Decorator extends IComponent {
    public function setAge($ageNow) {
        $this->ageGroup = $ageNow;
    }
    public function getAge() {
        return $this->ageGroup;
    }
}
?>