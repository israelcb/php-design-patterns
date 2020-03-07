<?php
//Food.php
//Decorador concreto
class Food extends Decorator {
    private $chowNow;

    public function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    private $snacks = [
        "piz" => "pizza",
        "burg" => "Burguers",
        "nach" => "Nachos",
        "veg" => "Veggies"
    ];

    public function setFeature($yum) {
        $this->chowNow = $this->snacks[$yum];
    }
    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .= "$fmat Favorite food: ";
        $output .= $this->chowNow . "<br/>";
        return $output;
    }
}
?>