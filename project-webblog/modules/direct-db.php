<?php 

        require('../config/connect.php');
        $connect = open_db();
        // error_reporting(0);
        
        if (isset($_POST['send'])) {

            require('insert-db.php'); 

            date_default_timezone_set('Asia/Bangkok');
            $date = date("Y-m-d G:i:s");
            $name = $_POST['name'];
            $comment = $_POST['comment'];
            #$email = $_POST['email'];
            #$ip = $_SERVER['REMOTE_ADDR'];
            
            if(strpos($name,"'") == TRUE || strpos($comment,"'") == TRUE) {
                $name = str_replace("'","\'",$name); # change ' to \' 
                $comment = str_replace("'","\'",$comment); # change ' to \'
            }
            
            $result_query_insert = insert_sql($name,$_POST['email'],$date,$comment,$_SERVER['REMOTE_ADDR'],$connect);
            

        }

        require('../modules/select-db.php');

        if ( ($rows = select_sql_count($connect)) >= 0 ) {
            $result_query = select_sql($connect);
        }
        

        close_db($connect);

        


        






?>