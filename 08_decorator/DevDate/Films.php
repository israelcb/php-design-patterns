<?php

class Films extends Decorator {

    private $filmNow;

    function __construct(IComponent $dateNow) {
        $this->date = $dateNow;
    }

    private $series = [
        'act' => 'Action',
        'rom' => 'Romance',
        'fic' => 'Science Fiction',
        'msc' => 'Musical'
    ];

    public function setFeature($film) {
        $this->filmNow = $this->series[$film];
    }

    public function getFeature() {
        $output = $this->date->getFeature();
        $fmat = "<br/>&nbsp;&nbsp;";
        $output .= "$fmat Favorite Film Style: ";
        $output .= $this->filmNow;
        return $output;
    }
}