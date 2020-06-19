<?php
// index.php
// arquivo de acionamento
// Este arquivo pode ser substituído, colocando-se este código para encapsular
// a classe Client
function __autoload($class_name) {
    include $class_name . '.php';
}
$worket = new Client();
?>