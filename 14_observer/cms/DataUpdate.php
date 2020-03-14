<?php
//DataUpdate.php
include_once('UniversalConnect.php');
class DataUpdate {

    private $tableMaster;
    private $hookup;
    private $sql;

    function __construct() {

        $this->tableMaster = "cms";
        $this->hookup = UniversalConnect::doConnect();

        if (isset($_POST['dbUpdate']))
            $dpHeader = $this->hookup->real_escape_string($_POST['dbUpdate']);

        if ($_POST['newData'])
            $newData = $this->hookup->real_escape_string($_POST['newData']);

        $changeField = "textBlock";

        $this->sql = "
            UPDATE {$this->tableMaster} SET
                {$changeField} = '{$newData}'
            WHERE
                dpHeader = '{$dpHeader}'
        ";

        $result = $this->hookup->query($this->sql);

        if ($result)
            printf("%s changed to:<br />%s", $this->tableMaster, $newData);
        else
            printf("Change failed: %s", $this->hookup->error);

        $result->close();
        $this->hookup->close();
    }
}
$worker = new DataUpdate();
?>