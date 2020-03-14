<?php
//DataEntry.php
include_once('UniversalConnect.php');
class DataEntry {

    private $tableMaster;
    private $hookup;
    private $sql;

    public function __construct() {

        $this->tableMaster = "cms";
        $this->hookup = UniversalConnect::doConnect();

        if ($_POST['dpHeader'])
            $dpHeader = $this->hookup->real_escape_string($_POST['dpHeader']);

        if ($_POST['textBlock'])
            $textBlock = $this->hookup->real_escape_string($_POST['textBlock']);

        if ($_POST['imageURL'])
            $imageURL = $this->hookup->real_escape_string($_POST['imageURL']);

        $this->sql = "
            INSERT INTO {$this->tableMaster} (
                dpHeader, textBlock, imageURL
            ) VALUES (
                '{$dpHeader}', '{$textBlock}', '{$imageURL}'
            )
        ";

        $result = $this->hookup->query($this->sql);

        if ($result)
            printf("Successfully data entry for table: %s <br />", $this->tableMaster);

        else {

            printf("Invalid query: %s <br /> Whole query: %s <br />", $this->tableMaster, $this->sql);
            exit;
        }

        $this->hookup->close();
    }
}
$worker = new DataEntry();
?>