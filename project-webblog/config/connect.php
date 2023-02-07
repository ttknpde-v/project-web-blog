<?php 

    function open_db () {
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "webblog";
        
        $connect = new mysqli($servername,$username,$password,$dbname);
        if($connect -> connect_error) {
            die('connect database webblog fails :::::: '.$connect->connect_error);
        }

        return $connect;

    }

    function close_db ($con) {
        $con -> close();
    }



?>