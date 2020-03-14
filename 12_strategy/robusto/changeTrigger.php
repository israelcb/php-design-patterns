<?php
//changeTrigger.php
function __autoload($class_name) {
    include $class_name . '.php';
}
$triagger = new Client();
$triagger->changeData();