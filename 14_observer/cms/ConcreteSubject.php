<?php
//ConcreteSubject.php
class ConcreteSubject extends Subject {

    private $hookup;
    private $tableMaster;
    private $designPattern;
    private $stateSet = array();

    public function setState($dpNow) {

        $this->designPattern = strtolower($dpNow);
        $this->tableMaster = 'cms';
        $this->hookup = UniversalConnect::doConnect();

        //Criar instrução para consulta
        $this->sql = "
            SELECT * FROM {$this->tableMaster}
            WHERE dpheader = '{$this->designPattern}'
        ";

        //Adiciona dados apropriados da tabela do MySQL ao array $stateSet
        if ($result = $this->hookup->query($this->sql)) {

            while ($row = $result->fetch_assoc()) {

                $this->stateSet[0] = $row["dpHeader"];
                $this->stateSet[1] = $row["textBlock"];
                $this->stateSet[2] = $row["imageURL"];
            }

            $result->close();
        }
        $this->hookup->close();

        //O método update() faz parte de notify(),
        // implementado em Subject como método conreto
        $this->notify();
    }

    public function getState() {
        return $this->stateSet;
    }
}
?>