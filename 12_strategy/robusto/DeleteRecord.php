<?php
//DeleteRecord.php
class DeleteRecord implements IStrategy {

    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(array $dataPack) {

        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();
        $this->dataPack = $dataPack;

        $destroy = $this->dataPack[0];
        $destroy = intval($destroy);

        $this->sql = "
            DELETE FROM {$this->tableMaster}
            WHERE id = '{$destroy}'
        ";

        $result = $this->hookup->query($this->sql);

        //Instrução condicional na consulta ao MySQL para verificação de erros
        if ($result)
            echo "Record #{$destroy} removed from table: {$this->tableMaster}";

        else
            echo "Removal failed: {$this->hookup->error}";

        $result->close();
        $this->hookup->close();
    }
}
?>