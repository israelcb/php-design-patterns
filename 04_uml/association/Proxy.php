<?php

class Proxy extends ISubject {
    private $realSubject;

    protected function request() {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }

    public function login($un, $pw) {
        // Avalia a SENHA ETC.
        if ($un === "Professional" && $pw === "acp") {
            $this->request();
        }
        else {
            print "Cry 'Havoc', and let split the dogs of war!";
        }
    }
}
?>