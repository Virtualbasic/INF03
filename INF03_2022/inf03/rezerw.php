<?php
    $SerwerName = 'localhost';
    $userName = 'root';
    $password = '';
    $DataBase = 'egzaminzaw';
    $connection = new mysqli($SerwerName, $userName, $password, $DataBase);
    $data = $_POST["data"];
    $os  = $_POST["ilos"];
    $phonenum = $_POST["telefon"];
    if (!$connection) {
        die('error ' . $connection->connect_error);
    }else{
        $querys = "INSERT INTO drezerwacje(data_rez,liczba_osob,telefon) VALUES('$data','$os' , '$phonenum' );";
        if ($connection->query($querys) === TRUE){
            echo "Przesłano do bazy danych";
            $connection->close();
        }else{
            echo $connection->error;
            $connection->close();
        }
    }

?>