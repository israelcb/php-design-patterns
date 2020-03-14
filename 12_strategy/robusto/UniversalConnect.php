<?php
//UniversalConnect.php
include_once('IConnectInfo.php');
class UniversalConnect implements IConnectInfo {
    private static $server = IConnectInfo::HOST;
    private static $currentDB = IConnectInfo::DBNAME;
    private static $user = IConnectInfo::UNAME;
    private static $pass = IConnectInfo::PW;
    private static $hookup;

    public function doConnect() {

        self::$hookup = mysqli_connect(
            self::$server,
            self::$user,
            self::$pass,
            self::$currentDB
        );

        if (self::$hookup)  {
            echo "Successful connect to MYSQL:<br/>";
        }
        elseif (mysqli_connect(self::$hookup)) {
            echo('Here is why if failed: ' . mysqli_connect_error());
        }

        return self::$hookup;
    }
}
?>