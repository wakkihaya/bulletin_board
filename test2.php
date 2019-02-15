<?php

//require_once 'DbManager.php';
//require_once 'test.php';
//$dsn = 'mysql:dbname=board_db; host =127.0.0.1;charset =utf8';
//$usr = 'root';
try {
    $dsn = 'mysql:host=mysql1.php.starfree.ne.jp;dbname=wakkihaya_board; charset =utf8';
    $usr = 'wakkihaya_hayato';
    $passwd = 'haya0226';


    $db = new PDO($dsn, $usr, $passwd);
}catch (PDOException $e){
    exit($e->getMessage());
}

  //データベースの登録
    if(isset($_POST['submit'])){//送信ボタン押されたら、

        $message=$_POST['message'];
        $sql = "INSERT INTO data(message) VALUES('$message')";//idについてはauto increment
        $res = $db->query($sql);

        //皆の本音画面にリダイレクト

       // header("Location: " .$_SERVER['PHP_SELF'],true,303);
        header("Location: http://wakkihaya.starfree.jp/test2.php");
    }



?>

<!--test.php送信後、test2.phpに移るのだが、それがtest.phpの内容になっている-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bulletin board</title>
    <link rel="stylesheet" href="test2.css?<dadda>">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

    <script type="text/javascript" src="test2.js?dads"></script>
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
    $sql = "SELECT *FROM data ORDER by id DESC ";
    $stmt = $db->query($sql);
    foreach ($stmt as $row){
    $message1 = $row['message'];//メッセージの値をゲット


        ?>
        <li class="contents"><p><?php echo $message1 ?></p>
        </li>

        <div id="modal-content">
            <p id="extension"></p>
            <div id="tweet">a
                <!--                <script type="text/javascript" async src="//platform.twitter.com/widgets.js"></script>-->
                <!--            <a href="http://twitter.com/intent/tweet?text=あ&hashtags=たっchannel>ツイート</a>-->
            </div>
            <p><a id="modal-close" class="button-link">閉じる</a>
            </p>

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