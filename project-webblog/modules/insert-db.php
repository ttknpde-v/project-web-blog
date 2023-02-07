<?php 

    # require('../config/connect.php');

    function insert_sql($name , $email , $date , $comment , $ip , $connect) {

        if ($comment != "") {    
            $sql_insert = "INSERT INTO guest(name,email,date,comment,ip) VALUES('$name' , '$email' ,'$date' , '$comment' , '$ip'); ";
            if ($connect -> query($sql_insert) === FALSE) {
                die('insert guest fails ::::::::: '.$connect->error);
            }   
        }
    
    }




    


?>