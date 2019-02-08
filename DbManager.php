<?php
    function getDb(){
    $dsn = 'mysql:dbname=board_db; host =127.0.0.1;charset =utf8';
    $usr = 'root';
    $passwd ='';


    $db  = new PDO($dsn,$usr,$passwd);
    return $db;
}

//下記の動作でちゃんと取れている
//    $db1 = getDb();
//    $stt = "SELECT *FROM book";
//    $stmt = $db1->query($stt);
//    foreach ($stmt as $row){
//        echo $row['message'];
//    }



?>