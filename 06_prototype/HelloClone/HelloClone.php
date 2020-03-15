<?php
class HelloClone {
    private $builtInConstructor;
    public function __construct() {
        echo "Hello, clone!<br />";
        $this->builtInConstructor = "Constructor creation<br />";
    }

    public function doWork() {
        echo $this->builtInConstructor;
        echo "I'm doing the work!<p />";
    }
}
// Executa o construtor
$original = new HelloClone();
$original->doWork();

// Clonagem não executa o construtor
$cloneIt = clone $original;
$cloneIt->doWork();
?>