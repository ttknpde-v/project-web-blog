<?php 

    # require('../config/connect.php');
    
    function select_sql_count ($connect) { # function count number rows in table db
        $sql_select_count = "SELECT * FROM guest WHERE count; ";
        $query_select_count = mysqli_query($connect,$sql_select_count);
        if (!$query_select_count) {
            die('select guest only count fails :::::::::::: '.$connect->error);
        }
        $result_rows = mysqli_num_rows($query_select_count);
        return $result_rows; 
    }
    
    
    function select_sql ($connect) {
        
        $sql_select = "SELECT * FROM guest ORDER BY date DESC; ";
        $query_select = mysqli_query($connect,$sql_select); 
        if (!$query_select) {
            die('select guest fails :::::::::::: '.$connect->error);
        }
        
        # return guery
        return $query_select;
    }


?>