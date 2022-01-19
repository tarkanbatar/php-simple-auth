<?php
    function OpenConnection(){

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpassword = "?";
        $db = "test_schema"; 
        $port = 3306;
    
        $connection = new mysqli($dbhost,$dbuser,$dbpassword,$db,$port) or die("Connection failed! %s\n".$connection->error) ;
        return $connection;
    }

    function CloseConnection($connection){
        $connection -> close();
    }
?>
