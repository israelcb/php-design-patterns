<?php
//Subject.php
abstract class Subject {

    protected $observers = array();

    public function attachObser(Observer $obser) {

        array_push($this->observers, $obser);
    }

    public function detachObser(Observer $obser) {

        $this->observers = array_filter(
            $this->observers,
            function($ob) use ($obser) { return $obser != $ob; }
        );
    }

    protected function notify() {

        foreach ($this->observers as $viewer)
            $viewer->update($this);
    }
}
?>