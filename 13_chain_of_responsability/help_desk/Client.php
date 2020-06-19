<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

class Client {
    private $queryNow;
    public function __construct() {
        if (isset($_POST['sendNow'])) {
            $this->queryNow = $_POST['help'];
        }

        $q1 = new Q1();
        $q2 = new Q2();
        $q3 = new Q3();
        $q4 = new Q4();
        $q5 = new Q5();

        // Define os sucessores
        $q1->setSuccessor($q2);
        $q2->setSuccessor($q3);
        $q3->setSuccessor($q4);
        $q4->setSuccessor($q5);

        // Gera e processa as solicitações de carga
        $loadup = new Request($this->queryNow);
        // Define o início da cadeia
        $q1->handleRequest($loadup);
    }
}
$makeRequest = new Client();
?>