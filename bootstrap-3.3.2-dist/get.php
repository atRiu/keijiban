<?php

$dataFile = 'keijiban.txt';

function h($s){
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

if($_SERVER['REQUEST_METHOD'] == 'POST' &&
isset($_POST['main'])&&
isset($_POST['name'])) {

    $name = trim($_POST['name']);
    $main = trim($_POST['main']);

    if($main !==''){

        $name = ($name === '')? 'さすらいの名無し' : $name;

        $main = str_replace("\t", ' ',$main);
        $name = str_replace("\t", ' ',$name);

        $postedAt = date("Y-m-d H:i:s");

        $newData = $main . "\t" .$name . "\t".  $postedAt . "\n";

        $fp = fopen($dataFile, 'a');

        fwrite($fp, $newData);
        fclose($fp);

    }

}

$posts = file($dataFile, FILE_IGNORE_NEW_LINES);

$posts = array_reverse($posts);

?>



<!DOCTYPE html>
<html lang = "ja">
<head>
    <meta charset ="utf-8">
    <title>掲示板だよ</title>
</head>
<body>

<h1>掲示板</h1>
<form action="" method="post">
    名前: <input type="text" name="name" /><br/>
    内容: <input type="text" name="main"/><br/>
    <br/>
    <input type="submit" value="書き込み">
</form>

<h2>投稿一覧 (<?php echo count($posts); ?>件)</h2>
<ul>
    <?php if (count($posts)) : ?>

        <?php foreach ($posts as $post) : ?>
            <?php  list($main, $name, $postedAt) = explode("\t", $post); ?>
            <li><?php echo h($main); ?> (<?php echo h($name); ?>) - <?php echo h($postedAt); ?></li>
    <?php endforeach; ?>
    <?php else : ?>
   <li>投稿はまだありません。</li>
    <?php endif; ?>

</ul>

</body>

<br>
 <a href="../">戻れない</a><br>


</html>