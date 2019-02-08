
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1行メッセージ</title>
    <link rel="stylesheet" href="test.css?<dssdddsadsd>" type="text/css">
<!--    hrefの名前を変えると読み込んでくれやすい-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>

    <script src="test.js?dd" type="text/javascript"></script>
</head>
<body>

<div id="ima">
<div class="wrapper">

<div id="title">たっchannel</div>
<div id ="expla">本人には言えない、本音をなんでも言ってみよう！
</div>


<form method="post" action ="test2.php">
    <div id="box">
        <b>　たっちゃんの本音</b>
        <span class="count">0</span>
        <textarea name ="message" type="text" size ="100" maxlength="80" rows="10" required></textarea>


    <button name="submit" type="submit">送る</button>
    </div>
</form>
    <div class="watch"> <a href="test2.php">
            皆の本音を見る＞＞
        </a>
    </div>

<!--    <p id="honne">皆の本音<br>-->
<!--    ⇓</p>-->
<!---->
<!--<section>-->
<!--    --><?php
//    //formで受けとるプロセスには関係ない事を記述。（DBから引っ張て来ている）
//
//    for($i = 0 ; $i<$linesnum;$i++){
//  //  $array = explode ("|" , $lines[$i]);
////    $name = htmlspecialchars( $array[0]);
//
//    $message = htmlspecialchars($lines[$i]);
//
////    echo '<p>'.$name."「".$message.'」</p>';
//        echo '<p>'.$message.'</p>';
//    }
//
//?>
<!--</section>-->
</div>
</div>
</body>
</html>