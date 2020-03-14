<?php
//SearchData.php
class SearchData implements IStrategy {
    private $tableMaster;
    private $dataPack;
    private $hookup;
    private $sql;

    public function algorithm(array $dataPack) {

        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();

        $this->dataPack = $dataPack;
        $field = $this->dataPack[0];
        $term = $this->dataPack[1];

        $this->sql = "
            SELECT *
            FROM {$this->tableMaster}
            WHERE {$field} = '{$term}'
        ";

        //Instrução condicional na consulta ao MySQL para saída de dados
        if ($result = $this->hookup->query($this->sql)) {
            echo '<link rel="stylesheet" href="survey.css">';
            echo '<table>';

            while ($row = mysqli_fetch_row($result)) {
                echo "<br/>";
                echo "<tr>";
                foreach ($row as $cell) {
                    echo "<td>{$cell}</td>";
                }
                echo "</tr>";
            }

            echo '</table>';
            $result->close();
        }
        $this->hookup->close();
    }
}
?>