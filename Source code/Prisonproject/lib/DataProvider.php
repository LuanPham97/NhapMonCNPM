<?php
    include_once "config.php";

    class DataProvider
    {
        public static function ExecuteQuery($sql)
        {
            global $db_host, $db_username, $db_password, $db_name;

            $connection = mysqli_connect($db_host, $db_username, $db_password, $db_name) or
            die ("Couldn't connect to localhost");
            mysqli_set_charset($connection, 'UTF8');
            $result = mysqli_query($connection, $sql);
            mysqli_close($connection);
            return $result;
        }
       

        public static function ChangeURL($path)
        {
            echo'<script type = "text/javascript">';
            echo 'location = "'.$path.'";';
            echo '</script>';
        }

    }

?>