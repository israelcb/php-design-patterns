<?php
class D1 extends Handler {

    public function setSuccessor($nextService) {
        $this->successor = $nextService;
    }

    public function handleRequest($request) {
        $dateCheck = $request->getService();
        $this->monthNow = intval($dateCheck['mon']);
        $this->dayNow = intval($dateCheck['mday']);

        // $this->handleNow é um booleano baseado em
        // uma expressão booleana com intervalos de datas
        $this->handleNow = ($this->monthNow == 9 && $this->dayNow >= 15) &&
            ($this->monthNow == 9 && $this->dayNow <= 22);

        if ($this->handleNow) {
            $this->hungerFactory = new HungerFactory();
            echo $this->hungerFactory->feedFactory(new C1());
        }
        else if ($this->successor != NULL) {
            $this->successor->handleRequest($request());
        }
    }
}