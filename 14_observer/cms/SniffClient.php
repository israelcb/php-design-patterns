<?php
//Agente de usuário como propriedade do objeto
function __autoload($class_name) {
    include $class_name . '.php';
}
class SniffClient {

    private $userAgent;
    private $deviceObserver;
    private $dpNow;
    private $sub;

    public function __construct() {

        if (isset($_POST['dp']))
            $this->dpNow = $_POST['dp'];

        $this->sub = new ConcreteSubject();
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];

        if (preg_match('/iphone|android|blackberry/', $this->userAgent))
            $this->deviceObserver = new ConcreteObserverPhone();

        elseif (preg_match('/ipad|trident|kindle fire|silk/', $this->userAgent))
            $this->deviceObserver = new ConcreteObserverTablet();

        else
            $this->deviceObserver = new ConcreteObserverDT();

        $this->sub->attachObser($this->deviceObserver);
        $this->sub->setState($this->dpNow);
    }
}
$worker = new SniffClient();
?>