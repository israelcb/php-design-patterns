<?php
//DisplayAll.php
class DisplayAll implements IStrategy {
    private $tableMaster;
    private $hookup;

    public function algorithm(array $dataPack) {

        $this->tableMaster = IStrategy::TABLENOW;
        $this->hookup = UniversalConnect::doConnect();

        // Cria instrução para consulta
        $sql = "SELECT * FROM $this->tableMaster";

        if ($result = $this->hookup->query($sql)):

            printf("Select returned %d rows.<p/>", $result->num_rows);
            echo "<link rel='stylesheet' href='survey.css'>";
            echo "<table>";

            while ($finfo = mysqli_fetch_field($result)):
                echo "<th>&nbsp;{$finfo->name}</th>";
            endwhile;

            echo "</tr>\n";

            while ($row = mysqli_fetch_row($result)):
                echo "<tr>";

                foreach ($row as $cell)
                    echo "<td>$cell</td>";

                echo "</tr>";
            endwhile;

            echo "</table>";

            $result->close();
        endif;

        $this->hookup->close();
    }
}
?>