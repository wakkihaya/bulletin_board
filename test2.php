<?php

require_once 'DbManager.php';
require_once 'test.php';

    $db = getDb();

  //データベースの登録
    if(isset($_POST['submit'])){//送信ボタン押されたら、
        $name=$_POST['name'];
        $message=$_POST['message'];
        $sql = "INSERT INTO book(name, message) VALUES('$name','$message')";
        $res = $db->query($sql);

        //皆の本音画面にリダイレクト

       // header("Location: " .$_SERVER['PHP_SELF'],true,303);
       // header("Location: http://localhost/bulletin/test2.php");
    }



//
//
//$LOG_FILE_NAME = "log.txt";
//$name = "";
//$message = "";
//
//if(isset($_POST['name'])){
//    $name= $_POST['name'];
//
//    if($name ==""){
//        $name = "noname";
//    }
//}
//
//if(isset($_POST['message'])){
//    $message = $_POST['message'];
//
////ファイルを開く
//    $fp = fopen($LOG_FILE_NAME,"a") or exit($LOG_FILE_NAME."が開けません");
//
////|を区切りにして2つのデータを繋げて書き込む
////fwrite($fp,$name."|".$message."\n");
//    fwrite($fp,$message."\n");
//
////フォームの再送信のエラーが出ないように、データ送信後にPOSTデータを送信する前の元のページに
////ジャンプさせる（リダイレクト）
//    header("Location:" .$_SERVER['PHP_SELF'],true,303);
//}
//
//if(!file_exists($LOG_FILE_NAME)){//ファイルがあるかを確認
//    echo "書き込みはありません";
//    $linesnum=0;
//}else{
//
//    $lines = file($LOG_FILE_NAME);
//    $linesnum = count($lines);
//}
?>

<!--test.php送信後、test2.phpに移るのだが、それがtest.phpの内容になっている-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bulletin board</title>
    <link rel="stylesheet" href="test2.css?<-jd3ddddsdd>">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

    <script type="text/javascript" src="test2.js?dsd"></script>
</head>
<body>

<div id="title">
    たっchannel
</div>


<div id = image>
    <div class="wrapper">
        <div id="honne">
            皆の本音
        </div>

        <ul class="board">
    <?php
    //テーブル内容の表示
    $sql = "SELECT *FROM book ORDER BY id DESC";
    $stmt = $db->query($sql);
    foreach ($stmt as $row){
    $message1 = $row['message'];//メッセージの値をゲット


//    for($i = $linesnum-1 ; $i>=0;$i--){
//    $array = explode ("|" , $lines[$i]);
//    $name = htmlspecialchars( $array[0]);
//
//    $message = htmlspecialchars($lines[$i]);

//    echo '<p>'.$name."「".$message.'」</p>';
    //echo '<li>'.$message.'</li>';

        ?>
        <li class="contents"><p><?php echo $message1 ?></p>
        </li>

        <div id="modal-content">
            <p id="extension"></p>
            <p><a id="modal-close" class="button-link">閉じる</a> </p>
        </div>
    <?php
            }
            //リロード時の二重投稿を防止
//            if($_SERVER['REQUEST_METHOD']==='POST'){
//                header('Location:http://localhost/bulletin/test2.php',true,303);
//            }

            //終了
    $stmt = null;
    $db = null;
   ?>
</ul>
        <div class="toForm"><a href="test.php">
                送信フォームへ
            </a>
        </div>
</div>
</div>


</body>
</html>

<!--実装したいこと-->
<!--twitterと連携-->
<!--SQLでデータ保存-->
<!--・-->